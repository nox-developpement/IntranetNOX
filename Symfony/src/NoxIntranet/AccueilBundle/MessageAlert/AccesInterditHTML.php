<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AccueilBundle\MessageAlert;

use Symfony\Component\HttpFoundation\Response;

class AccesInterditHTML {

    // Récupère le code de la page courante et y ajout le message d'alerte.
    public function displayAccesInterdit(Response $response, $rootLink) {
        $content = $response->getContent();

        // Code à rajouter
        $html = "<div id='alertContainer'>";
        $html .= "<div id='alertMessage'>";
        $html .= "<p style='text-align: center; font-size: 1.5vw;'>";
        $html .= "<img id='tutoConnexion' src='" . $rootLink . "/Symfony/web/bundles/noxintranetaccueil/images/interdit.png' alt='Accés interdit' style='text-align: center; width: 15%;' /><br />";
        $html .= "Vous n'avez pas les droits requis pour accéder à cette section.";
        $html .= "</p>";
        $html .= "<p id='hideAlertButtonParagraph'>";
        $html .= "<button id='hideAlertButton' onclick=\"";
        $html .= "$('body').children().not($('#alertContainer')).css({";
        $html .= "'filter': 'blur(0px)',";
        $html .= "'-webkit-filter': 'blur(0px)',";
        $html .= "'-moz-filter': 'blur(0px)',";
        $html .= "'-ms-filter': 'blur(0px)',";
        $html .= "'-o-filter': 'blur(0px)'";
        $html .= "});";
        $html .= "$('#alertContainer').remove();";
        $html .="\">";
        $html .= "J'ai compris";
        $html .= "</button>";
        $html .= "</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "<script>";
        $html .= "$(window).load(function () {";
        $html .= "$('body').children().not($('#alertContainer')).css({";
        $html .= "'filter': 'blur(3px)',";
        $html .= "'-webkit-filter': 'blur(3px)',";
        $html .= "'-moz-filter': 'blur(3px)',";
        $html .= "'-ms-filter': 'blur(3px)',";
        $html .= "'-o-filter': 'blur(3px)'";
        $html .= "});";
        $html .= "});";
        $html .= "</script>";

        // Insertion du code dans la page.
        $newContent = $this->str_insert($content, '<body onload="menuAnimation();">', $html);
        // Modification du contenu dans la réponse
        $response->setContent($newContent);

        return $response;
    }

    public function displayConnexionRequise(Response $response, $rootLink) {
        $content = $response->getContent();

        // Code à rajouter
        $html = "<div id='alertContainer'>";
        $html .= "<div id='alertMessage'>";
        $html .= "<p style='text-align: center; font-size: 1.5vw;'>";
        $html .= "Connectez-vous pour accéder à cette section.<br />";
        $html .= "<img id='tutoConnexion' src='" . $rootLink . "/Symfony/web/bundles/noxintranetaccueil/images/tutoConnexion.gif' alt='Tutorial de connexion' style='text-align: center; width: 100%; margin-top: 1%;' />";
        $html .= "</p>";
        $html .= "<p id='hideAlertButtonParagraph'>";
        $html .= "<button id='hideAlertButton' onclick=\"";
        $html .= "$('body').children().not($('#alertContainer')).css({";
        $html .= "'filter': 'blur(0px)',";
        $html .= "'-webkit-filter': 'blur(0px)',";
        $html .= "'-moz-filter': 'blur(0px)',";
        $html .= "'-ms-filter': 'blur(0px)',";
        $html .= "'-o-filter': 'blur(0px)'";
        $html .= "});";
        $html .= "$('#alertContainer').remove();";
        $html .="\">";
        $html .= "J'ai compris";
        $html .= "</button>";
        $html .= "</p>";
        $html .= "</div>";
        $html .= "</div>";
        $html .= "<script>";
        $html .= "$(window).load(function () {";
        $html .= "$('body').children().not($('#alertContainer')).css({";
        $html .= "'filter': 'blur(3px)',";
        $html .= "'-webkit-filter': 'blur(3px)',";
        $html .= "'-moz-filter': 'blur(3px)',";
        $html .= "'-ms-filter': 'blur(3px)',";
        $html .= "'-o-filter': 'blur(3px)'";
        $html .= "});";
        $html .= "});";
        $html .= "</script>";

        // Insertion du code dans la page.
        $newContent = $this->str_insert($content, '<body onload="menuAnimation();">', $html);
        // Modification du contenu dans la réponse
        $response->setContent($newContent);

        return $response;
    }

    // Ajout le texte après le texte spécifié.
    function str_insert($str, $search, $insert) {
        $index = strpos($str, $search);
        if ($index === false) {
            return $str;
        }
        return substr_replace($str, $search . $insert, $index, strlen($search));
    }

}
