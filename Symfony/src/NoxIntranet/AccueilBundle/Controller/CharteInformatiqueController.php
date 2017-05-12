<?php

namespace NoxIntranet\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use DateTime;

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

            // On indique qu'il a lu la charte informatique et la date de lecture.
            $user->setHasReadCharteInformatique(true);
            $user->setCharteInformatiqueReadingDate(new DateTime());

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

    /**
     * 
     * Affiche les listes des collaborateur qui ont vues et qui n'ont pas vues la charte informatique.
     * 
     * @return View
     */
    public function monitoringCharteInformatiqueAction() {
        // On récupére les listes des collaborateurs.
        $em = $this->getDoctrine()->getManager();
        $collaborateursWhoHasReadCharteInformatique = $em->getRepository('NoxIntranetUserBundle:User')->findBy(array('hasReadCharteInformatique' => true), array('charteInformatiqueReadingDate' => 'ASC', 'lastname' => 'ASC', 'firstname' => 'ASC'));
        $collaborateursWhoHasntReadCharteInformatique = $em->getRepository('NoxIntranetUserBundle:User')->findBy(array('hasReadCharteInformatique' => false), array('lastname' => 'ASC', 'firstname' => 'ASC'));

        return $this->render('NoxIntranetAccueilBundle:CharteInformatique:charteInformatiqueMonitoring.html.twig', array('collaborateurWhoHasReadCharteInformatique' => $collaborateursWhoHasReadCharteInformatique, 'collaborateurWhoHasntReadCharteInformatique' => $collaborateursWhoHasntReadCharteInformatique));
    }

    /**
     * 
     * Réinitisalise un utilisateur pour indiquer qu'il n'as pas vue la charte informatique.
     * 
     * @param type $collaborateurUsername L'username du collaborateur.
     * @return View
     */
    public function resetCharteInformatiqueReadingAction($collaborateurUsername) {
        // On récupére l'entitée du collaborateur.
        $em = $this->getDoctrine()->getManager();
        $collaborateur = $em->getRepository('NoxIntranetUserBundle:User')->findOneByUsername($collaborateurUsername);
        
        // On indique qu'il n'as pas vue la charte informatique.
        $collaborateur->setHasReadCharteInformatique(false);
        $collaborateur->setCharteInformatiqueReadingDate(null);

        //Sauvegarde en base de données.
        $em->flush();

        // Redirection vers le monitoring de charte informatique.
        return $this->redirectToRoute('nox_intranet_charte_informatique_monitoring');
    }

}
