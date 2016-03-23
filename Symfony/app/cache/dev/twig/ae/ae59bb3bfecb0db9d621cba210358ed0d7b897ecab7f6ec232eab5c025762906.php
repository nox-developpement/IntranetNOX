<?php

/* ::layout.html.twig */
class __TwigTemplate_f4d6f96a75b40e06dd36fbb052e140b1d2c07b86cd197fa5ffecf3fb4b38a7e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'textEncart' => array($this, 'block_textEncart'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6eab040ba31051869ae08fa73a10840f66561886731882184e639717a3ce22b = $this->env->getExtension("native_profiler");
        $__internal_d6eab040ba31051869ae08fa73a10840f66561886731882184e639717a3ce22b->enter($__internal_d6eab040ba31051869ae08fa73a10840f66561886731882184e639717a3ce22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>

    <head>
        <meta charset=\"utf-8\" />
        <title> Groupe-Nox / ";
        // line 7
        $this->displayBlock('titrePage', $context, $blocks);
        echo "</title>
        ";
        // line 9
        echo "
        <script src=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-2.2.0.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/js.cookie.js"), "html", null, true);
        echo "></script>

        ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc3b92b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc3b92b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fc3b92b_style_1.css");
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "fc3b92b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc3b92b") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fc3b92b.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/Symfony/web/favicon.ico\" />

        <link href=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css\" rel=\"stylesheet\" />
        <style type=\"text/css\">
            @font-face {
                font-family: 'NoxFont'; 
                src:    url(";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/MuseoSans_100.otf"), "html", null, true);
        echo ") format('opentype');
            }
        </style>
    </head>

    <body onload=\"menuAnimation();\">

        <header>

            <div style=\"border: none; width: 15%; display:inline-block; text-align: center; vertical-align: middle; margin-top: 2.5%;\"> <a style=\"cursor: pointer; font-size: 0.85vw;\" onclick=\"\$(function () {
                        \$('#dialog').dialog({width: 970, height: 600});
                    });\"> Plan du site <br /><img style=\"width: 10%;\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetaccueil/images/Map-32.png"), "html", null, true);
        echo "\" onmousedown=\"return false;\"> </a> 
            </div><!-- 
            
            --><div id =\"bandeau\">  
                <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau.png"), "html", null, true);
        echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
            </div>

            ";
        // line 41
        echo twig_include($this->env, $context, "NoxIntranetUserBundle:Security:ADlogin.html.twig");
        echo "

        </header>

        <div id=\"dialog\" title=\"Plan du site\" style=\"display: none; text-align: center;\">
            <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetaccueil/images/PlanIntranet.png"), "html", null, true);
        echo "\" style=\"width: 100%; vertical-align: middle;
                 text-align: center;\">
        </div>

        <div id=\"bar_menu\">

            <div id=\"EmailHelpdesk\">
                <a href=\"mailto:helpdesk@groupe-nox.com\"> Une question ? </a>
            </div><!--

            --><div id=\"div_menu\">

                <ul id=\"menu\">

                    <li class=\"menuElement\"> <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("nox_intranet_accueil");
        echo "\" class=\"liens\"> Accueil </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("nox_intranet_communication");
        echo "\" class=\"liens\"> Communication </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ressources");
        echo "\" class=\"liens\"> Ressources </a> </li> 

                    <li class=\"menuElement tooltipSupportSI\">  <span class=\"tooltipSupportSIText\">Aide pour les problèmes informatiques.</span> <a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_si");
        echo "\" class=\"liens\"> Support SI </a> </li> 

                    <li id=\"google_search\"> 
                        <form id=\"google_form\">
                            <img src =\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/logoRecherche.png"), "html", null, true);
        echo "\" alt=\"Logo Recherche\" onmousedown=\"return false;\">
                            <input type=\"text\" id=\"search_input\" name=\"seach_input\" placeholder=\"Rechercher sur Google\">
                            <button id=\"search\" onclick=\"googleSearch(this)
                                            ;\"> Rechercher 
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

            <div id=\"administrationBouton\" >
                ";
        // line 81
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && ((((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMPETENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) || $this->env->getExtension('security')->isGranted("ROLE_PROCEDURES")) || $this->env->getExtension('security')->isGranted("ROLE_FAQ")) || $this->env->getExtension('security')->isGranted("ROLE_CE")) || $this->env->getExtension('security')->isGranted("ROLE_CHSCT")) || $this->env->getExtension('security')->isGranted("ROLE_LIENS")) || $this->env->getExtension('security')->isGranted("ROLE_QUALITE")))) {
            // line 82
            echo "                    <p> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration");
            echo "\"> Administration </a> </p>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_PUBLICATEUR")) {
            // line 84
            echo "                    <p> Publication </p>
                ";
        }
        // line 86
        echo "            </div>
        </div>

        <div id =\"section_principal\">

            <div id=\"contenu\">

                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 94
            echo "                    <p class=\"flashbag\"> 
                        ";
            // line 95
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo " 

                ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "noticeErreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 100
            echo "                    <p class=\"flashbagErreur\"> 
                        ";
            // line 101
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo " 

                <div class=\"messageAcceuil\"> 
                    <h2> ";
        // line 106
        $this->displayBlock('messageAccueil', $context, $blocks);
        echo " </h2>
                    <h3> ";
        // line 107
        $this->displayBlock('sousMessageAccueil', $context, $blocks);
        echo " </h3>
                    <span>";
        // line 108
        $this->displayBlock('textEncart', $context, $blocks);
        echo "</span>
                </div>

                ";
        // line 111
        $this->displayBlock('contenu', $context, $blocks);
        // line 114
        echo "
            </div>  

        </div>

        <footer> 
            <div>
                <p> @Copyright 2016 - GROUPE NOX - IT Dpt, All rights reserved </p> 
            </div>
        </footer>

        <script>

            function footerAlign() {
                \$('footer').css('display', 'block');
                \$('footer').css('height', 'auto');
                var footerHeight = \$('footer').outerHeight();

                \$('footer').css('height', footerHeight);


            }

            function resizeContenu() {
                \$('#contenu').height(\$('footer').offset().top - \$('header').height() - \$('#bar_menu').height() - \$('footer').height() / 5);
            }


            function centerContent()
            {
                var container = \$('footer div');
                var content = \$('footer div p');
                content.css(\"left\", (container.width() - content.width()) / 2);
                content.css(\"top\", (container.height() - content.height()) / 2);
            }

            \$(document).ready(function () {
                footerAlign();
                centerContent();
                resizeContenu();
            });

            \$(window).resize(function () {
                footerAlign();
                centerContent();
                resizeContenu();
            });

        </script>

        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/affichageImageResizing.js"), "html", null, true);
        echo "\"/></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/googleSearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/positionement.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/checkboxClick.js"), "html", null, true);
        echo "\"></script>   
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/textareaLogiciel.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/gestionFichiersPopup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteEncartActions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/popupDownloadArchive.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteActions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAdministrationCommunication.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/formImprimanteScript.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/editionLiens.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jscroller2-1.61.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/submitFormAffaires.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/tableurEdition.js"), "html", null, true);
        echo "\"/></script>
<script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/suiviRecherche.js"), "html", null, true);
        echo "\"/></script>

</body>
</html>";
        
        $__internal_d6eab040ba31051869ae08fa73a10840f66561886731882184e639717a3ce22b->leave($__internal_d6eab040ba31051869ae08fa73a10840f66561886731882184e639717a3ce22b_prof);

    }

    // line 7
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_e57ba3ef839f1e87d31f8ac68c57ebc2a9ad205b8c057445887f40f0e885f049 = $this->env->getExtension("native_profiler");
        $__internal_e57ba3ef839f1e87d31f8ac68c57ebc2a9ad205b8c057445887f40f0e885f049->enter($__internal_e57ba3ef839f1e87d31f8ac68c57ebc2a9ad205b8c057445887f40f0e885f049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        
        $__internal_e57ba3ef839f1e87d31f8ac68c57ebc2a9ad205b8c057445887f40f0e885f049->leave($__internal_e57ba3ef839f1e87d31f8ac68c57ebc2a9ad205b8c057445887f40f0e885f049_prof);

    }

    // line 106
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_4079f51ad428a7e582de676bd87e85f5c182f9a9cd56b0498de7bb83844e5085 = $this->env->getExtension("native_profiler");
        $__internal_4079f51ad428a7e582de676bd87e85f5c182f9a9cd56b0498de7bb83844e5085->enter($__internal_4079f51ad428a7e582de676bd87e85f5c182f9a9cd56b0498de7bb83844e5085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " ";
        
        $__internal_4079f51ad428a7e582de676bd87e85f5c182f9a9cd56b0498de7bb83844e5085->leave($__internal_4079f51ad428a7e582de676bd87e85f5c182f9a9cd56b0498de7bb83844e5085_prof);

    }

    // line 107
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_7caaee59a5ffc49a98c9e7cd094039078a5c6888fde074c299d6996e7a8027c4 = $this->env->getExtension("native_profiler");
        $__internal_7caaee59a5ffc49a98c9e7cd094039078a5c6888fde074c299d6996e7a8027c4->enter($__internal_7caaee59a5ffc49a98c9e7cd094039078a5c6888fde074c299d6996e7a8027c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo " ";
        
        $__internal_7caaee59a5ffc49a98c9e7cd094039078a5c6888fde074c299d6996e7a8027c4->leave($__internal_7caaee59a5ffc49a98c9e7cd094039078a5c6888fde074c299d6996e7a8027c4_prof);

    }

    // line 108
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_9b9862a75eadda9b316dc64f5c3dd83946e2991e472e956d2e474258ca721ff7 = $this->env->getExtension("native_profiler");
        $__internal_9b9862a75eadda9b316dc64f5c3dd83946e2991e472e956d2e474258ca721ff7->enter($__internal_9b9862a75eadda9b316dc64f5c3dd83946e2991e472e956d2e474258ca721ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        
        $__internal_9b9862a75eadda9b316dc64f5c3dd83946e2991e472e956d2e474258ca721ff7->leave($__internal_9b9862a75eadda9b316dc64f5c3dd83946e2991e472e956d2e474258ca721ff7_prof);

    }

    // line 111
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_82949ef92b0e5a4594e08d55b08965256210a0d4a6f3350f5f765a418a5f008e = $this->env->getExtension("native_profiler");
        $__internal_82949ef92b0e5a4594e08d55b08965256210a0d4a6f3350f5f765a418a5f008e->enter($__internal_82949ef92b0e5a4594e08d55b08965256210a0d4a6f3350f5f765a418a5f008e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 112
        echo "
                ";
        
        $__internal_82949ef92b0e5a4594e08d55b08965256210a0d4a6f3350f5f765a418a5f008e->leave($__internal_82949ef92b0e5a4594e08d55b08965256210a0d4a6f3350f5f765a418a5f008e_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 112,  432 => 111,  421 => 108,  409 => 107,  397 => 106,  386 => 7,  375 => 183,  371 => 182,  367 => 181,  363 => 180,  359 => 179,  355 => 178,  351 => 177,  347 => 176,  343 => 175,  339 => 174,  335 => 173,  331 => 172,  327 => 171,  323 => 170,  319 => 169,  315 => 168,  311 => 167,  307 => 166,  303 => 165,  299 => 164,  247 => 114,  245 => 111,  239 => 108,  235 => 107,  231 => 106,  226 => 103,  217 => 101,  214 => 100,  210 => 99,  206 => 97,  197 => 95,  194 => 94,  190 => 93,  181 => 86,  177 => 84,  171 => 82,  169 => 81,  155 => 70,  148 => 66,  143 => 64,  138 => 62,  133 => 60,  116 => 46,  108 => 41,  102 => 38,  95 => 34,  81 => 23,  72 => 17,  69 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  39 => 9,  35 => 7,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* */
/* <html>*/
/* */
/*     <head>*/
/*         <meta charset="utf-8" />*/
/*         <title> Groupe-Nox / {% block titrePage %}{% endblock %}</title>*/
/*         {# app/Resources/views/layout.html.twig #}*/
/* */
/*         <script src={{ asset('./js/jquery-2.2.0.min.js') }}></script>*/
/*         <script src={{ asset('./js/js.cookie.js') }}></script>*/
/* */
/*         {% stylesheets '@NoxIntranetCommunicationBundle/Resources/public/css/style.css' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/* */
/*         <link rel="icon" type="image/png" href="{{ app.request.getSchemeAndHttpHost() }}/Symfony/web/favicon.ico" />*/
/* */
/*         <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css" rel="stylesheet" />*/
/*         <style type="text/css">*/
/*             @font-face {*/
/*                 font-family: 'NoxFont'; */
/*                 src:    url({{asset('fonts/MuseoSans_100.otf')}}) format('opentype');*/
/*             }*/
/*         </style>*/
/*     </head>*/
/* */
/*     <body onload="menuAnimation();">*/
/* */
/*         <header>*/
/* */
/*             <div style="border: none; width: 15%; display:inline-block; text-align: center; vertical-align: middle; margin-top: 2.5%;"> <a style="cursor: pointer; font-size: 0.85vw;" onclick="$(function () {*/
/*                         $('#dialog').dialog({width: 970, height: 600});*/
/*                     });"> Plan du site <br /><img style="width: 10%;" src="{{ asset('bundles/noxintranetaccueil/images/Map-32.png') }}" onmousedown="return false;"> </a> */
/*             </div><!-- */
/*             */
/*             --><div id ="bandeau">  */
/*                 <img src="{{ asset('bundles/noxintranetcommunication/images/bandeau.png') }}" id ="image_bandeau" alt="bandeau" onmousedown="return false;">*/
/*             </div>*/
/* */
/*             {{ include('NoxIntranetUserBundle:Security:ADlogin.html.twig') }}*/
/* */
/*         </header>*/
/* */
/*         <div id="dialog" title="Plan du site" style="display: none; text-align: center;">*/
/*             <img src="{{ asset('bundles/noxintranetaccueil/images/PlanIntranet.png') }}" style="width: 100%; vertical-align: middle;*/
/*                  text-align: center;">*/
/*         </div>*/
/* */
/*         <div id="bar_menu">*/
/* */
/*             <div id="EmailHelpdesk">*/
/*                 <a href="mailto:helpdesk@groupe-nox.com"> Une question ? </a>*/
/*             </div><!--*/
/* */
/*             --><div id="div_menu">*/
/* */
/*                 <ul id="menu">*/
/* */
/*                     <li class="menuElement"> <a href="{{ path('nox_intranet_accueil') }}" class="liens"> Accueil </a> </li> */
/* */
/*                     <li class="menuElement"> <a href="{{ path('nox_intranet_communication') }}" class="liens"> Communication </a> </li> */
/* */
/*                     <li class="menuElement"> <a href="{{ path('nox_intranet_ressources') }}" class="liens"> Ressources </a> </li> */
/* */
/*                     <li class="menuElement tooltipSupportSI">  <span class="tooltipSupportSIText">Aide pour les problèmes informatiques.</span> <a href="{{ path('nox_intranet_support_si') }}" class="liens"> Support SI </a> </li> */
/* */
/*                     <li id="google_search"> */
/*                         <form id="google_form">*/
/*                             <img src ="{{ asset('bundles/noxintranetcommunication/images/logoRecherche.png') }}" alt="Logo Recherche" onmousedown="return false;">*/
/*                             <input type="text" id="search_input" name="seach_input" placeholder="Rechercher sur Google">*/
/*                             <button id="search" onclick="googleSearch(this)*/
/*                                             ;"> Rechercher */
/*                             </button>*/
/*                         </form>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div id="administrationBouton" >*/
/*                 {% if app.user != null and (is_granted('ROLE_ADMIN') or is_granted('ROLE_REFERENCES') or is_granted('ROLE_COMPETENCES') or is_granted('ROLE_COMMUNICATION') or is_granted('ROLE_PROCEDURES') or is_granted('ROLE_FAQ') or is_granted('ROLE_CE') or is_granted('ROLE_CHSCT') or is_granted('ROLE_LIENS') or is_granted('ROLE_QUALITE')) %}*/
/*                     <p> <a href="{{ path('nox_intranet_administration') }}"> Administration </a> </p>*/
/*                 {% elseif is_granted('ROLE_PUBLICATEUR') %}*/
/*                     <p> Publication </p>*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div id ="section_principal">*/
/* */
/*             <div id="contenu">*/
/* */
/*                 {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*                     <p class="flashbag"> */
/*                         {{ flashMessage }}*/
/*                     </p>*/
/*                 {% endfor %} */
/* */
/*                 {% for flashMessage in app.session.flashbag.get('noticeErreur') %}*/
/*                     <p class="flashbagErreur"> */
/*                         {{ flashMessage }}*/
/*                     </p>*/
/*                 {% endfor %} */
/* */
/*                 <div class="messageAcceuil"> */
/*                     <h2> {% block messageAccueil %} {% endblock %} </h2>*/
/*                     <h3> {% block sousMessageAccueil %} {% endblock %} </h3>*/
/*                     <span>{% block textEncart %}{% endblock %}</span>*/
/*                 </div>*/
/* */
/*                 {% block contenu %}*/
/* */
/*                 {% endblock %}*/
/* */
/*             </div>  */
/* */
/*         </div>*/
/* */
/*         <footer> */
/*             <div>*/
/*                 <p> @Copyright 2016 - GROUPE NOX - IT Dpt, All rights reserved </p> */
/*             </div>*/
/*         </footer>*/
/* */
/*         <script>*/
/* */
/*             function footerAlign() {*/
/*                 $('footer').css('display', 'block');*/
/*                 $('footer').css('height', 'auto');*/
/*                 var footerHeight = $('footer').outerHeight();*/
/* */
/*                 $('footer').css('height', footerHeight);*/
/* */
/* */
/*             }*/
/* */
/*             function resizeContenu() {*/
/*                 $('#contenu').height($('footer').offset().top - $('header').height() - $('#bar_menu').height() - $('footer').height() / 5);*/
/*             }*/
/* */
/* */
/*             function centerContent()*/
/*             {*/
/*                 var container = $('footer div');*/
/*                 var content = $('footer div p');*/
/*                 content.css("left", (container.width() - content.width()) / 2);*/
/*                 content.css("top", (container.height() - content.height()) / 2);*/
/*             }*/
/* */
/*             $(document).ready(function () {*/
/*                 footerAlign();*/
/*                 centerContent();*/
/*                 resizeContenu();*/
/*             });*/
/* */
/*             $(window).resize(function () {*/
/*                 footerAlign();*/
/*                 centerContent();*/
/*                 resizeContenu();*/
/*             });*/
/* */
/*         </script>*/
/* */
/*         <script src="{{ asset('./js/affichageImageResizing.js') }}"/></script>*/
/*     <script src="{{ asset('./js/jquery-ui.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*     <script src="{{ asset('./js/googleSearch.js') }}"></script>*/
/*     <script src="{{ asset('./js/menuAnimation.js') }}"></script>*/
/*     <script src="{{ asset('./js/positionement.js') }}"></script>*/
/*     <script src="{{ asset('./js/checkboxClick.js') }}"></script>   */
/*     <script src="{{ asset('./js/textareaLogiciel.js') }}"></script>  */
/*     <script src="{{ asset('./js/gestionFichiersPopup.js') }}"></script>*/
/*     <script src="{{ asset('./js/texteEncartActions.js') }}"></script>*/
/*     <script src="{{ asset('./js/popupDownloadArchive.js') }}"></script>*/
/*     <script src="{{ asset('./js/texteActions.js') }}"></script>*/
/*     <script src="{{ asset('./js/menuAdministrationCommunication.js') }}"></script>*/
/*     <script src="{{ asset('./js/formImprimanteScript.js') }}"></script>*/
/*     <script src="{{ asset('./js/editionLiens.js') }}"></script>*/
/*     <script src="{{ asset('./js/jscroller2-1.61.js') }}"></script>*/
/*     <script src="{{ asset('./js/submitFormAffaires.js') }}"></script>*/
/*     <script src="{{ asset('./js/tableurEdition.js') }}"/></script>*/
/* <script src="{{ asset('./js/suiviRecherche.js') }}"/></script>*/
/* */
/* </body>*/
/* </html>*/
