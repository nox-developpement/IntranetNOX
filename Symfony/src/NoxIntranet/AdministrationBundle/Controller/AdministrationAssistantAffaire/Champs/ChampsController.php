<?php

namespace NoxIntranet\AdministrationBundle\Controller\AdministrationAssistantAffaire\Champs;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ChampsController extends Controller {

    function deleteChampAction($IDChamp, Request $request) {

        // On récupére le champ correspondant à l'ID fournis en paramètre.
        $em = $this->getDoctrine()->getManager();
        $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($IDChamp);

        // On le supprime de la base de données.
        $em->remove($champ);
        $em->flush();

        // On affiche un message de confirmation de suppression.
        $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $champ->getNom() . ' a été supprimé.');

        // On redirige vers l'administration des champs.
        return $this->redirectToRoute('nox_intranet_administration_affaires', array('section' => 'champs'));
    }

}
