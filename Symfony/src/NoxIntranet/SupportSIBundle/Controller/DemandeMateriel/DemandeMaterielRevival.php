<?php

namespace NoxIntranet\SupportSIBundle\Controller\DemandeMateriel;

use Doctrine\ORM\EntityManager;

class DemandeMaterielRevival {

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function checkDemandeMaterielDuration() {
        $em = $this->em;

        $demandesMateriel = $em->getRepository('NoxIntranetSupportSIBundle:DemandeMateriel')->findAll();

        foreach ($demandesMateriel as $demande) {
            $message = $demande->getMessage();
            echo $message["date"]->format("d/m/Y") . " : " . $demande->getStatus() . "\n";
        }
    }

}
