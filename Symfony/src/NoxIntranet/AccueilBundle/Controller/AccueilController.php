<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\AdministrationBundle\Entity\texteEncart;

/**
 * Description of AccueilController
 *
 * @author t.besson
 */
class AccueilController extends Controller {

    public function accueilAction() {

        return $this->render('NoxIntranetAccueilBundle:Accueil:accueil.html.twig');
    }

    public function accesInterditAction(Request $request) {

        $request->getSession()->getFlashBag()->add('noticeErreur', "Vous n'avez pas les droits requis pour accéder à cette section !");

        return $this->redirectToRoute('nox_intranet_accueil');
    }

    public function connexionRequiseAction(Request $request) {

        $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez vous connecter pour accéder à cette section.");

        return $this->redirectToRoute('nox_intranet_accueil');
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

    function getMaj($files) {



        $parser = new \Smalot\PdfParser\Parser();

        $news = null;

        $news5 = null;

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

                        $propriete[] = array('label' => $property, 'valeur' => $value);
                    }

                    $dateModification = date("Y/m/d H:i:s", filemtime($file));
                    $nom = str_replace('.pdf', '', basename($file));
                    $lien = str_replace("C:\wamp\www", '', $file);
                    $lien = str_replace("\\", "/", $lien);
                    $news[] = array('lien' => $lien, 'nom' => $nom, 'proprietes' => $propriete, 'dateEnvoi' => $dateModification);
                }
            }

            if ($news != null) {
                foreach ($news as $k => $v) {
                    $date[$k] = $v['dateEnvoi'];
                }
                array_multisort($date, SORT_DESC, $news);

                $news5 = array_slice($news, 0, 5);

                if ($news5 != null) {
                    foreach ($news5 as $key => $value) {
                        $news5[$key]['dateEnvoi'] = date("d/m/Y à H:i:s", strtotime($value['dateEnvoi']));
                    }
                }
            }
        }

        return $news5;
    }

    public function majCommunicationAction(Request $request) {

        $Path = 'C:/wamp/www/Symfony/web/uploads/Communication/';



        $filesExterne = $this->getDirContents('C:/wamp/www/Symfony/web/uploads/Communication/Externe');

        $filesInterne = $this->getDirContents('C:/wamp/www/Symfony/web/uploads/Communication/Interne');

        $filesMarketing = $this->getDirContents('C:/wamp/www/Symfony/web/uploads/Communication/Marketing');

        $filesSI = $this->getDirContents('C:/wamp/www/Symfony/web/uploads/Communication/SI');
//
//        return $this->render('NoxIntranetAccueilBundle:Accueil:accueil.html.twig', array('news' => $news5));

        $em = $this->getDoctrine()->getManager();

        $texteEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Edito');

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('Edito');
            $em->persist($texteEncart);
            $em->flush();
        }

        $formBuilder = $this->get('form.factory')->createBuilder('form', $texteEncart);

        $formBuilder
                ->add('text', 'ckeditor')
                ->add('modifier', 'submit')
        ;

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple

            $em->persist($texteEncart);
            $em->flush();

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        $texte = $texteEncart->getText();

//        $majExterne = null;
//
//        $majInterne = null;

//        $majMarketing = null;

//        $majSI = null;

        $majExterne = $this->getMaj($filesExterne);
//
        $majInterne = $this->getMaj($filesInterne);
//
        $majMarketing = $this->getMaj($filesMarketing);
//
        $majSI = $this->getMaj($filesSI);
        
        return $this->render('NoxIntranetAccueilBundle:Accueil:accueil.html.twig', array('texte' => $texte, 'formulaire' => $form->createView(), 'majExterne' => $majExterne, 'majInterne' => $majInterne, 'majMarketing' => $majMarketing, 'majSI' => $majSI));
    }

}
