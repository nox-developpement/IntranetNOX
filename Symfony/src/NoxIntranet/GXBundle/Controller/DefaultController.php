<?php

namespace NoxIntranet\GXBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NoxIntranetGXBundle:Default:index.html.twig', array('name' => $name));
    }
}
