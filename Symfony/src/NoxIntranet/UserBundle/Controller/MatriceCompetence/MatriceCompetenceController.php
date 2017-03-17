<?php

namespace NoxIntranet\UserBundle\Controller\MatriceCompetence;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\UserBundle\Entity\MatriceCompetence;
use DateTime;

class MatriceCompetenceController extends Controller {

    public function competenceFormAction(Request $request) {
        // Entité du collaborateur actuel.
        $currentUser = $this->get('security.context')->getToken()->getUser();

        // On récupère ça hiérarchie.
        $em = $this->getDoctrine()->getManager();
        $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($currentUser->getUsername());

        // Si la hiérarchie du collaborateur n'est pas défini on le redirige vers l'accueil.
        if (empty($userHierarchy)) {
            $this->get('session')->getFlashBag()->add('notice', "Erreur d'acquisition de la hiérarchie, veuillez contacter le support.");
            $this->redirectToRoute('nox_intranet_accueil');
        }

        // On récupére la matrice de compétence associé au collaborateur ou on en crée une si elle n'existe pas.
        if (!empty($currentUser->getMatriceCompetence())) {
            $matrice_competence = $currentUser->getMatriceCompetence();
        } else {
            $matrice_competence = new MatriceCompetence();
            $matrice_competence->setUser($currentUser);
        }

        // Chemin du fichier de liste des compétences.
        $competenceListFile = $this->get('kernel')->getRootDir() . '/../src/NoxIntranet/UserBundle/Resources/public/MatriceCompetence/competencesList.xml';

        // Fichier de compétence sous forme de chaîne nettoyer des charactères interdits.
        $competenceListString = str_replace('&', '&amp;', file_get_contents($competenceListFile));

        // Objet XML des compétences.
        $competences = simplexml_load_string($competenceListString);

        // On récupère les compétences sous forme de tableau.
        $competencesArray = array();
        foreach ($competences->categorie as $categorie) {
            $competencesArray[(string) $categorie->categorie_name] = array();
            foreach ($categorie->competence as $competence) {
                $competencesArray[(string) $categorie->categorie_name][(string) $competence] = (string) $competence;
            }
        }

        //var_dump($matrice_competence->getCompetencesSecondaires());
        // Génération du formulaire.
        $formCompetenceBuilder = $this->createFormBuilder($matrice_competence);
        $formCompetenceBuilder
                ->add('Societe', TextType::class, array(
                    'read_only' => true,
                    'data' => $userHierarchy->getSociete(),
                    'label' => "SOCIETE",
                    'attr' => array(
                        'style' => "width: 100%;"
                    )
                ))
                ->add('Etablissement', TextType::class, array(
                    'read_only' => true,
                    'data' => $userHierarchy->getEtablissement(),
                    'label' => "ETABLISSEMENT",
                    'attr' => array(
                        'style' => "width: 100%;"
                    )
                ))
                ->add('Nom', TextType::class, array(
                    'read_only' => true,
                    'data' => $currentUser->getLastname(),
                    'label' => "NOM",
                    'attr' => array(
                        'style' => "width: 100%;"
                    )
                ))
                ->add('Prenom', TextType::class, array(
                    'read_only' => true,
                    'data' => $currentUser->getFirstname(),
                    'label' => "PRENOM",
                    'attr' => array(
                        'style' => "width: 100%;"
                    )
                ))
                ->add('Date_Naissance', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'label' => "DATE DE NAISSANCE",
                    'years' => range(date('Y') - 100, date('Y')),
                    'attr' => array(
                        'class' => "datepicker",
                        'style' => "display: inline-block;"
                    )
                ))
                ->add('Date_Anciennete', DateType::class, array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'label' => 'DATE ANCIENNETE',
                    'years' => range(date('Y') - 100, date('Y')),
                    'attr' => array(
                        'class' => "datepicker",
                        'style' => "display: inline-block;"
                    )
                ))
                ->add('Statut', TextType::class, array(
                    'label' => "STATUT",
                    'attr' => array(
                        'style' => "width: 100%;"
                    )
                ))
                ->add('Poste', TextType::class, array(
                    'label' => 'POSTE',
                    'attr' => array(
                        'style' => "width: 100%;"
                    )
                ))
                ->add('Competence_Principale', ChoiceType::class, array(
                    'choices' => $competencesArray,
                    'placeholder' => 'Séléctionnez une compétence...',
                    'label' => 'COMPETENCE PRINCIPALE'
                ))
                ->add('Competences_Secondaires', CollectionType::class, array(
                    'entry_type' => ChoiceType::class,
                    'entry_options' => array(
                        'choices' => $competencesArray,
                        'placeholder' => 'Séléctionnez une compétence...',
                        'label' => "COMPETENCE SECONDAIRE"
                    ),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                    'label' => false,
                    'attr' => array(
                        'style' => "display: none;"
                    )
                ))
                ->add('Sauvegarder', SubmitType::class, array(
                    'label' => "Sauvegarder",
                    'attr' => array(
                        'style' => "padding: 0.8em;",
                        'class' => "boutonFormulaire"
                    )
                ))
        ;
        $formCompetence = $formCompetenceBuilder->getForm();

        // Traitement du formaulaire.
        $formCompetence->handleRequest($request);
        if ($formCompetence->isSubmitted() && $formCompetence->isValid()) {
            $em->persist($matrice_competence);
            $em->flush();

            return $this->redirectToRoute('nox_intranet_developpement_professionnel_matrice_competence_formulaire');
        }

        return $this->render('NoxIntranetUserBundle:MatriceCompetence:formulaireMatriceCompetence.html.twig', array('formCompetence' => $formCompetence->createView()));
    }

    // Retourne une chaine de charactère sans accent.
    private function wd_remove_accents($str, $charset = 'utf-8') {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }

}
