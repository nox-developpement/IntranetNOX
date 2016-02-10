<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\RessourcesBundle\Entity\Profils;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;

/**
 * Description of AdministrationAffairesController
 *
 * @author t.besson
 */
class AdministrationAffairesController extends Controller {

    public function administrationAffairesAccueilAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $profils = $em->getRepository('NoxIntranetRessourcesBundle:Profils')->findBy(array(), array('nom' => 'ASC'));

        $profil = new Profils();

        $form = $this->get('form.factory')->createBuilder('form', $profil)
                ->add('Nom', 'text')
                ->add('Ajouter', 'submit')
                ->getForm();

        $form->handleRequest($request);

        $form2 = $this->get('form.factory')->createBuilder('form', $profil)
                ->add('Nom', EntityType::class, array(
                    'class' => 'NoxIntranetRessourcesBundle:Profils',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->orderBy('u.nom', 'ASC');
                    },
                    'choice_label' => 'Nom',
                ))
                ->add('Supprimer', 'submit')
                ->getForm();

        $form2->handleRequest($request);

        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig', array('form' => $form->createView(), 'profils' => $profils, 'form2' => $form2->createView()));
    }

}
