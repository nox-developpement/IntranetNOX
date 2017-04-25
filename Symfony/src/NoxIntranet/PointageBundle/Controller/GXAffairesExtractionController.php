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
    private static $PWD = "NOX35GXreader";

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
        // Nombre d'affaires dans la base de données GX.
        $affairesCount = $this->getAffairesCountFromGXDatabase();

        // On récupére les affaires depuis la base de données GX.
        $GXDatabase = $this->getAffairesFromeGXDatabase();
        $affaires = $GXDatabase['affaires'];

        // On désactive le log SQL pour optimiser les performances.
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);

        echo "Extraction des affaires... \n";

        // Compteur d'affaire et de flush.
        $affaireIndex = 0;
        $flushIndex = 0;

        while ($affaire = odbc_fetch_array($affaires)) {
            printf("Traitement de l'affaire " . $affaireIndex++ . "/" . $affairesCount . ".\r");

            // Données de l'affaire.
            $GX_affaire_numero = utf8_encode($affaire['Champ2']);
            $GX_affaire_nom = utf8_encode($affaire['Champ9']);
            $GX_affaire_identifiant = utf8_encode($affaire['Designation']);

            // On tente de récupérer l'entité de la base de données correspondant au numéro d'affaire.
            $affairesEntity = $this->em->getRepository('NoxIntranetPointageBundle:AffairesGX')->findOneByNumero($GX_affaire_numero);

            // Si l'entité n'existe pas...
            if (empty($affairesEntity)) {
                // On crée une nouvelle entité et on la persiste.
                $newAffaires = new AffairesGX();
                $newAffaires->setNumero($GX_affaire_numero);
                $newAffaires->setNom($GX_affaire_nom);
                $newAffaires->setIdentifiant($GX_affaire_identifiant);
                $this->em->persist($newAffaires);

                // Incrémentation du compteur d'affaire.
                $flushIndex++;
            }
            // Si l'entité existe mais ses informations sont différentes...
            else if ($affairesEntity->getNom() !== $GX_affaire_nom || $affairesEntity->getIdentifiant() !== $GX_affaire_identifiant) {
                // On met à jour les informations de l'affaire.
                $affairesEntity->setNom($GX_affaire_nom);
                $affairesEntity->setIdentifiant($GX_affaire_identifiant);

                // Incrémentation du compteur d'affaire.
                $flushIndex++;
            }

            // Toute les 200 affaires...
            if ($flushIndex !== 0 && $flushIndex % 200 === 0) {
                echo mb_convert_encoding("Insertion/Mise à jour de 200 affaires dans la base de données.\n", "CP850", mb_detect_encoding("Insertion/Mise à jour de 200 affaires dans la base de données.\n"));

                // On flush la création/modification des entitées.
                $this->em->flush();
                $this->em->clear();
            }
        }

        // On flush les modifications restantes.
        $this->em->flush();
        $this->em->clear();

        // On ferme la connexion à la base de données GX.
        odbc_close($GXDatabase['connexion_token']);
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
        $query = "SET NOCOUNT ON SELECT Champ2, Champ9, Designation FROM AFFAIRE WITH (NOLOCK) WHERE Champ2 <> 'NULL'";

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
        $query = "SET NOCOUNT ON SELECT Count(Champ2) FROM AFFAIRE WHERE Champ2 <> 'NULL'";

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
