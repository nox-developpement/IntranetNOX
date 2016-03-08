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
        $__internal_c5ecc16b0e3c5e95cec90e77da0a1f657d46fe835adbe006519491f9985bf73d = $this->env->getExtension("native_profiler");
        $__internal_c5ecc16b0e3c5e95cec90e77da0a1f657d46fe835adbe006519491f9985bf73d->enter($__internal_c5ecc16b0e3c5e95cec90e77da0a1f657d46fe835adbe006519491f9985bf73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        <link href=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css\" rel=\"stylesheet\">
        <style type=\"text/css\">
            @font-face {
                font-family: 'NoxFont'; 
                src:    url(";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("fonts/MuseoSans_100.otf"), "html", null, true);
        echo ") format('opentype');
            }
        </style>
    </head>

    <body onload=\"";
        // line 52
        if (((isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin")) == "normal")) {
            echo "menuAnimation();";
        } else {
            echo "menuAnimationBammez();";
        }
        echo "\">

        <header>

            <div style=\"border: none; width: 15%; display:inline-block; text-align: center; vertical-align: middle; margin-top: 2.5%;\"> <a style=\"cursor: pointer; font-size: 0.85vw;\" onclick=\"\$(function () {
                        \$('#dialog').dialog({width: 970, height: 600});
                    });\"> Plan du site <br /><img style=\"width: 10%;\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetaccueil/images/Map-32.png"), "html", null, true);
        echo "\" onmousedown=\"return false;\"> </a> </div><!--

            --><div id =\"bandeau\">  
                ";
        // line 61
        if (((isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin")) == "normal")) {
            // line 62
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau.png"), "html", null, true);
            echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
                ";
        } else {
            // line 63
            echo " 
                    <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/bandeau_bammez.png"), "html", null, true);
            echo "\" id =\"image_bandeau\" alt=\"bandeau\" onmousedown=\"return false;\">
                ";
        }
        // line 66
        echo "            </div>

            ";
        // line 68
        echo twig_include($this->env, $context, "NoxIntranetUserBundle:Security:ADlogin.html.twig");
        echo "

        </header>

        <div id=\"dialog\" title=\"Plan du site\" style=\"display: none;\">

            <img src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetaccueil/images/PlanIntranet.svg"), "html", null, true);
        echo "\">

        </div>

        <div id=\"bar_menu\">

            <div id=\"selectionSkinBouton\" >

            </div>

            <div id=\"div_menu\">

                <ul id=\"menu\">

                    <li class=\"menuElement\"> <a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("nox_intranet_accueil");
        echo "\" class=\"liens\"> Accueil </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("nox_intranet_communication");
        echo "\" class=\"liens\"> Communication </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ressources");
        echo "\" class=\"liens\"> Ressources </a> </li> 

                    <li class=\"menuElement\"> <a href=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_si");
        echo "\" class=\"liens\" title='Aide pour les problèmes informatiques.'> Support SI </a> </li> 

                    <li id=\"google_search\"> 
                        <form id=\"google_form\">
                            ";
        // line 98
        if (((isset($context["skin"]) ? $context["skin"] : $this->getContext($context, "skin")) == "normal")) {
            // line 99
            echo "                                <img src =\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/logoRecherche.png"), "html", null, true);
            echo "\" alt=\"Logo Google\" onmousedown=\"return false;\">
                            ";
        } else {
            // line 100
            echo " 
                                <img src =\"";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/logoRecherche.png"), "html", null, true);
            echo "\" alt=\"Logo Google\" onmousedown=\"return false;\">
                            ";
        }
        // line 103
        echo "
                            <input type=\"text\" id=\"search_input\" name=\"seach_input\" placeholder=\"Rechercher sur Google\">
                            <button id=\"search\" onclick=\"googleSearch(this)
                                            ;\"> Rechercher </button>
                        </form>
                    </li>
                </ul>
            </div>

            <div id=\"administrationBouton\" >
                ";
        // line 113
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null) && ((((((((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMPETENCES")) || $this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) || $this->env->getExtension('security')->isGranted("ROLE_PROCEDURES")) || $this->env->getExtension('security')->isGranted("ROLE_FAQ")) || $this->env->getExtension('security')->isGranted("ROLE_CE")) || $this->env->getExtension('security')->isGranted("ROLE_CHSCT")) || $this->env->getExtension('security')->isGranted("ROLE_LIENS")) || $this->env->getExtension('security')->isGranted("ROLE_QUALITE")))) {
            // line 114
            echo "                    <p> <a href=\"";
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration");
            echo "\"> Administration </a> </p>
                ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_PUBLICATEUR")) {
            // line 116
            echo "                    <p> Publication </p>
                ";
        }
        // line 118
        echo "            </div>
        </div>

        <div id =\"section_principal\">


            <div id=\"contenu\">

                ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 127
            echo "                    <p class=\"flashbag\"> 
                        ";
            // line 128
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo " 

                ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "noticeErreur"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 133
            echo "                    <p class=\"flashbagErreur\"> 
                        ";
            // line 134
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo " 

                <div class=\"messageAcceuil\"> 
                    <h2> ";
        // line 139
        $this->displayBlock('messageAccueil', $context, $blocks);
        echo " </h2>
                    <h3> ";
        // line 140
        $this->displayBlock('sousMessageAccueil', $context, $blocks);
        echo " </h3>
                ";
        // line 141
        $this->displayBlock('textEncart', $context, $blocks);
        // line 142
        echo "            </div>

            ";
        // line 144
        $this->displayBlock('contenu', $context, $blocks);
        // line 147
        echo "
        </div>
    </div>

    <script src=";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-ui.min.js"), "html", null, true);
        echo "></script>
    <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
    <script src=";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/googleSearch.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/positionement.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/checkboxClick.js"), "html", null, true);
        echo "></script>   
    <!-- <script src=";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/communicationMenu.js"), "html", null, true);
        echo "></script> -->
    <script src=";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/textareaLogiciel.js"), "html", null, true);
        echo "></script>  
    <script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/gestionFichiersPopup.js"), "html", null, true);
        echo "\"></script>
    <script src=";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteEncartActions.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/popupDownloadArchive.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/texteActions.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAdministrationCommunication.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/formImprimanteScript.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/editionLiens.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jscroller2-1.61.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/submitFormAffaires.js"), "html", null, true);
        echo "></script>
    <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/tableurEdition.js"), "html", null, true);
        echo "\"/></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/suiviRecherche.js"), "html", null, true);
        echo "\"/></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/affichageImageResizing.js"), "html", null, true);
        echo "\"/></script>

</body>
</html>";
        
        $__internal_c5ecc16b0e3c5e95cec90e77da0a1f657d46fe835adbe006519491f9985bf73d->leave($__internal_c5ecc16b0e3c5e95cec90e77da0a1f657d46fe835adbe006519491f9985bf73d_prof);

    }

    // line 7
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7dd904e4d95c5d2521c447765f48528ce20d9dc1358de9c0df84727477bf1522 = $this->env->getExtension("native_profiler");
        $__internal_7dd904e4d95c5d2521c447765f48528ce20d9dc1358de9c0df84727477bf1522->enter($__internal_7dd904e4d95c5d2521c447765f48528ce20d9dc1358de9c0df84727477bf1522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        
        $__internal_7dd904e4d95c5d2521c447765f48528ce20d9dc1358de9c0df84727477bf1522->leave($__internal_7dd904e4d95c5d2521c447765f48528ce20d9dc1358de9c0df84727477bf1522_prof);

    }

    // line 139
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_47d79448671dce3d3bb1d89e8179c66fc5bd352766d9fb0077e2216f2b0d34b9 = $this->env->getExtension("native_profiler");
        $__internal_47d79448671dce3d3bb1d89e8179c66fc5bd352766d9fb0077e2216f2b0d34b9->enter($__internal_47d79448671dce3d3bb1d89e8179c66fc5bd352766d9fb0077e2216f2b0d34b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " ";
        
        $__internal_47d79448671dce3d3bb1d89e8179c66fc5bd352766d9fb0077e2216f2b0d34b9->leave($__internal_47d79448671dce3d3bb1d89e8179c66fc5bd352766d9fb0077e2216f2b0d34b9_prof);

    }

    // line 140
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_0e72f0cbd90cafcff62c94c4c9fdeee72d069d72362d0bc9a12c9bb1ee4c645c = $this->env->getExtension("native_profiler");
        $__internal_0e72f0cbd90cafcff62c94c4c9fdeee72d069d72362d0bc9a12c9bb1ee4c645c->enter($__internal_0e72f0cbd90cafcff62c94c4c9fdeee72d069d72362d0bc9a12c9bb1ee4c645c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo " ";
        
        $__internal_0e72f0cbd90cafcff62c94c4c9fdeee72d069d72362d0bc9a12c9bb1ee4c645c->leave($__internal_0e72f0cbd90cafcff62c94c4c9fdeee72d069d72362d0bc9a12c9bb1ee4c645c_prof);

    }

    // line 141
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_2aa63e08490f96e616cf6d2c27886eb6f618d0bc67f27c1a2fb67400da2485af = $this->env->getExtension("native_profiler");
        $__internal_2aa63e08490f96e616cf6d2c27886eb6f618d0bc67f27c1a2fb67400da2485af->enter($__internal_2aa63e08490f96e616cf6d2c27886eb6f618d0bc67f27c1a2fb67400da2485af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        
        $__internal_2aa63e08490f96e616cf6d2c27886eb6f618d0bc67f27c1a2fb67400da2485af->leave($__internal_2aa63e08490f96e616cf6d2c27886eb6f618d0bc67f27c1a2fb67400da2485af_prof);

    }

    // line 144
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b03ddea91d7b246f53710949a4f1a310e1d5d88e9eed532ec350ac0f1a9f36c8 = $this->env->getExtension("native_profiler");
        $__internal_b03ddea91d7b246f53710949a4f1a310e1d5d88e9eed532ec350ac0f1a9f36c8->enter($__internal_b03ddea91d7b246f53710949a4f1a310e1d5d88e9eed532ec350ac0f1a9f36c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 145
        echo "
            ";
        
        $__internal_b03ddea91d7b246f53710949a4f1a310e1d5d88e9eed532ec350ac0f1a9f36c8->leave($__internal_b03ddea91d7b246f53710949a4f1a310e1d5d88e9eed532ec350ac0f1a9f36c8_prof);

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
        return array (  494 => 145,  488 => 144,  477 => 141,  465 => 140,  453 => 139,  442 => 7,  431 => 171,  427 => 170,  423 => 169,  419 => 168,  415 => 167,  411 => 166,  407 => 165,  403 => 164,  399 => 163,  395 => 162,  391 => 161,  387 => 160,  383 => 159,  379 => 158,  375 => 157,  371 => 156,  367 => 155,  363 => 154,  359 => 153,  355 => 152,  351 => 151,  345 => 147,  343 => 144,  339 => 142,  337 => 141,  333 => 140,  329 => 139,  324 => 136,  315 => 134,  312 => 133,  308 => 132,  304 => 130,  295 => 128,  292 => 127,  288 => 126,  278 => 118,  274 => 116,  268 => 114,  266 => 113,  254 => 103,  249 => 101,  246 => 100,  240 => 99,  238 => 98,  231 => 94,  226 => 92,  221 => 90,  216 => 88,  199 => 74,  190 => 68,  186 => 66,  181 => 64,  178 => 63,  172 => 62,  170 => 61,  164 => 58,  151 => 52,  143 => 47,  135 => 42,  132 => 41,  129 => 40,  115 => 38,  111 => 37,  106 => 36,  92 => 34,  87 => 33,  85 => 32,  82 => 31,  79 => 30,  76 => 29,  73 => 28,  70 => 27,  67 => 26,  64 => 25,  62 => 24,  46 => 11,  42 => 10,  39 => 9,  35 => 7,  27 => 1,);
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
/*         <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/themes/ui-darkness/jquery-ui.min.css" rel="stylesheet">*/
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
/*             <div style="border: none; width: 15%; display:inline-block; text-align: center; vertical-align: middle; margin-top: 2.5%;"> <a style="cursor: pointer; font-size: 0.85vw;" onclick="$(function () {*/
/*                         $('#dialog').dialog({width: 970, height: 600});*/
/*                     });"> Plan du site <br /><img style="width: 10%;" src="{{ asset('bundles/noxintranetaccueil/images/Map-32.png') }}" onmousedown="return false;"> </a> </div><!--*/
/* */
/*             --><div id ="bandeau">  */
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
/*         <div id="dialog" title="Plan du site" style="display: none;">*/
/* */
/*             <img src="{{ asset('bundles/noxintranetaccueil/images/PlanIntranet.svg') }}">*/
/* */
/*         </div>*/
/* */
/*         <div id="bar_menu">*/
/* */
/*             <div id="selectionSkinBouton" >*/
/* */
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
/*                                 <img src ="{{ asset('bundles/noxintranetcommunication/images/logoRecherche.png') }}" alt="Logo Google" onmousedown="return false;">*/
/*                             {% else %} */
/*                                 <img src ="{{ asset('bundles/noxintranetcommunication/images/logoRecherche.png') }}" alt="Logo Google" onmousedown="return false;">*/
/*                             {% endif %}*/
/* */
/*                             <input type="text" id="search_input" name="seach_input" placeholder="Rechercher sur Google">*/
/*                             <button id="search" onclick="googleSearch(this)*/
/*                                             ;"> Rechercher </button>*/
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
/*     <script src="{{ asset('./js/tableurEdition.js') }}"/></script>*/
/* <script src="{{ asset('./js/suiviRecherche.js') }}"/></script>*/
/* <script src="{{ asset('./js/affichageImageResizing.js') }}"/></script>*/
/* */
/* </body>*/
/* </html>*/
