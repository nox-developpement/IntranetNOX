<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\RessourcesBundle\Entity\Liens;

/**
 * Description of AdministrationLiensController
 *
 * @author t.besson
 */
class AdministrationLiensController extends Controller {

    public function administrationLiensSuppressionAction(Request $request, $lienID) {

        $em = $this->getDoctrine()->getManager();

        $lien = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->find($lienID);

        $em->remove($lien);

        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', "Le liens " . $lien->getLibelle() . " a été supprimé.");

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('libelle' => 'asc'));

        $categories = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByType('Catégorie');

        return $this->render('NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig', array('liens' => $liens, 'catégories' => $categories));
    }

    public function administrationLiensAjoutAction(Request $request) {

        $em = $this->getDoctrine()->getManager();

//        if ($request->query->get('lienlibelle') != null) {
//            $lienLibelle = $request->query->get('lienlibelle');
//            $lien = $request->query->get('lien');
//            $parent = $request->query->get('parent');
//
//            if ($em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByLibelle($lienLibelle) != null) {
//                $request->getSession()->getFlashBag()->add('noticeErreur', "Ce libellé est déjà utilisé !");
//            } elseif ($request->query->get('parent') != null && $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByLibelle($parent) == null) {
//                $request->getSession()->getFlashBag()->add('noticeErreur', "Le lien parent n'existe pas !");
//            } else {
//                $newLien = new Liens();
//                $newLien->setLibelle($lienLibelle);
//                $newLien->setParent($parent);
//                $newLien->setLiens($lien);
//                if ($lien == null) {
//                    $newLien->setType('Catégorie');
//                    $request->getSession()->getFlashBag()->add('notice', "La catégorie " . $lienLibelle . " a été créé.");
//                } else {
//                    $newLien->setType('Lien');
//                    $request->getSession()->getFlashBag()->add('notice', "Le lien " . $lienLibelle . " a été créé.");
//                }
//
//                $em->persist($newLien);
//                $em->flush();
//            }
//        } else {
//            $request->getSession()->getFlashBag()->add('noticeErreur', "Vous devez donner un libellé !");
//        }

        if ($request->query->get('type') == 'lien') {
            $lienLibelle = $request->query->get('lienlibelle');
            $lien = $request->query->get('lien');
            $parent = $request->query->get('categorie');

            if ($request->query->get('lienlibelle') != null) {
                if ($em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByLibelle($lienLibelle) != null) {
                    $request->getSession()->getFlashBag()->add('noticeErreur', "Ce libellé est déjà utilisé !");
                } elseif ($lien == null) {
                    $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez entrer un lien !");
                } else {
                    $newLien = new Liens();
                    $newLien->setLibelle($lienLibelle);
                    $newLien->setParent($parent);
                    $newLien->setLiens($lien);
                    $newLien->setType('Lien');
                    $request->getSession()->getFlashBag()->add('notice', "Le lien " . $lienLibelle . " a été créé.");

                    $em->persist($newLien);
                    $em->flush();
                }
            } else {
                $request->getSession()->getFlashBag()->add('noticeErreur', "Vous devez entrer un libellé !");
            }
        } else {
            $lienLibelle = $request->query->get('lienlibelle');

            if ($request->query->get('lienlibelle') != null) {
                $newLien = new Liens();
                $newLien->setLibelle($lienLibelle);
                $newLien->setParent('Aucune');
                $newLien->setType('Catégorie');
                $request->getSession()->getFlashBag()->add('notice', "La catégorie " . $lienLibelle . " a été créé.");

                $em->persist($newLien);
                $em->flush();
            }
        }

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('libelle' => 'asc'));

        $categories = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByType('Catégorie');

        return $this->render('NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig', array('liens' => $liens, 'catégories' => $categories));
    }

    public function administrationLiensModificationAction(Request $request, $lienID) {

        $em = $this->getDoctrine()->getManager();

        $lien = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->find($lienID);

        $categories = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByType('Catégorie');

        return $this->render('NoxIntranetAdministrationBundle:AdministrationLiens:modificationLien.html.twig', array('catégories' => $categories, 'lien' => $lien, 'lienID' => $lienID));
    }

    public function administrationLiensModificationCheckAction(Request $request, $lienID) {
        
        $em = $this->getDoctrine()->getManager();
        
        $lien = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->find($lienID);
        
        if ($request->query->get('type') == 'lien') {
            $lienLibelle = $request->query->get('lienlibelle');
            $lienAdresse = $request->query->get('lien');
            $parent = $request->query->get('categorie');

            if ($request->query->get('lienlibelle') != null) {
                if ($em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByLibelle($lienLibelle) != null && $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findOneByLibelle($lienLibelle)->getId() != $lienID) {
                    $request->getSession()->getFlashBag()->add('noticeErreur', "Ce libellé est déjà utilisé !");
                    var_dump('test!');
                    return $this->redirectToRoute('nox_intranet_modification_lien', array('lienID' => $lienID));
                } elseif ($lienAdresse == null) {
                    $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez entrer un lien !");
                    var_dump('test!');
                    return $this->redirectToRoute('nox_intranet_modification_lien', array('lienID' => $lienID));
                } else {
                    
                    $liensFils = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByParent($lienLibelle);
                    
                    if($liensFils != null) {
                        foreach($liensFils as $LienFils) {
                            $LienFils->setParent('Aucune');
                             $em->persist($LienFils);
                        }
                    }
                    
                    $lien->setLibelle($lienLibelle);
                    $lien->setParent($parent);
                    $lien->setLiens($lienAdresse);
                    $lien->setType('Lien');
                    $request->getSession()->getFlashBag()->add('notice', "Le lien " . $lienLibelle . " a été créé.");

                    $em->persist($lien);
                    $em->flush();
                }
            } else {
                var_dump('test!');
                $request->getSession()->getFlashBag()->add('noticeErreur', "Vous devez entrer un libellé !");
                return $this->redirectToRoute('nox_intranet_modification_lien', array('lienID' => $lienID));
            }
        } else {
            $lienLibelle = $request->query->get('lienlibelle');

            if ($request->query->get('lienlibelle') != null) {
                $lien = new Liens();
                $lien->setLibelle($lienLibelle);
                $lien->setParent('Aucune');
                $lien->setType('Catégorie');
                $request->getSession()->getFlashBag()->add('notice', "La catégorie " . $lienLibelle . " a été créé.");

                $em->persist($lien);
                $em->flush();
            }
        }

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('libelle' => 'asc'));

        $categories = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByType('Catégorie');

        return $this->render('NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig', array('liens' => $liens, 'catégories' => $categories));
    }

}
