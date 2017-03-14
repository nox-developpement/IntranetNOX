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
        exec($scriptRoot . "/GXAffairesUpdating.bat");
    }

    // Import les affaires depuis le fichier CSV vers la base de données de l'intranet.
    private function importAffairesToDatabase() {
        $timestamp_debut = microtime(true);

        // Chemin vers le dossier web.
        $webRoot = $this->container->get('kernel')->getRootDir() . "/../web";

        $affairesArray = array();

        // On parcours le fichier CSV et on place les informations de chaques affaires dans un tableau.
        if (($handle = fopen($webRoot . "/DatabasesCSV/Affaires.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 0, ";")) !== FALSE) {

                $affairesArray[] = array(
                    'Numero' => $data[0],
                    'Nom' => utf8_encode($data[1]),
                    'Identifiant' => utf8_encode($data[2])
                );
            }
            fclose($handle);
        }

        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);

        // On truncate la table des affaires pour la vider et remettre les Id à zéro.
        $connection = $this->em->getConnection();
        $platform = $connection->getDatabasePlatform();
        $connection->executeUpdate($platform->getTruncateTableSQL('affaires_gx', true));

        $flushCount = 0;
        foreach ($affairesArray as $affaire) {
            $newAffaires = new AffairesGX();
            $newAffaires->setNumero($affaire['Numero']);
            $newAffaires->setNom($affaire['Nom']);
            $newAffaires->setIdentifiant($affaire['Identifiant']);
            $this->em->persist($newAffaires);
            $flushCount++;

            if ($flushCount % 500 === 0) {
                var_dump('flush: ' . $flushCount);
                $this->em->flush();
                $this->em->clear();
            }
        }

        $this->em->flush();
        $this->em->clear();

        $timestamp_fin = microtime(true);

        $difference_ms = $timestamp_fin - $timestamp_debut;
        echo $difference_ms;
    }

}
