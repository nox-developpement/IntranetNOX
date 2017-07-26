<?php

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

    /**
     * Parcours les fichiers PDF de l'intranet et ajoute leurs informations en base de données.
     */
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

        // On récupère les PDF du dossier d'upload.
        $PDFFiles = $this->getDirContents($root . '\web\uploads');

        // Pour chaques PDF...
        foreach ($PDFFiles as $key => $PDF) {
            // Récupération de l'entité correspondante au PDF en base de données.
            $PDFEntity = $PDFem->getRepository('NoxIntranetPDFParsingBundle:PDF')->findOneByChemin($PDF);

            // Si l'entité existe et que le sha1 de l'entité et celui du fichier son identiques...
            if (!empty($PDFEntity) && sha1_file($PDF) === $PDFEntity->getSha1()) {
                echo "Le PDF existe déjà...\n";

                // On passe à l'itération suivante.
                unset($PDFEntity);
                continue;
            }
            // Si l'entité existe mais que le fichier à été modifier...
            else if (!empty($PDFEntity)) {
                echo "Le PDF a été modifié...\n";

                // Si il existe une miniature du fichier...
                if (is_file($root . "/web/ImagePDF/" . pathinfo($PDFEntity->getChemin(), PATHINFO_FILENAME) . ".png")) {
                    // On la supprime.
                    unlink($root . "/web/ImagePDF/" . pathinfo($PDFEntity->getChemin(), PATHINFO_FILENAME) . ".png");
                }

                // On supprime l'entitée.
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

            // Initialisation d'une nouvelle entitée de PDF.
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

            // Sauvergarde de l'entité en base de données.
            $PDFem->persist($newPDF);
            $PDFem->flush();
            $PDFem->clear();

            // Génération d'une miniature pour le PDF.
            exec("convert \"" . $root . "/.." . $lien . "[0]\" -resize 500x500 -strip -interlace line \"" . $root . "/web/ImagePDF/" . pathinfo($lien, PATHINFO_FILENAME) . ".png\"");

            // Suppression des variables pour économiser la mémoire.
            unset($PDFFiles[$key]);
            unset($PDFEntity);
            unset($pdfDetails);
            unset($value);
            unset($pdfProperty);
            unset($dateModification);
            unset($nom);
            unset($lien);
            unset($newPDF);

            // Nettoyage forcé de la mémoire.
            gc_collect_cycles();
        }

        // Récupération de l'entité correspondante au PDF en base de données.
        $PDFEntities = $PDFem->getRepository('NoxIntranetPDFParsingBundle:PDF')->findAll();

        // Pour chaques entitées de PDF...
        foreach ($PDFEntities as $entity) {
            // Si le fichier PDF associé n'existe pas...
            if (!is_file($entity->getChemin())) {
                echo "Suppression de l'entité...";

                // Si il existe une miniature du fichier...
                if (is_file($root . "/web/ImagePDF/" . pathinfo($entity->getChemin(), PATHINFO_FILENAME) . ".png")) {
                    // On la supprime.
                    unlink($root . "/web/ImagePDF/" . pathinfo($entity->getChemin(), PATHINFO_FILENAME) . ".png");
                }

                // On supprime l'entitée.
                $PDFem->remove($entity);
                $PDFem->flush();
                $PDFem->clear();
            }
        }
    }

}
