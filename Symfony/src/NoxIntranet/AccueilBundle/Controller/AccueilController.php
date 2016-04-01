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

    public function majCommunicationAction(Request $request) {

        $root = str_replace('\\', '/', $this->get('kernel')->getRootDir()) . '/..';

        $em = $this->getDoctrine()->getManager();

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

        $majMarketing = $this->getPDF($root . '/web/uploads/Communication/Marketing/');

        $majSI = $this->getPDF($root . '/web/uploads/Communication/SI/');

        $majAQ = $this->getPDF($root . '/web/uploads/AQ/');

        $majRH = $this->getPDF($root . '/web/uploads/RH/');

        $annoncesPoste = $this->getPDF($root . '/web/uploads/Communication/Interne/VieDeLentreprise/PosteAPourvoir/');

        $annoncesNomination = $this->getPDF($root . '/web//uploads/Communication/Interne/VieDeLentreprise/NominationOrganisation/');

        return $this->render('NoxIntranetAccueilBundle:Accueil:accueil.html.twig', array('texte' => $texte, 'formulaire' => $form->createView(),
                    'majExterne' => $majExterne, 'majInterne' => $majInterne, 'majMarketing' => $majMarketing, 'majSI' => $majSI,
                    'majAQ' => $majAQ, 'majRH' => $majRH, 'posteAPourvoir' => $annoncesPoste,
                    'nominationOrganisation' => $annoncesNomination, 'nombreVues' => $nombreVues));
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

//    public function setAnnoncesAction(Request $request, $categorie) {
//
//        $em = $this->getDoctrine()->getManager();
//
//        $annonces = $em->getRepository('NoxIntranetAccueilBundle:Annonces')->findByCategorie($categorie);
//
//        $formSuppressionAnnonce = $this->get('form.factory')->createNamedBuilder('formSuppressionAnnonce', 'form', $annonces)
//                ->add('Message', EntityType::class, array(
//                    'class' => 'NoxIntranetAccueilBundle:Annonces',
//                    'query_builder' => function (EntityRepository $er) use ($categorie) {
//                        return $er->createQueryBuilder('u')
//                                ->where("u.categorie = '" . $categorie . "'");
////                                ->orderBy('u.nom', 'ASC');
//                    },
//                    'choice_label' => 'Message',
//                ))
//                ->add('Supprimer', 'submit')
//                ->getForm();
//
//        $newAnnonce = new Annonces();
//
//        $formAjoutAnnonce = $this->get('form.factory')->createNamedBuilder('formAjoutAnnonce', 'form', $newAnnonce)
//                ->add('Message', TextareaType::class)
//                ->add('Ajouter', 'submit')
//                ->getForm();
//
//        if ($request->request->has('formSuppressionAnnonce')) {
//
//            $formSuppressionAnnonce->handleRequest($request);
//
//            if ($formSuppressionAnnonce->isValid()) {
//
//                $em->remove($formSuppressionAnnonce['Message']->getData());
//                $em->flush();
//
//                $request->getSession()->getFlashBag()->add('notice', 'L\'annonce a été supprimé.');
//
//                return $this->redirectToRoute('nox_intranet_edition_annonces', array('categorie' => $categorie));
//            }
//        }
//
//        if ($request->request->has('formAjoutAnnonce')) {
//
//            $formAjoutAnnonce->handleRequest($request);
//
//            if ($formAjoutAnnonce->isValid()) {
//
//                $newAnnonce->setCategorie($categorie);
//                $newAnnonce->setMessage($formAjoutAnnonce['Message']->getData());
//
//                $em->persist($newAnnonce);
//                $em->flush();
//
//                $request->getSession()->getFlashBag()->add('notice', 'L\'annonce a été créé.');
//
//                return $this->redirectToRoute('nox_intranet_edition_annonces', array('categorie' => $categorie));
//            }
//        }
//
//        return $this->render('NoxIntranetAccueilBundle:EditionAnnonces:editionAnnonces.html.twig', array('categorie' => $categorie, 'formSuppressionAnnonce' => $formSuppressionAnnonce->createView(), 'formAjoutAnnonce' => $formAjoutAnnonce->createView()));
//    }
}
