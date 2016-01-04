<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\RessourcesBundle\Entity\Liens;

/**
 * Description of AdministrationLiensController
 *
 * @author t.besson
 */
class AdministrationLiensController extends Controller {

    public function administrationLiensSuppressionAction(Request $request, $lienID) {

        $em = $this->getDoctrine()->getManager();

        $lien = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->find($lienID);

        $em->remove($lien);

        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', "Le liens " . $lien->getLibelle() . " a été supprimé.");

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('libelle' => 'asc'));

        return $this->render('NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig', array('liens' => $liens));
    }

    public function administrationLiensAjoutAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        if ($request->query->get('lienlibelle') != null) {
            $lienLibelle = $request->query->get('lienlibelle');
            $lien = $request->query->get('lien');
            $parent = $request->query->get('parent');

            if ($em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByLibelle($lienLibelle) != null) {
                $request->getSession()->getFlashBag()->add('noticeErreur', "Ce libellé est déjà utilisé !");
            } elseif ($request->query->get('parent') != null && $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByLibelle($parent) == null) {
                $request->getSession()->getFlashBag()->add('noticeErreur', "Le lien parent n'existe pas !");
            } else {
                $newLien = new Liens();
                $newLien->setLibelle($lienLibelle);
                $newLien->setParent($parent);
                $newLien->setLiens($lien);
                if ($lien == null) {
                    $newLien->setType('Catégorie');
                    $request->getSession()->getFlashBag()->add('notice', "La catégorie " . $lienLibelle . " a été créé.");
                } else {
                    $newLien->setType('Lien');
                    $request->getSession()->getFlashBag()->add('notice', "Le lien " . $lienLibelle . " a été créé.");
                }

                $em->persist($newLien);
                $em->flush();
            }
        } else {
            $request->getSession()->getFlashBag()->add('noticeErreur', "Vous devez donner un libellé !");
        }

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('libelle' => 'asc'));

        return $this->render('NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig', array('liens' => $liens));
    }

}
