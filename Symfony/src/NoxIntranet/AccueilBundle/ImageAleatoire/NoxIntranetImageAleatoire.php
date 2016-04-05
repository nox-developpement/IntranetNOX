<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of NoxIntranetImageAleatoire
 *
 * @author t.besson
 */

namespace NoxIntranet\AccueilBundle\ImageAleatoire;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class NoxIntranetImageAleatoire {

    public function __construct(\Doctrine\ORM\EntityManager $entityManager, Container $container) {
        $this->em = $entityManager;
        $this->container = $container;
    }

    // Parcour un dossier et ses sous-dossiers et retourne un tableau contant le chemin de tous les fichiers.
    function getDirContents($dir, &$results = array()) {
        $files = scandir($dir);

        foreach ($files as $key => $value) {
            $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
            if (!is_dir($path)) {
                $results[] = $path;
            } else if ($value != "." && $value != ".." && $value != ".quarantine" && $value != ".tmb") {
                $this->getDirContents($path, $results);
                $results[] = $path;
            }
        }

        return $results;
    }

    function selectAndReplaceRandomImage() {

        $root = $this->container->getParameter('kernel.root_dir') . '\..';

        $images = $this->getDirContents($root . '\web\uploads\Communication\Externe\BanqueImages\CellesDesSupports');

        $image = $images[array_rand($images, 1)];

        $imageLien = str_replace('\\', '/', str_replace('C:\wamp\www', '', $image));

        var_dump($imageLien);

        $em = $this->em;

        $textEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart');

        $edito = $textEncart->findBy(array('section' => 'Edito'), array('id' => 'DESC'))[0];

        $edito->setText(preg_replace('/(id="Image_Accueil" src=".*?")/', 'id="Image_Accueil" src="' . $imageLien . '"', $edito->getText()));
        $em->flush();
    }

}
