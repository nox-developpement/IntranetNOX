<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\PointageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use Doctrine\ORM\EntityManager;
use NoxIntranet\PointageBundle\Entity\AffairesGX;

/**
 * Description of GXAffairesExtractionController
 *
 * @author t.besson
 */
class GXAffairesExtractionController extends Controller {

    private static $SERVER_NAME = "SRV-NOX35-APPLI\EVERWIN";
    private static $DATABASE = "NOX";
    private static $UID = "NOXGXreader";
    private static $PWD = "NoxReader";

    // Initialise le container de service.
    public function __construct(Container $container, EntityManager $em) {
        $this->container = $container;
        $this->em = $em;
    }

    /**
     * 
     * Importe les affaires depuis la base de données GX vers la base de données de l'intranet.
     * 
     */
    public function importAffairesToDatabase() {
        // On récupére les affaires depuis la base de données GX.
        $GXDatabase = $this->getAffairesFromeGXDatabase();
        $affaires = $GXDatabase['affaires'];

        // On désactive le log SQL pour optimiser les performances.
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);

        // On crée une table temporaire pour stocker les affaires extraites de GX.
        $temporaryTableRequest = "CREATE TEMPORARY TABLE update_gx_affaires (Numero varchar(255), Nom varchar(255), Identifiant varchar(255)) CHARACTER SET utf8 COLLATE utf8_unicode_ci";
        $this->em->getConnection()->query($temporaryTableRequest);

        // Initialisation d'une limite infini de mémoire.
        ini_set('memory_limit', '-1');

        // Tableau des affaires extraites de GX.
        $insertRequests = array();

        // Pour chaques affaires...
        echo "\nExtraction des affaires...\n";
        while ($affaire = odbc_fetch_array($affaires)) {
            // On crée une réquette d'insertion dans la base temporaire.
            $sql = "INSERT INTO update_gx_affaires (Numero, Nom, Identifiant) VALUES (:Champ2, :Champ9, :Designation)";
            $params = array('Champ2' => $affaire['Champ2'], 'Champ9' => $affaire['Champ9'], 'Designation' => $affaire['Designation']);
            $insertRequests[] = array('sql' => $sql, 'params' => $params);
        }

        // On ferme la connexion à la base de données GX.
        odbc_close($GXDatabase['connexion_token']);
        echo "Fin de l'extraction.\n";

        // Compteur d'affaire.
        $affaireIndex = 1;
        $affairesCount = count($insertRequests);

        // Pour chaques requêtes...
        echo "\nRemplissage de la table temporaire...\n";
        foreach ($insertRequests as $key => $request) {
            printf("Traitement de l'affaire " . $affaireIndex++ . "/" . $affairesCount . ".\r");

            // Requête et paramètres.
            $sql = $request['sql'];
            $params = array_map("utf8_encode", $request['params']);

            // On exécute la requête.
            $insertRequest = $this->em->getConnection()->prepare($sql);
            $insertRequest->execute($params);

            // Libération de la mémoire.
            unset($insertRequests[$key]);
        }
        echo "\nFin de remplissage de la table temporaire.\n";

        // Pour chaques nouvelle affaire...
        echo "\nAjout des nouvelles affaires dans la base de données de l'intranet...\n";
        $new_affaires = $this->em->getConnection()->query("SELECT * FROM update_gx_affaires t1 WHERE t1.Numero NOT IN (SELECT t2.Numero FROM affaires_gx t2)")->fetchAll();
        foreach ($new_affaires as $key => $affaire) {
            // On crée une nouvelle entitée d'affaire.
            $new_affaire = new AffairesGX();
            $new_affaire->setNumero($affaire['Numero']);
            $new_affaire->setNom($affaire['Nom']);
            $new_affaire->setIdentifiant($affaire['Identifiant']);
            $this->em->persist($new_affaire);

            // Libération de la mémoire.
            unset($new_affaires[$key]);
        }
        echo "Fin de l'ajout des nouvelles affaires dans la base de données de l'intranet.\n";

        // Pour chaques affaires qui n'existe plus...
        echo "\nSuppression des affaires qui n'existent plus de la base de données de l'intranet...\n";
        $deleted_affaires = $this->em->getConnection()->query("SELECT Numero FROM affaires_GX t1 WHERE t1.Numero NOT IN (SELECT t2.Numero FROM update_gx_affaires t2)")->fetchAll();
        foreach ($deleted_affaires as $key => $affaire) {
            $affaire_entity = $this->em->getRepository('NoxIntranetPointageBundle:AffairesGX')->findOneByNumero($affaire['Numero']);
            $this->em->remove($affaire_entity);

            // Libération de la mémoire.
            unset($deleted_affaires[$key]);
        }
        echo "Fin de la suppression des affaires qui n'existent plus de la base de données de l'intranet.\n\n";

        // Mise à jour et sauvegarde de la base de données de l'intranet.
        $this->em->flush();
    }

    /**
     * 
     * Retourne un token de connexion à la base de données ou un message d'erreur si la connexion a échouée.
     * 
     * @param String $server_name Nom du serveur de base de données.
     * @param String Nom de la base de données.
     * @param String Identifiant de connexion à la base de données.
     * @param String Mot de passe de connexion à la base de données.
     * @return ODBC_Connection Token de connexion à la base de données.
     */
    private function connectToGXDatabase($server_name, $database, $uid, $pwd) {
        // Connexion à la base de données GX.
        $connection = odbc_connect("Driver={SQL Server};Server=$server_name;Database=$database;", $uid, $pwd);

        // Si la connexion à marché, on retourne le token.
        if ($connection) {
            return $connection;
        }
        // Sinon on retourne l'erreur.
        else {
            echo "La connexion a échouée.";
            die(print_r(sqlsrv_errors(), true));
        }
    }

    /**
     * 
     * Cherche les affaires dans la base de données GX et retourne le résultat.
     * 
     * @param ODBC_Connection $connexion_token
     * @return ODCC_Result
     */
    private function getAffairesFromeGXDatabase() {
        $connexion_token = $this->connectToGXDatabase(self::$SERVER_NAME, self::$DATABASE, self::$UID, self::$PWD);

        // Requête qui retourne les affaires.
        $query = "SET NOCOUNT ON SELECT Champ2, Champ9, Designation FROM AFFAIRE WITH (NOLOCK) WHERE Champ2 <> 'NULL' AND Champ2 <> ''";

        // On execute la requête.
        $result = odbc_exec($connexion_token, $query);

        // On retourne le résultat de la requête.
        return array('affaires' => $result, 'connexion_token' => $connexion_token);
    }

    /**
     * 
     * Retourne true si l'affaire existe dans la base de données GX, false sinon.
     * 
     * @param ODBC_Connection $connexion_token Token de connexion à la base de données.
     * @param String $numero_affaire Numéro de l'affaire dont on veux vérifié l'existance.
     * @return Boolean
     */
    private function affairesExistInGXDatabase($numero_affaire) {
        $connexion_token = $this->connectToGXDatabase(self::$SERVER_NAME, self::$DATABASE, self::$UID, self::$PWD);

        // Requête qui retourne les affaires.
        $query = "SET NOCOUNT ON SELECT Count(Champ2) FROM AFFAIRE WHERE Champ2 = '$numero_affaire' GO";

        // On execute la requête.
        $result = odbc_exec($connexion_token, $query);

        // Nombre de résultat pour la requête.
        $resultCount = odbc_num_rows($result);

        // Fermeture de la connexion.
        odbc_close($connexion_token);

        // On retourne true si il y a un ou plusieurs résultat, false sinon.
        return $resultCount > 0;
    }

    /**
     * 
     * Retourne le nombre d'affaires dans la base de données GX.
     * 
     * @param ODBC_Connexion $connexion_token Token de connexion à la base de données.
     * @return Integer
     */
    private function getAffairesCountFromGXDatabase() {
        $connexion_token = $this->connectToGXDatabase(self::$SERVER_NAME, self::$DATABASE, self::$UID, self::$PWD);

        // Requête qui retourne les affaires.
        $query = "SET NOCOUNT ON SELECT Count(Champ2) FROM AFFAIRE WITH (NOLOCK) WHERE Champ2 <> 'NULL'";

        // On execute la requête.
        $result = odbc_exec($connexion_token, $query);

        // On récupére le résultat de count.
        $count = array_values(odbc_fetch_array($result))[0];

        // Fermeture de la connexion.
        odbc_close($connexion_token);

        // On retourne le résultat de la requête.
        return $count;
    }

}
