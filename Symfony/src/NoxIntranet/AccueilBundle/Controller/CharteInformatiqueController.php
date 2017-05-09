<?php

namespace NoxIntranet\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CharteInformatiqueController extends Controller {

    /**
     * 
     * Affiche la charte informatique et permet de valider sa lecture.
     * 
     * @param Request $request
     * @return View
     */
    public function displayCharteInformatiqueAction(Request $request) {
        // Génération du formulaire de charte informatique.
        $formCharteInformatiqueBuilder = $this->get('form.factory')->createBuilder();
        $formCharteInformatiqueBuilder
                ->add('Read', CheckboxType::class, array(
                    'label' => "Je m'engage à lire et signer la charte informatique.",
                ))
                ->add('Validate', SubmitType::class, array(
                    'label' => 'Valider',
                    'attr' => array(
                        'style' => "display: none"
                    )
        ));
        $formCharteInformatique = $formCharteInformatiqueBuilder->getForm();

        // Traitement du formulaire.
        $formCharteInformatique->handleRequest($request);
        if ($formCharteInformatique->isValid()) {
            // On récupére l'utilisateur courant.
            $user = $this->get('security.token_storage')->getToken()->getUser();

            // On indique qu'il a lu la charte informatique.
            $user->setHasReadCharteInformatique(true);

            // On sauvegarde les changement en base de données.
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            // On récupère la dernière page visité et on redirige vers celle-ci.
            $lastRoute = $request->get('lastRoute');
            return $this->redirectToRoute($lastRoute);
        }

        // Affichage de la charte informatique et du formulaire de validation de lecture.
        return $this->render('NoxIntranetAccueilBundle:CharteInformatique:charteInformatique.html.twig', array('formCharteInformatique' => $formCharteInformatique->createView()));
    }

    public function showCollaborateurWhoHasNotReadCharteInformatique() {
        /* $em = $this->getDoctrine()->getManager();

          $collaborateurs = $em->getRepository('NoxIntranetUserBundle:User');

         */
    }

}
