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
use NoxIntranet\AdministrationBundle\Entity\Formulaires;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

/**
 * Description of AdministrationAffairesController
 *
 * @author t.besson
 */
class AdministrationAffairesController extends Controller {

    public function administrationAffairesAccueilAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $profils = $em->getRepository('NoxIntranetRessourcesBundle:Profils')->findBy(array(), array('nom' => 'ASC'));

        $nouveauProfil = new Profils();

        $formAjoutProfil = $this->get('form.factory')->createNamedBuilder('formAjoutProfil', 'form', $nouveauProfil)
                ->add('Nom', TextType::class)
                ->add('Ajouter', 'submit')
                ->getForm();

        $profilASupprimer = new Profils();

        $formSuppresionProfil = $this->get('form.factory')->createNamedBuilder('formSuppresionProfil', 'form', $profilASupprimer)
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

        $formulaireAjout = new Formulaires();

        $formAjoutFormulaire = $this->get('form.factory')->createNamedBuilder('formAjoutFormulaire', 'form', $formulaireAjout)
                ->add('Nom', TextType::class)
                ->add('Type', ChoiceType::class, array(
                    'choices' => array('Texte' => 'Texte', 'Nombre' => 'Nombre'),
                ))
                ->add('Ajouter', 'submit')
                ->getForm();

        $formulaireSuppression = new Formulaires();

        $formSuppresionFormulaire = $this->get('form.factory')->createNamedBuilder('formSuppressionFormulaire', 'form', $formulaireSuppression)
                ->add('Nom', EntityType::class, array(
                    'class' => 'NoxIntranetAdministrationBundle:Formulaires',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->orderBy('u.nom', 'ASC');
                    },
                    'choice_label' => 'Nom',
                ))
                ->add('Supprimer', 'submit')
                ->getForm();

        if ($request->request->has('formAjoutProfil')) {

            $formAjoutProfil->handleRequest($request);

            if ($formAjoutProfil->isValid()) {

                if ($em->getRepository('NoxIntranetRessourcesBundle:Profils')->findOneByNom($formAjoutProfil['Nom']->getData()) == null) {
                    $nouveauProfil->setNom($formAjoutProfil['Nom']->getData());
                    $em->persist($nouveauProfil);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', 'Le profil ' . $formAjoutProfil['Nom']->getData() . ' a été créé.');

                    return $this->redirectToRoute('nox_intranet_administration_affaires');
                } else {
                    $request->getSession()->getFlashBag()->add('noticeErreur', 'Le profil ' . $formAjoutProfil['Nom']->getData() . 'existe déjà !');
                }
            }
        }

        if ($request->request->has('formSuppresionProfil')) {

            $formSuppresionProfil->handleRequest($request);

            if ($formSuppresionProfil->isValid()) {

                $em->remove($formSuppresionProfil['Nom']->getData());
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Le profil ' . $formSuppresionProfil['Nom']->getData()->getNom() . ' a été supprimé.');

                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }

        if ($request->request->has('formAjoutFormulaire')) {

            $formAjoutFormulaire->handleRequest($request);

            if ($formAjoutFormulaire->isValid()) {

                if ($em->getRepository('NoxIntranetAdministrationBundle:Formulaires')->findOneByNom($formAjoutFormulaire['Nom']->getData()) == null) {

                    $formulaireAjout->setNom($formAjoutFormulaire['Nom']->getData());
                    $formulaireAjout->setType($formAjoutFormulaire['Type']->getData());

                    $em->persist($formulaireAjout);
                    $em->flush();

                    $request->getSession()->getFlashBag()->add('notice', 'Le champ ' . $formAjoutFormulaire['Nom']->getData() . ' a été créé.');

                    return $this->redirectToRoute('nox_intranet_administration_affaires');
                } else {
                    $request->getSession()->getFlashBag()->add('noticeErreur', 'Le champ ' . $formAjoutFormulaire['Nom']->getData() . ' existe déjà !');
                }
            }
        }

        if ($request->request->has('formSuppressionFormulaire')) {

            $formSuppresionFormulaire->handleRequest($request);

            if ($formSuppresionFormulaire->isValid()) {

                $em->remove($formSuppresionFormulaire['Nom']->getData());
                $em->flush();

                $request->getSession()->getFlashBag()->add('notice', 'Le formulaire ' . $formSuppresionFormulaire['Nom']->getData()->getNom() . ' a été supprimé.');

                return $this->redirectToRoute('nox_intranet_administration_affaires');
            }
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig', array('formAjoutProfil' => $formAjoutProfil->createView(), 'profils' => $profils, 'formSuppresionProfil' => $formSuppresionProfil->createView(),
                    'formAjoutFormulaire' => $formAjoutFormulaire->createView(), 'formSuppressionFormulaire' => $formSuppresionFormulaire->createView()));
    }

}
