<?php

namespace NoxIntranet\UserBundle\Listener;

use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\HttpKernel\HttpKernel;
use NoxIntranet\UserBundle\Entity\User;

class ActivityListener {

    protected $context;
    protected $em;

    public function __construct(SecurityContext $context, EntityManager $manager) {
        $this->context = $context;
        $this->em = $manager;
    }

    /**
     * 
     * Met à jour les valeurs de date de dernière activité et de dernière page consulté pour l'utilisateur courant.
     * 
     * @param FilterControllerEvent $event
     */
    public function onCoreController(FilterControllerEvent $event) {
        // ici nous vérifions que la requête est une "MASTER_REQUEST" pour que les sous-requête soit ingoré (par exemple si vous faites un render() dans votre template)
        if ($event->getRequestType() !== HttpKernel::MASTER_REQUEST) {
            return;
        }

        // Nous vérifions qu'un token d'autentification est bien présent avant d'essayer manipuler l'utilisateur courant.
        if ($this->context->getToken()) {
            $user = $this->context->getToken()->getUser();

            // Nous utilisons un délais pendant lequel nous considèrerons que l'utilisateur est toujours actif et qu'il n'est pas nécessaire de refaire de mise à jour
            $delay = new \DateTime();
            $delay->setTimestamp(strtotime('2 minutes ago'));

            // Nous vérifions que l'utilisateur est bien du bon type pour ne pas appeler getLastActivity() sur un objet autre objet User
            if ($user instanceof User) {
                // Si la reqûete n'est pas ajax, récupére les paramètres de route de l'event et on l'attribut au collaborateur.
                if (!$event->getRequest()->isXmlHttpRequest()) {
                    $route_param = array('route' => $event->getRequest()->attributes->get('_route'), 'path' => $event->getRequest()->getPathInfo());
                    $user->setLastViewedPage($route_param);
                }

                // Si la dernière maj date de plus de 2 min.
                if ($user->getLastActivity() < $delay) {
                    $user->isActiveNow();
                }

                // On met à jour les informations utilisateur.
                $this->em->flush($user);
            }
        }
    }

}
