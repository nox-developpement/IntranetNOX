<?php

namespace NoxIntranet\AccueilBundle\MessageAlert;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class CharteInformatiqueListener {

    public function __construct(TokenStorageInterface $token, AuthorizationCheckerInterface $authorization) {
        $this->token = $token;
        $this->authorization = $authorization;
    }

    public function processCharteInformatique(FilterControllerEvent $event) {
        $token = $this->token;
        $authorization = $this->authorization;

        if (!($event->isMasterRequest() && $token->getToken() && ($authorization->isGranted('IS_AUTHENTICATED_REMEMBERED') || $authorization->isGranted('IS_AUTHENTICATED_FULLY')))) {
            return;
        }

        $user = $token->getToken()->getUser();

        if ($user->getHasReadCharteInformatique()) {
            return;
        }
        
        $controller = new \NoxIntranet\AccueilBundle\Controller\CharteInformatiqueController();

        $event->setController($controller->displayCharteInformatiqueAction($event->getRequest()));
    }

}
