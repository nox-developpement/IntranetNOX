<?php

namespace NoxIntranet\RessourcesBundle\Controller\PrestationsInternes;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\RessourcesBundle\Entity\RecherchePrestation;
use NoxIntranet\RessourcesBundle\Entity\PropositionPrestation;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
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
    private function sendMailToDA1($IDDemande) {

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

    // Génére un formulaire de validation/refus pour le DA1 et traite la réponse.
    public function validationDA1Action(Request $request, $cleDemande) {

        // On récupére l'entitée de la demande
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande);

        // Si la demande n'exsite pas ou a déjà été traitée.
        if (empty($demande) || $demande->getStatus() !== "Chargé d'affaire") {
            $request->getSession()->getFlashBag()->add('noticeErreur', "La demande n'existe pas ou a déjà été traitée."); // On affiche un message d'erreur.
            return $this->redirectToRoute('nox_intranet_accueil'); // On redirige vers l'accueil.
        }

        // On récupére l'entitée du demandeur.
        $demandeur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($demande->getDemandeur());

//        // Retourne un tableau contenant les directeurs d'agence.
//        $UserHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll();
//        $DAs = array();
//        foreach ($UserHierarchy as $DA) {
//            $DAs[$DA->getDA()] = $DA->getDA();
//        }
//        array_unique($DAs); // Supprime les doublons.
//        asort($DAs); // Trie le tableau.
//        
        // Retourne un tableau contenant les directeurs d'agence.
        $DAs = array();
        $file_handle = fopen($this->get('kernel')->getRootDir() . '/../web/ListeDA/ListeDA.txt', "r"); // On ouvre le fichier contenant la liste des DA.
        while (!feof($file_handle)) {
            $line = fgets($file_handle);
            $DA = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername(trim($line)); // On récupére l'utilisateur correspondant à l'username de la ligne en cours de lecture si il existe.
            if (!empty($DA)) {
                $DAs[$DA->getUsername()] = $DA->getFirstname() . ' ' . $DA->getLastname(); // On ajoute le DA au tableau.
            }
        }
        fclose($file_handle);
        // Trie le tableau.
        asort($DAs);

        // Retourne les attributs des choix de ChoixDA2.
        function choixDA2($val, $DAs) {
            return array('title' => $DAs[$val]);
        }

        // Retourne les attributs des choix de SelectionDA2.
        function selectionDA2($val, $DAs) {
            return array('title' => $DAs[$val], 'style' => 'display: none;');
        }

        $formValidationRefus = $this->get('form.factory')->createNamedBuilder('formValidationRefus', 'form')
                ->add('ValidationRefus', ChoiceType::class, array(
                    'choices' => array('Validation' => 'Accepter la demande', 'Refus' => 'Refuser la demande'),
                    'expanded' => true,
                    'data' => 'Validation'
                ))
                ->add('RaisonRefus', TextareaType::class, array(
                    'attr' => array(),
                    'required' => false
                ))
                ->add('ChoixDA2', ChoiceType::class, array(
                    'choices' => $DAs,
                    'multiple' => true,
                    'required' => false,
                    'choice_attr' => function($val) use ($DAs) {
                        return choixDA2($val, $DAs);
                    })
                )
                ->add('SelectionDA2', ChoiceType::class, array(
                    'choices' => $DAs,
                    'multiple' => true,
                    'choice_attr' => function($val) use ($DAs) {
                        return selectionDA2($val, $DAs);
                    }))
                ->add('Validator', SubmitType::class, array(
                    'attr' => array(
                        'style' => 'display: none'
                    )
                ))
                ->add('Valider', ButtonType::class)
                ->getForm();

        // Traitement du formulaire.
        $formValidationRefus->handleRequest($request);
        if ($formValidationRefus->isValid()) {
            // Si le DA1 valide la demande.
            if ($formValidationRefus->get('ValidationRefus')->getData() === 'Validation') {
                // On attribut le DA1 à la demande.
                $demande->setDA1($this->get('security.context')->getToken()->getUser()->getUsername());
                // On change le status de la demande.
                $demande->setStatus('Validation DA1');

                // Pour chaque DA2 séléctionné.
                foreach ($formValidationRefus->get('SelectionDA2')->getData() as $DA2) {
                    // On génére une nouvelle proposition de prestation.
                    $newProposition = new PropositionPrestation();
                    $newProposition->setDA2($DA2);
                    $newProposition->setCleDemande($cleDemande);
                    $em->persist($newProposition);

                    $this->sendMailToDA2($demande->getId(), $DA2); // On envoi un mail de demande de proposition au DA2.
                }
                $em->flush(); // On sauvegarde les propositions en base de données.

                $request->getSession()->getFlashBag()->add('notice', "La demande a été transmise au(x) directeur(s) d'agence(s) séléctionné(s)."); // On affiche un message de confirmation d'envoi de la demande.
                return $this->redirectToRoute('nox_intranet_accueil'); // On redirige vers l'accueil.
            }
            // Si le DA1 ne valide pas la demande.
            else {
                // On notifie le demandeur du refus de sa demande.
                $this->sendMailRefusDemande($demande->getId(), $this->get('security.context')->getToken()->getUser(), $formValidationRefus->get('RaisonRefus')->getData());

                // On supprime la demande de la base de donnée.
                $em->remove($demande);
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'La demande a été refusée.'); // On affiche un message de confirmation de refus de la demande.
                return $this->redirectToRoute('nox_intranet_accueil'); // On redirige vers l'accueil.
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:validationD1.html.twig', array('demande' => $demande, 'demandeur' => $demandeur, 'formValidationRefus' => $formValidationRefus->createView()));
    }

    // Envoie un email au DA2 dont l'email est passé en paramètre.
    private function sendMailToDA2($IDDemande, $DA2) {
        // On récupére les entitées de la demande et du DA1.
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->find($IDDemande);
        $DA1 = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($demande->getDA1());

        // On génére l'adresse email du DA2.
        $mailDA2 = $DA2 . '@groupe-nox.com';

        // On prépare le corps du message.
        $message = \Swift_Message::newInstance()
                ->setSubject('Demande de prestation interne')
                ->setFrom('noreply@groupe-nox.com')
                ->setTo($mailDA2)
                ->setBody(
                $this->renderView(
                        'Emails/PrestationInterne/sendMailToDA2.html.twig', array('demande' => $demande, 'DA1' => $DA1)
                ), 'text/html'
        );

        // On envoie le message.
        $this->get('mailer')->send($message);
    }

    // Envoi un mail de refus au demandeur correspondant à la demande dont l'ID est passé en paramètre.
    private function sendMailRefusDemande($IDDemande, $DA1, $raison) {
        // On récupére l'entité de la demande.
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->find($IDDemande);

        // On génére l'adresse email du demandeur.
        $mailDemandeur = $demande->getDemandeur() . '@groupe-nox.com';

        // On prépare le corps du message.
        $message = \Swift_Message::newInstance()
                ->setSubject('Refus de la demande de prestation interne')
                ->setFrom('noreply@groupe-nox.com')
                ->setTo($mailDemandeur)
                ->setBody(
                $this->renderView(
                        'Emails/PrestationInterne/sendRefusToDemandeur.html.twig', array('demande' => $demande, 'DA1' => $DA1, 'raison' => $raison)
                ), 'text/html'
        );

        // On envoie le message.
        $this->get('mailer')->send($message);
    }

    public function DA2answer($cleDemande, $reponse, Request $request) {

        // On récupére l'entitée de la demande au DA2.
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findOneBy(array('cleDemande' => $cleDemande, 'DA2' => $this->get('security.context')->getToken()->getUser()->getUsername()));

        // Si la demande n'existe pas ou si elle a déjà été traitée.
        if (empty($demande) || $demande->getStatus() !== 'Attente validation DA2') {
            $request->getSession()->getFlashBag()->add('noticeErreur', "La demande n'existe pas ou a déjà été traitée."); // On affiche un message d'erreur.
            return $this->redirectToRoute('nox_intranet_accueil'); // On redirige vers l'accueil.
        }

        // Si la demande est accepté par le DA2.
        if ($reponse === 'valider') {
            
        }

        // Si la demande est refusé par le DA2.
        if ($reponse === 'refuser') {
            $em->remove($demande); // On supprime la demande au DA2
            $request->getSession()->getFlashBag()->add('notice', "Vous avez décliné la demande."); // On affiche un message de confirmation de la déclinaison de la demande.
            $this->redirectToRoute('nox_intranet_accueil'); // On redirige vers l'accueil.
        }
    }

}
