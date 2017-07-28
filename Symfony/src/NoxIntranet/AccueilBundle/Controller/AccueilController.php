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
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AccueilController extends Controller {

    public function accueilAction() {

        return $this->render('NoxIntranetAccueilBundle:Accueil:accueil.html.twig');
    }

//    public function accesInterditAction() {
//
//        //$request->getSession()->getFlashBag()->add('noticeErreur', "Vous n'avez pas les droits requis pour accéder à cette section !");
//
//        return $this->render('NoxIntranetAccueilBundle:Accueil:accesInterdit.html.twig');
//    }

    public function connexionRequiseAction() {

        return $this->render('NoxIntranetAccueilBundle:Accueil:connexionRequise.html.twig');
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

    public function majCommunicationAction(Request $request) {
        // Racine du serveur
        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        // Compteur du nombre de vue de l'intranet.
        $em = $this->getDoctrine()->getManager();
        $compteurVue = $em->getRepository('NoxIntranetAccueilBundle:Compteur')->findOneByCompteur('Accueil');

        // Si la valeur du compteur est vide on l'initialise.
        if (isset($compteurVue)) {
            $nombreVues = $compteurVue->getVue();
        } else {
            $nombreVues = 1;
        }

        // On récupèr le texte de l'édito.
        if ($em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findBy(array('section' => 'Edito')) != null) {
            $editos = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findBy(array('section' => 'Edito'));
            $texteEncart = end($editos);
        } else {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('Edito');
            $em->persist($texteEncart);
            $em->flush();
        }

        // Le texte à afficher dans l'édito de la page d'accueil.
        $texte = $texteEncart->getText();

        // Génération du formulaire d'édito.
        $newTexteEncart = new texteEncart();
        $formBuilder = $this->get('form.factory')->createBuilder('form', $texteEncart);
        $formBuilder
                ->add('text', \Ivory\CKEditorBundle\Form\Type\CKEditorType::class, array(
                    'config' => array(
                        'uiColor' => '#1F4E79',
                    )
                ))
                ->add('modifier', SubmitType::class)
        ;
        $form = $formBuilder->getForm();

        // Traitement du formulaire d'édito.
        $form->handleRequest($request);
        if ($form->isValid()) {
            // Si le texte a été modifié, on le sauvegarde.
            if ($texteEncart !== $form['text']->getData()) {
                $newTexteEncart->setSection('Edito');
                $newTexteEncart->setText($form['text']->getData());
                $em->persist($newTexteEncart);
                $em->flush();
            }

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        return $this->render('NoxIntranetAccueilBundle:Accueil:accueil.html.twig', array(
                    'texte' => $texte, 'formulaire' => $form->createView(), 'nombreVues' => $nombreVues
        ));
    }

    public function ajaxGetNewsAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // Racine du serveur
            $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

            // On récupére les news.
            $majExterne = $this->getPDF($root . '/web/uploads/Communication/Externe/');
            $majInterne = $this->getPDF($root . '/web/uploads/Communication/Interne/');
            foreach ($majInterne as $key => $maj) {
                if (strstr($maj->getLien(), '/web/uploads/Communication/Interne/VieDeLentreprise') !== false) {
                    unset($majInterne[$key]);
                }
            }
            $majMarketing = $this->getPDF($root . '/web/uploads/Communication/Marketing/');
            $majSI = $this->getPDF($root . '/web/uploads/Communication/SI/');
            $majAQ = $this->getPDF($root . '/web/uploads/AQ/');
            $majRH = $this->getPDF($root . '/web/uploads/RH/');
            $annoncesPoste = $this->getPDF($root . '/web/uploads/Communication/Interne/VieDeLentreprise/PosteAPourvoir/');
            $annoncesNomination = $this->getPDF($root . '/web//uploads/Communication/Interne/VieDeLentreprise/NominationOrganisation/');

            // Place les news dans un tableau.
            $newsArray = array(
                "Mise à jour externe" => $majExterne,
                "Mise à jour interne" => $majInterne,
                "Mise à jour marketing" => $majMarketing,
                "Mise à jour SI" => $majSI,
                "Mise à jour RH" => $majRH,
                "Mise à jour AQ" => $majAQ,
                "Annonces poste" => $annoncesPoste,
                "Annonces nomination" => $annoncesNomination
            );

            return new Response(json_encode($newsArray));
        }
    }

    public function getPDF($chemin) {

        $files = $this->getDirContents($chemin);

        $listePDF = array();

        $PDFs = array();

        $dateActuel = new \DateTime();
        $dateActuel->format('Y/m/d');

        $em = $this->getDoctrine()->getManager();

        foreach ($files as $file) {

            $fileExist = $em->getRepository('NoxIntranetPDFParsingBundle:PDF')->findOneByChemin($file);

            if ($fileExist != null) {


                $dateEnvoi = new \DateTime($fileExist->getDateEnvoi());

                $ecart = $dateEnvoi->diff($dateActuel);

                if ($ecart->days <= 15) {
                    $listePDF[] = $fileExist;
                }
            }
        }

        if (!empty($listePDF)) {
            foreach ($listePDF as $k => $v) {
                $date[$k] = $v->getDateEnvoi();
            }

            array_multisort($date, SORT_DESC, $listePDF);
        }

        return $listePDF;
    }

    public function debugAction() {

        $response = new Response();
        $response->setContent(var_dump(phpinfo()));

        return $response;
    }

    public function simulateErrorExceptionAction() {
        throw new HttpException(500, "Some description");
    }

}
