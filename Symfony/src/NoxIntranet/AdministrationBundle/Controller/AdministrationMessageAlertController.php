<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of AdministrationMessageAlert
 *
 * @author t.besson
 */
class AdministrationMessageAlertController extends Controller {

    public function editMessageAlertAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        if ($em->getRepository('NoxIntranetAccueilBundle:MessageAlert')->findOneBy(array('section' => 'Accueil')) != null) {
            $alert = $em->getRepository('NoxIntranetAccueilBundle:MessageAlert')->findOneBy(array('section' => 'Accueil'));
        } else {
            $alert = null;
        }

        if ($alert == null) {
            $alert = new MessageAlert();
            $alert->setSection('Accueil');
            $alert->setStatus(false);
            $em->persist($alert);
            $em->flush();
        }

        $formBuilder = $this->get('form.factory')->createBuilder('form', $alert);

        $formBuilder
                ->add('Message', 'ckeditor')
                ->add('Status', CheckboxType::class, array(
                    'required' => false
                ))
                ->add('Valider', SubmitType::class)
        ;

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {

            if ($alert->getStatus()) {
                $request->getSession()->getFlashBag()->add('notice', "L'alerte a été activé.");
            } else {
                $request->getSession()->getFlashBag()->add('notice', "L'alerte a été désactivé.");
            }

            $em->persist($alert);
            $em->flush();

            return $this->redirectToRoute('nox_intranet_administration_message_alerte');
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationMessageAlert:administrationMessageAlert.html.twig', array('form' => $form->createView()));
    }

}
