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

    // Extrait les affaires de la base de données GX et les importes dans la base de données de l'intranet.
    public function gxAffairesExtraction() {
        $this->extractAffairesFromGX();
        $this->importAffairesToDatabase();
    }

    // Extrait les affaires de la base de données GX dans un fichier csv.
    private function extractAffairesFromGX() {
        // Chemin vers le dossier de script.
        $scriptRoot = $this->container->get('kernel')->getRootDir() . "/../scripts";

        // Exécution du script d'extraction des affaires.
        exec($scriptRoot . "/GXExtractAffaires.bat");
    }

    // Import les affaires depuis le fichier CSV vers la base de données de l'intranet.
    private function importAffairesToDatabase() {

        $GXConnectionToken = $this->connectToGXDatabase(self::$SERVER_NAME, self::$DATABASE, self::$UID, self::$PWD);
        $this->getAffairesFromeGXDatabase($GXConnectionToken);

        // Chemin vers le dossier web.
        $webRoot = $this->container->get('kernel')->getRootDir() . "/../web";

        // On désactive le log SQL pour optimiser les performances.
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);

        // Initialisation du tableau des affaires à ajouter en base de donnnées.
        $affairesArray = array();

        /* echo "Extraction des affaires... \n";

          // On parcours le fichier CSV et on place les informations de chaques affaires dans un tableau.
          if (($handle = fopen($webRoot . "/DatabasesCSV/Affaires.csv", "r")) !== FALSE) {

          // Compteur d'affaire.
          $affaireIndex = 0;
          while (($data = fgetcsv($handle, 0, ";")) !== FALSE) {

          echo "Extraction de l'affaire " . $affaireIndex . "\n";

          // Incrémentation du compteur d'affaire.
          $affaireIndex++;

          // On tente de récupérer l'entité de la base de données correspondant au numéro d'affaire.
          $affairesEntity = $this->em->getRepository('NoxIntranetPointageBundle:AffairesGX')->findOneByNumero($data[0]);

          // Si l'entité n'existe pas ou si l'entité existe mais ses informations sont différentes.
          if (empty($affairesEntity)) {
          // On ajoute les informations de l'affaires au tableau des affaires.
          $affairesArray[] = array(
          'Numero' => $data[0],
          'Nom' => utf8_encode($data[1]),
          'Identifiant' => utf8_encode($data[2])
          );
          } else if ($affairesEntity->getNom() !== utf8_encode($data[1]) || $affairesEntity->getIdentifiant() !== utf8_encode($data[2])) {
          // On met à jour les informations de l'affaire.
          $affairesEntity->setNom(utf8_encode($data[1]));
          $affairesEntity->setIdentifiant(utf8_encode($data[2]));
          $this->em->flush();
          $this->em->clear();
          }

          // Toute les 200 affaires...
          if ($affaireIndex % 200 === 0) {

          echo "Insertion des affaires " . ($affaireIndex - 200) . " à " . $affaireIndex . " dans la base de données.\n";

          // Pour chaques affaires du tableau des affaires...
          foreach ($affairesArray as $affaire) {
          // On créer une nouvelle affaire, on la persist et on incrémente le compteur de flush.
          $newAffaires = new AffairesGX();
          $newAffaires->setNumero($affaire['Numero']);
          $newAffaires->setNom($affaire['Nom']);
          $newAffaires->setIdentifiant($affaire['Identifiant']);
          $this->em->persist($newAffaires);
          }

          // On flush la création des entitées.
          $this->em->flush();
          $this->em->clear();

          // On efface le contenu du tableau des affaires.
          $affairesArray = array();
          }

          echo round((memory_get_usage(true) / 1024) / 1024, 0) . "MO/" . ini_get('memory_limit') . "O\n";
          }

          // On flush les modifications restantes.
          $this->em->flush();
          $this->em->clear();

          fclose($handle);
          }

          echo "Mis à jours des Id... \n";

          // On récupére toutes les entitées d'affaires.
          $allAffaires = $this->em->getRepository('NoxIntranetPointageBundle:AffairesGX')->findAll();

          // Pour chaques affaires...
          $affaireIndex = 1;
          foreach ($allAffaires as $affaire) {
          // On change l'index.
          $affaire->setId($affaireIndex);
          $affaireIndex++;

          echo round((memory_get_usage(true) / 1024) / 1024, 0) . "MO/" . ini_get('memory_limit') . "O\n";
          }

          // On sauvegarde le changement en base de données.
          $this->em->flush();
         */
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

        $connection = odbc_connect("Driver={SQL Server};Server=$server_name;Database=$database;", $uid, $pwd);

        if ($connection) {
            return $connection;
        } else {
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
    private function getAffairesFromeGXDatabase($connexion_token) {
        // Requête qui retourne les affaires.
        $query = "SET NOCOUNT ON SELECT Champ2, Champ9, Designation FROM AFFAIRE GO";

        // On execute la requête.
        $result = odbc_exec($connexion_token, $query);

        // On retourne le résultat de la requête.
        return $result;
    }

}
