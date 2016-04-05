<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\RessourcesBundle\GetKeywordsReferences;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\RessourcesBundle\Entity\ReferencesKeywords;

class NoxIntranetGetKeywordsReferences extends Controller {

    public function __construct(\Doctrine\ORM\EntityManager $entityManager) {
        $this->em = $entityManager;
    }

    function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);

        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path) && $value != ".gitignore") {
                $results[] = $path;
            } else if ($value != "." && $value != ".." && $value != ".quarantine" && $value != ".tmb" && $value != "ImagesPublication" && $value != "BanqueImages" && $value != ".gitignore") {
                $this->getDirContents($path, $results);
                $results[] = $path;
            }
        }

        return $results;
    }

    public function getKeywordsListe($files) {

        $parser = new \Smalot\PdfParser\Parser();

        $keywordsListe = array();

        if ($files != null) {
            foreach ($files as $file) {

                $keywordsColles = null;

                if (!is_dir($file)) {
                    $proprietes = null;

                    $pdf = $parser->parseFile($file);
                    $details = $pdf->getDetails();

                    foreach ($details as $property => $value) {

                        if (is_array($value)) {
                            $value = implode(', ', $value);
                        }

                        $proprietes[] = array('label' => $property, 'valeur' => $value);
                    }

                    if ($proprietes != null) {
                        foreach ($proprietes as $propriete) {
                            if ($propriete['label'] === 'Keywords') {
                                $keywordsColles = $propriete['valeur'];
                            }
                        }
                    }

                    if ($keywordsColles != null) {

                        $keywords = explode(' ', $keywordsColles);

                        foreach ($keywords as $keyword) {
                            if (array_key_exists(ucfirst(strtolower(utf8_decode($keyword))), $keywordsListe)) {
                                $keywordsListe[ucfirst(strtolower(utf8_decode($keyword)))] = $keywordsListe[ucfirst(strtolower(utf8_decode($keyword)))] + 1;
                            } else {
                                $keywordsListe[ucfirst(strtolower(utf8_decode($keyword)))] = 1;
                            }
                        }
                    }
                }
            }
        }

        return $keywordsListe;
    }

    public function putKeywordsNumber() {

        $root = $this->get('kernel')->getRootDir() . '\..';

        $referencesEm = $this->em;

        $filesReferences = $this->getDirContents($root . '\web\uploads\References');

        $keywordsExistants = $referencesEm->getRepository('NoxIntranetRessourcesBundle:ReferencesKeywords')->findAll();

        if ($keywordsExistants != null) {
            foreach ($keywordsExistants as $keywordExistant) {
                $referencesEm->remove($keywordExistant);
            }
            $referencesEm->flush();
        }

        $keywordsListe = $this->getKeywordsListe($filesReferences);

        foreach ($keywordsListe as $nom => $nombre) {
            $compteurKeyword = $referencesEm->getRepository('NoxIntranetRessourcesBundle:ReferencesKeywords')->findOneByKeyword($nom);

            if ($compteurKeyword == null) {
                $compteurKeyword = new ReferencesKeywords();
                $compteurKeyword->setKeyword(utf8_encode($nom));
                $compteurKeyword->setNombre($nombre);
                $referencesEm->persist($compteurKeyword);
                $referencesEm->flush();
            } else {
                $compteurKeyword->setNombre($nombre);
                $referencesEm->persist($compteurKeyword);
                $referencesEm->flush();
            }
        }

        return $keywordsListe;
    }

}
