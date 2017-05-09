<?php

namespace NoxIntranet\AccueilBundle\MessageAlert;

use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CharteInformatiqueListener {

    /**
     * 
     * Constructeur pour les services utilisés dans la class
     * 
     * @param TokenStorageInterface $token
     * @param AuthorizationCheckerInterface $authorization
     * @param ContainerInterface $container
     */
    public function __construct(TokenStorageInterface $token, AuthorizationCheckerInterface $authorization, ContainerInterface $container) {
        $this->token = $token;
        $this->authorization = $authorization;
        $this->container = $container;
    }

    /**
     * 
     * Vérifie que l'utilisateur à signer la charte informatique et redirige vers elle si ce n'est pas le cas.
     * 
     * @param FilterControllerEvent $event L'action effectué par l'utilisateur.
     * @return Controller
     */
    public function processCharteInformatique(FilterControllerEvent $event) {
        $token = $this->token;
        $authorization = $this->authorization;
        $container = $this->container;

        // Si l'event n'est pas une requette principal ou si l'utilisateur n'est pas identifié ou si l'utilisateur est déjà sur la charte informatique...
        if (!($event->isMasterRequest() && $token->getToken() && ($authorization->isGranted('IS_AUTHENTICATED_REMEMBERED') || $authorization->isGranted('IS_AUTHENTICATED_FULLY'))) ||
                $event->getRequest()->get('_route') === "nox_intranet_charte_informatique") {
            return; // On quitte la fonction.
        }

        // On récupére l'utilisateur.
        $user = $token->getToken()->getUser();

        // Si l'utilisateur a déjà signé la charte informatique...
        if ($user->getHasReadCharteInformatique()) {
            return; // On quitte la fonction.
        }

        // On génère l'url de la charte informatique avec la dernière page visité en paramètre.
        $redirectUrl = $container->get('router')->generate('nox_intranet_charte_informatique', array('lastRoute' => $event->getRequest()->get('_route')));

        // On redirige vers la charte informatique.
        $event->setController(function() use ($redirectUrl) {
            return new RedirectResponse($redirectUrl);
        });
    }

}
