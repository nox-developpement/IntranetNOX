<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompteurVuesIncrementation
 *
 * @author t.besson
 */

namespace NoxIntranet\AccueilBundle\CompteurVues;

use Doctrine\ORM\EntityManager;
use NoxIntranet\AccueilBundle\Entity\Compteur;

class CompteurVuesIncrementation {

    protected $em;

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function incrementationCompteurVues() {

        setcookie('visite_intranet', true, (time() + 3600));

        $compteurVue = $this->em->getRepository('NoxIntranetAccueilBundle:Compteur')->findOneByCompteur('Accueil');

        if ($compteurVue == null) {
            $compteurVue = new Compteur();
            $compteurVue->setCompteur('Accueil');
            $compteurVue->setVue(1);
            $this->em->persist($compteurVue);
            $this->em->flush();
        } else {
            $compteurVue->setVue($compteurVue->getVue() + 1);
            $this->em->persist($compteurVue);
            $this->em->flush();
        }
    }

}
