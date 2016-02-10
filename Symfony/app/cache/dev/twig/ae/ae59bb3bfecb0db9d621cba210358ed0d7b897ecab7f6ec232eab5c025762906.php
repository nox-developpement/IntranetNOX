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
        $__internal_ce1fdf8ff210baf20f5fac7b406bc69876af594bd0e562ad0fc4e688b7ada8bc = $this->env->getExtension("native_profiler");
        $__internal_ce1fdf8ff210baf20f5fac7b406bc69876af594bd0e562ad0fc4e688b7ada8bc->enter($__internal_ce1fdf8ff210baf20f5fac7b406bc69876af594bd0e562ad0fc4e688b7ada8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc3b92b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc3b92b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fc3b92b_style_1.css");
            // line 10
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
        // line 12
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/favicon.ico"), "html", null, true);
        echo "\" />
        <style type=\"text/css\">
            @font-face {
                font-family: 'NoxFont'; 
                src:    url(";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/MuseoSans_100.otf"), "html", null, true);
        echo ") format('opentype');
            }
        </style>
    </head>

    <body onload=\"menuAnimation();\">

        <header>

            <div id =\"bandeau\">  
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau.png"), "html", null, true);
        echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
            </div>

            ";
        // line 29
        echo twig_include($this->env, $context, "NoxIntranetUserBundle:Security:ADlogin.html.twig");
        echo "

        </header>

        <div id=\"bar_menu\">

            <div id=\"div_menu\">

                <ul id=\"menu\">

                    <li class=\"menuElement\"> <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("nox_intranet_accueil");
        echo "\" class=\"liens\"> Accueil </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("nox_intranet_communication");
        echo "\" class=\"liens\"> Communication </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ressources");
        echo "\" class=\"liens\"> Ressources </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_si");
        echo "\" class=\"liens\" title='Aide pour les problèmes informatiques.'> Support SI </a> </li> 

                    <li id=\"google_search\"> 
                        <form id=\"google_form\">
                            <img src =\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/logoGoogle.png"), "html", null, true);
        echo "\" alt=\"Logo Google\" onmousedown=\"return false;\">
                            <input type=\"text\" id=\"search_input\" name=\"seach_input\" placeholder=\"Rechercher sur Google\">
                            <button id=\"search\" onclick=\"googleSearch(this);\"> Rechercher </button>
                        </form>
                    </li>
                </ul>
            </div>

            <div id=\"administrationBouton\" >
                ";
        // line 58
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && ((((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMPETENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) || $this->env->getExtension('security')->isGranted("ROLE_PROCEDURES")) || $this->env->getExtension('security')->isGranted("ROLE_FAQ")) || $this->env->getExtension('security')->isGranted("ROLE_CE")) || $this->env->getExtension('security')->isGranted("ROLE_CHSCT")) || $this->env->getExtension('security')->isGranted("ROLE_LIENS")) || $this->env->getExtension('security')->isGranted("ROLE_QUALITE")))) {
            // line 59
            echo "                    <p> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration");
            echo "\"> Administration </a> </p>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_PUBLICATEUR")) {
            // line 61
            echo "                    <p> Publication </p>
                ";
        }
        // line 63
        echo "            </div>
        </div>

        <div id =\"section_principal\">


            <div id=\"contenu\">

                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 72
            echo "                    <p class=\"flashbag\"> 
                        ";
            // line 73
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo " 

                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "noticeErreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 78
            echo "                    <p class=\"flashbagErreur\"> 
                        ";
            // line 79
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo " 

                <div class=\"messageAcceuil\"> 
                    <h2> ";
        // line 84
        $this->displayBlock('messageAccueil', $context, $blocks);
        echo " </h2>
                    <h3> ";
        // line 85
        $this->displayBlock('sousMessageAccueil', $context, $blocks);
        echo " </h3>
                    ";
        // line 86
        $this->displayBlock('textEncart', $context, $blocks);
        // line 87
        echo "                </div>

                ";
        // line 89
        $this->displayBlock('contenu', $context, $blocks);
        // line 92
        echo "
            </div>
        </div>

        <script src=";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-2.2.0.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-ui.min.js"), "html", null, true);
        echo "></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
        <script src=";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/googleSearch.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/positionement.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/checkboxClick.js"), "html", null, true);
        echo "></script>   
        <!-- <script src=";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/communicationMenu.js"), "html", null, true);
        echo "></script> -->
        <script src=";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/textareaLogiciel.js"), "html", null, true);
        echo "></script>  
        <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/gestionFichiersPopup.js"), "html", null, true);
        echo "\"></script>
        <script src=";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteEncartActions.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/popupDownloadArchive.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteActions.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAdministrationCommunication.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/formImprimanteScript.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/editionLiens.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jscroller2-1.61.js"), "html", null, true);
        echo "></script>
    </body>
</html>";
        
        $__internal_ce1fdf8ff210baf20f5fac7b406bc69876af594bd0e562ad0fc4e688b7ada8bc->leave($__internal_ce1fdf8ff210baf20f5fac7b406bc69876af594bd0e562ad0fc4e688b7ada8bc_prof);

    }

    // line 7
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9e291c5bef667008139b252c48fbcd06698bc43d8f8143c3f279bd3e99fbc64e = $this->env->getExtension("native_profiler");
        $__internal_9e291c5bef667008139b252c48fbcd06698bc43d8f8143c3f279bd3e99fbc64e->enter($__internal_9e291c5bef667008139b252c48fbcd06698bc43d8f8143c3f279bd3e99fbc64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        
        $__internal_9e291c5bef667008139b252c48fbcd06698bc43d8f8143c3f279bd3e99fbc64e->leave($__internal_9e291c5bef667008139b252c48fbcd06698bc43d8f8143c3f279bd3e99fbc64e_prof);

    }

    // line 84
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_0812659121a9703f2630fc52783867b207364f9a3d3dd855386fef473e60851a = $this->env->getExtension("native_profiler");
        $__internal_0812659121a9703f2630fc52783867b207364f9a3d3dd855386fef473e60851a->enter($__internal_0812659121a9703f2630fc52783867b207364f9a3d3dd855386fef473e60851a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " ";
        
        $__internal_0812659121a9703f2630fc52783867b207364f9a3d3dd855386fef473e60851a->leave($__internal_0812659121a9703f2630fc52783867b207364f9a3d3dd855386fef473e60851a_prof);

    }

    // line 85
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_ebb1f54996bc31ef592bdb1a1e11cf95f7be8eaf2d89dca9e1be71f48d071c1d = $this->env->getExtension("native_profiler");
        $__internal_ebb1f54996bc31ef592bdb1a1e11cf95f7be8eaf2d89dca9e1be71f48d071c1d->enter($__internal_ebb1f54996bc31ef592bdb1a1e11cf95f7be8eaf2d89dca9e1be71f48d071c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo " ";
        
        $__internal_ebb1f54996bc31ef592bdb1a1e11cf95f7be8eaf2d89dca9e1be71f48d071c1d->leave($__internal_ebb1f54996bc31ef592bdb1a1e11cf95f7be8eaf2d89dca9e1be71f48d071c1d_prof);

    }

    // line 86
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_21b44590cea78b3892299200ad2671030cd0e66ba8baf7bfafe59c979eb0aed5 = $this->env->getExtension("native_profiler");
        $__internal_21b44590cea78b3892299200ad2671030cd0e66ba8baf7bfafe59c979eb0aed5->enter($__internal_21b44590cea78b3892299200ad2671030cd0e66ba8baf7bfafe59c979eb0aed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        
        $__internal_21b44590cea78b3892299200ad2671030cd0e66ba8baf7bfafe59c979eb0aed5->leave($__internal_21b44590cea78b3892299200ad2671030cd0e66ba8baf7bfafe59c979eb0aed5_prof);

    }

    // line 89
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4850a9d57d30aa091f3b0e56df16ca0354f18c8ac76ba959bca3b3b376d055e8 = $this->env->getExtension("native_profiler");
        $__internal_4850a9d57d30aa091f3b0e56df16ca0354f18c8ac76ba959bca3b3b376d055e8->enter($__internal_4850a9d57d30aa091f3b0e56df16ca0354f18c8ac76ba959bca3b3b376d055e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 90
        echo "
                ";
        
        $__internal_4850a9d57d30aa091f3b0e56df16ca0354f18c8ac76ba959bca3b3b376d055e8->leave($__internal_4850a9d57d30aa091f3b0e56df16ca0354f18c8ac76ba959bca3b3b376d055e8_prof);

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
        return array (  347 => 90,  341 => 89,  330 => 86,  318 => 85,  306 => 84,  295 => 7,  285 => 113,  281 => 112,  277 => 111,  273 => 110,  269 => 109,  265 => 108,  261 => 107,  257 => 106,  253 => 105,  249 => 104,  245 => 103,  241 => 102,  237 => 101,  233 => 100,  229 => 99,  225 => 98,  221 => 97,  217 => 96,  211 => 92,  209 => 89,  205 => 87,  203 => 86,  199 => 85,  195 => 84,  190 => 81,  181 => 79,  178 => 78,  174 => 77,  170 => 75,  161 => 73,  158 => 72,  154 => 71,  144 => 63,  140 => 61,  134 => 59,  132 => 58,  120 => 49,  113 => 45,  108 => 43,  103 => 41,  98 => 39,  85 => 29,  79 => 26,  66 => 16,  58 => 12,  44 => 10,  39 => 9,  35 => 7,  27 => 1,);
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
/*         {% stylesheets '@NoxIntranetCommunicationBundle/Resources/public/css/style.css' %}*/
/*         <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*         {% endstylesheets %}*/
/*         <link rel="icon" type="image/png" href="{{ asset('bundles/noxintranetcommunication/images/favicon.ico') }}" />*/
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
/*             <div id ="bandeau">  */
/*                 <img src="{{ asset('bundles/noxintranetcommunication/images/bandeau.png') }}" id ="image_bandeau" alt="bandeau" onmousedown="return false;">*/
/*             </div>*/
/* */
/*             {{ include('NoxIntranetUserBundle:Security:ADlogin.html.twig') }}*/
/* */
/*         </header>*/
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
/*                     <li class="menuElement"> <a href="{{ path('nox_intranet_support_si') }}" class="liens" title='Aide pour les problèmes informatiques.'> Support SI </a> </li> */
/* */
/*                     <li id="google_search"> */
/*                         <form id="google_form">*/
/*                             <img src ="{{ asset('bundles/noxintranetcommunication/images/logoGoogle.png') }}" alt="Logo Google" onmousedown="return false;">*/
/*                             <input type="text" id="search_input" name="seach_input" placeholder="Rechercher sur Google">*/
/*                             <button id="search" onclick="googleSearch(this);"> Rechercher </button>*/
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
/*                     {% block textEncart %}{% endblock %}*/
/*                 </div>*/
/* */
/*                 {% block contenu %}*/
/* */
/*                 {% endblock %}*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*         <script src={{ asset('./js/jquery-2.2.0.min.js') }}></script>*/
/*         <script src={{ asset('./js/jquery-ui.min.js') }}></script>*/
/*         <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*         <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*         <script src={{ asset('./js/googleSearch.js') }}></script>*/
/*         <script src={{ asset('./js/menuAnimation.js') }}></script>*/
/*         <script src={{ asset('./js/positionement.js') }}></script>*/
/*         <script src={{ asset('./js/checkboxClick.js') }}></script>   */
/*         <!-- <script src={{ asset('./js/communicationMenu.js') }}></script> -->*/
/*         <script src={{ asset('./js/textareaLogiciel.js') }}></script>  */
/*         <script src="{{ asset('./js/gestionFichiersPopup.js') }}"></script>*/
/*         <script src={{ asset('./js/texteEncartActions.js') }}></script>*/
/*         <script src={{ asset('./js/popupDownloadArchive.js') }}></script>*/
/*         <script src={{ asset('./js/texteActions.js') }}></script>*/
/*         <script src={{ asset('./js/menuAdministrationCommunication.js') }}></script>*/
/*         <script src={{ asset('./js/formImprimanteScript.js') }}></script>*/
/*         <script src={{ asset('./js/editionLiens.js') }}></script>*/
/*         <script src={{ asset('./js/jscroller2-1.61.js') }}></script>*/
/*     </body>*/
/* </html>*/
