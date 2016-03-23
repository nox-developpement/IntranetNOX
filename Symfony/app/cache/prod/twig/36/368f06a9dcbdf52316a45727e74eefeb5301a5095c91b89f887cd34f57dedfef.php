<?php

/* @NoxIntranetRessources/References/References.html.twig */
class __TwigTemplate_6e15b6e5cfff7773d2a20daf679a7312c44a6ddf6f1d927f74cd7bc7ba56d570 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/References/References.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'textEncart' => array($this, 'block_textEncart'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        // line 4
        echo "    Références
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Références";
    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        if (array_key_exists("text", $context)) {
            echo (isset($context["text"]) ? $context["text"] : null);
        }
        // line 12
        echo "
    ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "
        ";
            // line 15
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("id" => "formulaireTexteEncart")));
            echo "

        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
            echo "

        ";
            // line 20
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'errors');
            echo "

        ";
            // line 23
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'widget', array("attr" => array("class" => "textEncartField")));
            echo "

        ";
            // line 25
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
            echo "

        <img src='";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Text-Editor-32.png"), "html", null, true);
            echo "' id='texteEncartImg'>

    ";
        }
        // line 30
        echo "
";
    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
        // line 34
        echo "
    ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) {
            echo " 

        <div id=\"menuAdminReferences\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/references', 'Gestionnaire de fichiers - Références');\"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 43
        echo "
    <div id=\"Keywords\">
        <p> <span style=\"font-size: 0.8vw; color: #1F4E79;\"> Les mots-clés les plus présents : </span> </p>
        <p>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keywords"]) ? $context["keywords"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
            // line 48
            echo "                <span style=\"font-size: calc(0.7vw + ";
            if ((($this->getAttribute($context["keyword"], "Nombre", array()) / (isset($context["nombreMax"]) ? $context["nombreMax"] : null)) < 1)) {
                echo twig_escape_filter($this->env, ($this->getAttribute($context["keyword"], "Nombre", array()) / (isset($context["nombreMax"]) ? $context["nombreMax"] : null)), "html", null, true);
            } else {
                echo "1";
            }
            echo "vw)\">
                    <a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("nox_intranet_references_recherche");
            echo "?keyword=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "Keyword", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "Keyword", array()), "html", null, true);
            echo "</a>
                </span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </p>
    </div>

    <div id=\"rechercheUser\">
        <div id=\"rechercheCompetencesDiv\">
            <form action='";
        // line 57
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references_recherche");
        echo "' type='GET'>
                <label for=\"keyword\"> Rechercher par mots-clés : </label>
                <input type=\"text\" name='keyword' id=\"keyword\" placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"/>
                <input type=\"submit\" name=\"Rechercher\" value=\"Rechercher\" class=\"boutonFormulaire\" >
                <button value=\"Annuler\" class=\"boutonFormulaire\" id=\"boutonAnnuler\" onclick=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\"> RAZ </button>
            </form>
        </div>
    </div>

    ";
        // line 66
        if (((isset($context["references"]) ? $context["references"] : null) == null)) {
            // line 67
            echo "
        <div class=\"divNews\">

            Votre recherche n'a retourné aucun résultat.

        </div>

    ";
        }
        // line 75
        echo "
    <div id=\"choixPage\">

        ";
        // line 78
        if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
            // line 79
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 81
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 82
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => 1));
                echo "\"> << </a>
            ";
            }
            // line 84
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 87
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 88
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : null) - 1))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 90
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 93
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 94
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 95
                    echo "
                    ";
                    // line 96
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : null) - 2))) {
                        // line 97
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 99
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "            ";
            }
            // line 102
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["page"]) ? $context["page"] : null))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 109
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 110
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 111
                    echo "
                    ";
                    // line 112
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : null) + 2))) {
                        // line 113
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 115
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                echo "            ";
            }
            // line 118
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 121
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 122
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : null) + 1))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 124
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 127
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 128
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : null))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 130
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 133
        echo "
    </div>

    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["references"]) ? $context["references"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 137
            echo "
        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Lien", array()), "html", null, true);
            echo "', 'RH');\">
                <img 
                    src=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/Symfony/web/ImagePDF/";
            echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($context["reference"], "Nom", array()), "UTF-8", "ISO-8859-1"), "html", null, true);
            echo ".png\" alt=\"PDF\" 
                    onmouseover=\"\$(this).css('box-shadow', '0px 0px 10px #1F4E79');\" 
                    onmouseout=\"\$(this).css('box-shadow', 'none');\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Nom", array()), "html", null, true);
            echo " </li>

                ";
            // line 152
            if (($this->getAttribute($context["reference"], "Title", array()) != null)) {
                echo " <li> Titre : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Title", array()), "html", null, true);
                echo " </li> ";
            }
            // line 153
            echo "
                ";
            // line 154
            if (($this->getAttribute($context["reference"], "Author", array()) != null)) {
                echo " <li> Auteur : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Author", array()), "html", null, true);
                echo " </li> ";
            }
            // line 155
            echo "
                ";
            // line 156
            if (($this->getAttribute($context["reference"], "Subject", array()) != null)) {
                echo " <li> Sujet : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Subject", array()), "html", null, true);
                echo " </li> ";
            }
            // line 157
            echo "
                ";
            // line 158
            if (($this->getAttribute($context["reference"], "Keywords", array()) != null)) {
                echo " <li> Mots : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Keywords", array()), "html", null, true);
                echo " </li> ";
            }
            // line 159
            echo "
                ";
            // line 160
            if (($this->getAttribute($context["reference"], "Pages", array()) != null)) {
                echo " <li> Nombre de page(s) : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Pages", array()), "html", null, true);
                echo " </li> ";
            }
            // line 161
            echo "
                <li> Posté le : ";
            // line 162
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "dateEnvoi", array()), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "
    <div id=\"choixPage\">

        ";
        // line 172
        if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
            // line 173
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 175
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 176
                echo "                <a href=\"";
                echo $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => 1));
                echo "\"> << </a>
            ";
            }
            // line 178
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 181
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 182
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : null) - 1))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 184
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 187
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 188
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 189
                    echo "
                    ";
                    // line 190
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : null) - 2))) {
                        // line 191
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 193
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 195
                echo "            ";
            }
            // line 196
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 199
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["page"]) ? $context["page"] : null))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 203
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 204
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 205
                    echo "
                    ";
                    // line 206
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : null) + 2))) {
                        // line 207
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => $context["i"])), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 209
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "            ";
            }
            // line 212
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 215
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 216
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => ((isset($context["page"]) ? $context["page"] : null) + 1))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 218
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 221
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 222
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_references", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : null))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 224
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 227
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/References/References.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  566 => 227,  561 => 224,  555 => 222,  553 => 221,  548 => 218,  542 => 216,  540 => 215,  535 => 212,  532 => 211,  525 => 209,  517 => 207,  515 => 206,  512 => 205,  507 => 204,  505 => 203,  496 => 199,  491 => 196,  488 => 195,  481 => 193,  473 => 191,  471 => 190,  468 => 189,  463 => 188,  461 => 187,  456 => 184,  450 => 182,  448 => 181,  443 => 178,  437 => 176,  435 => 175,  431 => 173,  429 => 172,  424 => 169,  411 => 162,  408 => 161,  402 => 160,  399 => 159,  393 => 158,  390 => 157,  384 => 156,  381 => 155,  375 => 154,  372 => 153,  366 => 152,  361 => 150,  348 => 142,  343 => 140,  338 => 137,  334 => 136,  329 => 133,  324 => 130,  318 => 128,  316 => 127,  311 => 124,  305 => 122,  303 => 121,  298 => 118,  295 => 117,  288 => 115,  280 => 113,  278 => 112,  275 => 111,  270 => 110,  268 => 109,  259 => 105,  254 => 102,  251 => 101,  244 => 99,  236 => 97,  234 => 96,  231 => 95,  226 => 94,  224 => 93,  219 => 90,  213 => 88,  211 => 87,  206 => 84,  200 => 82,  198 => 81,  194 => 79,  192 => 78,  187 => 75,  177 => 67,  175 => 66,  167 => 61,  162 => 59,  157 => 57,  150 => 52,  137 => 49,  128 => 48,  124 => 47,  118 => 43,  107 => 35,  104 => 34,  101 => 33,  96 => 30,  90 => 27,  85 => 25,  79 => 23,  73 => 20,  68 => 17,  63 => 15,  60 => 14,  58 => 13,  55 => 12,  51 => 11,  48 => 10,  45 => 9,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Références*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Références{% endblock %}*/
/* */
/* {% block textEncart %}*/
/* */
/*     {% if text is defined %}{{ text|raw }}{% endif %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*         {{ form_start(formulaire, {'attr': {'id': 'formulaireTexteEncart' }}) }}*/
/* */
/*         {{ form_errors(formulaire) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.text) }}*/
/* */
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(formulaire.text, {'attr': {'class': 'textEncartField'}}) }}*/
/* */
/*         {{ form_end(formulaire) }}*/
/* */
/*         <img src='{{ asset('bundles/noxintranetressources/images/Text-Editor-32.png') }}' id='texteEncartImg'>*/
/* */
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_REFERENCES') %} */
/* */
/*         <div id="menuAdminReferences" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/references', 'Gestionnaire de fichiers - Références');"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div id="Keywords">*/
/*         <p> <span style="font-size: 0.8vw; color: #1F4E79;"> Les mots-clés les plus présents : </span> </p>*/
/*         <p>*/
/*             {% for keyword in keywords %}*/
/*                 <span style="font-size: calc(0.7vw + {% if keyword.Nombre/nombreMax < 1 %}{{ keyword.Nombre/nombreMax }}{% else %}1{% endif %}vw)">*/
/*                     <a href="{{ path('nox_intranet_references_recherche') }}?keyword={{ keyword.Keyword }}"> {{ keyword.Keyword }}</a>*/
/*                 </span>*/
/*             {% endfor %}*/
/*         </p>*/
/*     </div>*/
/* */
/*     <div id="rechercheUser">*/
/*         <div id="rechercheCompetencesDiv">*/
/*             <form action='{{ path('nox_intranet_references_recherche') }}' type='GET'>*/
/*                 <label for="keyword"> Rechercher par mots-clés : </label>*/
/*                 <input type="text" name='keyword' id="keyword" placeholder="{{ app.request.get('keyword') }}"/>*/
/*                 <input type="submit" name="Rechercher" value="Rechercher" class="boutonFormulaire" >*/
/*                 <button value="Annuler" class="boutonFormulaire" id="boutonAnnuler" onclick="{{ path('nox_intranet_references') }}"> RAZ </button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if references == null %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             Votre recherche n'a retourné aucun résultat.*/
/* */
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div id="choixPage">*/
/* */
/*         {% if nbPage > 1 %}*/
/* */
/*             <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->*/
/*             {% if page > 1 %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': 1}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': page-1}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_references', { 'page': i}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_references', { 'page': page}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_references', { 'page': i}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': page+1}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': nbPage}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     {% for reference in references %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ reference.Lien }}', 'RH');">*/
/*                 <img */
/*                     src="{{ app.request.schemeAndHttpHost }}/Symfony/web/ImagePDF/{{ reference.Nom|convert_encoding('UTF-8', 'ISO-8859-1') }}.png" alt="PDF" */
/*                     onmouseover="$(this).css('box-shadow', '0px 0px 10px #1F4E79');" */
/*                     onmouseout="$(this).css('box-shadow', 'none');"*/
/*                     >*/
/*             </a>*/
/* */
/*             <ul>*/
/* */
/*                 <li> Nom du fichier : {{ reference.Nom }} </li>*/
/* */
/*                 {% if reference.Title != null %} <li> Titre : {{ reference.Title }} </li> {% endif %}*/
/* */
/*                 {% if reference.Author != null %} <li> Auteur : {{ reference.Author }} </li> {% endif %}*/
/* */
/*                 {% if reference.Subject != null %} <li> Sujet : {{ reference.Subject }} </li> {% endif %}*/
/* */
/*                 {% if reference.Keywords != null %} <li> Mots : {{ reference.Keywords }} </li> {% endif %}*/
/* */
/*                 {% if reference.Pages != null %} <li> Nombre de page(s) : {{ reference.Pages }} </li> {% endif %}*/
/* */
/*                 <li> Posté le : {{ reference.dateEnvoi }} </li>*/
/* */
/*             </ul>*/
/* */
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/*     <div id="choixPage">*/
/* */
/*         {% if nbPage > 1 %}*/
/* */
/*             <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->*/
/*             {% if page > 1 %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': 1}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': page-1}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_references', { 'page': i}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_references', { 'page': page}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_references', { 'page': i}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': page+1}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_references', { 'page': nbPage}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
