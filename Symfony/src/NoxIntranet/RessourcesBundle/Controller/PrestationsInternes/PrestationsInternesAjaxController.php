<?php

namespace NoxIntranet\RessourcesBundle\Controller\PrestationsInternes;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NoxIntranet\RessourcesBundle\Entity\Proposition_Echanges;
use Symfony\Component\HttpFoundation\JsonResponse;

class PrestationsInternesAjaxController extends Controller {

    // Tableau de correspondance des messages/styles/libelles des status des demandes/proposition.
    private static $status = array(
        "Chargé d'affaire" => array('message' => "Demande effectuée par le chargé d'affaire, en attente de réponse du DA émetteur", 'color' => 'orange', 'status' => 'process'),
        'Validation DA1' => array('message' => 'Demande validée par le DA émetteur, en attente de réponse des DA destinataire', 'color' => 'orange', 'status' => 'process'),
        'Refus DA1' => array('message' => 'Demande refusée par le DA émetteur', 'color' => 'red', 'status' => 'fail'),
        'Attente validation DA2' => array('message' => 'En attente de la réponse du DA destinataire', 'color' => 'orange', 'status' => 'process'),
        'Réponses DA2' => array('message' => 'Tous les DA destinataire ont répondus, en attente de réponses du DA émetteur aux propositions', 'color' => 'orange', 'status' => 'process'),
        'Demande acceptée' => array('message' => 'Le DA destinataire a accepté la demande, en attente de la réponse du DA émetteur', 'color' => 'orange', 'status' => 'process'),
        'Demande refusée' => array('message' => '', 'color' => 'LightGrey', 'status' => 'fail'),
        'Réponses DA2 refus' => array('message' => 'Tous les DA destinataire ont refusé de répondre à la demande', 'color' => 'red', 'status' => 'fail'),
        'Validé par le DA1' => array('message' => 'Proposition validée par le DA émetteur', 'color' => 'LimeGreen', 'status' => 'success'),
        'Refusé par le DA1' => array('message' => 'Proposition refusée par le DA émetteur', 'color' => 'red', 'status' => 'fail'),
        'Propositions acceptée DA1' => array('message' => 'Une ou plusieurs proposition(s) a/ont été acceptée(s) par le DA émetteur', 'color' => 'LimeGreen', 'status' => 'success'),
        'Propositions refusée DA1' => array('message' => "Aucune proposition n'a été retenue par le DA émetteur", 'color' => 'red', 'status' => 'fail'),
        'Acceptée par le DA2' => array('message' => "La demande de proposition à été acceptée par le DA destinataire.", 'color' => 'LimeGreen', 'status' => 'success'),
        'Refusée par le DA2' => array('message' => "La demande de proposition à été refusée par le DA destinataire.", 'color' => 'red', 'status' => 'fail'),
        'Pas de Propositions disponible' => array('message' => 'Tous les DA destinataire ont refusés la demande de prestation.', 'color' => 'red', 'status' => 'fail'),
        'Attende de réponse DA2' => array('message' => '', 'color' => 'LightGrey', 'status' => 'process')
    );

    // Sauvegarde les réponses aux propositions en base de données.
    public function ajaxSaveDA2PropositionAnswerAction(Request $request) {
        // On vérifie que la requette est bien une requette Ajax.
        if ($request->isXmlHttpRequest()) {
            // On récupére les variables de la requêtte.
            $username = $request->get('username');
            $answer = $request->get('answer');
            $cleDemande = $request->get('cleDemande');

            // On récupére l'entité de la proposition.
            $em = $this->getDoctrine()->getManager();
            $proposition = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findOneBy(array('cleDemande' => $cleDemande, 'dA2' => $username));

            // Si le DA1 valide la proposition.
            if ($answer === 'validate') {
                $proposition->setStatus('Validé par le DA1'); // On change le status de la proposition.
            }
            // Si le DA1 refuse la proposition.
            else if ($answer === 'refuse') {
                $proposition->setStatus('Refusé par le DA1'); // On change le status de la proposition.
            }

            $em->flush(); // On sauvegarde les changement en base de données.

            $this->ajaxCheckDemandeStatus($cleDemande); // On fait des modification sur le status de la demande correspondante si necessaire.

            return new JsonResponse(PrestationsInternesAjaxController::$status[$proposition->getStatus()]);
        }
    }

    // Modifie les status des propositions si besoin.
    private function ajaxCheckDemandeStatus($cleDemande) {
        $em = $this->getDoctrine()->getManager();
        $propositionAttenteValidationDA2 = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findBy(array('cleDemande' => $cleDemande, 'status' => 'Attente validation DA2'));
        $propositionValidationDA2 = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findBy(array('cleDemande' => $cleDemande, 'status' => 'Demande acceptée'));
        $propositionAccepteDA1 = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findBy(array('cleDemande' => $cleDemande, 'status' => 'Validé par le DA1'));
        $propositionAccepteDA2 = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findBy(array('cleDemande' => $cleDemande, 'status' => 'Acceptée par le DA2'));
        $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande);

        // Si tous les DA2 ont répondu aux propositions et toutes les proposition accepté par les DA2 ont recu une réponse du DA1 et que des propositions ont était accepté par le DA1.
        if (empty($propositionAttenteValidationDA2) && empty($propositionValidationDA2) && !empty($propositionAccepteDA1)) {
            $demande->setStatus('Propositions acceptée DA1');
        }
        // Si tous les DA2 ont répondu aux propositions et toutes les proposition accepté par les DA2 ont recu une réponse du DA1 et qu'aucune des propositions ont était accepté par le DA1 et qu'il y avais des propositions accepté par les DA2.
        elseif (empty($propositionAttenteValidationDA2) && empty($propositionValidationDA2) && empty($propositionAccepteDA1) && !empty($propositionAccepteDA2)) {
            $demande->setStatus('Propositions refusée DA1');
        }
        // Si tous les DA2 ont répondu aux propositions et toutes les proposition accepté par les DA2 ont recu une réponse du DA1 et qu'aucune des propositions ont était accepté par le DA1 et qu'il n'y avais pas de propositions accepté par les DA2.
        else if (empty($propositionAttenteValidationDA2) && empty($propositionValidationDA2) && empty($propositionAccepteDA1) && empty($propositionAccepteDA2)) {
            $demande->setStatus('Pas de Propositions disponible');
        }

        $em->flush();
    }

    // Sauvegarde les échanges en base de données.
    public function ajaxSaveEchangesAction(Request $request) {
        // On vérifie que la requette est bien une requette Ajax.
        if ($request->isXmlHttpRequest()) {
            // On récupére les variables de la requêtte.
            $username = $request->get('username');
            $echanges = $request->get('echanges');
            $cleDemande = $request->get('cleDemande');

            // On récupére l'entité de la proposition.
            $em = $this->getDoctrine()->getManager();
            $proposition = $em->getRepository('NoxIntranetRessourcesBundle:PropositionPrestation')->findOneBy(array('cleDemande' => $cleDemande, 'dA2' => $username));
            // On attribut le nouveau texte d'échanges à la proposition.
            $proposition->setEchanges($echanges);

            $em->flush(); // On sauvegarde les changement en base de données.

            return new Response('Saved');
        }
    }

    // Sauvegarde les nouvelles valeurs des champs d'une demande.
    public function ajaxEditDemandeAction(Request $request) {
        // Si la fonction est un appel Ajax.
        if ($request->isXmlHttpRequest()) {

            // On récupére le champ, la valeur et la clé de la demande.
            $field = $request->get('field');
            $value = $request->get('value');
            $cleDemande = $request->get('cleDemande');

            // On récupére l'entitée de la demande.
            $em = $this->getDoctrine()->getManager();
            $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande);

            // On prépare la fonction d'attribution de valeur en fonction du champ.
            $function = "set" . $field;

            // Si le champ est un champ de date.
            if ($field === 'DateDemarrage' || $field === 'DateRendu') {
                $demande->$function(new \DateTime($value)); // On lui attribut sa nouvelle date.
            }
            // Si le champ est le champ de volume de sous-traitance.
            elseif ($field === 'VolumeSousTraitance') {
                // Si la valeur entrée n'est pas un numérique on retourne une erreur.
                if (!is_numeric($value)) {
                    return new Response('VolumeSousTraitance error');
                }
            }
            // Si le champ n'est pas un champ de date.
            else {
                $demande->$function($value); // On lui attribut sa nouvelle valeur.
            }

            // On sauvegarde la demande en base de donnée.
            $em->persist($demande);
            $em->flush();

            return new Response('OK');
        }
    }

    // Sauvegarde les nouveau messages des échanges entre DA1 et DA2.
    public function ajaxSaveMessageAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére les variables de la requête Ajax.
            $cleDemande = $request->get('cleDemande');
            $da2 = $request->get('da2');
            $message = $request->get('message');
            $sender = $request->get('sender');

            // On ititialise un nouvelle échange avec les paramêtre de la requête.
            $echange = new Proposition_Echanges();
            $echange->setCleDemande($cleDemande);
            $echange->setDa2($da2);
            $echange->setMessage($message);
            $echange->setSender($sender);

            // On sauvegarde l'échange en base de données.
            $em = $this->getDoctrine()->getManager();
            $em->persist($echange);
            $em->flush();

            // On récupére la demande correspondante et on en déduit l'email du destinataire du message.
            $demande = $em->getRepository('NoxIntranetRessourcesBundle:RecherchePrestation')->findOneByCleDemande($cleDemande);
            $da1Entity = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($demande->getDa1());
            $da2Entity = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($da2);
            $emailReceiver = (($da2 === $sender) ? $demande->getDa1() : $da2) . '@groupe-nox.com';
            $lienEchanges = $this->generateUrl('nox_intranet_demande_prestation_proposition_echanges', array('cleDemande' => $cleDemande, 'da2' => $da2), true);

            // On envoi un mail au destinatire pour le prévenir qu'un message est disponible.
            $this->sendNewMessageEmail($emailReceiver, $message, $da1Entity, $da2Entity, ($da2 === $sender) ? 'DA1' : 'DA2', $demande, $lienEchanges);

            return new Response('Saved');
        }
    }

    // Récupére les messages en fonction de la proposition.
    public function ajaxGetMessageAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            // On récupére les variables de la requête.
            $cleDemande = $request->get('cleDemande');
            $da2 = $request->get('da2');

            // On récupére les messages sous forme de tableau.
            $messagesRepository = $this->getDoctrine()->getRepository('NoxIntranetRessourcesBundle:Proposition_Echanges');
            $newMessages = $messagesRepository->createQueryBuilder('p')
                    ->where('p.cleDemande LIKE :cleDemande')
                    ->andWhere('p.da2 LIKE :da2')
                    ->setParameters(array('cleDemande' => $cleDemande, 'da2' => $da2))
                    ->getQuery()
                    ->getArrayResult();

            // On retourne les messages.
            return new JsonResponse($newMessages);
        }
    }

    // Envoi un mail au destinataire du nouveau message.
    private function sendNewMessageEmail($email, $messageContent, $da1, $da2, $receiver, $demande, $lienEchanges) {
        $message = \Swift_Message::newInstance()
                ->setSubject('Nouvel échange de proposition')
                ->setFrom('noreply@groupe-nox.com')
                ->setTo($email)
                ->setBody(
                $this->renderView(
                        'Emails/PrestationInterne/newPropositionExchange.html.twig', array('message' => $messageContent, 'DA1' => $da1, 'DA2' => $da2, 'receiver' => $receiver, 'demande' => $demande, 'lienEchanges' => $lienEchanges)
                ), 'text/html'
                )
        ;
        $this->get('mailer')->send($message);
    }

}
