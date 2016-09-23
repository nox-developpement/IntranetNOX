<?php

namespace NoxIntranet\RessourcesBundle\Controller\PrestationsInternes;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NoxIntranet\RessourcesBundle\Entity\Proposition_Echanges;

class PrestationsInternesAjaxController extends Controller {

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
            else if ($answer === 'denie') {
                $proposition->setStatus('Refusé par le DA1'); // On change le status de la proposition.
            }

            $em->flush(); // On sauvegarde les changement en base de données.

            $this->ajaxCheckDemandeStatus($cleDemande);

            return new Response('Saved');
        }
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

            return new Response('Saved');
        }
    }

}
