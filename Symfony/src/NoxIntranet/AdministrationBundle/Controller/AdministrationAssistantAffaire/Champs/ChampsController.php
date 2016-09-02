<?php

namespace NoxIntranet\AdministrationBundle\Controller\AdministrationAssistantAffaire\Champs;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NoxIntranet\AdministrationBundle\Entity\DonneesFormulaire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

class ChampsController extends Controller {

    // Supprime un champ
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

    public function editionChampAction($IDChamp) {
        
        $em = $this->getDoctrine()->getManager();
        
        $champ = $em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->find($IDChamp);

        $formAjoutDonnee = $this->get('form.factory')->createNamedBuilder('formAjoutDonnee', 'form')
                ->add('Donnees', EntityType::class, array(
                    'class' => 'NoxIntranetAdministrationBundle:DonneesFormulaire',
                    'choice_label' => 'Donnee',
                    'query_builder' => function(EntityRepository $er) use ($IDChamp) {
                        return $er->createQueryBuilder('a')
                                ->where("a.idFormulaire=:id")
                                ->setParameter('id', $IDChamp);
                    }
                ))
                ->getForm();

        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaireseditionchamp.html.twig', array('formAjoutDonnee' => $formAjoutDonnee->createView(), 'IdChamp' => $IDChamp, 'champ' => $champ));
    }

    // Ajoute une nouvelle donnée de champ en base de donnée.
    function ajaxAddDonneeAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            // On récupére les parametres de la requête Ajax.
            $IdChamp = $request->get('IdChamp');
            $donnee = $request->get('donnee');

            // Si la donnée n'existe pas déjà...
            if (empty($em->getRepository("NoxIntranetAdministrationBundle:DonneesFormulaire")->findOneBy(array('idFormulaire' => $IdChamp, 'donnee' => $donnee)))) {

                $newDonnee = new DonneesFormulaire();
                $newDonnee->setIdFormulaire($IdChamp);
                $newDonnee->setDonnee($donnee);

                $em->persist($newDonnee);
                $em->flush();

                // On renvoie une réponse positive.
                $response = 'true';
            }
            // Si la donnée existe déjà...
            else {
                // On renvoie une réponse négative.
                $response = 'false';
            }
        }

        return new Response($response);
    }

    // Supprime une donnée passé en paramètre.
    public function ajaxDeleteDonneeAction(Request $request) {

        if ($request->isXmlHttpRequest()) {

            $em = $this->getDoctrine()->getManager();

            // On récupére les parametres de la requête Ajax.
            $donneeID = $request->get('donnee');

            // On récupéres la donnee existants.
            $donnee = $em->getRepository("NoxIntranetAdministrationBundle:DonneesFormulaire")->find($donneeID);

            //On supprime le profil de la base de données.
            $em->remove($donnee);
            $em->flush();
        }

        return new Response('Donnée supprimé.');
    }

}
