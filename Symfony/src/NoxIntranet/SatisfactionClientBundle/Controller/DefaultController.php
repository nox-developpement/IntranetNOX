<?php

namespace NoxIntranet\SatisfactionClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NoxIntranetSatisfactionClientBundle:Default:index.html.twig', array('name' => $name));
    }
}
