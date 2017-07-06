<?php

namespace NoxIntranet\AdministrationBundle\Controller\ErrorHandler;

use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\DependencyInjection\ContainerInterface;
use DateTime;

class ErrorListener {

    protected $mailer;
    protected $templating;
    protected $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
        $this->mailer = $container->get("mailer");
        $this->templating = $container->get("templating");
    }

    /**
     * 
     * Lors d'une erreur de chargement sur l'intranet, récupére les informations sur l'erreur et envoi un mail d'alerte à l'administrateur.
     * 
     * @param GetResponseForExceptionEvent $event L'exception déclanché au momment de l'erreur.
     */
    public function handleError(GetResponseForExceptionEvent $event) {
        // Code d'erreur et message de l'exception.
        if (method_exists($event->getException(), "getStatusCode")) {
            $errorCode = $event->getException()->getStatusCode();
        } else {
            $errorCode = "Inconnu";
        }
        $message = $event->getException()->getMessage();

        // Route et Url qui ont déclanché l'exception.
        $route = $event->getRequest()->get("_route");
        $url = $event->getRequest()->getPathInfo();

        // Utilisateur ayant déclanché l'exception et son email.
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $userEmail = $this->container->get('security.token_storage')->getToken()->getUser()->getUsername() . "@groupe-nox.com";

        // Date et heure du déclanchement de l'exception.
        $date = new DateTime();

        // On envoi un mail au d'erreur à l'administrateur de l'intranet.
        $this->sendErrorMail($errorCode, $message, $route, $url, $user, $userEmail, $date);
    }

    /**
     * 
     * Envoi un mail d'alerte d'erreur de chargement de l'intranet à l'administrateur de l'intranet.
     * 
     * @param Integer $errorCode Code d'erreur de l'exception.
     * @param String $message Message d'erreur de l'exception.
     * @param String $route Route ayant déclanché l'exception.
     * @param String $url Url ayant déclancher l'excéption.
     * @param DateTime $date Date et heure du déclanchement de l'exception.
     */
    private function sendErrorMail($errorCode, $message, $route, $url, $user, $userEmail, $date) {
        // Email de l'administrateur de l'intranet.
        $admin_email = $this->container->getParameter("intranet_admin_email");

        // Préparation du mail.
        $mail = (new \Swift_Message("Erreur intranet"))
                ->setFrom('intranet@groupe-nox.com')
                ->setTo($admin_email)
                ->setBody(
                $this->templating->render(
                        'Emails/ErrorHandler/ErrorHandlingMail.html.twig', array('errorCode' => $errorCode, 'message' => $message, 'route' => $route, 'url' => $url, 'user' => $user, 'userEmail' => $userEmail, 'date' => $date)
                ), 'text/html'
                )
        ;

        // Envoi du mail.
        $this->mailer->send($mail);

        // On force l'envoi du mail (vidage du spooler).
        $spool = $this->mailer->getTransport()->getSpool();
        $transport = $this->container->get('swiftmailer.transport.real');
        if ($spool and $transport) {
            $spool->flushQueue($transport);
        }
    }

}
