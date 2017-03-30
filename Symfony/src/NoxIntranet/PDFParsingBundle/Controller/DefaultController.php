<?php

namespace NoxIntranet\PDFParsingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NoxIntranetPDFParsingBundle:Default:index.html.twig', array('name' => $name));
    }
}
