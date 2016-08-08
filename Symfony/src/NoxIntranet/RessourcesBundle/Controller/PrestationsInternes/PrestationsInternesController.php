<?php

namespace NoxIntranet\RessourcesBundle\Controller\PrestationsInternes;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\RessourcesBundle\Entity\RecherchePrestation;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

class PrestationsInternesController extends Controller {

    // Formulaire de recherche de préstation interne.
    public function newPrestationSearchAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        // On initialise une nouvelle demande.
        $newSearch = new RecherchePrestation();

        // Génération du formulaire d'information de demande.
        $formNewSearch = $this->get('form.factory')->createNamedBuilder('formNewSearch', 'form', $newSearch)
                ->add('LieuOperation', TextType::class)
                ->add('LieuPrestation', TextType::class)
                ->add('Descriptif', TextareaType::class)
                ->add('Deplacement', TextType::class)
                ->add('DateDemarrage', DateType::class)
                ->add('DateRendu', DateType::class)
                ->add('Livrables', TextareaType::class)
                ->add('VolumeSousTraitance', TextType::class)
                ->add('EmailDA', TextType::class)
                ->add('Valider', SubmitType::class)
                ->getForm();

        // Traitement du formulaire;
        $formNewSearch->handleRequest($request);

        // Si le formulaire est valide.
        if ($formNewSearch->isValid() && floatval($formNewSearch->getData()->getVolumeSousTraitance()) !== 0.0) {

            // On convertie la chaine de volume de sous traitance en float.
            $newSearch->setVolumeSousTraitance(floatval($formNewSearch->getData()->getVolumeSousTraitance()));

            // On affiche un message de confirmation.
            $request->getSession()->getFlashBag()->add('notice', 'La demande a été enregistrée avec succès.');

            // On sauvegarde la demande en base de donnée.
            $em->persist($newSearch);
            $em->flush();



            // On redirige vers la création de demande.
            return $this->redirectToRoute('nox_intranet_prestation_search');
        }
        // Si le formulaire comporte des erreurs.
        else {
            // On affiche un message d'erreur.
            $request->getSession()->getFlashBag()->add('noticeErreur', 'La valeur du volume de sous traitance doit être un chiffre !');
        }

        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:newprestationsinternessearch.html.twig', array('formNewSearch' => $formNewSearch->createView()));
    }

    public function sendMailToDA($IDDemande) {
        $message = \Swift_Message::newInstance()
                ->setSubject('Hello Email')
                ->setFrom('send@example.com')
                ->setTo('recipient@example.com')
                ->setBody(
                $this->renderView(
                        'Emails/registration.html.twig', array('name' => $name)
                ), 'text/html'
        );

        $this->get('mailer')->send($message);
    }

}
