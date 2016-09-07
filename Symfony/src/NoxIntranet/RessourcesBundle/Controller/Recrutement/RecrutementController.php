<?php

namespace NoxIntranet\RessourcesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\RessourcesBundle\Entity\demandeRecrutement;

class RecrutementController extends Controller {

    private function demandeRecrutement(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $newDemande = new demandeRecrutement();

        $formDemandeRecrutement = $this->createFormBuilder($newDemande)
                ->add('Poste', TextType::class)
                ->add('Competences', TextType::class)
                ->add('Valider', SubmitType::class)
                ->getForm();

        $formDemandeRecrutement->handleRequest($request);

        if ($formDemandeRecrutement->isValid()) {
            $em->persist($newDemande);
            $em->flush();

            return $this->redirectToRoute();
        }

        return $this->render();
    }

}
