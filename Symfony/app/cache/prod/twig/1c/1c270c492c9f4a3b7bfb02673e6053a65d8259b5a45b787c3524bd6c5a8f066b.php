<?php

/* @NoxIntranetCommunication/Accueil/affichageImage.html.twig */
class __TwigTemplate_cc950ad3701197bc16eba447d9dddfe932d0a1961e7597a55c285fd62c4b655d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetCommunication/Accueil/affichageImage.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
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
        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : null), "html", null, true);
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : null), "html", null, true);
    }

    // line 6
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "Pour télécharger une image faite un clic-droit dessus puis \"Enregistrer l'image sous...\"";
    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : null), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : null), "html", null, true);
            echo "');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 18
        echo "
    <div id=\"choixPage\">

        ";
        // line 21
        if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
            // line 22
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 24
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 25
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => 1, "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> << </a>
            ";
            }
            // line 27
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 30
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 31
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => ((isset($context["page"]) ? $context["page"] : null) - 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 33
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 36
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 37
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 38
                    echo "
                    ";
                    // line 39
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : null) - 2))) {
                        // line 40
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 42
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "            ";
            }
            // line 45
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => (isset($context["page"]) ? $context["page"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 52
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 53
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 54
                    echo "
                    ";
                    // line 55
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : null) + 2))) {
                        // line 56
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 58
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "            ";
            }
            // line 61
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 64
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 65
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => ((isset($context["page"]) ? $context["page"] : null) + 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 67
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 70
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 71
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 73
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 76
        echo "
    </div>

    <div id=\"divAffichageImages\">

        ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 82
            echo "
            <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["image"]), "html", null, true);
            echo "\" class=\"downloadable\" />

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "
    </div>

    <div id=\"choixPage\">

        ";
        // line 91
        if (((isset($context["nbPage"]) ? $context["nbPage"] : null) > 1)) {
            // line 92
            echo "
            <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->
            ";
            // line 94
            if (((isset($context["page"]) ? $context["page"] : null) > 1)) {
                // line 95
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => 1, "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> << </a>
            ";
            }
            // line 97
            echo "            <!-------------------------------------------------------------------------->

            <!-- Affiche un lien vers la page précédente si elle existe -->
            ";
            // line 100
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 101
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => ((isset($context["page"]) ? $context["page"] : null) - 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> < </a>
            ";
            }
            // line 103
            echo "            <!---------------------------------------------------------->

            <!-- Affichage des liens vers les pages précédente. -->
            ";
            // line 106
            if ((((isset($context["page"]) ? $context["page"] : null) - 1) >= 1)) {
                // line 107
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ((isset($context["page"]) ? $context["page"] : null) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 108
                    echo "
                    ";
                    // line 109
                    if (($context["i"] >= ((isset($context["page"]) ? $context["page"] : null) - 2))) {
                        // line 110
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 112
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "            ";
            }
            // line 115
            echo "            <!--------------------------------------------------->

            <!-- Page courante -->
            <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => (isset($context["page"]) ? $context["page"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
            echo "\"> <p id=\"pageActuel\">";
            echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true);
            echo "</p> </a>
            <!------------------->

            <!-- Affichage des liens vers les pages suivantes. -->
            ";
            // line 122
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 123
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : null) + 1), (isset($context["nbPage"]) ? $context["nbPage"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 124
                    echo "
                    ";
                    // line 125
                    if (($context["i"] <= ((isset($context["page"]) ? $context["page"] : null) + 2))) {
                        // line 126
                        echo "                        <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => $context["i"], "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                        echo " </a>
                    ";
                    }
                    // line 128
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 130
                echo "            ";
            }
            // line 131
            echo "            <!--------------------------------------------------->

            <!-- Affiche un lien vers la page suivante si elle existe -->
            ";
            // line 134
            if ((((isset($context["page"]) ? $context["page"] : null) + 1) <= (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 135
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => ((isset($context["page"]) ? $context["page"] : null) + 1), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> > </a>
            ";
            }
            // line 137
            echo "            <!------------------------------------------------------------>

            <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->
            ";
            // line 140
            if (((isset($context["page"]) ? $context["page"] : null) < (isset($context["nbPage"]) ? $context["nbPage"] : null))) {
                // line 141
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_affichageImages", array("page" => (isset($context["nbPage"]) ? $context["nbPage"] : null), "dossier" => (isset($context["dossier"]) ? $context["dossier"] : null), "config" => (isset($context["config"]) ? $context["config"] : null), "chemin" => (isset($context["chemin"]) ? $context["chemin"] : null))), "html", null, true);
                echo "\"> >> </a>
            ";
            }
            // line 143
            echo "            <!-------------------------------------------------------------------------->

        ";
        }
        // line 146
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetCommunication/Accueil/affichageImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 146,  375 => 143,  369 => 141,  367 => 140,  362 => 137,  356 => 135,  354 => 134,  349 => 131,  346 => 130,  339 => 128,  331 => 126,  329 => 125,  326 => 124,  321 => 123,  319 => 122,  310 => 118,  305 => 115,  302 => 114,  295 => 112,  287 => 110,  285 => 109,  282 => 108,  277 => 107,  275 => 106,  270 => 103,  264 => 101,  262 => 100,  257 => 97,  251 => 95,  249 => 94,  245 => 92,  243 => 91,  236 => 86,  227 => 83,  224 => 82,  220 => 81,  213 => 76,  208 => 73,  202 => 71,  200 => 70,  195 => 67,  189 => 65,  187 => 64,  182 => 61,  179 => 60,  172 => 58,  164 => 56,  162 => 55,  159 => 54,  154 => 53,  152 => 52,  143 => 48,  138 => 45,  135 => 44,  128 => 42,  120 => 40,  118 => 39,  115 => 38,  110 => 37,  108 => 36,  103 => 33,  97 => 31,  95 => 30,  90 => 27,  84 => 25,  82 => 24,  78 => 22,  76 => 21,  71 => 18,  62 => 14,  55 => 10,  52 => 9,  49 => 8,  43 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}{{ dossier }}{% endblock %}*/
/* */
/* {% block messageAccueil %}{{ dossier }}{% endblock %}*/
/* {% block sousMessageAccueil %}Pour télécharger une image faite un clic-droit dessus puis "Enregistrer l'image sous..."{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_COMMUNICATION') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/{{ config }}', 'Gestionnaire de fichiers - {{ dossier }}');"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>*/
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
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': 1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': page-1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageImages', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_affichageImages', { 'page': page, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageImages', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': page+1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': nbPage, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     <div id="divAffichageImages">*/
/* */
/*         {% for image in images %}*/
/* */
/*             <img src="{{ asset(image) }}" class="downloadable" />*/
/* */
/*         {% endfor %}*/
/* */
/*     </div>*/
/* */
/*     <div id="choixPage">*/
/* */
/*         {% if nbPage > 1 %}*/
/* */
/*             <!-- Affiche un lien vers la première page si ce n'est pas la page actuel -->*/
/*             {% if page > 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': 1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> << </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page précédente si elle existe -->*/
/*             {% if page-1  >= 1 %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': page-1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> < </a>*/
/*             {% endif %}*/
/*             <!---------------------------------------------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages précédente. -->*/
/*             {% if page-1  >= 1 %}*/
/*                 {% for i in 1..page-1 %}*/
/* */
/*                     {% if i >= (page - 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageImages', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Page courante -->*/
/*             <a href="{{ path('nox_intranet_affichageImages', { 'page': page, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> <p id="pageActuel">{{ page }}</p> </a>*/
/*             <!------------------->*/
/* */
/*             <!-- Affichage des liens vers les pages suivantes. -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 {% for i in page+1..nbPage %}*/
/* */
/*                     {% if i <= (page + 2) %}*/
/*                         <a href="{{ path('nox_intranet_affichageImages', { 'page': i, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> {{ i }} </a>*/
/*                     {% endif %}*/
/* */
/*                 {% endfor %}*/
/*             {% endif %}*/
/*             <!--------------------------------------------------->*/
/* */
/*             <!-- Affiche un lien vers la page suivante si elle existe -->*/
/*             {% if page+1  <= nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': page+1, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> > </a>*/
/*             {% endif %}*/
/*             <!------------------------------------------------------------>*/
/* */
/*             <!-- Affiche un lien vers la dernière page si ce n'est pas la page actuel -->*/
/*             {% if page < nbPage %}*/
/*                 <a href="{{ path('nox_intranet_affichageImages', { 'page': nbPage, 'dossier': dossier, 'config': config, 'chemin': chemin}) }}"> >> </a>*/
/*             {% endif %}*/
/*             <!-------------------------------------------------------------------------->*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
