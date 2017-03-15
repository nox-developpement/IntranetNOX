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
        // Chemin vers le dossier web.
        $webRoot = $this->container->get('kernel')->getRootDir() . "/../web";

        // Initialisation du tableau des affaires à ajouter en base de donnnées.
        $affairesArray = array();

        echo "Extraction des affaires... \n";

        // On parcours le fichier CSV et on place les informations de chaques affaires dans un tableau.
        if (($handle = fopen($webRoot . "/DatabasesCSV/Affaires.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 0, ";")) !== FALSE) {

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
                    // On ajoute les informations de l'affaires au tableau des affaires.
                    $affairesArray[] = array(
                        'Numero' => $data[0],
                        'Nom' => utf8_encode($data[1]),
                        'Identifiant' => utf8_encode($data[2])
                    );

                    // On supprime l'entité existante.
                    $this->em->remove($affairesEntity);
                }
            }
            fclose($handle);
        }

        // On désactive le log SQL pour optimiser les performances.
        $this->em->getConnection()->getConfiguration()->setSQLLogger(null);

        echo "Insertion des affaires dans la base de données... \n";

        // Pour chaques affaires du tableau des affaires...
        $flushCount = 0;
        foreach ($affairesArray as $affaire) {
            // On créer une nouvelle affaire, on la persist et on incrémente le compteur de flush.
            $newAffaires = new AffairesGX();
            $newAffaires->setNumero($affaire['Numero']);
            $newAffaires->setNom($affaire['Nom']);
            $newAffaires->setIdentifiant($affaire['Identifiant']);
            $this->em->persist($newAffaires);
            $flushCount++;

            // Toutes les 500 itérations...
            if ($flushCount % 500 === 0) {
                // On flush la création des entitées.
                $this->em->flush();
                $this->em->clear();
            }
        }

        // On flush les modifications restantes.
        $this->em->flush();
        $this->em->clear();

        echo "Mis à jours des Id... \n";

        // On récupére toutes les entitées d'affaires.
        $allAffaires = $this->em->getRepository('NoxIntranetPointageBundle:AffairesGX')->findAll();

        // Pour chaques affaires...
        $affaireIndex = 1;
        foreach ($allAffaires as $affaire) {
            // On change l'index.
            $affaire->setId($affaireIndex);
            $affaireIndex++;
        }

        // On sauvegarde le changement en base de données.
        $this->em->flush();
    }

}
