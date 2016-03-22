<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
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

        $login = $request->request->get('username');

        $pass = $request->request->get('password');

        $ds = ldap_connect("nox.local");  // On initialise la connexion au domaine (doit être un serveur LDAP valide !)

        if (@ldap_bind($ds, "$login@nox.local", "$pass")) {

            $r = @ldap_bind($ds, "$login@nox.local", "$pass"); // connexion avec user et password

            $em = $this->getDoctrine()->getManager();

            $user = $em->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('username' => $login));

            if (!$user) {
                throw new UsernameNotFoundException("User not found");
            } else {
                $token = new UsernamePasswordToken($user, null, "main", $user->getRoles());
                $this->get("security.context")->setToken($token); //now the user is logged in
                //now dispatch the login event
                $request = $this->get("request");
                $event = new InteractiveLoginEvent($request, $token);
                $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
            }

            $request->getSession()->getFlashBag()->add('notice', 'Vous êtes maintenant connecté.');

            $referer = $this->getRequest()->headers->get('referer');
            return $this->redirect($referer);
        } elseif ($this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('username' => $login)) != null) {
            $user = $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:User')->findOneBy(array('username' => $login));
            if ($user->getPassword() == $pass) {
                $token = new UsernamePasswordToken($user, null, "main", $user->getRoles());
                $this->get("security.context")->setToken($token); //now the user is logged in
                //now dispatch the login event
                $request = $this->get("request");
                $event = new InteractiveLoginEvent($request, $token);
                $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);

                $request->getSession()->getFlashBag()->add('notice', 'Vous êtes maintenant connecté.');

                $referer = $this->getRequest()->headers->get('referer');
                return $this->redirect($referer);
            } else {
                $request->getSession()->getFlashBag()->add('noticeErreur', 'Identifiant/Mot de passe incorrect !');

                $referer = $this->getRequest()->headers->get('referer');
                return $this->redirect($referer);
            }
        } else {

            $request->getSession()->getFlashBag()->add('noticeErreur', 'Identifiant/Mot de passe incorrect !');

            $referer = $this->getRequest()->headers->get('referer');
            return $this->redirect($referer);
        }
    }

}
