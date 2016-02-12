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
        $__internal_719c6d98b4391c1d95e0cb9754559a47e441f4499cd266f712d43a362afc25ca = $this->env->getExtension("native_profiler");
        $__internal_719c6d98b4391c1d95e0cb9754559a47e441f4499cd266f712d43a362afc25ca->enter($__internal_719c6d98b4391c1d95e0cb9754559a47e441f4499cd266f712d43a362afc25ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        <script type=\"text/javascript\">
            function changementSkin(\$skin) {
                if (\$skin === 'normal') {
                    Cookies.set(\"skin\", \"normal\");
                    location.reload();
                } else if (\$skin === 'bammez') {
                    Cookies.set(\"skin\", \"bammez\");
                    location.reload();
                }
            }
        </script>

        ";
        // line 24
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "skin"), "method") == null)) {
            // line 25
            echo "            ";
            $context["skin"] = "normal";
            // line 26
            echo "        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "skin"), "method") == "normal")) {
            // line 27
            echo "            ";
            $context["skin"] = "normal";
            // line 28
            echo "        ";
        } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "skin"), "method") == "bammez")) {
            // line 29
            echo "            ";
            $context["skin"] = "bammez";
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        ";
        // line 32
        if (((isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin")) == "normal")) {
            // line 33
            echo "            ";
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "fc3b92b_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc3b92b_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fc3b92b_style_1.css");
                // line 34
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" type=\"text/css\" />
            ";
            } else {
                // asset "fc3b92b"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_fc3b92b") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/fc3b92b.css");
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" type=\"text/css\" />
            ";
            }
            unset($context["asset_url"]);
            // line 36
            echo "        ";
        } else {
            echo " 
            ";
            // line 37
            if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
                // asset "9cd9840_0"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9cd9840_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/9cd9840_style_bammez_1.css");
                // line 38
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" type=\"text/css\" />
            ";
            } else {
                // asset "9cd9840"
                $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9cd9840") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/9cd9840.css");
                echo "            <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
                echo "\" type=\"text/css\" />
            ";
            }
            unset($context["asset_url"]);
            // line 40
            echo "        ";
        }
        // line 41
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/favicon.ico"), "html", null, true);
        echo "\" />
        <style type=\"text/css\">
            @font-face {
                font-family: 'NoxFont'; 
                src:    url(";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/MuseoSans_100.otf"), "html", null, true);
        echo ") format('opentype');
            }
        </style>
    </head>

    <body onload=\"";
        // line 51
        if (((isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin")) == "normal")) {
            echo "menuAnimation();";
        } else {
            echo "menuAnimationBammez();";
        }
        echo "\">

        <header>

            <div id =\"bandeau\">  
                ";
        // line 56
        if (((isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin")) == "normal")) {
            // line 57
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau.png"), "html", null, true);
            echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
                ";
        } else {
            // line 58
            echo " 
                    <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau_bammez.png"), "html", null, true);
            echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
                ";
        }
        // line 61
        echo "            </div>

            ";
        // line 63
        echo twig_include($this->env, $context, "NoxIntranetUserBundle:Security:ADlogin.html.twig");
        echo "

        </header>

        <div id=\"bar_menu\">

            <div id=\"selectionSkinBouton\" >
                <span></span>
                <p>Apparence : </p>
                <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/CarreBleuClair.png"), "html", null, true);
        echo "\" onclick=\"changementSkin('bammez');\">
                <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/CarreBleuFonce.png"), "html", null, true);
        echo "\" onclick=\"changementSkin('normal');\">
            </div>

            <div id=\"div_menu\">

                <ul id=\"menu\">

                    <li class=\"menuElement\"> <a href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("nox_intranet_accueil");
        echo "\" class=\"liens\"> Accueil </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("nox_intranet_communication");
        echo "\" class=\"liens\"> Communication </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 84
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ressources");
        echo "\" class=\"liens\"> Ressources </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_si");
        echo "\" class=\"liens\" title='Aide pour les problèmes informatiques.'> Support SI </a> </li> 

                    <li id=\"google_search\"> 
                        <form id=\"google_form\">
                            ";
        // line 90
        if (((isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin")) == "normal")) {
            // line 91
            echo "                                <img src =\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/logoGoogle.png"), "html", null, true);
            echo "\" alt=\"Logo Google\" onmousedown=\"return false;\">
                            ";
        } else {
            // line 92
            echo " 
                                <img src =\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/logoRecherche.png"), "html", null, true);
            echo "\" alt=\"Logo Google\" onmousedown=\"return false;\">
                            ";
        }
        // line 95
        echo "
                            <input type=\"text\" id=\"search_input\" name=\"seach_input\" placeholder=\"Rechercher sur Google\">
                            <button id=\"search\" onclick=\"googleSearch(this);\"> Rechercher </button>
                        </form>
                    </li>
                </ul>
            </div>

            <div id=\"administrationBouton\" >
                ";
        // line 104
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && ((((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMPETENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) || $this->env->getExtension('security')->isGranted("ROLE_PROCEDURES")) || $this->env->getExtension('security')->isGranted("ROLE_FAQ")) || $this->env->getExtension('security')->isGranted("ROLE_CE")) || $this->env->getExtension('security')->isGranted("ROLE_CHSCT")) || $this->env->getExtension('security')->isGranted("ROLE_LIENS")) || $this->env->getExtension('security')->isGranted("ROLE_QUALITE")))) {
            // line 105
            echo "                    <p> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration");
            echo "\"> Administration </a> </p>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_PUBLICATEUR")) {
            // line 107
            echo "                    <p> Publication </p>
                ";
        }
        // line 109
        echo "            </div>
        </div>

        <div id =\"section_principal\">


            <div id=\"contenu\">

                ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 118
            echo "                    <p class=\"flashbag\"> 
                        ";
            // line 119
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo " 

                ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "noticeErreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 124
            echo "                    <p class=\"flashbagErreur\"> 
                        ";
            // line 125
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo " 

                <div class=\"messageAcceuil\"> 
                    <h2> ";
        // line 130
        $this->displayBlock('messageAccueil', $context, $blocks);
        echo " </h2>
                    <h3> ";
        // line 131
        $this->displayBlock('sousMessageAccueil', $context, $blocks);
        echo " </h3>
                ";
        // line 132
        $this->displayBlock('textEncart', $context, $blocks);
        // line 133
        echo "            </div>

            ";
        // line 135
        $this->displayBlock('contenu', $context, $blocks);
        // line 138
        echo "
        </div>
    </div>

    <script src=";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-ui.min.js"), "html", null, true);
        echo "></script>
    <script src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/googleSearch.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/positionement.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/checkboxClick.js"), "html", null, true);
        echo "></script>   
    <!-- <script src=";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/communicationMenu.js"), "html", null, true);
        echo "></script> -->
    <script src=";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/textareaLogiciel.js"), "html", null, true);
        echo "></script>  
    <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/gestionFichiersPopup.js"), "html", null, true);
        echo "\"></script>
    <script src=";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteEncartActions.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/popupDownloadArchive.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteActions.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAdministrationCommunication.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/formImprimanteScript.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/editionLiens.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jscroller2-1.61.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/submitFormAffaires.js"), "html", null, true);
        echo "></script>
    <script src=\"https://appsforoffice.microsoft.com/lib/1/hosted/Office.js\"/>
</body>
</html>";
        
        $__internal_719c6d98b4391c1d95e0cb9754559a47e441f4499cd266f712d43a362afc25ca->leave($__internal_719c6d98b4391c1d95e0cb9754559a47e441f4499cd266f712d43a362afc25ca_prof);

    }

    // line 7
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_6a7df41ebcb950ea64065e4f36342dd16aeeaa868986aa08665d3c8e2af846c8 = $this->env->getExtension("native_profiler");
        $__internal_6a7df41ebcb950ea64065e4f36342dd16aeeaa868986aa08665d3c8e2af846c8->enter($__internal_6a7df41ebcb950ea64065e4f36342dd16aeeaa868986aa08665d3c8e2af846c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        
        $__internal_6a7df41ebcb950ea64065e4f36342dd16aeeaa868986aa08665d3c8e2af846c8->leave($__internal_6a7df41ebcb950ea64065e4f36342dd16aeeaa868986aa08665d3c8e2af846c8_prof);

    }

    // line 130
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_eb20193164b8e38387be63b4bac96ec3373e3a88318ab6cef98278e865d767fc = $this->env->getExtension("native_profiler");
        $__internal_eb20193164b8e38387be63b4bac96ec3373e3a88318ab6cef98278e865d767fc->enter($__internal_eb20193164b8e38387be63b4bac96ec3373e3a88318ab6cef98278e865d767fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " ";
        
        $__internal_eb20193164b8e38387be63b4bac96ec3373e3a88318ab6cef98278e865d767fc->leave($__internal_eb20193164b8e38387be63b4bac96ec3373e3a88318ab6cef98278e865d767fc_prof);

    }

    // line 131
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_a64959790e57c59d6ddd08efa94492bbea07ca63086eda9aa61b124bf208af11 = $this->env->getExtension("native_profiler");
        $__internal_a64959790e57c59d6ddd08efa94492bbea07ca63086eda9aa61b124bf208af11->enter($__internal_a64959790e57c59d6ddd08efa94492bbea07ca63086eda9aa61b124bf208af11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo " ";
        
        $__internal_a64959790e57c59d6ddd08efa94492bbea07ca63086eda9aa61b124bf208af11->leave($__internal_a64959790e57c59d6ddd08efa94492bbea07ca63086eda9aa61b124bf208af11_prof);

    }

    // line 132
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_2db5d7a98e536d1cacc77644cf6faa76b279601ccd8e15d10ad6fdc99afbc37f = $this->env->getExtension("native_profiler");
        $__internal_2db5d7a98e536d1cacc77644cf6faa76b279601ccd8e15d10ad6fdc99afbc37f->enter($__internal_2db5d7a98e536d1cacc77644cf6faa76b279601ccd8e15d10ad6fdc99afbc37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        
        $__internal_2db5d7a98e536d1cacc77644cf6faa76b279601ccd8e15d10ad6fdc99afbc37f->leave($__internal_2db5d7a98e536d1cacc77644cf6faa76b279601ccd8e15d10ad6fdc99afbc37f_prof);

    }

    // line 135
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b4be0c9979f4c6e1a9bdcf146824acdb1890de0887a6fd20263439a328cdc8b9 = $this->env->getExtension("native_profiler");
        $__internal_b4be0c9979f4c6e1a9bdcf146824acdb1890de0887a6fd20263439a328cdc8b9->enter($__internal_b4be0c9979f4c6e1a9bdcf146824acdb1890de0887a6fd20263439a328cdc8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 136
        echo "
            ";
        
        $__internal_b4be0c9979f4c6e1a9bdcf146824acdb1890de0887a6fd20263439a328cdc8b9->leave($__internal_b4be0c9979f4c6e1a9bdcf146824acdb1890de0887a6fd20263439a328cdc8b9_prof);

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
        return array (  473 => 136,  467 => 135,  456 => 132,  444 => 131,  432 => 130,  421 => 7,  410 => 159,  406 => 158,  402 => 157,  398 => 156,  394 => 155,  390 => 154,  386 => 153,  382 => 152,  378 => 151,  374 => 150,  370 => 149,  366 => 148,  362 => 147,  358 => 146,  354 => 145,  350 => 144,  346 => 143,  342 => 142,  336 => 138,  334 => 135,  330 => 133,  328 => 132,  324 => 131,  320 => 130,  315 => 127,  306 => 125,  303 => 124,  299 => 123,  295 => 121,  286 => 119,  283 => 118,  279 => 117,  269 => 109,  265 => 107,  259 => 105,  257 => 104,  246 => 95,  241 => 93,  238 => 92,  232 => 91,  230 => 90,  223 => 86,  218 => 84,  213 => 82,  208 => 80,  198 => 73,  194 => 72,  182 => 63,  178 => 61,  173 => 59,  170 => 58,  164 => 57,  162 => 56,  150 => 51,  142 => 46,  135 => 42,  132 => 41,  129 => 40,  115 => 38,  111 => 37,  106 => 36,  92 => 34,  87 => 33,  85 => 32,  82 => 31,  79 => 30,  76 => 29,  73 => 28,  70 => 27,  67 => 26,  64 => 25,  62 => 24,  46 => 11,  42 => 10,  39 => 9,  35 => 7,  27 => 1,);
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
/*         <script type="text/javascript">*/
/*             function changementSkin($skin) {*/
/*                 if ($skin === 'normal') {*/
/*                     Cookies.set("skin", "normal");*/
/*                     location.reload();*/
/*                 } else if ($skin === 'bammez') {*/
/*                     Cookies.set("skin", "bammez");*/
/*                     location.reload();*/
/*                 }*/
/*             }*/
/*         </script>*/
/* */
/*         {% if app.request.cookies.get('skin') == null %}*/
/*             {% set skin = 'normal' %}*/
/*         {% elseif app.request.cookies.get('skin') == 'normal' %}*/
/*             {% set skin = 'normal' %}*/
/*         {% elseif app.request.cookies.get('skin') == 'bammez' %}*/
/*             {% set skin = 'bammez' %}*/
/*         {% endif %}*/
/* */
/*         {% if skin == 'normal' %}*/
/*             {% stylesheets '@NoxIntranetCommunicationBundle/Resources/public/css/style.css' %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*             {% endstylesheets %}*/
/*         {% else %} */
/*             {% stylesheets '@NoxIntranetCommunicationBundle/Resources/public/css/style_bammez.css' %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" type="text/css" />*/
/*             {% endstylesheets %}*/
/*         {% endif %}*/
/* */
/*         <link rel="icon" type="image/png" href="{{ asset('bundles/noxintranetcommunication/images/favicon.ico') }}" />*/
/*         <style type="text/css">*/
/*             @font-face {*/
/*                 font-family: 'NoxFont'; */
/*                 src:    url({{asset('fonts/MuseoSans_100.otf')}}) format('opentype');*/
/*             }*/
/*         </style>*/
/*     </head>*/
/* */
/*     <body onload="{% if skin == 'normal' %}menuAnimation();{% else %}menuAnimationBammez();{% endif %}">*/
/* */
/*         <header>*/
/* */
/*             <div id ="bandeau">  */
/*                 {% if skin == 'normal' %}*/
/*                     <img src="{{ asset('bundles/noxintranetcommunication/images/bandeau.png') }}" id ="image_bandeau" alt="bandeau" onmousedown="return false;">*/
/*                 {% else %} */
/*                     <img src="{{ asset('bundles/noxintranetcommunication/images/bandeau_bammez.png') }}" id ="image_bandeau" alt="bandeau" onmousedown="return false;">*/
/*                 {% endif %}*/
/*             </div>*/
/* */
/*             {{ include('NoxIntranetUserBundle:Security:ADlogin.html.twig') }}*/
/* */
/*         </header>*/
/* */
/*         <div id="bar_menu">*/
/* */
/*             <div id="selectionSkinBouton" >*/
/*                 <span></span>*/
/*                 <p>Apparence : </p>*/
/*                 <img src="{{ asset('bundles/noxintranetcommunication/images/CarreBleuClair.png') }}" onclick="changementSkin('bammez');">*/
/*                 <img src="{{ asset('bundles/noxintranetcommunication/images/CarreBleuFonce.png') }}" onclick="changementSkin('normal');">*/
/*             </div>*/
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
/*                             {% if skin == 'normal' %}*/
/*                                 <img src ="{{ asset('bundles/noxintranetcommunication/images/logoGoogle.png') }}" alt="Logo Google" onmousedown="return false;">*/
/*                             {% else %} */
/*                                 <img src ="{{ asset('bundles/noxintranetcommunication/images/logoRecherche.png') }}" alt="Logo Google" onmousedown="return false;">*/
/*                             {% endif %}*/
/* */
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
/*                 {% block textEncart %}{% endblock %}*/
/*             </div>*/
/* */
/*             {% block contenu %}*/
/* */
/*             {% endblock %}*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*     <script src={{ asset('./js/jquery-ui.min.js') }}></script>*/
/*     <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*     <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*     <script src={{ asset('./js/googleSearch.js') }}></script>*/
/*     <script src={{ asset('./js/menuAnimation.js') }}></script>*/
/*     <script src={{ asset('./js/positionement.js') }}></script>*/
/*     <script src={{ asset('./js/checkboxClick.js') }}></script>   */
/*     <!-- <script src={{ asset('./js/communicationMenu.js') }}></script> -->*/
/*     <script src={{ asset('./js/textareaLogiciel.js') }}></script>  */
/*     <script src="{{ asset('./js/gestionFichiersPopup.js') }}"></script>*/
/*     <script src={{ asset('./js/texteEncartActions.js') }}></script>*/
/*     <script src={{ asset('./js/popupDownloadArchive.js') }}></script>*/
/*     <script src={{ asset('./js/texteActions.js') }}></script>*/
/*     <script src={{ asset('./js/menuAdministrationCommunication.js') }}></script>*/
/*     <script src={{ asset('./js/formImprimanteScript.js') }}></script>*/
/*     <script src={{ asset('./js/editionLiens.js') }}></script>*/
/*     <script src={{ asset('./js/jscroller2-1.61.js') }}></script>*/
/*     <script src={{ asset('./js/submitFormAffaires.js') }}></script>*/
/*     <script src="https://appsforoffice.microsoft.com/lib/1/hosted/Office.js"/>*/
/* </body>*/
/* </html>*/
