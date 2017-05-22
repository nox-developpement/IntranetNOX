<?php

namespace NoxIntranet\SupportSIBundle\Controller\DemandeMateriel;

use Doctrine\ORM\EntityManager;
use DateTime;

class DemandeMaterielRevival {

    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function checkDemandeMaterielDuration() {
        $em = $this->em;

        $demandesMateriel = $em->getRepository('NoxIntranetSupportSIBundle:DemandeMateriel')->findAll();

        $now = new DateTime();

        foreach ($demandesMateriel as $demande) {
            $message = $demande->getMessage();
            if (strtotime("+2 weeks", $message['date']) < $now) {
                echo $message["date"]->format("d/m/Y") . " : " . $demande->getStatus() . "\n";
            }
        }
    }

}
