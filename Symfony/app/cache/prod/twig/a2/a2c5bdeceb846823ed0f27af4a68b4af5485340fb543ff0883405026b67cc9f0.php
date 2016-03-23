<?php

/* layout.html.twig */
class __TwigTemplate_303dba3b8dd315a1770c8d0abcdfcca4ae1b706d3c25f59ac39816e68f12828a extends Twig_Template
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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc3b92b_0") : $this->env->getExtension('asset')->getAssetUrl("css/fc3b92b_style_1.css");
            // line 14
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "fc3b92b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc3b92b") : $this->env->getExtension('asset')->getAssetUrl("css/fc3b92b.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 16
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
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

            <div id=\"div_menu\">

                <ul id=\"menu\">

                    <li class=\"menuElement\"> <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("nox_intranet_accueil");
        echo "\" class=\"liens\"> Accueil </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("nox_intranet_communication");
        echo "\" class=\"liens\"> Communication </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ressources");
        echo "\" class=\"liens\"> Ressources </a> </li> 

                    <li class=\"menuElement tooltipSupportSI\">  <span class=\"tooltipSupportSIText\">Aide pour les problèmes informatiques.</span> <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_si");
        echo "\" class=\"liens\"> Support SI </a> </li> 

                    <li id=\"google_search\"> 
                        <form id=\"google_form\">
                            <img src =\"";
        // line 66
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
        // line 77
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null) && ((((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMPETENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) || $this->env->getExtension('security')->isGranted("ROLE_PROCEDURES")) || $this->env->getExtension('security')->isGranted("ROLE_FAQ")) || $this->env->getExtension('security')->isGranted("ROLE_CE")) || $this->env->getExtension('security')->isGranted("ROLE_CHSCT")) || $this->env->getExtension('security')->isGranted("ROLE_LIENS")) || $this->env->getExtension('security')->isGranted("ROLE_QUALITE")))) {
            // line 78
            echo "                    <p> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration");
            echo "\"> Administration </a> </p>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_PUBLICATEUR")) {
            // line 80
            echo "                    <p> Publication </p>
                ";
        }
        // line 82
        echo "            </div>
        </div>

        <div id =\"section_principal\">

            <div id=\"contenu\">

                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 90
            echo "                    <p class=\"flashbag\"> 
                        ";
            // line 91
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo " 

                ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "noticeErreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 96
            echo "                    <p class=\"flashbagErreur\"> 
                        ";
            // line 97
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo " 

                <div class=\"messageAcceuil\"> 
                    <h2> ";
        // line 102
        $this->displayBlock('messageAccueil', $context, $blocks);
        echo " </h2>
                    <h3> ";
        // line 103
        $this->displayBlock('sousMessageAccueil', $context, $blocks);
        echo " </h3>
                    <span>";
        // line 104
        $this->displayBlock('textEncart', $context, $blocks);
        echo "</span>
                </div>

                ";
        // line 107
        $this->displayBlock('contenu', $context, $blocks);
        // line 110
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
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/affichageImageResizing.js"), "html", null, true);
        echo "\"/></script>
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/googleSearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/positionement.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/checkboxClick.js"), "html", null, true);
        echo "\"></script>   
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/textareaLogiciel.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/gestionFichiersPopup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteEncartActions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/popupDownloadArchive.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteActions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAdministrationCommunication.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/formImprimanteScript.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/editionLiens.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jscroller2-1.61.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/submitFormAffaires.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/tableurEdition.js"), "html", null, true);
        echo "\"/></script>
<script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/suiviRecherche.js"), "html", null, true);
        echo "\"/></script>

</body>
</html>";
    }

    // line 7
    public function block_titrePage($context, array $blocks = array())
    {
    }

    // line 102
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo " ";
    }

    // line 103
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo " ";
    }

    // line 104
    public function block_textEncart($context, array $blocks = array())
    {
    }

    // line 107
    public function block_contenu($context, array $blocks = array())
    {
        // line 108
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 108,  398 => 107,  393 => 104,  387 => 103,  381 => 102,  376 => 7,  368 => 179,  364 => 178,  360 => 177,  356 => 176,  352 => 175,  348 => 174,  344 => 173,  340 => 172,  336 => 171,  332 => 170,  328 => 169,  324 => 168,  320 => 167,  316 => 166,  312 => 165,  308 => 164,  304 => 163,  300 => 162,  296 => 161,  292 => 160,  240 => 110,  238 => 107,  232 => 104,  228 => 103,  224 => 102,  219 => 99,  210 => 97,  207 => 96,  203 => 95,  199 => 93,  190 => 91,  187 => 90,  183 => 89,  174 => 82,  170 => 80,  164 => 78,  162 => 77,  148 => 66,  141 => 62,  136 => 60,  131 => 58,  126 => 56,  113 => 46,  105 => 41,  99 => 38,  92 => 34,  78 => 23,  69 => 17,  66 => 16,  52 => 14,  48 => 13,  43 => 11,  39 => 10,  36 => 9,  32 => 7,  24 => 1,);
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
/*             <div id="div_menu">*/
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
