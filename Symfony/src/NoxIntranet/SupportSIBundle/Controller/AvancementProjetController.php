<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\SupportSIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\AdministrationBundle\Entity\texteEncart;

/**
 * Description of AvancementProjetController
 *
 * @author t.besson
 */
class AvancementProjetController extends Controller {

    public function avancementProjetAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

        $texteEncart = $em->getRepository('NoxIntranetAdministrationBundle:texteEncart')->findOneBySection('AvancementProjet');

        if ($texteEncart == null) {
            $texteEncart = new texteEncart();
            $texteEncart->setSection('AvancementProjet');
            $em->persist($texteEncart);
            $em->flush();
        }

        $formBuilder = $this->get('form.factory')->createBuilder('form', $texteEncart);

        $formBuilder
                ->add('text', 'ckeditor')
                ->add('modifier', 'submit')
        ;

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple

            $em->persist($texteEncart);
            $em->flush();

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_avancement_projet');
        }

        $texte = $texteEncart->getText();

        return $this->render('NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig', array('texte' => $texte, 'formulaire' => $form->createView()));
    }

}
