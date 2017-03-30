<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of AdministrationCommunicationController
 *
 * @author t.besson
 */
class AdministrationCommunicationController extends Controller {

    public function administrationCommunicationAccueilAction() {
        return $this->render('NoxIntranetAdministrationBundle:AdministrationCommunication:administrationcommunication.html.twig');
    }

    public function administrationCommunicationExterneAction() {
        return $this->render('NoxIntranetAdministrationBundle:AdministrationCommunication:communicationExterne.html.twig');
    }

    public function administrationCommunicationInterneAction() {
        return $this->render('NoxIntranetAdministrationBundle:AdministrationCommunication:communicationInterne.html.twig');
    }

    public function administrationCommunicationMarketingAction() {
        return $this->render('NoxIntranetAdministrationBundle:AdministrationCommunication:communicationMarketing.html.twig');
    }

}
