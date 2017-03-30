<?php

namespace NoxIntranet\ListingKeywordsReferencesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('NoxIntranetListingKeywordsReferencesBundle:Default:index.html.twig', array('name' => $name));
    }
}
