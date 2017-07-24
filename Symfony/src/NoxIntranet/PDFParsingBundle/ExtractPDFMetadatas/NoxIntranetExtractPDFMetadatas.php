<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoxIntranetExtractPDFMetadatas
 *
 * @author t.besson
 */

namespace NoxIntranet\PDFParsingBundle\ExtractPDFMetadatas;

use NoxIntranet\PDFParsingBundle\Entity\PDF;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class NoxIntranetExtractPDFMetadatas {

    public function __construct(\Doctrine\ORM\EntityManager $entityManager, Container $container) {
        $this->em = $entityManager;
        $this->container = $container;
    }

    /**
     * 
     * Retourne un tableau contenant tout les fichiers PDF du dossier passé en paramêtre.
     * 
     * @param String $dir Chemin du dossier à analyser.
     * @param Array $results Tableau de fichier.
     * @return Array
     */
    function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);

        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path) && $value != ".gitignore") {
                $results[] = $path;
            } else if ($value != "." && $value != ".." && $value != ".quarantine" && $value != ".tmb" && $value != "ImagesPublication" &&
                    $value != "BanqueImages" && $value != ".gitignore") {
                $this->getDirContents($path, $results);
                $results[] = $path;
            }
        }

        foreach ($results as $file) {
            $info = new \SplFileInfo($file);
            if ($info->getExtension() == 'pdf') {
                $finalResult[] = $file;
            }
        }

        return $finalResult;
    }

    function parsePDF() {
        // Racine du serveur.
        $root = $this->container->getParameter('kernel.root_dir') . '\..';

        // Lettre du disque du serveur.
        $rootLetter = str_replace(':\wamp\www\Symfony\app\..', '', $root);
        strstr($root . ':', ':', true);

        // Initialisation du parser de PDF.
        $parser = new \Smalot\PdfParser\Parser();

        // On récupère les PDF de la base de données.
        $PDFem = $this->em;
        $PDFem->getConnection()->getConfiguration()->setSQLLogger(null);

        //$PDFPresents = $PDFem->getRepository('NoxIntranetPDFParsingBundle:PDF')->findAll();
        // On récupère les PDF du dossier d'upload.
        $PDFFiles = $this->getDirContents($root . '\web\uploads');

//        if ($PDFPresents != null) {
//            foreach ($PDFPresents as $PDFPresent) {
//                $PDFem->remove($PDFPresent);
//            }
//
//            $PDFem->flush();
//        }
//
//        $news = null;
//        
        // Pour chaques PDF...
        foreach ($PDFFiles as $PDF) {

            $PDFEntity = $PDFem->getRepository('NoxIntranetPDFParsingBundle:PDF')->findOneByChemin($PDF);
            //var_dump($PDFEntity);

            if (!empty($PDFEntity) && sha1_file($PDF) === $PDFEntity->getSha1()) {
                unset($PDFEntity);
                echo "Le PDF existe déjà...\n";
                continue;
            } else if (!empty($PDFEntity)) {
                echo "Le PDF a été modifié...\n";
                $PDFem->remove($PDFEntity);
                $PDFem->flush();
                $PDFem->clear();
            }

            echo "Ajout du nouveau PDF...\n";

            // Extraction des propriétés du PDF.
            $pdfDetails = $parser->parseFile($PDF)->getDetails();
            $pdfProperty = array();
            foreach ($pdfDetails as $property => $value) {
                if (is_array($value)) {
                    $value = implode(", ", $value);
                }
                $pdfProperty[$property] = $value;
            }

            // Extraction des informations du fichier PDF.
            $dateModification = date("Y/m/d", filemtime($PDF));
            $nom = str_replace('.pdf', '', basename($PDF));
            $lien = str_replace("\\", "/", str_replace($rootLetter . ":\wamp\www", '', $PDF));

            $newPDF = new PDF();
            $newPDF->setNom($nom);
            $newPDF->setDateEnvoi($dateModification);
            $newPDF->setLien($lien);
            $newPDF->setChemin($PDF);
            $newPDF->setSha1(sha1_file($PDF));

            if (array_key_exists('Title', $pdfProperty)) {
                $newPDF->setTitle($pdfProperty['Title']);
            }
            if (array_key_exists('Author', $pdfProperty)) {
                $newPDF->setAuthor($pdfProperty['Author']);
            }
            if (array_key_exists('Subject', $pdfProperty)) {
                $newPDF->setSubject($pdfProperty['Subject']);
            }
            if (array_key_exists('Keywords', $pdfProperty)) {
                $newPDF->setKeywords($pdfProperty['Keywords']);
            }
            if (array_key_exists('Pages', $pdfProperty)) {
                $newPDF->setPages($pdfProperty['Pages']);
            }

            $PDFem->persist($newPDF);
            $PDFem->flush();
            $PDFem->clear();

            unset($PDFEntity);
            unset($pdfDetails);
            unset($value);
            unset($pdfProperty);
            unset($dateModification);
            unset($nom);
            unset($lien);
            unset($newPDF);
            echo "Memory Usage: " . (memory_get_usage() / 1048576) . " MB \n";
        }

//        if ($files != null) {
//            foreach ($files as $file) {
//                if (!is_dir($file)) {
//                    $propriete = null;
//
//                    $pdf = $parser->parseFile($file);
//                    $details = $pdf->getDetails();
//
//                    foreach ($details as $property => $value) {
//
//                        if (is_array($value)) {
//                            $value = implode(', ', $value);
//                        }
//
//                        $propriete[$property] = $value;
//                    }
//
//                    $dateModification = date("Y/m/d", filemtime($file));
//                    $nom = str_replace('.pdf', '', basename($file));
//                    $lien = str_replace($rootLetter . ":\wamp\www", '', $file);
//                    $lien = str_replace("\\", "/", $lien);
//
//                    $news[] = array('lien' => $lien, 'nom' => $nom, 'proprietes' => $propriete, 'dateEnvoi' => $dateModification);
//                }
//            }
//        }
//
//        if ($news != null) {
//            foreach ($news as $new) {
//                $newPDF = new PDF();
//                $newPDF->setNom($new['nom']);
//                $newPDF->setDateEnvoi($new['dateEnvoi']);
//                $newPDF->setLien($new['lien']);
//                $newPDF->setChemin($rootLetter . ":\wamp\www" . str_replace("/", "\\", $new['lien']));
//
//                if (array_key_exists('Title', $new['proprietes'])) {
//                    $newPDF->setTitle($new['proprietes']['Title']);
//                }
//                if (array_key_exists('Author', $new['proprietes'])) {
//                    $newPDF->setAuthor($new['proprietes']['Author']);
//                }
//                if (array_key_exists('Subject', $new['proprietes'])) {
//                    $newPDF->setSubject($new['proprietes']['Subject']);
//                }
//                if (array_key_exists('Keywords', $new['proprietes'])) {
//                    $newPDF->setKeywords($new['proprietes']['Keywords']);
//                }
//                if (array_key_exists('Pages', $new['proprietes'])) {
//                    $newPDF->setPages($new['proprietes']['Pages']);
//                }
//
//                $PDFem->persist($newPDF);
//            }
//        }
        // return $news;
    }

}
