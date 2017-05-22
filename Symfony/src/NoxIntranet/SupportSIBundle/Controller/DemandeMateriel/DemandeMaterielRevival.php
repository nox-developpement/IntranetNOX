<?php

namespace NoxIntranet\SupportSIBundle\Controller\DemandeMateriel;

use Doctrine\ORM\EntityManager;
use DateTime;
use DateInterval;

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

            $revivalDate = $message['date']->add(new DateInterval("P7D"));
            if ($revivalDate < $now) {
                echo "=>" . $revivalDate->format("d/m/Y") . " : " . $demande->getStatus() . "\n";
            }
        }
    }

}
