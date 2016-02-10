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

    public function maxValueInArray($array) {
        $currentMax = 0;
        foreach ($array as $arr) {
            if ($arr->getPosition() > $currentMax) {
                $currentMax = $arr->getPosition();
            }
        }

        return $currentMax;
    }

    public function administrationLiensSuppressionAction(Request $request, $lienID) {

        $em = $this->getDoctrine()->getManager();

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findAll();

        $lien = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->find($lienID);

        $numLien = $lien->getPosition();

        foreach ($liens as $lienAChanger) {
            if ($lienAChanger->getPosition() != null && $lienAChanger->getPosition() > $numLien) {
                $lienAChanger->setPosition($lienAChanger->getPosition() - 1);
            }
        }

        $em->remove($lien);

        $em->flush();

        $request->getSession()->getFlashBag()->add('notice', "Le liens " . $lien->getLibelle() . " a été supprimé.");

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('position' => 'asc'));

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

        $positions = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findAll();

        $positionMax = $this->maxValueInArray($positions);

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
                    if ($parent != 'Aucune') {
                        $newLien->setPosition(null);
                    } else {
                        $newLien->setPosition($positionMax + 1);
                    }
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
                $newLien->setPosition($positionMax + 1);
                $request->getSession()->getFlashBag()->add('notice', "La catégorie " . $lienLibelle . " a été créé.");

                $em->persist($newLien);
                $em->flush();
            }
        }

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('position' => 'asc'));

        $categories = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByType('Catégorie');

        return $this->render('NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig', array('liens' => $liens, 'catégories' => $categories));
    }

    public function administrationLiensModificationAction(Request $request, $lienID) {

        $em = $this->getDoctrine()->getManager();

        $lien = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->find($lienID);

        $positions = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findAll();

        $positionMax = $this->maxValueInArray($positions);

        $categories = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByType('Catégorie');

        return $this->render('NoxIntranetAdministrationBundle:AdministrationLiens:modificationLien.html.twig', array('catégories' => $categories, 'lien' => $lien, 'lienID' => $lienID, 'position' => $lien->getPosition(), 'positionMax' => $positionMax));
    }

    public function administrationLiensModificationCheckAction(Request $request, $lienID) {

        $em = $this->getDoctrine()->getManager();

        $lien = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->find($lienID);
        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('position' => 'asc'));

        if ($request->query->get('type') == 'lien') {
            $lienLibelle = $request->query->get('lienlibelle');
            $lienAdresse = $request->query->get('lien');
            $parent = $request->query->get('categorie');
            $position = $request->query->get('position');

            if ($request->query->get('lienlibelle') != null) {
                if ($em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByLibelle($lienLibelle) != null && $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findOneByLibelle($lienLibelle)->getId() != $lienID) {
                    $request->getSession()->getFlashBag()->add('noticeErreur', "Ce libellé est déjà utilisé !");
                    return $this->redirectToRoute('nox_intranet_modification_lien', array('lienID' => $lienID));
                } elseif ($lienAdresse == null) {
                    $request->getSession()->getFlashBag()->add('noticeErreur', "Veuillez entrer un lien !");
                    return $this->redirectToRoute('nox_intranet_modification_lien', array('lienID' => $lienID));
                } else {

                    $liensFils = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByParent($lienLibelle);

                    if ($liensFils != null) {
                        foreach ($liensFils as $LienFils) {
                            $LienFils->setParent('Aucune');
                            $em->persist($LienFils);
                        }
                    }

                    if ($lien->getPosition() == null) {
                        $lien->setPosition($position);
                    }

                    if ($position != $lien->getPosition()) {
                        if ($position > $lien->getPosition()) {
                            foreach ($liens as $lienModifier) {
                                if ($lienModifier->getPosition() <= $position && $lienModifier->getPosition() > $lien->getPosition()) {
                                    $lienModifier->setPosition($lienModifier->getPosition() - 1);
                                }
                            }
                        } else {
                            foreach ($liens as $lienModifier) {
                                if ($lienModifier->getPosition() >= $position && $lienModifier->getPosition() < $lien->getPosition()) {
                                    $lienModifier->setPosition($lienModifier->getPosition() + 1);
                                }
                            }
                        }

                        $lien->setPosition($position);
                    }
                    
                    if($parent != 'Aucune') {
                        $lien->setPosition(null);
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
                $request->getSession()->getFlashBag()->add('noticeErreur', "Vous devez entrer un libellé !");
                return $this->redirectToRoute('nox_intranet_modification_lien', array('lienID' => $lienID));
            }
        } else {
            $lienLibelle = $request->query->get('lienlibelle');
            $position = $request->query->get('position');

            if ($request->query->get('lienlibelle') != null) {

                if ($position != $lien->getPosition()) {
                    if ($position > $lien->getPosition()) {
                        foreach ($liens as $lienModifier) {
                            if ($lienModifier->getPosition() <= $position && $lienModifier->getPosition() > $lien->getPosition()) {
                                $lienModifier->setPosition($lienModifier->getPosition() - 1);
                            }
                        }
                    } else {
                        foreach ($liens as $lienModifier) {
                            if ($lienModifier->getPosition() >= $position && $lienModifier->getPosition() < $lien->getPosition()) {
                                $lienModifier->setPosition($lienModifier->getPosition() + 1);
                            }
                        }
                    }

                    $lien->setPosition($position);
                }

                $lien->setLibelle($lienLibelle);
                $lien->setParent('Aucune');
                $lien->setType('Catégorie');
                $lien->setLiens(null);
                $request->getSession()->getFlashBag()->add('notice', "La catégorie " . $lienLibelle . " a été créé.");

                $em->persist($lien);
                $em->flush();
            } else {
                $request->getSession()->getFlashBag()->add('noticeErreur', "Vous devez entrer un libellé !");
                return $this->redirectToRoute('nox_intranet_modification_lien', array('lienID' => $lienID));
            }
        }

        $liens = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findBy(array(), array('position' => 'asc'));

        $categories = $em->getRepository('NoxIntranetRessourcesBundle:Liens')->findByType('Catégorie');

        return $this->render('NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig', array('liens' => $liens, 'catégories' => $categories));
    }

}
