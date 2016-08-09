<?php

namespace NoxIntranet\RessourcesBundle\Controller\PrestationsInternes;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\RessourcesBundle\Entity\RecherchePrestation;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
        if ($formNewSearch->isValid()) {
            // Si la valeur de volume de sous traitance n'est pas un float.
            if (floatval($formNewSearch->getData()->getVolumeSousTraitance()) === 0.0) {
                // On affiche un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', 'La valeur du volume de sous traitance doit être un chiffre !');
            }
            // Si l'email n'est pas valide.
            elseif (!filter_var($formNewSearch->getData()->getEmailDA(), FILTER_VALIDATE_EMAIL)) {
                // On affiche un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', "L'email fourni n'est pas valide !");
            }
            // Si la valeur de volume de sous traitance est bien un float et l'email est valide.
            else {
                // On convertie la chaine de volume de sous traitance en float.
                $newSearch->setVolumeSousTraitance(floatval($formNewSearch->getData()->getVolumeSousTraitance()));

                // On attribut le nom de l'utilisateur courant comme demandeur.
                $newSearch->setDemandeur($this->get('security.token_storage')->getToken()->getUser()->getUsername());

                // On génére aléatoirement une clé et on l'attritbut à la demande.
                $cleDemande = md5(uniqid(rand(), true));
                while (!empty($em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande))) {
                    $cleDemande = md5(uniqid(rand(), true));
                }
                $newSearch->setCleDemande($cleDemande);

                // On affiche un message de confirmation.
                $request->getSession()->getFlashBag()->add('notice', 'La demande a été enregistrée avec succès.');

                // On sauvegarde la demande en base de donnée.
                $em->persist($newSearch);
                $em->flush();

                // On envoi la demande au DA.
                $this->sendMailToDA1($newSearch->getId());

                // On redirige vers la création de demande.
                return $this->redirectToRoute('nox_intranet_prestation_search');
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:newprestationsinternessearch.html.twig', array('formNewSearch' => $formNewSearch->createView()));
    }

    // Envoie un email au DA associé à la demande dont l'ID est passé en paramêtre.
    public function sendMailToDA1($IDDemande) {

        // On récupére les entitées de la demande et du demandeur.
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->find($IDDemande);
        $demandeur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($demande->getDemandeur());

        // On prépare le corps du message.
        $message = \Swift_Message::newInstance()
                ->setSubject('Demande de prestation interne')
                ->setFrom('noreply@groupe-nox.com')
                ->setTo($demande->getEmailDA())
                ->setBody(
                $this->renderView(
                        'Emails/PrestationInterne/sendMailToDA1.html.twig', array('demande' => $demande, 'demandeur' => $demandeur)
                ), 'text/html'
        );

        // On envoie le message.
        $this->get('mailer')->send($message);
    }

    public function validationDA1Action($cleDemande) {

        // On récupére les entitées de la demande et du demandeur.
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande);
        $demandeur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($demande->getDemandeur());

        $DAs = $em->getRepository('NoxIntranet');

        $formValidationRefus = $this->get('form.factory')->createNamedBuilder('formValidationRefus', 'form')
                ->add('ValidationRefus', ChoiceType::class, array(
                    'choices' => array('Validation' => 'Accepter la demande', 'Refus' => 'Refuser la demande'),
                    'expanded' => true
                ))
                ->add('RaisonRefus', TextareaType::class)
                ->add('ChoixDA2', ChoiceType::class)
                ->getForm();

        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:validationD1.html.twig', array('demande' => $demande, 'demandeur' => $demandeur, 'formValidationRefus' => $formValidationRefus->createView()));
    }

}
