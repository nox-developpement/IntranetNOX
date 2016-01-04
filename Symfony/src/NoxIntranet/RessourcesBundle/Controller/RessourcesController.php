<?php

namespace NoxIntranet\RessourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use NoxIntranet\AdministrationBundle\Entity\texteEncart;

class RessourcesController extends Controller {

    /**
     * @Security("has_role('ROLE_USER')")
     */
    public function accueilAction(Request $request) {

        return $this->render('NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig');
    }

    public function liensAction() {

        $em = $this->getDoctrine()->getManager();

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('libelle' => 'asc'));

        return $this->render('NoxIntranetRessourcesBundle:Liens:liens.html.twig', array('liens' => $liens));
    }

    public function faqAction() {
        $adresseCourante = $_SERVER['HTTP_HOST'];
        return $this->redirect('http://' . $adresseCourante . '/Symfony/web/support/kb/index.php');
    }

    public function archivesAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $textEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Archives');

        if ($textEncart == null) {
            $textEncart = new texteEncart();
            $textEncart->setSection('Archives');
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
            return $this->redirectToRoute('nox_intranet_archives');
        }

        $textEncartAffichage = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('Archives');
        $text = $textEncartAffichage->getText();

        $archives = $em->getRepository('NoxIntranetRessourcesBundle:Archive')->findBy(array(), array('agence' => 'ASC'));

        return $this->render('NoxIntranetRessourcesBundle:Archives:archives.html.twig', array('archives' => $archives, 'text' => $text, 'formulaire' => $form->createView()));
    }

    public function referencesAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $textEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('References');

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

        $parser = new \Smalot\PdfParser\Parser();

        $dir = 'C:/wamp/www/Symfony/web/uploads/References';

        $files = scandir($dir, SCANDIR_SORT_DESCENDING);

        foreach ($files as $file) {

            $propriete = null;

            if ($file != '.' && $file != '..' && $file != '.quarantine' && $file != '.tmb') {
                $chemin = $dir . "/" . $file;
                $pdf = $parser->parseFile($chemin);
                $details = $pdf->getDetails();

                foreach ($details as $property => $value) {

                    if (is_array($value)) {
                        $value = implode(', ', $value);
                    }

                    $propriete[] = array('label' => $property, 'valeur' => $value);
                }

                $dateModification = date("d/m/Y à H:i:s", filemtime($chemin));
                $nom = str_replace('.pdf', '', $file);
                $references[] = array('lien' => $file, 'nom' => $nom, 'proprietes' => $propriete, 'dateEnvoi' => $dateModification);
            }
        }

        foreach ($references as $k => $v) {
            $date[$k] = $v['dateEnvoi'];
        }

        array_multisort($date, SORT_DESC, $references);

        return $this->render('NoxIntranetRessourcesBundle:References:references.html.twig', array('references' => $references, 'text' => $text, 'formulaire' => $form->createView()));
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

        $files = scandir($dir, SCANDIR_SORT_DESCENDING);

        foreach ($files as $file) {

            $propriete = null;

            if ($file != '.' && $file != '..' && $file != '.quarantine' && $file != '.tmb') {
                $chemin = $dir . "/" . $file;
                $pdf = $parser->parseFile($chemin);
                $details = $pdf->getDetails();

                foreach ($details as $property => $value) {

                    if (is_array($value)) {
                        $value = implode(', ', $value);
                    }

                    $propriete[] = array('label' => $property, 'valeur' => $value);
                }

                $dateModification = date("d/m/Y à H:i:s", filemtime($chemin));
                $nom = str_replace('.pdf', '', $file);
                $competences[] = array('lien' => $file, 'nom' => $nom, 'proprietes' => $propriete, 'dateEnvoi' => $dateModification);
            }
        }

        foreach ($competences as $k => $v) {
            $date[$k] = $v['dateEnvoi'];
        }

        array_multisort($date, SORT_DESC, $competences);

        return $this->render('NoxIntranetRessourcesBundle:Competences:competences.html.twig', array('competences' => $competences, 'text' => $text, 'formulaire' => $form->createView()));
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

        $keyword = $request->query->get('keyword');

        if ($keyword == null) {
            return $this->redirectToRoute('nox_intranet_competences');
        }

        $parser = new \Smalot\PdfParser\Parser();

        $dir = 'C:/wamp/www/Symfony/web/uploads/Competences';

        $files = scandir($dir, SCANDIR_SORT_DESCENDING);

        foreach ($files as $file) {

            $propriete = null;

            if ($file != '.' && $file != '..' && $file != '.quarantine' && $file != '.tmb') {
                $chemin = $dir . "/" . $file;
                $pdf = $parser->parseFile($chemin);
                $details = $pdf->getDetails();

                foreach ($details as $property => $value) {

                    if (is_array($value)) {
                        $value = implode(', ', $value);
                    }

                    $propriete[] = array('label' => $property, 'valeur' => $value);
                }

                $dateModification = date("d/m/Y à H:i:s", filemtime($file));

                $nom = str_replace('.pdf', '', $file);
                $competences[] = array('lien' => $file, 'nom' => $nom, 'proprietes' => $propriete, 'dateEnvoi' => $dateModification);
            }
        }

        $competencesRecherche = null;

        foreach ($competences as $competence) {

            foreach ($competence['proprietes'] as $propriete) {
                if ($propriete['label'] === 'Keywords' && stripos($propriete['valeur'], $keyword) !== false) {
                    $competencesRecherche[] = array('lien' => $competence['lien'], 'nom' => $competence['nom'], 'proprietes' => $competence['proprietes']);
                }
            }
        }

        foreach ($competencesRecherche as $k => $v) {
            $date[$k] = $v['dateEnvoi'];
        }

        array_multisort($date, SORT_DESC, $competencesRecherche);

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

}
