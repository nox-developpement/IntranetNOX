<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AdministrationBundle\Controller;

use Your\ExampleBundle\Entity\CronTask;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of CronTaskController
 *
 * @author t.besson
 */

/**
 * @Route("/crontasks")
 */
class CronTaskController extends Controller {
    
    /**
     * @Route("/test", name="your_examplebundle_crontasks_test")
     */
    public function testAction()
    {
        $entity = new CronTask();

        $entity
            ->setName('Example asset symlinking task')
            ->setInterval(3600) // Run once every hour
            ->setCommands(array(
                'assets:install --symlink web'
            ));

        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return new Response('OK!');
    }
}
