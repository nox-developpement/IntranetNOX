<?php

/* @NoxIntranetCommunication/Accueil/affichageContenu.html.twig */
class __TwigTemplate_03b85e6341fbda280b2a0b9b2b41b3676164593d8bd62384ec67496bb7782fb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetCommunication/Accueil/affichageContenu.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
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
        echo (isset($context["dossier"]) ? $context["dossier"] : null);
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo (isset($context["dossier"]) ? $context["dossier"] : null);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo (isset($context["dossier"]) ? $context["dossier"] : null);
            echo "');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 17
        echo "
    <div id=\"choixPage\">

        ";
        // line 20
        if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
            // line 21
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 23
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 24
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => 1, "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> << </a>
            ";
            }
            // line 26
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 29
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 30
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : null) - 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 32
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 35
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 36
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 37
                    echo "
                    ";
                    // line 38
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : null) - 2))) {
                        // line 39
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 41
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "            ";
            }
            // line 44
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["page"]) ? $context["page"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 51
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 52
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 53
                    echo "
                    ";
                    // line 54
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : null) + 2))) {
                        // line 55
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 57
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "            ";
            }
            // line 60
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 63
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 64
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : null) + 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 66
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 69
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 70
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 72
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 75
        echo "
    </div>

    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            echo " 

        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Lien", array()), "html", null, true);
            echo "', 'Nox Letters');\">
                <img 
                    src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/Symfony/web/ImagePDF/";
            echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($context["new"], "Nom", array()), "UTF-8", "ISO-8859-1"), "html", null, true);
            echo ".png\" alt=\"PDF\" 
                    onmouseover=\"\$(this).css('box-shadow', '0px 0px 10px #1F4E79');\" 
                    onmouseout=\"\$(this).css('box-shadow', 'none');\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Nom", array()), "html", null, true);
            echo " </li>

                ";
            // line 94
            if (($this->getAttribute($context["new"], "Title", array()) != null)) {
                echo " <li> Titre : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Title", array()), "html", null, true);
                echo " </li> ";
            }
            // line 95
            echo "
                ";
            // line 96
            if (($this->getAttribute($context["new"], "Author", array()) != null)) {
                echo " <li> Auteur : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Author", array()), "html", null, true);
                echo " </li> ";
            }
            // line 97
            echo "
                ";
            // line 98
            if (($this->getAttribute($context["new"], "Subject", array()) != null)) {
                echo " <li> Sujet : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Subject", array()), "html", null, true);
                echo " </li> ";
            }
            // line 99
            echo "
                ";
            // line 100
            if (($this->getAttribute($context["new"], "Keywords", array()) != null)) {
                echo " <li> Mots : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Keywords", array()), "html", null, true);
                echo " </li> ";
            }
            // line 101
            echo "
                ";
            // line 102
            if (($this->getAttribute($context["new"], "Pages", array()) != null)) {
                echo " <li> Nombre de page(s) : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Pages", array()), "html", null, true);
                echo " </li> ";
            }
            // line 103
            echo "
                <li> Posté le : ";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "dateEnvoi", array()), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
    <div id=\"choixPage\">

        ";
        // line 114
        if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
            // line 115
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 117
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 118
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => 1, "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> << </a>
            ";
            }
            // line 120
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 123
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 124
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : null) - 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 126
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 129
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 130
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 131
                    echo "
                    ";
                    // line 132
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : null) - 2))) {
                        // line 133
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 135
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "            ";
            }
            // line 138
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["page"]) ? $context["page"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 145
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 146
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 147
                    echo "
                    ";
                    // line 148
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : null) + 2))) {
                        // line 149
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 151
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "            ";
            }
            // line 154
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 157
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 158
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => ((isset($context["page"]) ? $context["page"] : null) + 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 160
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 163
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 164
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageContenu", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 166
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 169
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetCommunication/Accueil/affichageContenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 169,  438 => 166,  432 => 164,  430 => 163,  425 => 160,  419 => 158,  417 => 157,  412 => 154,  409 => 153,  402 => 151,  394 => 149,  392 => 148,  389 => 147,  384 => 146,  382 => 145,  373 => 141,  368 => 138,  365 => 137,  358 => 135,  350 => 133,  348 => 132,  345 => 131,  340 => 130,  338 => 129,  333 => 126,  327 => 124,  325 => 123,  320 => 120,  314 => 118,  312 => 117,  308 => 115,  306 => 114,  301 => 111,  288 => 104,  285 => 103,  279 => 102,  276 => 101,  270 => 100,  267 => 99,  261 => 98,  258 => 97,  252 => 96,  249 => 95,  243 => 94,  238 => 92,  225 => 84,  220 => 82,  211 => 78,  206 => 75,  201 => 72,  195 => 70,  193 => 69,  188 => 66,  182 => 64,  180 => 63,  175 => 60,  172 => 59,  165 => 57,  157 => 55,  155 => 54,  152 => 53,  147 => 52,  145 => 51,  136 => 47,  131 => 44,  128 => 43,  121 => 41,  113 => 39,  111 => 38,  108 => 37,  103 => 36,  101 => 35,  96 => 32,  90 => 30,  88 => 29,  83 => 26,  77 => 24,  75 => 23,  71 => 21,  69 => 20,  64 => 17,  55 => 13,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}{{ dossier|raw }}{% endblock %}*/
/* */
/* {% block messageAccueil %}{{ dossier|raw }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_COMMUNICATION') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/{{ config }}', 'Gestionnaire de fichiers - {{ dossier|raw }}');"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>*/
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
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': 1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': page-1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageContenu', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_affichageContenu', { 'page': page, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageContenu', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': page+1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': nbPage, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     {% for new in news %} */
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ new.Lien }}', 'Nox Letters');">*/
/*                 <img */
/*                     src="{{ app.request.schemeAndHttpHost }}/Symfony/web/ImagePDF/{{ new.Nom|convert_encoding('UTF-8', 'ISO-8859-1') }}.png" alt="PDF" */
/*                     onmouseover="$(this).css('box-shadow', '0px 0px 10px #1F4E79');" */
/*                     onmouseout="$(this).css('box-shadow', 'none');"*/
/*                     >*/
/*             </a>*/
/* */
/*             <ul>*/
/* */
/*                 <li> Nom du fichier : {{ new.Nom }} </li>*/
/* */
/*                 {% if new.Title != null %} <li> Titre : {{ new.Title }} </li> {% endif %}*/
/* */
/*                 {% if new.Author != null %} <li> Auteur : {{ new.Author }} </li> {% endif %}*/
/* */
/*                 {% if new.Subject != null %} <li> Sujet : {{ new.Subject }} </li> {% endif %}*/
/* */
/*                 {% if new.Keywords != null %} <li> Mots : {{ new.Keywords }} </li> {% endif %}*/
/* */
/*                 {% if new.Pages != null %} <li> Nombre de page(s) : {{ new.Pages }} </li> {% endif %}*/
/* */
/*                 <li> Posté le : {{ new.dateEnvoi }} </li>*/
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
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': 1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': page-1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageContenu', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_affichageContenu', { 'page': page, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageContenu', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': page+1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageContenu', { 'page': nbPage, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
