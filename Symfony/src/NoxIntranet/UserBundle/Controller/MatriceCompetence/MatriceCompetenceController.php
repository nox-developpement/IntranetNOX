<?php

namespace NoxIntranet\UserBundle\Controller\MatriceCompetence;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class MatriceCompetenceController extends Controller {

    public function competenceForm(Request $request) {
        // Entité du collaborateur actuel.
        $currentUser = $this->get('security.context')->getToken()->getUser();

        // On récupère ça hiérarchie.
        $em = $this->getDoctrine()->getManager();
        $userHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUser($currentUser->getUsername());

        // Si la hiérarchie du collaborateur n'est pas défini on le redirige vers l'accueil.
        if (empty($userHierarchy)) {
            $this->get('session')->getFlashBag()->add('notice', "Erreur d'acquisition de la hiérarchie, veuillez contacter le support.");
            $this->redirectToRoute('nox_intranet_accueil');
        }

        // Génération du formulaire.
        $formCompetenceBuilder = $this->createFormBuilder();
        $formCompetenceBuilder
                ->add('Etablissement', TextType::class, array(
                    'readonly' => true,
                    'data' => $userHierarchy->getEtablissement()
                ))
                ->add('Nom', TextType::class, array(
                    'readonly' => true,
                    'data' => $currentUser->getLastname()
                ))
                ->add('Prenom', TextType::class, array(
                    'readonly' => true,
                    'data' => $currentUser->getFirstname()
                ))
                ->add('Date_Naissance', DateType::class)
                ->add('Date_Anciennete', DateType::class)
                ->add('Statut', TextType::class)
                ->add('Poste', TextType::class)
                ->add('Competence_Principale', ChoiceType::class)
        ;
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
