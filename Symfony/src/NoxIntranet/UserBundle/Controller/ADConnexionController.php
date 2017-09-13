<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

/**
 * Description of TestConnexion
 *
 * @author t.besson
 */
class ADConnexionController extends Controller {

    public function ADConnexionCheckAction(Request $request) {

        // On récupére le login et le mot de passe fournis en paramètres.
        $login = $request->request->get('username');
        $pass = $request->request->get('password');

        $ds = ldap_connect("nox.local");  // On initialise la connexion au domaine (doit être un serveur LDAP valide !)
        // Si la connexion LDAP est valide avec les idenfiants fournis.
        if (!empty($pass) && @ldap_bind($ds, "$login@nox.local", "$pass")) {

            // On se connecte en LDAP.
            $r = @ldap_bind($ds, "$login@nox.local", "$pass");

            // On récupère l'utilisateur associé au login en base de données.
            $em = $this->getDoctrine()->getManager();
            $user = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('username' => $login));

            // Si l'utilisateur n'existe pas en base de données.
            if (empty($user)) {
                // On affiche un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Identifiant/Mot de passe incorrect !');
                
                // On redirige vers la page précédente.
                $referer = $this->getRequest()->headers->get('referer');
                return $this->redirect($referer);
            }
            // Si l'utilisateur existe en base de données.
            else {
                // On crée un token associant l'utilisateur et les rôles dont il dispose.
                $token = new UsernamePasswordToken($user, null, "main", $user->getRoles());
                // On associe le token au controller de sécurité.
                $this->get("security.context")->setToken($token);
                // On diffuse l'event de connexion.
                $request = $this->get("request");
                $event = new InteractiveLoginEvent($request, $token);
                $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
            }

            // On affiche un message de confirmation de connexion.
            $request->getSession()->getFlashBag()->add('notice', 'Vous êtes maintenant connecté.');

            // On redirige vers la page précédente.
            $referer = $this->getRequest()->headers->get('referer');
            return $this->redirect($referer);
        }
        // Si la connexion LDAP n'est pas valide avec les identifiants fournis mais qu'il existe un utilisateur associé au login en base de données.
        elseif (!empty($this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('username' => $login)))) {

            // On récupére l'utilisateur en base de données.
            $user = $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('username' => $login));

            // Si l'utilisateur est local (c.à.d pas associé au domaine windows) et que le mot de passe fournis correspond à celui en base de données.
            if ($user->getLocal() === true && $user->getPassword() === $pass) {
                // On crée un token associant l'utilisateur et les rôles dont il dispose.
                $token = new UsernamePasswordToken($user, null, "main", $user->getRoles());
                // On associe le token au controller de sécurité.
                $this->get("security.context")->setToken($token);
                // On diffuse l'event de connexion.
                $request = $this->get("request");
                $event = new InteractiveLoginEvent($request, $token);
                $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);

                $request->getSession()->getFlashBag()->add('notice', 'Vous êtes maintenant connecté.');

                $referer = $this->getRequest()->headers->get('referer');
                return $this->redirect($referer);
            }
            // Si l'utilisateur n'est pas local et/ou le mot de passe ne correspond pas.
            else {
                // On affiche un message d'erreur.
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Identifiant/Mot de passe incorrect !');

                // On redirige vers la page précédente.
                $referer = $this->getRequest()->headers->get('referer');
                return $this->redirect($referer);
            }
        }
        // Si la connexion LDAP n'est pas valide avec les identifiants fournis et qu'il n'y a pas d'utilisteur associé au login en base de données.
        else {

            // On affiche un message d'erreur.
            $request->getSession()->getFlashBag()->add('noticeErreur', 'Identifiant/Mot de passe incorrect !');

            // On redirige vers l'accueil.
            return $this->redirectToRoute('nox_intranet_accueil');
        }
    }

}
