<?php

namespace NoxIntranet\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CharteInformatiqueController extends Controller {

    public function displayCharteInformatiqueAction(Request $request) {

        $formCharteInformatiqueBuilder = $this->get('form.factory')->createBuilder();
        $formCharteInformatiqueBuilder
                ->add('Read', CheckboxType::class)
                ->add('Validate', SubmitType::class, array(
                    'label' => 'Valider'
        ));
        $formCharteInformatique = $formCharteInformatiqueBuilder->getForm();

        $formCharteInformatique->handleRequest($request);
        if ($formCharteInformatique->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $user = $this->get('security.token_storage')->getToken()->getUser();

            $user->setHasReadCharteInformatique(true);

            $em->flush();

            //var_dump($request->getReferer());
            return $this->redirect($request->getReferer());
        }

        return $this->render('NoxIntranetAccueilBundle:CharteInformatique:charteInformatique.html.twig', array('formCharteInformatique' => $formCharteInformatique->createView()));
    }

}
