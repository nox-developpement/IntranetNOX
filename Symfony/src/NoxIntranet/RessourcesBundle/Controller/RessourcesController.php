<?php

namespace NoxIntranet\RessourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\AdministrationBundle\Entity\texteEncart;

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
            if (!is_dir($path) && $value != ".gitignore") {
                $results[] = $path;
            } else if ($value != "." && $value != ".." && $value != ".quarantine" && $value != ".tmb" && $value != ".gitignore") {
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

    public function referencesAction(Request $request, $page) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

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

        $news = $this->getPDF($root . "/web/uploads/References");

        if ($news == null) {
            $nbPages = 1;
            $news5 = null;
        } else {
            $nbPages = intval(ceil(sizeof($news) / 5));
            $news5 = array_chunk($news, 5);
        }

        return $this->render('NoxIntranetRessourcesBundle:References:references.html.twig', array('page' => $page, 'nbPage' => $nbPages, 'references' => $news5[$page - 1], 'text' => $text, 'keywords' => $keywords5, 'nombreMax' => $keywordNombreMax, 'formulaire' => $form->createView()));
    }

    public function referencesKeywordAction(Request $request, $page) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

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

        $competences = $this->getPDF($root . '/web/uploads/References');

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

        if ($competencesRecherche == null) {
            $nbPages = 1;
            $competencesRecherche5 = null;
        } else {
            $nbPages = intval(ceil(sizeof($competencesRecherche) / 5));
            $competencesRecherche5 = array_chunk($competencesRecherche, 5);
        }

        return $this->render('NoxIntranetRessourcesBundle:References:References.html.twig', array('page' => $page, 'nbPage' => $nbPages, 'references' => $competencesRecherche5[$page - 1], 'text' => $text, 'keywords' => $keywords5, 'nombreMax' => $keywordNombreMax, 'formulaire' => $form->createView()));
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

        $root = $this->get('kernel')->getRootDir() . '\..';

        $file = $root . "\web\scriptsArchives\Deconnexion.bat";

        if (file_exists($file)) {
            header('Content-Type: application/octet-stream');
            header('Content-Length: ' . filesize($file));
            header('Content-disposition: attachment;
        filename = "' . basename($file) . '"');
            header('Pragma: no-cache');
            header('Cache-Control: no-store, no-cache, must-revalidate, post-check = 0, pre-check = 0');
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
            header('Content-disposition: attachment;
        filename = "' . basename($file) . '"');
            header('Pragma: no-cache');
            header('Cache-Control: no-store, no-cache, must-revalidate, post-check = 0, pre-check = 0');
            header('Expires: 0');
            readfile($file);
            exit();
        }

        return $this->redirectToRoute('nox_intranet_imprimantes');
    }

    // Affiche un formulaire de génération de script de connexion aux serveurs en fonction de l'agence et de la lettre du lecteur séléctionnés.
    public function serveursAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        // Génération du formulaire d'édition du texte d'encart.
        $textEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Serveurs');
        if ($textEncart == null) {
            $textEncart = new texteEncart();
            $textEncart->setSection('Serveurs');
            $em->persist($textEncart);
            $em->flush();
        }
        $formTextEncart = $this->get('form.factory')->createNamedBuilder('formTextEncart', 'form', $textEncart)
                ->add('text', 'ckeditor')
                ->add('modifier', SubmitType::class)
                ->getForm();
        $formTextEncart->handleRequest($request);

        // Traitement du formulaire d'édition du texte d'encart.
        if ($formTextEncart->isValid()) {
            $em->persist($textEncart);
            $em->flush();
            return $this->redirectToRoute('nox_intranet_serveurs');
        }

        // On récupére le texte d'encart pour l'afficher.
        $textEncartAffichage = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Serveurs');
        $text = $textEncartAffichage->getText();

        // On récupére la liste des serveurs.
        $serveurs = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->findBy(array(), array('agence' => 'ASC'));

        // Génération du formulaire de création du script de connexion au serveur.
        $formScriptServeur = $this->get('form.factory')->createNamedBuilder('formScriptServeur', 'form', $serveurs)
                ->add('lettreLecteur', ChoiceType::class, array(
                    'choices' => range('A', 'Z')
                ))
                ->getForm();

        return $this->render('NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig', array('serveurs' => $serveurs, 'text' => $text, 'formTextEncart' => $formTextEncart->createView(), 'formScriptServeur' => $formScriptServeur));
    }

    public function scriptServeurConnexionDownloadAction($agence, $lettreLecteur) {

        // On récupére les informations concernant le serveurs.
        $em = $this->getDoctrine()->getManager();
        $serveur = $em->getRepository('NoxIntranetRessourcesBundle:Serveur')->findOneByAgence($agence);

        // On récupére le chemin de la racine du serveur de l'intranet.
        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        // On génére le script de connexion au serveur.
        $scriptBat = fopen($root . '/web/scriptsServeurs/' . $serveur->getAgence() . '.bat', 'a+');
        fputs($scriptBat, 'net use /persistent:no');
        fputs($scriptBat, "\n");
        fputs($scriptBat, 'net use ' . $lettreLecteur . ': /delete /' . $lettreLecteur);
        fputs($scriptBat, "\n");
        fputs($scriptBat, 'timeout 5');
        fputs($scriptBat, "\n");
        fputs($scriptBat, 'net use ' . $lettreLecteur . ': ' . $serveur->getLien());
        fputs($scriptBat, "\n");
        fclose($scriptBat);

        // On lance le téléchargement du script nouvellement créé.
        if (file_exists($scriptBat)) {
            header('Content-Type: application/octet-stream');
            header('Content-Length: ' . filesize($scriptBat));
            header('Content-disposition: attachment; filename="' . basename($scriptBat) . '"');
            header('Pragma: no-cache');
            header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
            header('Expires: 0');
            readfile($scriptBat);
            exit();
        }

        // On supprime le fichier de script.
        unlink($scriptBat);

        return $this->redirectToRoute('nox_intranet_serveurs');
    }

    public function scriptServeurDeconnexionDownloadAction() {

        $root = $this->get('kernel')->getRootDir() . '\..';

        $file = $root . "\web\scriptsServeurs\Deconnexion.bat";

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

    public function affichageAQAction($chemin, $dossier, $config, $page) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $news = $this->getPDF($root . "/web/uploads/AQ/" . $chemin);

        if ($news == null) {
            $nbPages = 1;
            $news10 = null;
        } else {
            $nbPages = intval(ceil(sizeof($news) / 5));
            $news10 = array_chunk($news, 5);
        }

        return $this->render('NoxIntranetRessourcesBundle:AQ:affichageContenu.html.twig', array('chemin' => $chemin, 'page' => $page, 'nbPage' => $nbPages, 'news' => $news10[$page - 1], 'dossier' => $dossier, 'config' => $config));
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

    public function affichageRHAction($chemin, $dossier, $config, $page) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $news = $this->getPDF($root . "/web/uploads/RH/" . $chemin);

        if ($news == null) {
            $nbPages = 1;
            $news10 = null;
        } else {
            $nbPages = intval(ceil(sizeof($news) / 5));
            $news10 = array_chunk($news, 5);
        }

        return $this->render('NoxIntranetRessourcesBundle:RH:affichageContenu.html.twig', array('nbPage' => $nbPages, 'chemin' => $chemin, 'page' => $page, 'news' => $news10[$page - 1], 'dossier' => $dossier, 'config' => $config));
    }

    public function AQProceduresAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $texteEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Procedures');

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('Procedures');
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
            return $this->redirectToRoute('nox_intranet_aq_procedures');
        }

        $texte = $texteEncart->getText();

        return $this->render('NoxIntranetRessourcesBundle:AQ:procedures.html.twig', array('texte' => $texte, 'formulaire' => $form->createView()));
    }

    public function modesOperatoiresAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $texteEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('ModesOperatoires');

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('ModesOperatoires');
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
            return $this->redirectToRoute('nox_intranet_aq_modes_operatoires');
        }

        $texte = $texteEncart->getText();

        return $this->render('NoxIntranetRessourcesBundle:AQ:modesOperatoires.html.twig', array('texte' => $texte, 'formulaire' => $form->createView()));
    }

    public function formulairesEtDocumentsTypesAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $texteEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('FormulairesEtDocumentTypes');

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('FormulairesEtDocumentTypes');
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
            return $this->redirectToRoute('nox_intranet_aq_formulaires_et_documents_types');
        }

        $texte = $texteEncart->getText();

        return $this->render('NoxIntranetRessourcesBundle:AQ:formulairesEtDocumentsTypes.html.twig', array('texte' => $texte, 'formulaire' => $form->createView()));
    }

    public function excelParsingAction($chemin, $dossier, $config) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        include_once $this->get('kernel')->getRootDir() . '/../vendor/phpexcel/phpexcel/PHPExcel.php';

        $excelFiles = $this->getDirContents($root . "/web/uploads/RH/" . $chemin);

        if (!empty($excelFiles)) {
            foreach ($excelFiles as $file) {
                $objReader = \PHPExcel_IOFactory::createReaderForFile($file);
                $objReader->setReadDataOnly(true);
                $objPHPExcel = $objReader->load($file);

                $fichierExcel[$file]['proprietes'] = $objPHPExcel->getProperties();
                $fichierExcel[$file]['Lien'] = '/Symfony/web/uploads/RH/' . $chemin . '/' . pathinfo($file, PATHINFO_BASENAME);
                $fichierExcel[$file]['Nom'] = pathinfo($file, PATHINFO_FILENAME);
                $fichierExcel[$file]['dateEnvoi'] = date("Y/m/d", filemtime($file));

                if (!is_file($root . "/web/ExcelToPDF/" . pathinfo($file, PATHINFO_FILENAME) . ".pdf") || !is_file($root . "/web/ImagePDF/" . pathinfo($file, PATHINFO_FILENAME) . ".png")) {
                    exec("soffice --headless --convert-to pdf --outdir \"" . $root . "/web/ExcelToPDF\" \"" . $file . "\"");
                    exec("convert \"" . $root . "/web/ExcelToPDF/" . pathinfo($file, PATHINFO_FILENAME) . ".pdf[0]\" -resize 500x500 -strip -interlace line \"" . $root . "/web/ImagePDF/" . pathinfo($file, PATHINFO_FILENAME) . ".png\"");
                }
            }
        } else {
            $fichierExcel = array();
        }

        if ($fichierExcel != null) {
            foreach ($fichierExcel as $k => $v) {
                $date[$k] = $v['dateEnvoi'];
            }

            array_multisort($date, SORT_DESC, $fichierExcel);
        }

        if ($fichierExcel != null) {
            foreach ($fichierExcel as $key => $value) {
                $fichierExcel[$key]['dateEnvoi'] = date("d/m/Y", strtotime($value['dateEnvoi']));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:RH:affichageExcel.html.twig', array('news' => $fichierExcel, 'dossier' => $dossier, 'chemin' => $chemin, 'config' => $config));
    }

    public function NOXVirtualRealityAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $texteEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('NOXVR');

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('NOXVR');
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
            return $this->redirectToRoute('nox_intranet_nox_virtual_reality');
        }

        $texte = $texteEncart->getText();

        return $this->render('NoxIntranetRessourcesBundle:VR:NoxVirtualReality.html.twig', array('texte' => $texte, 'formulaire' => $form->createView()));
    }

}
