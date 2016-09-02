<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AccueilBundle\MessageAlert;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpFoundation\Response;
use NoxIntranet\AdministrationBundle\Entity\texteEncart;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AccesInterditListener {

    // Notre processeur
    protected $accesInterditHTML;
    protected $container;

    public function __construct(AccesInterditHTML $accesInterditHTML, ContainerInterface $container) {
        $this->accesInterditHTML = $accesInterditHTML;
        $this->container = $container;
    }

    public function processAcessInterdit(GetResponseForExceptionEvent $event) {

        $request = $this->container->get('request');

        // On teste si la requête est bien la requête principale (et non une sous-requête)
        if (!$event->isMasterRequest()) {
            return;
        }

        // On teste si l'exception est bien une erreur d'accès interdit.
        if (get_class($event->getException()) === 'Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException' && $event->getException()->getStatusCode() !== 403) {
            return;
        }

        $root = str_replace('\\', '/', $this->container->get('kernel')->getRootDir()) . '/..';

        $em = $this->container->get('doctrine')->getManager();

        $compteurVue = $em->getRepository('NoxIntranetAccueilBundle:Compteur')->findOneByCompteur('Accueil');

        if (isset($compteurVue)) {
            $nombreVues = $compteurVue->getVue();
        } else {
            $nombreVues = 1;
        }

        if ($em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findBy(array('section' => 'Edito')) != null) {
            $editos = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findBy(array('section' => 'Edito'));
            $texteEncart = end($editos);
        } else {
            $texteEncart = null;
        }

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('Edito');
            $em->persist($texteEncart);
            $em->flush();
        }

        $newTexteEncart = new texteEncart();

        $formBuilder = $this->container->get('form.factory')->createBuilder('form', $texteEncart);

        $formBuilder
                ->add('text', 'ckeditor')
                ->add('modifier', 'submit')
        ;

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            if ($texteEncart !== $form['text']->getData()) {
                $newTexteEncart->setSection('Edito');
                $newTexteEncart->setText($form['text']->getData());
                $em->persist($newTexteEncart);
                $em->flush();
            }

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_accueil');
        }

        $texte = $texteEncart->getText();

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

        $rowResponse = new Response();
        $rowResponse->setContent(
                $this->container->get('templating')->render('NoxIntranetAccueilBundle:Accueil:accueil.html.twig', array('texte' => $texte, 'formulaire' => $form->createView(),
                    'majExterne' => $majExterne, 'majInterne' => $majInterne, 'majMarketing' => $majMarketing, 'majSI' => $majSI, 'majAQ' => $majAQ, 'majRH' => $majRH,
                    'posteAPourvoir' => $annoncesPoste, 'nominationOrganisation' => $annoncesNomination, 'nombreVues' => $nombreVues))
        );

        // On modifie le code en fonction du type d'exception.
        if (get_class($event->getException()) === 'Symfony\Component\Security\Core\Exception\InsufficientAuthenticationException') {
            $response = $this->accesInterditHTML->displayConnexionRequise($rowResponse, $this->container->get('request')->getSchemeAndHttpHost());
            $event->setResponse($response);
        } elseif (get_class($event->getException()) === 'Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException') {
            $response = $this->accesInterditHTML->displayAccesInterdit($rowResponse, $this->container->get('request')->getSchemeAndHttpHost());
            $event->setResponse($response);
        }
    }

    public function getPDF($chemin) {

        $files = $this->getDirContents($chemin);

        $listePDF = array();

        $PDFs = array();

        $dateActuel = new \DateTime();
        $dateActuel->format('Y/m/d');

        $em = $this->container->get('doctrine')->getManager();

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

}
