<?php

/* @NoxIntranetRessources/RH/affichageContenu.html.twig */
class __TwigTemplate_e88586caf150aa43c556aca8676672103d83051a0691f66a714aee25e23fc426 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/RH/affichageContenu.html.twig", 1);
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
        $__internal_299082c176ea171ea6e932b30b3ea06a46fb31cb865c1c5eea30dc233f36162f = $this->env->getExtension("native_profiler");
        $__internal_299082c176ea171ea6e932b30b3ea06a46fb31cb865c1c5eea30dc233f36162f->enter($__internal_299082c176ea171ea6e932b30b3ea06a46fb31cb865c1c5eea30dc233f36162f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/RH/affichageContenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_299082c176ea171ea6e932b30b3ea06a46fb31cb865c1c5eea30dc233f36162f->leave($__internal_299082c176ea171ea6e932b30b3ea06a46fb31cb865c1c5eea30dc233f36162f_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_c3922dc75dcfae4d6f292b8b1682297372a2b630db64685876017472378b985c = $this->env->getExtension("native_profiler");
        $__internal_c3922dc75dcfae4d6f292b8b1682297372a2b630db64685876017472378b985c->enter($__internal_c3922dc75dcfae4d6f292b8b1682297372a2b630db64685876017472378b985c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_c3922dc75dcfae4d6f292b8b1682297372a2b630db64685876017472378b985c->leave($__internal_c3922dc75dcfae4d6f292b8b1682297372a2b630db64685876017472378b985c_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_4a091e0d277ca8f8e6e3736736c90fa93ab78c60143487634fb0fa78224614b3 = $this->env->getExtension("native_profiler");
        $__internal_4a091e0d277ca8f8e6e3736736c90fa93ab78c60143487634fb0fa78224614b3->enter($__internal_4a091e0d277ca8f8e6e3736736c90fa93ab78c60143487634fb0fa78224614b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_4a091e0d277ca8f8e6e3736736c90fa93ab78c60143487634fb0fa78224614b3->leave($__internal_4a091e0d277ca8f8e6e3736736c90fa93ab78c60143487634fb0fa78224614b3_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_78314c46c9d6026c9bb36afa23562280ed070f243bd98fa8a1b475b5d870deed = $this->env->getExtension("native_profiler");
        $__internal_78314c46c9d6026c9bb36afa23562280ed070f243bd98fa8a1b475b5d870deed->enter($__internal_78314c46c9d6026c9bb36afa23562280ed070f243bd98fa8a1b475b5d870deed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
            echo "');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 17
        echo "
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            echo " 

        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Lien", array()), "html", null, true);
            echo "', 'RH');\">
                <img 
                    src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "\" alt=\"PDF\" 
                    onmouseover=\"this.src = '";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png"), "html", null, true);
            echo "';\" 
                    onmouseout=\"this.src = '";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "';\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Nom", array()), "html", null, true);
            echo " </li>

                ";
            // line 34
            if (($this->getAttribute($context["new"], "Title", array()) != null)) {
                echo " <li> Titre : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Title", array()), "html", null, true);
                echo " </li> ";
            }
            // line 35
            echo "
                ";
            // line 36
            if (($this->getAttribute($context["new"], "Author", array()) != null)) {
                echo " <li> Auteur : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Author", array()), "html", null, true);
                echo " </li> ";
            }
            // line 37
            echo "
                ";
            // line 38
            if (($this->getAttribute($context["new"], "Subject", array()) != null)) {
                echo " <li> Sujet : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Subject", array()), "html", null, true);
                echo " </li> ";
            }
            // line 39
            echo "
                ";
            // line 40
            if (($this->getAttribute($context["new"], "Keywords", array()) != null)) {
                echo " <li> Mots : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Keywords", array()), "html", null, true);
                echo " </li> ";
            }
            // line 41
            echo "
                ";
            // line 42
            if (($this->getAttribute($context["new"], "Pages", array()) != null)) {
                echo " <li> Nombre de page(s) : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Pages", array()), "html", null, true);
                echo " </li> ";
            }
            // line 43
            echo "
                <li> Posté le : ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "dateEnvoi", array()), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
";
        
        $__internal_78314c46c9d6026c9bb36afa23562280ed070f243bd98fa8a1b475b5d870deed->leave($__internal_78314c46c9d6026c9bb36afa23562280ed070f243bd98fa8a1b475b5d870deed_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/RH/affichageContenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 51,  169 => 44,  166 => 43,  160 => 42,  157 => 41,  151 => 40,  148 => 39,  142 => 38,  139 => 37,  133 => 36,  130 => 35,  124 => 34,  119 => 32,  110 => 26,  106 => 25,  102 => 24,  97 => 22,  88 => 18,  85 => 17,  76 => 13,  69 => 9,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}{{ dossier }}{% endblock %}*/
/* */
/* {% block messageAccueil %}{{ dossier }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/{{ config }}', 'Gestionnaire de fichiers - {{ dossier }}');"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     {% for new in news %} */
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ new.Lien }}', 'RH');">*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}" alt="PDF" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}';"*/
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
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
