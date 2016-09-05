<?php

/* ::layout.html.twig */
class __TwigTemplate_d461e27564dce4f6e1fe153dd56915a00c9a88633ca3cdfe13b514754a76744f extends Twig_Template
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
        $__internal_8544ccce97378db00bb13829fbc6167ae7a5ac676c03ca0d2960fe61a3535ec0 = $this->env->getExtension("native_profiler");
        $__internal_8544ccce97378db00bb13829fbc6167ae7a5ac676c03ca0d2960fe61a3535ec0->enter($__internal_8544ccce97378db00bb13829fbc6167ae7a5ac676c03ca0d2960fe61a3535ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteActions.js"), "html", null, true);
        echo "\"></script>

        ";
        // line 14
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc3b92b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc3b92b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fc3b92b_style_1.css");
            // line 15
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
        // line 17
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/Symfony/web/favicon.ico\" />

        <link href=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css\" rel=\"stylesheet\" />
        <style type=\"text/css\">
            @font-face {
                font-family: 'NoxFont'; 
                src:    url(";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/MuseoSans_100.otf"), "html", null, true);
        echo ") format('opentype');
            }

            #alert {
                background-image: url(";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetaccueil/images/AccueilIntranetBackground.png"), "html", null, true);
        echo ");
                background-position: center; 
                background-repeat: no-repeat;
                background-size: 100%;
            }
        </style>
    </head>

    <body onload=\"menuAnimation();\">

        <header>

            <div style=\"border: none; width: 15%; display:inline-block; text-align: center; vertical-align: middle; margin-top: 2.5%;\"> <a style=\"cursor: pointer; font-size: 0.85vw;\" onclick=\"\$(function () {
                        \$('#dialog').dialog({width: 970, height: 600});
                    });\"> Plan du site <br /><img style=\"width: 10%;\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetaccueil/images/Map-32.png"), "html", null, true);
        echo "\" onmousedown=\"return false;\"> </a> 
            </div><!-- 
            
            --><div id =\"bandeau\">  
                <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau.png"), "html", null, true);
        echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
            </div>

            ";
        // line 49
        echo twig_include($this->env, $context, "NoxIntranetUserBundle:Security:ADlogin.html.twig");
        echo "

        </header>

        <div id=\"dialog\" title=\"Plan du site\" style=\"display: none; text-align: center;\">
            <img src=\"";
        // line 54
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
        // line 68
        echo $this->env->getExtension('routing')->getPath("nox_intranet_accueil");
        echo "\" class=\"liens\"> Accueil </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("nox_intranet_communication");
        echo "\" class=\"liens\"> Communication </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ressources");
        echo "\" class=\"liens\"> Ressources </a> </li> 

                    <li class=\"menuElement tooltipSupportSI\">  <span class=\"tooltipSupportSIText\">Aide pour les problèmes informatiques.</span> <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_si");
        echo "\" class=\"liens\"> Support SI </a> </li> 

                    <li id=\"google_search\"> 
                        <form id=\"google_form\">
                            <img src =\"";
        // line 78
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
        // line 89
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && (((((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMPETENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) || $this->env->getExtension('security')->isGranted("ROLE_PROCEDURES")) || $this->env->getExtension('security')->isGranted("ROLE_FAQ")) || $this->env->getExtension('security')->isGranted("ROLE_CE")) || $this->env->getExtension('security')->isGranted("ROLE_CHSCT")) || $this->env->getExtension('security')->isGranted("ROLE_LIENS")) || $this->env->getExtension('security')->isGranted("ROLE_QUALITE")) || $this->env->getExtension('security')->isGranted("ROLE_RH")))) {
            // line 90
            echo "                    <p> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration");
            echo "\"> Administration </a> </p>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_PUBLICATEUR")) {
            // line 92
            echo "                    <p> Publication </p>
                ";
        }
        // line 94
        echo "            </div>
        </div>

        <div id =\"section_principal\">

            <div id=\"contenu\">

                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 102
            echo "                    <p class=\"flashbag\"> 
                        ";
            // line 103
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo " 

                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "noticeErreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 108
            echo "                    <p class=\"flashbagErreur\"> 
                        ";
            // line 109
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo " 

                <div class=\"messageAcceuil\"> 
                    <h2> ";
        // line 114
        $this->displayBlock('messageAccueil', $context, $blocks);
        echo " </h2>
                    <h3> ";
        // line 115
        $this->displayBlock('sousMessageAccueil', $context, $blocks);
        echo " </h3>
                    <span>";
        // line 116
        $this->displayBlock('textEncart', $context, $blocks);
        echo "</span>
                </div>

                ";
        // line 119
        $this->displayBlock('contenu', $context, $blocks);
        // line 122
        echo "
            </div>  

        </div>

        <footer> 
            <div>
                <p> @Copyright 2016 - <a href=\"http://groupe-nox.com/\" target=\"_blank\">GROUPE NOX</a> - IT Dpt, All rights reserved - ";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["intranet_version"]) ? $context["intranet_version"] : $this->getContext($context, "intranet_version")), "html", null, true);
        echo " </p> 
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

            \$(window).load(function () {
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
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/affichageImageResizing.js"), "html", null, true);
        echo "\"/></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/googleSearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/positionement.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/checkboxClick.js"), "html", null, true);
        echo "\"></script>   
    <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/textareaLogiciel.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/gestionFichiersPopup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteEncartActions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/popupDownloadArchive.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAdministrationCommunication.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/formImprimanteScript.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/editionLiens.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jscroller2-1.61.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/submitFormAffaires.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/tableurEdition.js"), "html", null, true);
        echo "\"/></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/suiviRecherche.js"), "html", null, true);
        echo "\"/></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery.transit.min.js"), "html", null, true);
        echo "\"/></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/tableHeadFixer.js"), "html", null, true);
        echo "\"/></script>

</body>

</html>";
        
        $__internal_8544ccce97378db00bb13829fbc6167ae7a5ac676c03ca0d2960fe61a3535ec0->leave($__internal_8544ccce97378db00bb13829fbc6167ae7a5ac676c03ca0d2960fe61a3535ec0_prof);

    }

    // line 7
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_d43c01f98b018d3cd70a44c4118fedc405b4e81c29409ab0e915306e82547dbc = $this->env->getExtension("native_profiler");
        $__internal_d43c01f98b018d3cd70a44c4118fedc405b4e81c29409ab0e915306e82547dbc->enter($__internal_d43c01f98b018d3cd70a44c4118fedc405b4e81c29409ab0e915306e82547dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        
        $__internal_d43c01f98b018d3cd70a44c4118fedc405b4e81c29409ab0e915306e82547dbc->leave($__internal_d43c01f98b018d3cd70a44c4118fedc405b4e81c29409ab0e915306e82547dbc_prof);

    }

    // line 114
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_f3af4ef3766881f6d85f05773270c119bb66fe1a95c2c7323743822bd3d184dd = $this->env->getExtension("native_profiler");
        $__internal_f3af4ef3766881f6d85f05773270c119bb66fe1a95c2c7323743822bd3d184dd->enter($__internal_f3af4ef3766881f6d85f05773270c119bb66fe1a95c2c7323743822bd3d184dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " ";
        
        $__internal_f3af4ef3766881f6d85f05773270c119bb66fe1a95c2c7323743822bd3d184dd->leave($__internal_f3af4ef3766881f6d85f05773270c119bb66fe1a95c2c7323743822bd3d184dd_prof);

    }

    // line 115
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_aecbbe859cf6f53d5c7693ed3b7348cfcf683844e3160e71a3ec49ade6dbdea5 = $this->env->getExtension("native_profiler");
        $__internal_aecbbe859cf6f53d5c7693ed3b7348cfcf683844e3160e71a3ec49ade6dbdea5->enter($__internal_aecbbe859cf6f53d5c7693ed3b7348cfcf683844e3160e71a3ec49ade6dbdea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo " ";
        
        $__internal_aecbbe859cf6f53d5c7693ed3b7348cfcf683844e3160e71a3ec49ade6dbdea5->leave($__internal_aecbbe859cf6f53d5c7693ed3b7348cfcf683844e3160e71a3ec49ade6dbdea5_prof);

    }

    // line 116
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_f8b05f5a39aaefef4ef42061d249f38875780f986fada788208ca879edc87a52 = $this->env->getExtension("native_profiler");
        $__internal_f8b05f5a39aaefef4ef42061d249f38875780f986fada788208ca879edc87a52->enter($__internal_f8b05f5a39aaefef4ef42061d249f38875780f986fada788208ca879edc87a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        
        $__internal_f8b05f5a39aaefef4ef42061d249f38875780f986fada788208ca879edc87a52->leave($__internal_f8b05f5a39aaefef4ef42061d249f38875780f986fada788208ca879edc87a52_prof);

    }

    // line 119
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_46f43dd0c31ed39186c3992c30fdda08f44a4c5292ccae75b141644a452b89c2 = $this->env->getExtension("native_profiler");
        $__internal_46f43dd0c31ed39186c3992c30fdda08f44a4c5292ccae75b141644a452b89c2->enter($__internal_46f43dd0c31ed39186c3992c30fdda08f44a4c5292ccae75b141644a452b89c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 120
        echo "
                ";
        
        $__internal_46f43dd0c31ed39186c3992c30fdda08f44a4c5292ccae75b141644a452b89c2->leave($__internal_46f43dd0c31ed39186c3992c30fdda08f44a4c5292ccae75b141644a452b89c2_prof);

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
        return array (  460 => 120,  454 => 119,  443 => 116,  431 => 115,  419 => 114,  408 => 7,  396 => 192,  392 => 191,  388 => 190,  384 => 189,  380 => 188,  376 => 187,  372 => 186,  368 => 185,  364 => 184,  360 => 183,  356 => 182,  352 => 181,  348 => 180,  344 => 179,  340 => 178,  336 => 177,  332 => 176,  328 => 175,  324 => 174,  320 => 173,  316 => 172,  270 => 129,  261 => 122,  259 => 119,  253 => 116,  249 => 115,  245 => 114,  240 => 111,  231 => 109,  228 => 108,  224 => 107,  220 => 105,  211 => 103,  208 => 102,  204 => 101,  195 => 94,  191 => 92,  185 => 90,  183 => 89,  169 => 78,  162 => 74,  157 => 72,  152 => 70,  147 => 68,  130 => 54,  122 => 49,  116 => 46,  109 => 42,  92 => 28,  85 => 24,  76 => 18,  73 => 17,  59 => 15,  55 => 14,  50 => 12,  46 => 11,  42 => 10,  39 => 9,  35 => 7,  27 => 1,);
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
/*         <script src="{{ asset('./js/texteActions.js') }}"></script>*/
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
/* */
/*             #alert {*/
/*                 background-image: url({{ asset('bundles/noxintranetaccueil/images/AccueilIntranetBackground.png') }});*/
/*                 background-position: center; */
/*                 background-repeat: no-repeat;*/
/*                 background-size: 100%;*/
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
/*                 {% if app.user != null and (is_granted('ROLE_ADMIN') or is_granted('ROLE_REFERENCES') or is_granted('ROLE_COMPETENCES') or is_granted('ROLE_COMMUNICATION') or is_granted('ROLE_PROCEDURES') or is_granted('ROLE_FAQ') or is_granted('ROLE_CE') or is_granted('ROLE_CHSCT') or is_granted('ROLE_LIENS') or is_granted('ROLE_QUALITE') or is_granted('ROLE_RH')) %}*/
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
/*                 <p> @Copyright 2016 - <a href="http://groupe-nox.com/" target="_blank">GROUPE NOX</a> - IT Dpt, All rights reserved - {{ intranet_version }} </p> */
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
/*             $(window).load(function () {*/
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
/*     <script src="{{ asset('./js/menuAdministrationCommunication.js') }}"></script>*/
/*     <script src="{{ asset('./js/formImprimanteScript.js') }}"></script>*/
/*     <script src="{{ asset('./js/editionLiens.js') }}"></script>*/
/*     <script src="{{ asset('./js/jscroller2-1.61.js') }}"></script>*/
/*     <script src="{{ asset('./js/submitFormAffaires.js') }}"></script>*/
/*     <script src="{{ asset('./js/tableurEdition.js') }}"/></script>*/
/* <script src="{{ asset('./js/suiviRecherche.js') }}"/></script>*/
/* <script src="{{ asset('./js/jquery.transit.min.js') }}"/></script>*/
/* <script src="{{ asset('./js/tableHeadFixer.js') }}"/></script>*/
/* */
/* </body>*/
/* */
/* </html>*/
