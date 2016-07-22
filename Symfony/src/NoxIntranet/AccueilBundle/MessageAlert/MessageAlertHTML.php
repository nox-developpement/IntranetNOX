<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MessageAlertHTML
 *
 * @author t.besson
 */

namespace NoxIntranet\AccueilBundle\MessageAlert;

use Symfony\Component\HttpFoundation\Response;

class MessageAlertHTML {

    // Récupère le code de la page courante et y ajout le message d'alerte.
    public function displayMessageAlert(Response $response, $message) {
        $content = $response->getContent();

        // On crée un cookie pour empêcher la réaparition du message d'alert.
        $expire = strtotime('tomorrow 08am');
        setcookie("timerMessageAlert", "true", $expire);

        // Code à rajouter
        $html = "<div id='alertContainer'>";
        $html .= "<div id='alertMessage'>";
        $html .= $message;
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
        $html .= "if($('#alertContainer').length) {";
        $html .= "$('body').children().not($('#alertContainer')).css({";
        $html .= "'filter': 'blur(3px)',";
        $html .= "'-webkit-filter': 'blur(3px)',";
        $html .= "'-moz-filter': 'blur(3px)',";
        $html .= "'-ms-filter': 'blur(3px)',";
        $html .= "'-o-filter': 'blur(3px)'";
        $html .= "});";
        $html .= "}";
        $html .= "});";
        $html .= "</script>";

        // Ajout le texte après le texte spécifié.
        function str_insert($str, $search, $insert) {
            $index = strpos($str, $search);
            if ($index === false) {
                return $str;
            }
            return substr_replace($str, $search . $insert, $index, strlen($search));
        }

        // Insertion du code dans la page.
        $newContent = str_insert($content, '<body onload="menuAnimation();">', $html);

        // Modification du contenu dans la réponse
        $response->setContent($newContent);

        return $response;
    }

}
