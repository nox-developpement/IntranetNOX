<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use NoxIntranet\CommunicationBundle\Entity\News;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Description of AdministrationNews
 *
 * @author t.besson
 */
class AdministrationNewsController extends Controller {

    public function ajouterNewsAction(Request $request) {
        $news = new News();

        $formBuilder = $this->get('form.factory')->createBuilder('form', $news);

        $formBuilder
                ->add('titre', 'text')
                ->add('contenu', 'ckeditor')
//                        array(
//                    'config' => array(
//                        'toolbar' => array(
//                            array(
//                                'name' => 'document',
//                                'items' => array('NewPage', '-', 'DocProps', '-', 'Preview'),
//                            ),
//                            array(
//                                'name' => 'styles',
//                                'items' => array('FontSize'),
//                            ),
//                            array(
//                                'name' => 'colors',
//                                'items' => array('TextColor'),
//                            ),
//                            '/',
//                            array(
//                                'name' => 'clipboard',
//                                'items' => array('Cut', 'Copy', 'Paste', '-', 'Undo', 'Redo'),
//                            ),
//                            array(
//                                'name' => 'basicstyles',
//                                'items' => array('Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat'),
//                            ),
//                        ),
//                        'uiColor' => '#ffffff',
                //...
//            )))
                ->add('auteur', 'text')
                ->add('valider', 'submit')
        ;
        // Pour l'instant, pas de candidatures, catégories, etc., on les gérera plus tard
        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'News bien enregistrée !');

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirect($this->generateUrl('nox_intranet_news_SI'));
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationNews:administrationAjouterNews.html.twig', array('formulaire' => $form->createView()));
    }

    public function supprimerNewsAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $news = $em->getRepository('NoxIntranetCommunicationBundle:News')->findBy(array(), array('id' => 'desc'));

        $formBuilder = $this->get('form.factory')->createBuilder('form', $news);
        $formBuilder
                ->add('news', 'entity', array(
                    'class' => 'NoxIntranetCommunicationBundle:News',
                    'choice_label' => 'news',
                ))
                ->add('supprimer', 'submit');

        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        // On vérifie que les valeurs entrées sont correctes
        // (Nous verrons la validation des objets en détail dans le prochain chapitre)
        if ($form->isValid()) {
            // On l'enregistre notre objet $advert dans la base de données, par exemple
            //$request->getSession()->getFlashBag()->add('notice', 'News bien enregistrée !');
            // On redirige vers la page de visualisation de l'annonce nouvellement créée

            $em->remove($form->get('news')->getData());
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'La news a était supprimée.');

            return $this->render('NoxIntranetAdministrationBundle:AdministrationNews:administrationSupprimerNews.html.twig', array('formulaire' => $form->createView()));
        }

        return $this->render('NoxIntranetAdministrationBundle:AdministrationNews:administrationSupprimerNews.html.twig', array('formulaire' => $form->createView()));
    }

//    public function supprimerNewsAction {
//        $em = $this->getDoctrine()->getManager();
//
//        $users = $em->getRepository('NoxIntranetCommunicationBundle:News')->findBy(array(), array('date' => 'DSC'));
//
//        return $this->render('NoxIntranetCommunicationBundle:AdministrationUser:administrationAdmin.html.twig', array('utilisateurs' => $users));
//    }

    public function pdfConversionAction() {
        $pdf = 'C:\Users\t.besson\Downloads\test3.pdf';

        $parser = new \Smalot\PdfParser\Parser();

        $text = $parser->parseFile($pdf)->getText();

        $details = $parser->parseFile($pdf)->getDetails();

// Loop over each property to extract values (string or array).
        foreach ($details as $property => $value) {
            if (is_array($value)) {
                $value = implode(', ', $value);
            }
            $label[] = $property. " : " . $value;
            $data[] = $value;
        }
       
     
        return $this->render('NoxIntranetAdministrationBundle:AdministrationNews:testpdf.html.twig', array('pdf' => $text, 'labels' => $label, 'datas' => $data));
    }

}
