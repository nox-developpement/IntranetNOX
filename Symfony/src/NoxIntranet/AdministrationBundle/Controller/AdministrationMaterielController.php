<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\AdministrationBundle\Entity\Helpdesk;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of AdministrationMaterielController
 *
 * @author t.besson
 */
class AdministrationMaterielController extends Controller {

    public function materielAccueilAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $adresseHelpdesk = $em->getRepository('NoxIntranetAdministrationBundle:Helpdesk')->findOneBySection('Helpdesk');

        if ($adresseHelpdesk == null) {
            $adresseHelpdesk = new Helpdesk();

            $adresseHelpdesk->setSection('Helpdesk');
            $em->persist($adresseHelpdesk);
            $em->flush();
        }

        $form = $this->get('form.factory')->createBuilder('form', $adresseHelpdesk)
                ->add('email', 'text')
                ->add('modifier', 'submit')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            $adresseHelpdesk->setEmail($form['email']->getData());


            $em->persist($adresseHelpdesk);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Adresse Helpdesk sauvegardée.');

            return $this->redirectToRoute('nox_intranet_administration_materiel');
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationMateriel:administrationMateriel.html.twig', array('adresseHelpdesk' => $adresseHelpdesk->getEmail(), 'form' => $form->createView()));
    }

}
