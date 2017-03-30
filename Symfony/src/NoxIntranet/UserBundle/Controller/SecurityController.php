<?php

// src/NoxIntranet/UserBundle/Controller/SecurityController.php;

namespace NoxIntranet\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SecurityController extends Controller {

    public function loginAction() {
        // Si le visiteur est déjà identifié, on le redirige vers l'accueil
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->getRequest()->headers->get('referer');
        }

        // Le service authentication_utils permet de récupérer le nom d'utilisateur
        // et l'erreur dans le cas où le formulaire a déjà été soumis mais était invalide
        // (mauvais mot de passe par exemple)
        $authenticationUtils = $this->get('security.authentication_utils');

        return $this->render('NoxIntranetUserBundle:Security:login.html.twig', array(
                    'last_username' => $authenticationUtils->getLastUsername(),
                    'error' => $authenticationUtils->getLastAuthenticationError(),
        ));
    }

    public function loginFailAction(Request $request) {
        $request->getSession()->getFlashBag()->add('noticeErreur', 'Identifiant/Mot de passe incorrect !');

        $referer = $this->getRequest()->headers->get('referer');
        return $this->redirect($referer);
    }
    
    

}
