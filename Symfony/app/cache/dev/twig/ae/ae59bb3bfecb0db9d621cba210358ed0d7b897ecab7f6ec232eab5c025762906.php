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
        $__internal_43dfc56b6795f70f24cb41c131a691bbeb3f34d1fcc39358ceef829a3bbd44f9 = $this->env->getExtension("native_profiler");
        $__internal_43dfc56b6795f70f24cb41c131a691bbeb3f34d1fcc39358ceef829a3bbd44f9->enter($__internal_43dfc56b6795f70f24cb41c131a691bbeb3f34d1fcc39358ceef829a3bbd44f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/favicon.ico"), "html", null, true);
        echo "\" />
        <link href=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css\" rel=\"stylesheet\" />
        <style type=\"text/css\">
            @font-face {
                font-family: 'NoxFont'; 
                src:    url(";
        // line 22
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
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetaccueil/images/Map-32.png"), "html", null, true);
        echo "\" onmousedown=\"return false;\"> </a> 
            </div><!-- 
            
            --><div id =\"bandeau\">  
                <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau.png"), "html", null, true);
        echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
            </div>

            ";
        // line 40
        echo twig_include($this->env, $context, "NoxIntranetUserBundle:Security:ADlogin.html.twig");
        echo "

        </header>

        <div id=\"dialog\" title=\"Plan du site\" style=\"display: none;\">
            <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetaccueil/images/PlanIntranet.svg"), "html", null, true);
        echo "\">
        </div>

        <div id=\"bar_menu\">

            <div id=\"div_menu\">

                <ul id=\"menu\">

                    <li class=\"menuElement\"> <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("nox_intranet_accueil");
        echo "\" class=\"liens\"> Accueil </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("nox_intranet_communication");
        echo "\" class=\"liens\"> Communication </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ressources");
        echo "\" class=\"liens\"> Ressources </a> </li> 

                    <li class=\"menuElement tooltipSupportSI\">  <span class=\"tooltipSupportSIText\">Aide pour les problèmes informatiques.</span> <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_si");
        echo "\" class=\"liens\"> Support SI </a> </li> 

                    <li id=\"google_search\"> 
                        <form id=\"google_form\">
                            <img src =\"";
        // line 64
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
        // line 75
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && ((((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMPETENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) || $this->env->getExtension('security')->isGranted("ROLE_PROCEDURES")) || $this->env->getExtension('security')->isGranted("ROLE_FAQ")) || $this->env->getExtension('security')->isGranted("ROLE_CE")) || $this->env->getExtension('security')->isGranted("ROLE_CHSCT")) || $this->env->getExtension('security')->isGranted("ROLE_LIENS")) || $this->env->getExtension('security')->isGranted("ROLE_QUALITE")))) {
            // line 76
            echo "                    <p> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration");
            echo "\"> Administration </a> </p>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_PUBLICATEUR")) {
            // line 78
            echo "                    <p> Publication </p>
                ";
        }
        // line 80
        echo "            </div>
        </div>

        <div id =\"section_principal\">

            <div id=\"contenu\">

                ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 88
            echo "                    <p class=\"flashbag\"> 
                        ";
            // line 89
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo " 

                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "noticeErreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 94
            echo "                    <p class=\"flashbagErreur\"> 
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

                <div class=\"messageAcceuil\"> 
                    <h2> ";
        // line 100
        $this->displayBlock('messageAccueil', $context, $blocks);
        echo " </h2>
                    <h3> ";
        // line 101
        $this->displayBlock('sousMessageAccueil', $context, $blocks);
        echo " </h3>
                    <span>";
        // line 102
        $this->displayBlock('textEncart', $context, $blocks);
        echo "</span>
                </div>

                ";
        // line 105
        $this->displayBlock('contenu', $context, $blocks);
        // line 108
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
                \$('#contenu').height(\$('footer').offset().top - \$('header').height() - \$('#bar_menu').height() - \$('footer').height()/5);
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
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/affichageImageResizing.js"), "html", null, true);
        echo "\"/></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/googleSearch.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/positionement.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/checkboxClick.js"), "html", null, true);
        echo "\"></script>   
    <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/textareaLogiciel.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/gestionFichiersPopup.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteEncartActions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/popupDownloadArchive.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteActions.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAdministrationCommunication.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/formImprimanteScript.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/editionLiens.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jscroller2-1.61.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/submitFormAffaires.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/tableurEdition.js"), "html", null, true);
        echo "\"/></script>
<script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/suiviRecherche.js"), "html", null, true);
        echo "\"/></script>

</body>
</html>";
        
        $__internal_43dfc56b6795f70f24cb41c131a691bbeb3f34d1fcc39358ceef829a3bbd44f9->leave($__internal_43dfc56b6795f70f24cb41c131a691bbeb3f34d1fcc39358ceef829a3bbd44f9_prof);

    }

    // line 7
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_98308c7f22299902141643bbe02f515f31d00ea64c0fac2d525608faa9ba6288 = $this->env->getExtension("native_profiler");
        $__internal_98308c7f22299902141643bbe02f515f31d00ea64c0fac2d525608faa9ba6288->enter($__internal_98308c7f22299902141643bbe02f515f31d00ea64c0fac2d525608faa9ba6288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        
        $__internal_98308c7f22299902141643bbe02f515f31d00ea64c0fac2d525608faa9ba6288->leave($__internal_98308c7f22299902141643bbe02f515f31d00ea64c0fac2d525608faa9ba6288_prof);

    }

    // line 100
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_3bdd5e31ca3395f23efc7ee71ad67412ae48bc984368e816d103fd4e1464df65 = $this->env->getExtension("native_profiler");
        $__internal_3bdd5e31ca3395f23efc7ee71ad67412ae48bc984368e816d103fd4e1464df65->enter($__internal_3bdd5e31ca3395f23efc7ee71ad67412ae48bc984368e816d103fd4e1464df65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " ";
        
        $__internal_3bdd5e31ca3395f23efc7ee71ad67412ae48bc984368e816d103fd4e1464df65->leave($__internal_3bdd5e31ca3395f23efc7ee71ad67412ae48bc984368e816d103fd4e1464df65_prof);

    }

    // line 101
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_6f64281cf0493b33d813b874a804d2ce79844a85f8e47b2c6a052e62a3702709 = $this->env->getExtension("native_profiler");
        $__internal_6f64281cf0493b33d813b874a804d2ce79844a85f8e47b2c6a052e62a3702709->enter($__internal_6f64281cf0493b33d813b874a804d2ce79844a85f8e47b2c6a052e62a3702709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo " ";
        
        $__internal_6f64281cf0493b33d813b874a804d2ce79844a85f8e47b2c6a052e62a3702709->leave($__internal_6f64281cf0493b33d813b874a804d2ce79844a85f8e47b2c6a052e62a3702709_prof);

    }

    // line 102
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_c551a5a0653db414fe452052b5b3d61fd855c96590c81caf3eeb9017e480786e = $this->env->getExtension("native_profiler");
        $__internal_c551a5a0653db414fe452052b5b3d61fd855c96590c81caf3eeb9017e480786e->enter($__internal_c551a5a0653db414fe452052b5b3d61fd855c96590c81caf3eeb9017e480786e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        
        $__internal_c551a5a0653db414fe452052b5b3d61fd855c96590c81caf3eeb9017e480786e->leave($__internal_c551a5a0653db414fe452052b5b3d61fd855c96590c81caf3eeb9017e480786e_prof);

    }

    // line 105
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c5b54502a64fa622c268b7173f56394cecc3bdc670b83bcf14605358ab930793 = $this->env->getExtension("native_profiler");
        $__internal_c5b54502a64fa622c268b7173f56394cecc3bdc670b83bcf14605358ab930793->enter($__internal_c5b54502a64fa622c268b7173f56394cecc3bdc670b83bcf14605358ab930793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 106
        echo "
                ";
        
        $__internal_c5b54502a64fa622c268b7173f56394cecc3bdc670b83bcf14605358ab930793->leave($__internal_c5b54502a64fa622c268b7173f56394cecc3bdc670b83bcf14605358ab930793_prof);

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
        return array (  432 => 106,  426 => 105,  415 => 102,  403 => 101,  391 => 100,  380 => 7,  369 => 177,  365 => 176,  361 => 175,  357 => 174,  353 => 173,  349 => 172,  345 => 171,  341 => 170,  337 => 169,  333 => 168,  329 => 167,  325 => 166,  321 => 165,  317 => 164,  313 => 163,  309 => 162,  305 => 161,  301 => 160,  297 => 159,  293 => 158,  241 => 108,  239 => 105,  233 => 102,  229 => 101,  225 => 100,  220 => 97,  211 => 95,  208 => 94,  204 => 93,  200 => 91,  191 => 89,  188 => 88,  184 => 87,  175 => 80,  171 => 78,  165 => 76,  163 => 75,  149 => 64,  142 => 60,  137 => 58,  132 => 56,  127 => 54,  115 => 45,  107 => 40,  101 => 37,  94 => 33,  80 => 22,  72 => 17,  69 => 16,  55 => 14,  51 => 13,  46 => 11,  42 => 10,  39 => 9,  35 => 7,  27 => 1,);
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
/*         <link rel="icon" type="image/png" href="{{ asset('bundles/noxintranetcommunication/images/favicon.ico') }}" />*/
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
/*         <div id="dialog" title="Plan du site" style="display: none;">*/
/*             <img src="{{ asset('bundles/noxintranetaccueil/images/PlanIntranet.svg') }}">*/
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
/*                 $('#contenu').height($('footer').offset().top - $('header').height() - $('#bar_menu').height() - $('footer').height()/5);*/
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
