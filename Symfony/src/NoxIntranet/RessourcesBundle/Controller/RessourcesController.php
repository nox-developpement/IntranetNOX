<?php

namespace NoxIntranet\RessourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use NoxIntranet\AdministrationBundle\Entity\texteEncart;
use Smalot\PdfParser\Parser;

class RessourcesController extends Controller {

    public function accueilAction(Request $request) {

        return $this->render('NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig');
    }

    public function liensAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $texteEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Liens');

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('Liens');
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
            return $this->redirectToRoute('nox_intranet_liens');
        }

        $texte = $texteEncart->getText();

        return $this->render('NoxIntranetRessourcesBundle:Liens:liens.html.twig', array('texte' => $texte, 'formulaire' => $form->createView()));
    }

    public function faqAction() {
        $adresseCourante = $_SERVER['HTTP_HOST'];
        return $this->redirect('http://' . $adresseCourante . '/Symfony/web/support/kb/index.php');
    }

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

    public function archivesAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $texteEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Archives');

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('Archives');
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
            return $this->redirectToRoute('nox_intranet_archives');
        }

        $texte = $texteEncart->getText();

        return $this->render('NoxIntranetRessourcesBundle:Archives:archives.html.twig', array('texte' => $texte, 'formulaire' => $form->createView()));
    }

    public function referencesAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $textEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('References');

        $keywords = $em->getRepository('NoxIntranetRessourcesBundle:ReferencesKeywords')->findAll();

        if ($keywords != null) {
            foreach ($keywords as $k => $v) {
                $nombre[$k] = $v->getNombre();
            }
            array_multisort($nombre, SORT_DESC, $keywords);

            $keywordNombreMax = $keywords[0]->getNombre();

            $keywords5 = array_slice($keywords, 0, 10);

            shuffle($keywords5);
        } else {
            $keywords5 = null;
            $keywordNombreMax = null;
        }

        if ($textEncart == null) {
            $textEncart = new texteEncart();
            $textEncart->setSection('References');
            $em->persist($textEncart);
            $em->flush();
        }

        $formBuilder = $this->get('form.factory')->createBuilder('form', $textEncart);

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

            $em->persist($textEncart);
            $em->flush();

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_references');
        }

        $textEncartAffichage = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('References');
        $text = $textEncartAffichage->getText();

        $news = $this->getPDF("C:/wamp/www/Symfony/web/uploads/References");

        return $this->render('NoxIntranetRessourcesBundle:References:references.html.twig', array('references' => $news, 'text' => $text, 'keywords' => $keywords5, 'nombreMax' => $keywordNombreMax, 'formulaire' => $form->createView()));
    }

    public function referencesKeywordAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $textEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('References');

        $keywords = $em->getRepository('NoxIntranetRessourcesBundle:ReferencesKeywords')->findAll();

        if ($keywords != null) {
            foreach ($keywords as $k => $v) {
                $nombre[$k] = $v->getNombre();
            }
            array_multisort($nombre, SORT_DESC, $keywords);

            $keywordNombreMax = $keywords[0]->getNombre();

            $keywords5 = array_slice($keywords, 0, 10);

            shuffle($keywords5);
        } else {
            $keywords5 = null;
            $keywordNombreMax = null;
        }

        if ($textEncart == null) {
            $textEncart = new texteEncart();
            $textEncart->setSection('References');
            $em->persist($textEncart);
            $em->flush();
        }

        $formBuilder = $this->get('form.factory')->createBuilder('form', $textEncart);

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

            $em->persist($textEncart);
            $em->flush();

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_references');
        }

        $textEncartAffichage = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('References');
        $text = $textEncartAffichage->getText();

        $keywordsRecherche = explode(" ", $request->query->get('keyword'));

        $competences = null;

        $competences = $this->getPDF('C:/wamp/www/Symfony/web/uploads/References');

        if (strcmp($request->query->get('keyword'), '') == 0) {
            $competencesRecherche = $competences;
        } else {
            $competencesRecherche = null;

            if ($competences != null) {
                foreach ($competences as $competence) {

                    $labelKeyword = false;
                    $find = true;

                    if ($competence->getKeywords() != null) {
                        $labelKeyword = true;

                        foreach ($keywordsRecherche as $keywordActuel) {
                            if (stripos($competence->getKeywords(), $keywordActuel) === false) {
                                $find = false;
                            }
                        }
                    }

                    if ($labelKeyword) {
                        if ($find) {
                            $competencesRecherche[] = $competence;
                        }
                    }
                }
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:References:References.html.twig', array('references' => $competencesRecherche, 'text' => $text, 'keywords' => $keywords5, 'nombreMax' => $keywordNombreMax, 'formulaire' => $form->createView()));
    }

    public function proceduresAction() {
        return $this->render('NoxIntranetRessourcesBundle:Procedures:procedures.html.twig');
    }

    public function scriptConnexionDownloadAction($agence) {

        $em = $this->getDoctrine()->getManager();

        $archive = $em->getRepository('NoxIntranetRessourcesBundle:Archive')->findOneByAgence($agence);

        $file = $archive->getChemin();

        if (file_exists($file)) {
            header('Content-Type: application/octet-stream');
            header('Content-Length: ' . filesize($file));
            header('Content-disposition: attachment; filename="' . basename($file) . '"');
            header('Pragma: no-cache');
            header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            header('Expires: 0');
            readfile($file);
            exit();
        }

        return $this->redirectToRoute('nox_intranet_archives');
    }

    public function scriptDeconnexionDownloadAction() {

        $file = "C:\wamp\www\Symfony\web\scriptsArchives\Deconnexion.bat";

        if (file_exists($file)) {
            header('Content-Type: application/octet-stream');
            header('Content-Length: ' . filesize($file));
            header('Content-disposition: attachment; filename="' . basename($file) . '"');
            header('Pragma: no-cache');
            header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            header('Expires: 0');
            readfile($file);
            exit();
        }

        return $this->redirectToRoute('nox_intranet_archives');
    }

    public function imprimantesAction() {

        $em = $this->getDoctrine()->getManager();

        $imprimantes = $em->getRepository('NoxIntranetRessourcesBundle:Imprimantes')->findBy(array(), array('agence' => 'ASC', 'nom' => 'ASC'));

        return $this->render('NoxIntranetRessourcesBundle:Imprimantes:imprimantes.html.twig', array('imprimantes' => $imprimantes));
    }

    public function scriptImprimanteDownloadAction($agence, $nom) {

        $em = $this->getDoctrine()->getManager();

        $imprimante = $em->getRepository('NoxIntranetRessourcesBundle:Imprimantes')->findOneBy(array('agence' => $agence, 'nom' => $nom));

        $file = $imprimante->getChemin();

        if (file_exists($file)) {
            header('Content-Type: application/octet-stream');
            header('Content-Length: ' . filesize($file));
            header('Content-disposition: attachment; filename="' . basename($file) . '"');
            header('Pragma: no-cache');
            header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            header('Expires: 0');
            readfile($file);
            exit();
        }

        return $this->redirectToRoute('nox_intranet_imprimantes');
    }

    public function competencesAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $textEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Competences');

        if ($textEncart == null) {
            $textEncart = new texteEncart();
            $textEncart->setSection('Competences');
            $em->persist($textEncart);
            $em->flush();
        }

        $formBuilder = $this->get('form.factory')->createBuilder('form', $textEncart);

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

            $em->persist($textEncart);
            $em->flush();

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_competences');
        }

        $textEncartAffichage = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Competences');
        $text = $textEncartAffichage->getText();

        $parser = new \Smalot\PdfParser\Parser();

        $dir = 'C:/wamp/www/Symfony/web/uploads/Competences';

        $news = null;

        $files = $this->getDirContents($dir);

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

            foreach ($news as $k => $v) {
                $date[$k] = $v['dateEnvoi'];
            }
            array_multisort($date, SORT_DESC, $news);
        }

        if ($news != null) {
            foreach ($news as $key => $value) {
                $news[$key]['dateEnvoi'] = date("d/m/Y à H:i:s", strtotime($value['dateEnvoi']));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:Competences:competences.html.twig', array('competences' => $news, 'text' => $text, 'formulaire' => $form->createView()));
    }

    public function competencesKeywordAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $textEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Competences');

        if ($textEncart == null) {
            $textEncart = new texteEncart();
            $textEncart->setSection('Competences');
            $em->persist($textEncart);
            $em->flush();
        }

        $formBuilder = $this->get('form.factory')->createBuilder('form', $textEncart);

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

            $em->persist($textEncart);
            $em->flush();

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_competences');
        }

        $textEncartAffichage = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Competences');
        $text = $textEncartAffichage->getText();

        $keywords = explode(" ", $request->query->get('keyword'));

        $parser = new \Smalot\PdfParser\Parser();

        $dir = 'C:/wamp/www/Symfony/web/uploads/Competences';

        $news = null;

        $files = $this->getDirContents($dir);

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
                    $competences[] = array('lien' => $lien, 'nom' => $nom, 'proprietes' => $propriete, 'dateEnvoi' => $dateModification);
                }
            }
        } else {
            $competences = null;
        }

        if (strcmp($request->query->get('keyword'), '') == 0) {
            $competencesRecherche = $competences;
        } else {
            $competencesRecherche = null;

            if ($competences != null) {
                foreach ($competences as $competence) {

                    $labelKeyword = false;
                    $find = true;

                    foreach ($competence['proprietes'] as $propriete) {
                        if ($propriete['label'] === 'Keywords') {
                            $labelKeyword = true;
                            foreach ($keywords as $keyword) {
                                if (stripos($propriete['valeur'], $keyword) === false) {
                                    $find = false;
                                }
                            }
                        }
                    }

                    if ($labelKeyword) {
                        if ($find) {
                            $competencesRecherche[] = array('lien' => $competence['lien'], 'nom' => $competence['nom'], 'proprietes' => $competence['proprietes'], 'dateEnvoi' => $competence['dateEnvoi']);
                        }
                    }
                }
            }


            if ($competencesRecherche != null) {
                foreach ($competencesRecherche as $k => $v) {
                    $date[$k] = $v['dateEnvoi'];
                }
            }
        }

        if ($competencesRecherche != null) {
            foreach ($competencesRecherche as $k => $v) {
                $date[$k] = $v['dateEnvoi'];
            }

            array_multisort($date, SORT_DESC, $competencesRecherche);
        }



        if ($competences != null) {
            foreach ($competences as $key => $value) {
                $competences[$key]['dateEnvoi'] = date("d/m/Y à H:i:s", strtotime($value['dateEnvoi']));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:Competences:competences.html.twig', array('competences' => $competencesRecherche, 'text' => $text, 'formulaire' => $form->createView()));
    }

    public function serveursAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $serveurs = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->findBy(array(), array('agence' => 'ASC'));

        return $this->render('NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig', array('serveurs' => $serveurs));
    }

    public function scriptServeurConnexionDownloadAction($agence) {

        $em = $this->getDoctrine()->getManager();

        $serveur = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->findOneByAgence($agence);

        $file = $serveur->getChemin();

        if (file_exists($file)) {
            header('Content-Type: application/octet-stream');
            header('Content-Length: ' . filesize($file));
            header('Content-disposition: attachment; filename="' . basename($file) . '"');
            header('Pragma: no-cache');
            header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            header('Expires: 0');
            readfile($file);
            exit();
        }

        return $this->redirectToRoute('nox_intranet_serveurs');
    }

    public function scriptServeurDeconnexionDownloadAction() {

        $file = "C:\wamp\www\Symfony\web\scriptsServeurs\Deconnexion.bat";

        if (file_exists($file)) {
            header('Content-Type: application/octet-stream');
            header('Content-Length: ' . filesize($file));
            header('Content-disposition: attachment; filename="' . basename($file) . '"');
            header('Pragma: no-cache');
            header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            header('Expires: 0');
            readfile($file);
            exit();
        }

        return $this->redirectToRoute('nox_intranet_serveurs');
    }

    public function aqAction() {
        return $this->render('NoxIntranetRessourcesBundle:AQ:AQ.html.twig');
    }

    public function affichageAQAction($chemin, $dossier, $config) {

        $news = $this->getPDF("C:/wamp/www/Symfony/web/uploads/AQ/" . $chemin);

        return $this->render('NoxIntranetRessourcesBundle:AQ:affichageContenu.html.twig', array('news' => $news, 'dossier' => $dossier, 'config' => $config));
    }

    public function getPDF($chemin) {

        $files = $this->getDirContents($chemin);

        $listePDF = array();

        $PDFs = array();

        $em = $this->getDoctrine()->getManager();

        foreach ($files as $file) {

            $fileExist = $em->getRepository('NoxIntranetPDFParsingBundle:PDF')->findOneByChemin($file);

            if ($fileExist != null) {

                $listePDF[] = $fileExist;

                foreach ($listePDF as $k => $v) {
                    $date[$k] = $v->getDateEnvoi();
                }

                array_multisort($date, SORT_DESC, $listePDF);
            }
        }
        return $listePDF;
    }

    public function assistantAffaireAction() {
        return $this->render('NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaire.html.twig');
    }

    public function rhAction() {
        return $this->render('NoxIntranetRessourcesBundle:RH:RH.html.twig');
    }

    public function affichageRHAction($chemin, $dossier, $config) {

        $news = $this->getPDF("C:/wamp/www/Symfony/web/uploads/RH/" . $chemin);

        return $this->render('NoxIntranetRessourcesBundle:RH:affichageContenu.html.twig', array('news' => $news, 'dossier' => $dossier, 'config' => $config));
    }

    public function citationsAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $texteEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Citations');

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('Citations');
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
            return $this->redirectToRoute('nox_intranet_aq_citations');
        }

        $texte = $texteEncart->getText();

        return $this->render('NoxIntranetRessourcesBundle:AQ:citations.html.twig', array('texte' => $texte, 'formulaire' => $form->createView()));
    }

}
