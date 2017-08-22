<?php

namespace NoxIntranet\UserBundle\Controller\Recrutement;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecrutementController extends Controller {


    public function tableauRecrutementAction() {
        

        return $this->render('NoxIntranetUserBundle:Recrutement:recrutement.html.twig');
    }

    
    
    
}
