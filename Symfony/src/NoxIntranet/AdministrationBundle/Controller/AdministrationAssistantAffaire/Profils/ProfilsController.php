<?php

namespace NoxIntranet\AdministrationBundle\Controller\AdministrationAssistantAffaire\Profils;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\RessourcesBundle\Entity\Profils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfilsController extends Controller {

    
    // Ajoute un profil en base de données.
    public function ajaxAddProfilAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            // On récupére les parametres de la requête Ajax.
            $profil = $request->get('profil');

            // Si le profil n'existe pas déjà...
            if (empty($em->getRepository("NoxIntranetRessourcesBundle:Profils")->findOneByNom($profil))) {

                $newProfil = new Profils();
                $newProfil->setNom($profil);

                $em->persist($newProfil);
                $em->flush();

                // On renvoie une réponse positive.
                $response = 'true';
            }
            // Si le profil existe déjà...
            else {
                // On renvoie une réponse négative.
                $response = 'false';
            }
        }

        return new Response($response);
    }

}
