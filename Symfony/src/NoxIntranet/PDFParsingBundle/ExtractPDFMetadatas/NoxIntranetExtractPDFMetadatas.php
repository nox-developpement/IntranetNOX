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

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\PDFParsingBundle\Entity\PDF;

class NoxIntranetExtractPDFMetadatas {

    public function __construct(\Doctrine\ORM\EntityManager $entityManager) {
        $this->em = $entityManager;
    }

    function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);

        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                $results[] = $path;
            } else if ($value != "." && $value != ".." && $value != ".quarantine" && $value != ".tmb" && $value != "ImagesPublication" && $value != "BanqueImages") {
                $this->getDirContents($path, $results);
                $results[] = $path;
            }
        }

        return $results;
    }

    function parsePDF() {

        $parser = new \Smalot\PdfParser\Parser();

        $PDFem = $this->em;

        $PDFPresents = $PDFem->getRepository('NoxIntranetPDFParsingBundle:PDF')->findAll();

        $files = $this->getDirContents('C:\wamp\www\Symfony\web\uploads');

        if ($PDFPresents != null) {
            foreach ($PDFPresents as $PDFPresent) {
                $PDFem->remove($PDFPresent);
            }

            $PDFem->flush();
        }

        $news = null;

        if ($files != null) {
            foreach ($files as $file) {
                if (!is_dir($file)) {
                    $propriete = null;

                    $pdf = $parser->parseFile($file);
                    $details = $pdf->getDetails();

                    foreach ($details as $property => $value) {

                        if (is_array($value)) {
                            $value = implode(', ', $value);
                        }

                        $propriete[$property] = $value;
                    }

                    $dateModification = date("Y/m/d", filemtime($file));
                    $nom = str_replace('.pdf', '', basename($file));
                    $lien = str_replace("C:\wamp\www", '', $file);
                    $lien = str_replace("\\", "/", $lien);
                    $news[] = array('lien' => $lien, 'nom' => $nom, 'proprietes' => $propriete, 'dateEnvoi' => $dateModification);
                }
            }
        }

        if ($news != null) {
            foreach ($news as $new) {
                $newPDF = new PDF();
                $newPDF->setNom($new['nom']);
                $newPDF->setDateEnvoi($new['dateEnvoi']);
                $newPDF->setLien($new['lien']);
                $newPDF->setChemin("C:\wamp\www" . str_replace("/", "\\", $new['lien']));

                if (array_key_exists('Title', $new['proprietes'])) {
                    $newPDF->setTitle($new['proprietes']['Title']);
                }
                if (array_key_exists('Author', $new['proprietes'])) {
                    $newPDF->setAuthor($new['proprietes']['Author']);
                }
                if (array_key_exists('Subject', $new['proprietes'])) {
                    $newPDF->setSubject($new['proprietes']['Subject']);
                }
                if (array_key_exists('Keywords', $new['proprietes'])) {
                    $newPDF->setKeywords($new['proprietes']['Keywords']);
                }
                if (array_key_exists('Pages', $new['proprietes'])) {
                    $newPDF->setPages($new['proprietes']['Pages']);
                }

                $PDFem->persist($newPDF);
            }

            $PDFem->flush();
        }

        return $news;
    }

}
