<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace NoxIntranet\AccueilBundle\MessageAlert;
//
//use Symfony\Component\HttpFoundation\Response;
//
class AccesInterditHTML {
//
//    // Récupère le code de la page courante et y ajout le message d'alerte.
//    public function displayAccesInterdit(Response $response) {
//        $content = $response->getContent();
//
//        // On crée un cookie pour empêcher la réaparition du message d'alert.
//        $expire = strtotime('tomorrow 08am');
//        setcookie("timerMessageAlert", "true", $expire);
//
//        // Code à rajouter
//        $html = "<div id='alertContainer'>";
//        $html .= "<div id='alertMessage'>";
//        $html .= 'test acces interdit';
//        $html .= "<p id='hideAlertButtonParagraph'>";
//        $html .= "<button id='hideAlertButton' onclick=\"$('#blurContainer').replaceWith($('#blurContainer').html()); $('#alertContainer').remove(); menuAnimation();\">J'ai compris</button>";
//        $html .= "</p>";
//        $html .= "</div>";
//        $html .= "</div>";
//        $html .= "<div id='blurContainer' style='filter: blur(3px); -webkit-filter: blur(3px); -moz-filter: blur(3px); -ms-filter: blur(3px); -o-filter: blur(3px);'>";
//
//        // Ajout le texte après le texte spécifié.
//        function str_insert($str, $search, $insert) {
//            $index = strpos($str, $search);
//            if ($index === false) {
//                return $str;
//            }
//            return substr_replace($str, $search . $insert, $index, strlen($search));
//        }
//
//        // Insertion du code dans la page.
//        $newDiv = str_insert($content, '<body onload="menuAnimation();">', $html);
//        $pos = strpos($newDiv, '</body>');
//        $newContent = substr_replace($newDiv, '</div>', $pos, 0);
//
//        // Modification du contenu dans la réponse
//        $response->setContent($newContent);
//
//        return $response;
//    }
//
}
