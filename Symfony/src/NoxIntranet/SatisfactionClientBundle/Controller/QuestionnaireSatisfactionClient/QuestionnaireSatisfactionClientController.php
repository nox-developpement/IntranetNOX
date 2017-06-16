<?php

namespace NoxIntranet\SatisfactionClientBundle\Controller\QuestionnaireSatisfactionClient;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\SatisfactionClientBundle\Entity\InfoEnvoiQuestionnaireSatisfactionClient;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\HttpFoundation\Request;
use PDO;

class QuestionnaireSatisfactionClientController extends Controller {

    // Formulaire d'informations pour pouvoir une remplir une fiche d'evaluation des ST
    public function infoEnvoiQuestionnaireSatisfactionClientAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $infoEnvoiQuestionnaireSatisfactionClient = new InfoEnvoiQuestionnaireSatisfactionClient();
        // Génération du formulaire d'information 
        $formInfoEnvoiQuestionnaireSatisfactionClient = $this->get('form.factory')->createNamedBuilder('formInfoEnvoiQuestionnaireSatisfactionClient', 'form', $infoEnvoiQuestionnaireSatisfactionClient)
                ->add('Agence', TextType::class)
                ->add('NumAffaire', TextType::class)
                ->add('IntituleAffaire', TextType::class)
                ->add('EmailCA', TextType::class)
                ->add('Client', TextType::class)
                ->add('EmailClient', TextType::class)
                ->add('Valider', SubmitType::class)
                ->getForm();

        // Traitement du formulaire;
        $formInfoEnvoiQuestionnaireSatisfactionClient->handleRequest($request);

        // Si le formulaire est valide.
        if ($formInfoEnvoiQuestionnaireSatisfactionClient->isValid()) {
            // Si le numéro de l'affaire saisi est déjà utilisé.
            if (!empty($em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEnvoiQuestionnaireSatisfactionClient')->findByNumAffaire($formInfoEnvoiQuestionnaireSatisfactionClient->getData()->getNumAffaire()))) {
                $request->getSession()->getFlashBag()->add('noticeErreur', "Le numéro de l'affaire indiqué a déjà utilisé pour un questionnaire");
            }
            // Si l'email n'est pas valide.
            elseif (!filter_var($formInfoEnvoiQuestionnaireSatisfactionClient->getData()->getEmailCA(), FILTER_VALIDATE_EMAIL) || !filter_var($formInfoEnvoiQuestionnaireSatisfactionClient->getData()->getEmailClient(), FILTER_VALIDATE_EMAIL)) {
                // On affiche un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', "L'email fourni n'est pas valide !");
            }
            // Si l'email est valide.
            else {
                // On attribut l'username de l'utilisateur courant comme émetteur et on déduit son mail.
                $infoEnvoiQuestionnaireSatisfactionClient->setEmetteur($this->get('security.token_storage')->getToken()->getUser()->getUsername());
                $infoEnvoiQuestionnaireSatisfactionClient->setEmailEmetteur($this->get('security.context')->getToken()->getUser()->getUsername() . "@groupe-nox.com");

                // On génére aléatoirement une clé et on l'attribut à la demande.
                $cleEnvoiQuestioSatisfClient = md5(uniqid(rand(), true));
                while (!empty($em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEnvoiQuestionnaireSatisfactionClient')->findOneByCleEnvoiQuestioSatisfClient($cleEnvoiQuestioSatisfClient))) {
                    $cleEnvoiQuestioSatisfClient = md5(uniqid(rand(), true));
                }
                $infoEnvoiQuestionnaireSatisfactionClient->setCleEnvoiQuestioSatisfClient($cleEnvoiQuestioSatisfClient);

                // On récupére l'entité du CA en fonction de l'adresse email passée en parametre et on l'attribut à la demande.
                $CA = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername(trim(str_replace('@groupe-nox.com', '', $formInfoEnvoiQuestionnaireSatisfactionClient->getData()->getEmailCA())));
                $infoEnvoiQuestionnaireSatisfactionClient->setCA($CA->getUsername());

                // On sauvegarde la demande en base de donnée.
                $em->persist($infoEnvoiQuestionnaireSatisfactionClient);
                $em->flush();

                $this->sendQuestionnaireToRemoteDB($infoEnvoiQuestionnaireSatisfactionClient);

                // On envoi un email au client afin qu'il remplisse le questionnaire.
                $this->sendMailToClient($infoEnvoiQuestionnaireSatisfactionClient->getId());
                // On envoi un email au CA pour qu'il soit averti.
                $this->sendMailToCA($infoEnvoiQuestionnaireSatisfactionClient->getId());
                // On envoi un email à l'emetteur qui confirme son envoi.
                $this->sendMailToEmetteur($infoEnvoiQuestionnaireSatisfactionClient->getId());

                // On redirige vers l'accueil et on affiche un message de confirmation.
                $request->getSession()->getFlashBag()->add('notice', "Vos informations ont bien été prises en compte, un mail confirmant l'envoi du questionnaire vous a été envoyé.");
                return $this->redirectToRoute('nox_intranet_accueil');
            }
        }
        return $this->render('NoxIntranetSatisfactionClientBundle:QuestionnaireSatisfactionClient:infoEnvoiQuestionnaireSatisfactionClient.html.twig', array('formInfoEnvoiQuestionnaireSatisfactionClient' => $formInfoEnvoiQuestionnaireSatisfactionClient->createView()));
    }

    // Envoi d'un email pour le client.
    private function sendMailToClient($IDEnvoi) {
        $em = $this->getDoctrine()->getManager();
        $envoi = $em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEnvoiQuestionnaireSatisfactionClient')->find($IDEnvoi);
        // On prépare le corps du message.
        $message = \Swift_Message::newInstance()
                ->setSubject('Questionnaire de satisfaction client')
                ->setFrom(array('noreply@groupe-nox.com' => 'Groupe NOX'))
                ->setTo($envoi->getEmailClient())
                ->setBody(
                $this->renderView(
                        'Emails/QuestionnaireSatisfactionClient/sendMailToClient.html.twig', array('envoi' => $envoi)
                ), 'text/html'
        );
        // On envoi le message.
        $this->get('mailer')->send($message);
    }

    // Envoi un email pour le CA.
    private function sendMailToCA($IDEnvoi) {
        $em = $this->getDoctrine()->getManager();
        $envoi = $em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEnvoiQuestionnaireSatisfactionClient')->find($IDEnvoi);
        $emetteur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($envoi->getEmetteur());
        // On prépare le corps du message.
        $message = \Swift_Message::newInstance()
                ->setSubject('Questionnaire de satisfaction client')
                ->setFrom('noreply@groupe-nox.com')
                ->setTo($envoi->getEmailCA())
                ->setBody(
                $this->renderView(
                        'Emails/QuestionnaireSatisfactionClient/sendMailToCA.html.twig', array('envoi' => $envoi, 'emetteur' => $emetteur)
                ), 'text/html'
        );
        // On envoie le message.
        $this->get('mailer')->send($message);
    }

    // Envoi un email pour l'émetteur.
    private function sendMailToEmetteur($IDEnvoi) {
        $em = $this->getDoctrine()->getManager();
        $envoi = $em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEnvoiQuestionnaireSatisfactionClient')->find($IDEnvoi);
        $emetteur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($envoi->getEmetteur());
        // On prépare le corps du message.
        $message = \Swift_Message::newInstance()
                ->setSubject('Questionnaire de satisfaction client')
                ->setFrom('noreply@groupe-nox.com')
                ->setTo($envoi->getEmailEmetteur())
                ->setBody(
                $this->renderView(
                        'Emails/QuestionnaireSatisfactionClient/sendMailToEmetteur.html.twig', array('envoi' => $envoi, 'emetteur' => $emetteur)
                ), 'text/html'
        );
        // On envoie le message.
        $this->get('mailer')->send($message);
    }

    // Affiche un tableau affichant le status des demandes.
    public function consulterQuestionnaireSatisfactionClientAction(Request $request, $page, $orderTime) {

        $em = $this->getDoctrine()->getManager();

        // On récupéra la valeur de 'search'.
        $search = $request->get('search');
        // Génération du formulaire de recherche de demande par libellé.
        $formSearch = $this->createFormBuilder()
                ->add('searchText', SearchType::class, array('data' => $search, 'required' => false))
                ->add('searchButton', SubmitType::class)
                ->add('resetButton', SubmitType::class)
                ->add('searchDetailedButton', SubmitType::class)
                ->getForm();
        $formSearch->handleRequest($request);

        // Traitement du formlaire de recherche.
        if ($formSearch->isValid()) {
            if ($formSearch->get('searchButton')->isClicked()) {
                return $this->redirectToRoute('nox_intranet_consulter_questionnaire_satisfaction_client', array('page' => $page, 'orderTime' => $orderTime, 'search' => $formSearch->get('searchText')->getData()));
            } elseif ($formSearch->get('resetButton')->isClicked()) {
                return $this->redirectToRoute('nox_intranet_consulter_questionnaire_satisfaction_client', array('orderTime' => $orderTime));
            } elseif ($formSearch->get('searchDetailedButton')->isClicked()) {
                return $this->render('NoxIntranetSatisfactionClientBundle:QuestionnaireSatisfactionClient:rechercheAvanceeControlBoardQuestionnaireSatisfactionClient.html.twig');
            }
        }

        // On récupére les entités des envois.       
        // Si on cherche une demande spécifique.
        if ($search !== '') {
            $envois = $em->createQueryBuilder()
                    ->select('u')
                    ->from('NoxIntranetSatisfactionClientBundle:InfoEnvoiQuestionnaireSatisfactionClient', 'u')
                    ->where('u.numAffaire LIKE :search')
                    ->orderBy('u.dateEnvoi', $orderTime)
                    ->setParameters(array('search' => '%' . $search . '%'))
                    ->getQuery()
                    ->getResult();
        }
        // Si on ne recherche pas de demande spécifique.
        else {
            $envois = $em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEnvoiQuestionnaireSatisfactionClient')->findBy(array(), array('dateEnvoi' => $orderTime));
        }

        // On récupère les questionnaires et on les places dans un tableau avec pour clé leur valeur de CleEnvoiQuestioSatisfClient.
        $questionnairesSatisfactionClient = array();
        foreach ($em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEnvoiQuestionnaireSatisfactionClient')->findAll() as $questionnaireSatisfactionClient) {
            $questionnairesSatisfactionClient[$questionnaireSatisfactionClient->getCleEnvoiQuestioSatisfClient()][$questionnaireSatisfactionClient->getEmetteur()] = $questionnaireSatisfactionClient;
        }

        $envois10 = array_chunk($envois, 10); // On découpe le tableau des envois en sous-tableau pour mettre en place une pagination.

        return $this->render('NoxIntranetSatisfactionClientBundle:QuestionnaireSatisfactionClient:controlBoardQuestionnaireSatisfactionClient.html.twig', array(
                    'envois' => $envois10, 'questionnairesSatisfactionClient' => $questionnairesSatisfactionClient, 'page' => $page,
                    'orderTime' => $orderTime, 'search' => $search, 'formSearch' => $formSearch->createView()));
    }

    // Affiche un résumé contenant les informations sur l'évaluation associées à la clé de l'évaluation passée en paramêtre.
    public function infoQuestionnaireSatisfactionClientSummaryAction($cleEnvoiQuestioSatisfClient) {
        // On récupére les entitées de l'évaluation.
        $em = $this->getDoctrine()->getManager();
        $envoi = $em->getRepository('NoxIntranetSatisfactionClientBundle:InfoEnvoiQuestionnaireSatisfactionClient')->findOneByCleEnvoiQuestioSatisfClient($cleEnvoiQuestioSatisfClient);
        return $this->render('NoxIntranetSatisfactionClientBundle:QuestionnaireSatisfactionClient:infoQuestionnaireSatisfactionClientSummary.html.twig', array('envoi' => $envoi));
    }

    // EN COURS
    public function rechercheAvanceeConsulterQuestionnaireSatisfactionClientAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        // Génération du formulaire de recherche de demande par libellé.
        $formSearchDetailed = $this->createFormBuilder()
                ->add('searchButton', SubmitType::class)
                ->add('validateSearchDetailedButton', SubmitType::class)
                ->getForm();
        $formSearchDetailed->handleRequest($request);

        return $this->render('NoxIntranetSatisfactionBundle:QuestionnaireSatisfactionClient:rechercheAvanceeControlBoardQuestionnaireSatisfactionClient.html.twig', array('formSearchDetailed' => $formSearchDetailed->createView()));
    }

    /**
     * 
     * Crée un nouveau questionnaire dans la base de données du site de questionnaire client.
     * 
     * @param InfoEnvoiQuestionnaireSatisfactionClient $questionnaireSatisfactionClient L'entitée de questionnaire client sur l'intranet.
     */
    public function sendQuestionnaireToRemoteDB($questionnaireSatisfactionClient) {
        // Création de la connection à la base de données
        $db_host = "192.168.35.217";
        $db_name = "intranet";
        $db_user = "intranetadmin";
        $db_pass = "intranet";

        try {
            // Initialisation de la connexion à la base de données.
            $connection = new \PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

            // set the PDO error mode to exception
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Si la connexion échou, affichage d'un message d'erreur.
            echo "Connection failed: " . $e->getMessage();
        }

        // Récupération de la clé.
        $cle = $questionnaireSatisfactionClient->getCleEnvoiQuestioSatisfClient();

        // Initialisation des réponses.
        $reponses = serialize(array());

        // Initialisation de la requête de création d'un questionnaire dans la base de données du site de questionnaire client.
        $addQuestionnaireRequest = $connection->prepare("INSERT INTO questionnaire_satisfaction_client (CleQuestionnaireSatisfactionClient, ReponsesQuestionnaire, Statut) VALUES (:cle, :reponses, 'New')");
        $addQuestionnaireRequest->bindParam(":cle", $cle);
        $addQuestionnaireRequest->bindParam(":reponses", $reponses);

        // Execution de la requête.
        $addQuestionnaireRequest->execute();
    }

}
