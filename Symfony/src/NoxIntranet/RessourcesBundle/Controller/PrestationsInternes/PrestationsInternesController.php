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
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NoxIntranet\RessourcesBundle\Entity\Proposition_Echanges;

class PrestationsInternesController extends Controller {

    public function prestationsInternesAccueilAction() {
        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesMenu.html.twig');
    }

    // Formulaire de recherche de préstation interne.
    public function newPrestationSearchAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        // On initialise une nouvelle demande.
        $newSearch = new RecherchePrestation();

        // Génération du formulaire d'information de demande.
        $formNewSearch = $this->get('form.factory')->createNamedBuilder('formNewSearch', 'form', $newSearch)
                ->add('Libelle', TextType::class)
                ->add('LieuOperation', TextType::class)
                ->add('LieuPrestation', TextType::class)
                ->add('Descriptif', HiddenType::class)
                ->add('Deplacement', TextType::class)
                ->add('DateDemarrage', DateType::class, array(
                    'years' => range(date('Y'), date('Y') + 4)
                ))
                ->add('DateRendu', DateType::class, array(
                    'years' => range(date('Y'), date('Y') + 4)
                ))
                ->add('Livrables', HiddenType::class)
                ->add('VolumeSousTraitance', TextType::class)
                ->add('EmailDA', TextType::class)
                ->add('Valider', SubmitType::class)
                ->getForm();

        // Traitement du formulaire;
        $formNewSearch->handleRequest($request);

        // Si le formulaire est valide.
        if ($formNewSearch->isValid()) {
            // Si le libelle saisi est déjà utilisé.
            if (!empty($em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findByLibelle($formNewSearch->getData()->getLibelle()))) {
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Le libelle indiqué est déjà utilisé pour une autre demande de prestation.');
            }
            // Si les dates renseignées sont inférieur à la date du jour.
            elseif ($formNewSearch->getData()->getDateDemarrage()->getTimestamp() < mktime('0', '0', '0', date('m'), date('d'), date('Y')) || $formNewSearch->getData()->getDateRendu()->getTimestamp() < mktime('0', '0', '0', date('m'), date('d'), date('Y'))) {
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Veuillez indiquer une date supérieure ou égale à la date courante.');
            }
            // Si la valeur de volume de sous traitance n'est pas un float.
            elseif (floatval($formNewSearch->getData()->getVolumeSousTraitance()) === 0.0) {
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

                // On récupére l'entité du DA1 en fonction de l'adresse email passée en parametre et on l'attribut à la demande.
                $DA1 = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername(trim(str_replace('@groupe-nox.com', '', $formNewSearch->getData()->getEmailDA())));
                $newSearch->setDA1($DA1->getUsername());

                // On affiche un message de confirmation.
                $request->getSession()->getFlashBag()->add('notice', 'La demande a été enregistrée avec succès.');

                // On sauvegarde la demande en base de donnée.
                $em->persist($newSearch);
                $em->flush();

                // On envoi la demande au DA.
                $this->sendMailToDA1($newSearch->getId());

                // On redirige vers le résumé de la demande.
                return $this->redirectToRoute('nox_intranet_demande_prestation_summary', array('cleDemande' => $newSearch->getCleDemande()));
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

        $DAs = array(); // Initialisation du tableau des DA2.
        // Pour chaque entitié de hiérarchy utilisateurs.
        foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll() as $user) {
            // Recherche l'entité utilisateur correspondante au DA de la hiérachie.
            $userEntity = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => explode(' ', $user->getDA())[0], 'lastname' => explode(' ', $user->getDA())[1]));
            // Si l'entité utilisateur existe.
            if (!empty($userEntity)) {
                $DAs[$userEntity->getUsername()] = $userEntity->getFirstname() . ' ' . $userEntity->getLastname(); // On ajoute le DA au tableau.
            }
        }
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
                // On redirige vers le résumé de la demande.
                return $this->redirectToRoute('nox_intranet_demande_prestation_summary', array('cleDemande' => $cleDemande));
            }
            // Si le DA1 ne valide pas la demande.
            else {
                // On notifie le demandeur du refus de sa demande.
                $this->sendMailRefusDemande($demande->getId(), $this->get('security.context')->getToken()->getUser(), $formValidationRefus->get('RaisonRefus')->getData());

                // On change le status de la demande.
                $demande->setStatus('Refus DA1');
                $em->flush(); // On sauvegarde la demande en base de données.

                $request->getSession()->getFlashBag()->add('notice', 'La demande a été refusée.'); // On affiche un message de confirmation de refus de la demande.
                // On redirige vers le résumé de la demande.
                return $this->redirectToRoute('nox_intranet_demande_prestation_summary', array('cleDemande' => $cleDemande));
            }
        }

        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:validationD1.html.twig', array('demande' => $demande, 'demandeur' => $demandeur, 'formValidationRefus' => $formValidationRefus->createView()));
    }

    // Envoie un email au DA2 dont l'email est passé en paramètre.
    private function sendMailToDA2($IDDemande, $DA2) {
        // On récupére les entitées de la demande et du DA1.
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->find($IDDemande);
        $demandeur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($demande->getDemandeur());
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
                        'Emails/PrestationInterne/sendMailToDA2.html.twig', array('demande' => $demande, 'DA1' => $DA1, 'demandeur' => $demandeur)
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
        $demandeur = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy($demande->getDemandeur());

        // On génére l'adresse email du demandeur.
        $mailDemandeur = $demande->getDemandeur() . '@groupe-nox.com';

        // On prépare le corps du message.
        $message = \Swift_Message::newInstance()
                ->setSubject('Refus de la demande de prestation interne')
                ->setFrom('noreply@groupe-nox.com')
                ->setTo($mailDemandeur)
                ->setBody(
                $this->renderView(
                        'Emails/PrestationInterne/sendRefusToDemandeur.html.twig', array('demande' => $demande, 'DA1' => $DA1, 'raison' => $raison, 'demandeur' => $demandeur)
                ), 'text/html'
        );

        // On envoie le message.
        $this->get('mailer')->send($message);
    }

    // Traite la réponse du DA2 et envoie un mail au DA1.
    public function DA2answerAction($cleDemande, $reponse, Request $request) {

        // On récupére l'entitée de la demande au DA2, de la recherce de prestation et le DA2.
        $em = $this->getDoctrine()->getManager();
        $DA2 = $this->get('security.context')->getToken()->getUser();
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findOneBy(array('cleDemande' => $cleDemande, 'dA2' => $DA2->getUsername()));
        $recherchePrestation = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande);

        // Si la demande n'existe pas ou si elle a déjà été traitée.
        if (empty($demande) || $demande->getStatus() !== 'Attente validation DA2') {
            $request->getSession()->getFlashBag()->add('noticeErreur', "La demande n'existe pas ou a déjà été traitée."); // On affiche un message d'erreur.
            return $this->redirectToRoute('nox_intranet_demande_prestation_reporting'); // On redirige vers l'accueil.
        }

        // On récupére l'entité du demandeur.
        $demandeur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($recherchePrestation->getDemandeur());

        // Si la demande est accepté par le DA2.
        if ($reponse === 'valider') {
            $demande->setStatus('Demande acceptée');
            $em->flush();

            // On vérifie s'il existe encore des demandes sans réponses des DA2.
            $this->checkUnansweredDA2Responses($cleDemande);

            // On prépare le corps du message.
            $message = \Swift_Message::newInstance()
                    ->setSubject('Demande acceptée')
                    ->setFrom('noreply@groupe-nox.com')
                    ->setTo($recherchePrestation->getEMailDA())
                    ->setBody(
                    $this->renderView(
                            'Emails/PrestationInterne/sendValidationDA2ToDA1.html.twig', array('demande' => $recherchePrestation, 'DA2' => $DA2, 'demandeur' => $demandeur)
                    ), 'text/html'
            );

            // On envoie le message de confirmation.
            $this->get('mailer')->send($message);

            $request->getSession()->getFlashBag()->add('notice', "Vous avez accepté la demande."); // On affiche un message de confirmation de la déclinaison de la demande.
            // On redirige vers le résumé de la demande.
            return $this->redirectToRoute('nox_intranet_demande_prestation_summary', array('cleDemande' => $cleDemande));
        }

        // Si la demande est refusé par le DA2.
        if ($reponse === 'refuser') {
            $demande->setStatus('Demande refusée');
            //$em->remove($demande); // On supprime la demande au DA2
            $em->flush();

            // On vérifie s'il existe encore des demandes sans réponses des DA2.
            $this->checkUnansweredDA2Responses($cleDemande);

            // On prépare le corps du message.
            $message = \Swift_Message::newInstance()
                    ->setSubject('Demande refusée')
                    ->setFrom('noreply@groupe-nox.com')
                    ->setTo($recherchePrestation->getEMailDA())
                    ->setBody(
                    $this->renderView(
                            'Emails/PrestationInterne/sendRefusDA2ToDA1.html.twig', array('demande' => $recherchePrestation, 'DA2' => $DA2, 'demandeur' => $demandeur)
                    ), 'text/html'
            );

            // On envoie le message de confirmation.
            $this->get('mailer')->send($message);

            $request->getSession()->getFlashBag()->add('notice', "Vous avez décliné la demande."); // On affiche un message de confirmation de la déclinaison de la demande.
            // On redirige vers le résumé de la demande.
            return $this->redirectToRoute('nox_intranet_demande_prestation_summary', array('cleDemande' => $cleDemande));
        }
    }

    // Vérifie si tous les DA2 ont répondu à la demande et change le status de la demande si c'est le cas.
    private function checkUnansweredDA2Responses($cleDemande) {
        $em = $this->getDoctrine()->getManager();
        $demandes = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findBy(array('cleDemande' => $cleDemande, 'status' => 'Attente validation DA2')); // On récupére les propositions en attente de validation.
        $demandesAccepte = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findBy(array('cleDemande' => $cleDemande, 'status' => 'Demande acceptée')); // On récupére les propositions qui on était accepté par les DA2.
        $recherchePrestation = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande); // On récupére la demande de préstation.
        // Si il n'y pas de demande de proposition en attente de validation ni de propositions validées.
        if (empty($demandes) && empty($demandesAccepte)) {
            $recherchePrestation->setStatus('Réponses DA2 refus');
        }
        // Si il n'y pas de demande de proposition en attente.
        elseif (empty($demandes)) {
            $recherchePrestation->setStatus('Réponses DA2');
        }

        $em->flush(); // On sauvegarde la demande de prestation en base de données.

        $this->ajaxCheckDemandeStatus($cleDemande);
    }

    // Affiche la liste des proposition faites par les DA2 et permet de les valider.
    public function answerDA2PropositionAction(Request $request, $cleDemande) {

        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande);

        // Si la demande n'existe pas.
        if (empty($demande)) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "La demande n'existe pas."); // On affiche un message d'erreur.
            return $this->redirectToRoute('nox_intranet_accueil'); // On redirige vers l'accueil.
        }

        // Si l'utilisateur n'est pas le DA1 associé à la demande.
        if ($demande->getDA1() !== $this->container->get('security.context')->getToken()->getUser()->getUsername()) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Vous n'avez pas l'autorisation de traiter cette demande."); // On affiche un message d'erreur.
            return $this->redirectToRoute('nox_intranet_accueil'); // On redirige vers l'accueil.
        }

        // On récupére les proposition correspondantes à la clé passé en parametre et dont le status est compatible. 
        $propositions = $em->createQueryBuilder()
                ->select('a')
                ->from('NoxIntranetRessourcesBundle:PropositionPrestation', 'a')
                ->where('a.cleDemande = :cleDemande')
                ->andWhere("a.status = 'Demande acceptée' OR a.status = 'Validé par le DA1' OR a.status = 'Refusé par le DA1'")
                ->setParameter('cleDemande', $cleDemande)
                ->getQuery()
                ->getResult();

        // On range les DA2 dans un tableau.
        $DA2 = array();
        foreach ($propositions as $proposition) {
            $DA2[$proposition->getDA2()] = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($proposition->getDA2());
        }

        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:answerDA2Proposition.html.twig', array('propositions' => $propositions, 'DA2' => $DA2, 'cleDemande' => $cleDemande));
    }

    // Modifie les status des propositions si besoin.
    private function ajaxCheckDemandeStatus($cleDemande) {
        $em = $this->getDoctrine()->getManager();
        $propositionAttenteValidationDA2 = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findBy(array('cleDemande' => $cleDemande, 'status' => 'Attente validation DA2'));
        $propositionValidationDA2 = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findBy(array('cleDemande' => $cleDemande, 'status' => 'Demande acceptée'));
        $propositionAccepteDA1 = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findBy(array('cleDemande' => $cleDemande, 'status' => 'Validé par le DA1'));
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande);

        if (empty($propositionAttenteValidationDA2) && empty($propositionValidationDA2) && !empty($propositionAccepteDA1)) {
            $demande->setStatus('Propositions acceptée DA1');
        } elseif (empty($propositionAttenteValidationDA2) && empty($propositionValidationDA2) && empty($propositionAccepteDA1)) {
            $demande->setStatus('Propositions refusée DA1');
        }

        $em->flush();
    }

    // Affiche un tableau affichant le status des demandes.
    public function prestationsInternesReportingAction(Request $request, $page, $trieStatus, $orderTime) {

        $em = $this->getDoctrine()->getManager();

        $DA = array();
        foreach ($em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findAll() as $user) {
            $userEntity = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('firstname' => explode(' ', $user->getDA())[0], 'lastname' => explode(' ', $user->getDA())[1]));
            if (!empty($userEntity)) {
                $DA[$userEntity->getUsername()] = $userEntity->getUsername();
            }
        }

        if (!in_array($this->container->get('security.context')->getToken()->getUser()->getUsername(), $DA)) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Seul les directeurs d'agence peuvent accéder à cette section.");
            return $this->redirectToRoute('nox_intranet_prestations_internes');
        }

        // On récupéra la valeur de 'search'.
        $search = $request->get('search');

        // Génération du formulaire de recherche de demande par libellé.
        $formSearch = $this->createFormBuilder()
                ->add('searchText', SearchType::class, array(
                    'data' => $search,
                    'required' => false
                ))
                ->add('searchButton', SubmitType::class)
                ->add('resetButton', SubmitType::class)
                ->getForm();
        $formSearch->handleRequest($request);

        // Traitement du formlaire de recherche.
        if ($formSearch->isValid()) {
            if ($formSearch->get('searchButton')->isClicked()) {
                return $this->redirectToRoute('nox_intranet_demande_prestation_reporting', array('page' => $page, 'orderTime' => $orderTime, 'search' => $formSearch->get('searchText')->getData()));
            } elseif ($formSearch->get('resetButton')->isClicked()) {
                return $this->redirectToRoute('nox_intranet_demande_prestation_reporting', array('orderTime' => $orderTime));
            }
        }

        // On récupére les entités des demandes.       
        // Si on cherche une demande spécifique.
        if ($search !== '') {
            $demandes = $em->createQueryBuilder()
                    ->select('u')
                    ->from('NoxIntranetRessourcesBundle:RecherchePrestation', 'u')
                    ->where('u.libelle LIKE :search')
                    ->orderBy('u.dateCreation', $orderTime)
                    ->setParameters(array('search' => '%' . $search . '%'))
                    ->getQuery()
                    ->getResult();
        }
        // Si on ne recherche pas de demande spécifique.
        else {
            $demandes = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findBy(array(), array('dateCreation' => $orderTime));
        }

        // On génére un tableau associant les entités des utilisateurs avec leurs usernames.
        $users = array();
        foreach ($em->getRepository('NoxIntranetUserBundle:User')->findAll() as $user) {
            $users[$user->getUsername()] = $user;
        }

        // On génére un tableau contenant les status explicité et leur couleur associée.
        $status = array(
            "Chargé d'affaire" => array('message' => "Demande effectuée par le chargé d'affaire, en attente de réponse du DA émetteur", 'color' => 'orange', 'status' => 'process'),
            'Validation DA1' => array('message' => 'Demande validée par le DA émetteur, en attente de réponse des DA destinataire', 'color' => 'orange', 'status' => 'process'),
            'Refus DA1' => array('message' => 'Demande refusée par le DA émetteur', 'color' => 'red', 'status' => 'fail'),
            'Attente validation DA2' => array('message' => 'En attente de la réponse du DA destinataire', 'color' => 'orange', 'status' => 'process'),
            'Réponses DA2' => array('message' => 'Tous les DA destinataire ont répondus, en attente de réponses du DA émetteur aux propositions', 'color' => 'orange', 'status' => 'process'),
            'Demande acceptée' => array('message' => 'Le DA destinataire a accepté la demande', 'color' => 'orange', 'status' => 'process'),
            'Demande refusée' => array('message' => 'Le DA destinataire a refusée la demande', 'color' => 'red', 'status' => 'fail'),
            'Réponses DA2 refus' => array('message' => 'Tous les DA destinataire ont refusé de répondre à la demande', 'color' => 'red', 'status' => 'fail'),
            'Validé par le DA1' => array('message' => 'Proposition validée par le DA émetteur', 'color' => 'LimeGreen', 'status' => 'success'),
            'Refusé par le DA1' => array('message' => 'Proposition refusée par le DA émetteur', 'color' => 'red', 'status' => 'fail'),
            'Propositions acceptée DA1' => array('message' => 'Une ou plusieurs proposition(s) a/ont été acceptée(s) par le DA émetteur', 'color' => 'LimeGreen', 'status' => 'success'),
            'Propositions refusée DA1' => array('message' => "Aucune proposition n'a été retenue par le DA émetteur", 'color' => 'red', 'status' => 'fail')
        );

        // On récupère les propositions et on les place dans un tableau avec pour clé leur valeur de cleDemande.
        $propositions = array();
        foreach ($em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findAll() as $proposition) {
            $propositions[$proposition->getCleDemande()][$proposition->getDA2()] = $proposition;
        }

        if ($trieStatus !== 'tous') {
            foreach ($demandes as $key => $demande) {
                if ($status[$demande->getStatus()]['status'] !== $trieStatus) {
                    unset($demandes[$key]);
                }
            }
        }

        $demandes10 = array_chunk($demandes, 10); // On découpe le tableau des demandes en sous-tableau pour mettre en plage une pagination.

        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesReporting.html.twig', array(
                    'demandes' => $demandes10, 'users' => $users, 'status' => $status, 'propositions' => $propositions, 'page' => $page, 'trieStatus' => $trieStatus,
                    'orderTime' => $orderTime, 'search' => $search, 'formSearch' => $formSearch->createView()
        ));
    }

    // Affiche un résumé contant les informations sur la demande est les propositions associées à la clé de demande passée en paramêtre.
    public function demandePrestationSummaryAction(Request $request, $cleDemande) {
        // On récupére les entitées de la demande, du demandeur et des propositions associées.
        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande);
        // Si la demande n'existe pas on affiche une message d'erreur et on redirige vers l'accueil.
        if (empty($demande)) {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Cette demande n'existe pas.");
            return $this->redirectToRoute('nox_intranet_accueil');
        }
        $demandeur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($demande->getDemandeur());
        $propositions = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findByCleDemande($cleDemande);

        // On génére un tableau contenant les status explicité et leur couleur associée.
        $status = array(
            "Chargé d'affaire" => array('message' => "Demande effectuée par le chargé d'affaire, en attente de réponse du DA émetteur", 'color' => 'orange', 'status' => 'process'),
            'Validation DA1' => array('message' => 'Demande validée par le DA émetteur, en attente de réponse des DA destinataire', 'color' => 'orange', 'status' => 'process'),
            'Refus DA1' => array('message' => 'Demande refusée par le DA émetteur', 'color' => 'red', 'status' => 'fail'),
            'Attente validation DA2' => array('message' => 'En attente de la réponse du DA destinataire', 'color' => 'orange', 'status' => 'process'),
            'Réponses DA2' => array('message' => 'Tous les DA destinataire ont répondus, en attente de réponses du DA émetteur aux propositions', 'color' => 'orange', 'status' => 'process'),
            'Demande acceptée' => array('message' => 'Le DA destinataire a accepté la demande', 'color' => 'orange', 'status' => 'process'),
            'Demande refusée' => array('message' => 'Le DA destinataire a refusée la demande', 'color' => 'red', 'status' => 'fail'),
            'Réponses DA2 refus' => array('message' => 'Tous les DA destinataire ont refusé de répondre à la demande', 'color' => 'red', 'status' => 'fail'),
            'Validé par le DA1' => array('message' => 'Proposition validée par le DA émetteur', 'color' => 'LimeGreen', 'status' => 'success'),
            'Refusé par le DA1' => array('message' => 'Proposition refusée par le DA émetteur', 'color' => 'red', 'status' => 'fail'),
            'Propositions acceptée DA1' => array('message' => 'Une ou plusieurs proposition(s) a/ont été acceptée(s) par le DA émetteur', 'color' => 'LimeGreen', 'status' => 'success'),
            'Propositions refusée DA1' => array('message' => "Aucune proposition n'a été retenue par le DA émetteur", 'color' => 'red', 'status' => 'fail')
        );

        // On génére un tableau associant les entités des utilisateurs avec leurs usernames.
        $users = array();
        foreach ($em->getRepository('NoxIntranetUserBundle:User')->findAll() as $user) {
            $users[$user->getUsername()] = $user;
        }

        // On génére un tableau contenant l'username des DA2 associés à la demande.
        $DA2 = array();
        foreach ($propositions as $proposition) {
            $DA2[$proposition->getDA2()] = $proposition->getDA2();
        }

        $redirection = array(
            "Chargé d'affaire" => array('route' => 'nox_intranet_validation_da1', 'message' => 'Vous devez répondre à cette demande, merci de cliquer ici.'),
            'Attente validation DA2' => array('route' => 'nox_intranet_reponse_da2'),
            'Réponses DA2' => array('nox_intranet_gestion_proposition', 'Vous avez des propositions en attente de traitement.'),
        );


        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:demandeSummary.html.twig', array('demande' => $demande, 'demandeur' => $demandeur,
                    'status' => $status, 'propositions' => $propositions, 'users' => $users, 'DA2' => $DA2, 'redirection' => $redirection
        ));
    }

    // Affiche un tableau affichant le status des demandes personelles.
    public function prestationsInternesPersoReportingAction(Request $request, $page, $trieStatus, $orderTime) {
        // On récupéra la valeur de 'search'.
        $search = $request->get('search');

        // Génération du formulaire de recherche de demande par libellé.
        $formSearch = $this->createFormBuilder()
                ->add('searchText', SearchType::class, array(
                    'data' => $search,
                    'required' => false
                ))
                ->add('searchButton', SubmitType::class)
                ->add('resetButton', SubmitType::class)
                ->getForm();
        $formSearch->handleRequest($request);

        // Traitement du formlaire de recherche.
        if ($formSearch->isValid()) {
            if ($formSearch->get('searchButton')->isClicked()) {
                return $this->redirectToRoute('nox_intranet_demande_prestation_perso_reporting', array('page' => $page, 'orderTime' => $orderTime, 'search' => $formSearch->get('searchText')->getData()));
            } elseif ($formSearch->get('resetButton')->isClicked()) {
                return $this->redirectToRoute('nox_intranet_demande_prestation_perso_reporting', array('orderTime' => $orderTime));
            }
        }

        // On récupére les entités des demandes.
        $em = $this->getDoctrine()->getManager();
        // Si on cherche une demande spécifique.
        if ($search !== '') {
            $demandes = $em->createQueryBuilder()
                    ->select('u')
                    ->from('NoxIntranetRessourcesBundle:RecherchePrestation', 'u')
                    ->join('NoxIntranetRessourcesBundle:PropositionPrestation', 'a')
                    ->where('(u.demandeur LIKE :username OR u.DA1 LIKE :username) OR (u.cleDemande = a.cleDemande)')
                    ->andWhere('a.dA2 = :username')
                    ->andWhere('u.libelle LIKE :search')
                    ->orderBy('u.dateCreation', $orderTime)
                    ->setParameters(array('username' => $this->get('security.context')->getToken()->getUser()->getUsername(), 'search' => '%' . $search . '%'))
                    ->getQuery()
                    ->getResult();
        }
        // Si on ne recherche pas de demande spécifique.
        else {
            $demandes = $em->createQueryBuilder()
                    ->select('u')
                    ->from('NoxIntranetRessourcesBundle:RecherchePrestation', 'u')
                    ->join('NoxIntranetRessourcesBundle:PropositionPrestation', 'a')
                    ->where('(u.demandeur LIKE :username OR u.DA1 LIKE :username) OR (u.cleDemande = a.cleDemande)')
                    ->andWhere('a.dA2 = :username')
                    ->orderBy('u.dateCreation', $orderTime)
                    ->setParameters(array('username' => $this->get('security.context')->getToken()->getUser()->getUsername()))
                    ->getQuery()
                    ->getResult();
        }

        // On génére un tableau associant les entités des utilisateurs avec leurs usernames.
        $users = array();
        foreach ($em->getRepository('NoxIntranetUserBundle:User')->findAll() as $user) {
            $users[$user->getUsername()] = $user;
        }

        // On génére un tableau contenant les status explicité et leur couleur associée.
        $status = array(
            "Chargé d'affaire" => array('message' => "Demande effectuée par le chargé d'affaire, en attente de réponse du DA émetteur", 'color' => 'orange', 'status' => 'process'),
            'Validation DA1' => array('message' => 'Demande validée par le DA émetteur, en attente de réponse des DA destinataire', 'color' => 'orange', 'status' => 'process'),
            'Refus DA1' => array('message' => 'Demande refusée par le DA émetteur', 'color' => 'red', 'status' => 'fail'),
            'Attente validation DA2' => array('message' => 'En attente de la réponse du DA destinataire', 'color' => 'orange', 'status' => 'process'),
            'Réponses DA2' => array('message' => 'Tous les DA destinataire ont répondus, en attente de réponses du DA émetteur aux propositions', 'color' => 'orange', 'status' => 'process'),
            'Demande acceptée' => array('message' => 'Le DA destinataire a accepté la demande', 'color' => 'orange', 'status' => 'process'),
            'Demande refusée' => array('message' => 'Le DA destinataire a refusée la demande', 'color' => 'red', 'status' => 'fail'),
            'Réponses DA2 refus' => array('message' => 'Tous les DA destinataire ont refusé de répondre à la demande', 'color' => 'red', 'status' => 'fail'),
            'Validé par le DA1' => array('message' => 'Proposition validée par le DA émetteur', 'color' => 'LimeGreen', 'status' => 'success'),
            'Refusé par le DA1' => array('message' => 'Proposition refusée par le DA émetteur', 'color' => 'red', 'status' => 'fail'),
            'Propositions acceptée DA1' => array('message' => 'Une ou plusieurs proposition(s) a/ont été acceptée(s) par le DA émetteur', 'color' => 'LimeGreen', 'status' => 'success'),
            'Propositions refusée DA1' => array('message' => "Aucune proposition n'a été retenue par le DA émetteur", 'color' => 'red', 'status' => 'fail')
        );

        // On récupère les propositions et on les place dans un tableau avec pour clé leur valeur de cleDemande.
        $propositions = array();
        foreach ($em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findAll() as $proposition) {
            $propositions[$proposition->getCleDemande()][$proposition->getDA2()] = $proposition;
        }

        if ($trieStatus !== 'tous') {
            foreach ($demandes as $key => $demande) {
                if ($status[$demande->getStatus()]['status'] !== $trieStatus) {
                    unset($demandes[$key]);
                }
            }
        }

        $demandes10 = array_chunk($demandes, 10); // On découpe le tableau des demandes en sous-tableau pour mettre en plage une pagination.

        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesPersoReporting.html.twig', array(
                    'demandes' => $demandes10, 'users' => $users, 'status' => $status, 'propositions' => $propositions, 'page' => $page, 'trieStatus' => $trieStatus,
                    'orderTime' => $orderTime, 'search' => $search, 'formSearch' => $formSearch->createView()
        ));
    }

    // Affiche la fenêtre d'échange avec les messages correspondant à la demande et au da2 passé en paramêtre.
    public function propositionEchangesAction($cleDemande, $da2) {
        // On récupére les échanges correspondant au variables de la proposition passé en paramêtre.
        $em = $this->getDoctrine()->getManager();
        $echanges = $em->getRepository('NoxIntranetRessourcesBundle:Proposition_Echanges')->findBy(array('cleDemande' => $cleDemande, 'da2' => $da2), array('postDate' => 'ASC'));

        return $this->render('NoxIntranetRessourcesBundle:PrestationsInternes:propositionEchanges.html.twig', array('cleDemande' => $cleDemande, 'da2' => $da2, 'echanges' => $echanges));
    }

}
