<?php

/* NoxIntranetRessourcesBundle:RH:affichageExcel.html.twig */
class __TwigTemplate_362c05905601aa78087d4be8b2be29980d3e65efe93ea358b77ce1ed1fe1b259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:RH:affichageExcel.html.twig", 1);
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
        $__internal_6d8d53d993419b06dc7ed13391b6bd596e349d6e7c4ded2ad048459d64b469ab = $this->env->getExtension("native_profiler");
        $__internal_6d8d53d993419b06dc7ed13391b6bd596e349d6e7c4ded2ad048459d64b469ab->enter($__internal_6d8d53d993419b06dc7ed13391b6bd596e349d6e7c4ded2ad048459d64b469ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:RH:affichageExcel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d8d53d993419b06dc7ed13391b6bd596e349d6e7c4ded2ad048459d64b469ab->leave($__internal_6d8d53d993419b06dc7ed13391b6bd596e349d6e7c4ded2ad048459d64b469ab_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_3f1d3a7cdc8ebf5c80d28e600b584725b531286a2abd6adbe76677cf5bfbb5b5 = $this->env->getExtension("native_profiler");
        $__internal_3f1d3a7cdc8ebf5c80d28e600b584725b531286a2abd6adbe76677cf5bfbb5b5->enter($__internal_3f1d3a7cdc8ebf5c80d28e600b584725b531286a2abd6adbe76677cf5bfbb5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_3f1d3a7cdc8ebf5c80d28e600b584725b531286a2abd6adbe76677cf5bfbb5b5->leave($__internal_3f1d3a7cdc8ebf5c80d28e600b584725b531286a2abd6adbe76677cf5bfbb5b5_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b0da630953e320f0eab30d5bd107a623547f010a7da2474fb56b32848c7f7ed8 = $this->env->getExtension("native_profiler");
        $__internal_b0da630953e320f0eab30d5bd107a623547f010a7da2474fb56b32848c7f7ed8->enter($__internal_b0da630953e320f0eab30d5bd107a623547f010a7da2474fb56b32848c7f7ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_b0da630953e320f0eab30d5bd107a623547f010a7da2474fb56b32848c7f7ed8->leave($__internal_b0da630953e320f0eab30d5bd107a623547f010a7da2474fb56b32848c7f7ed8_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a8cf60a5fc85061ead88117c6c43f9cb5b8cf51fa518b7620d847aadf74cb31c = $this->env->getExtension("native_profiler");
        $__internal_a8cf60a5fc85061ead88117c6c43f9cb5b8cf51fa518b7620d847aadf74cb31c->enter($__internal_a8cf60a5fc85061ead88117c6c43f9cb5b8cf51fa518b7620d847aadf74cb31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_RH")) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/Symfony/web/ImagePDF/";
            echo twig_escape_filter($this->env, twig_convert_encoding($this->getAttribute($context["new"], "Nom", array()), "UTF-8", "ISO-8859-1"), "html", null, true);
            echo ".png\" alt=\"PDF\" 
                    onmouseover=\"\$(this).css('box-shadow', '0px 0px 10px #1F4E79');\" 
                    onmouseout=\"\$(this).css('box-shadow', 'none');\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "Nom", array()), "html", null, true);
            echo " </li>

                ";
            // line 34
            if (($this->getAttribute($this->getAttribute($context["new"], "proprietes", array()), "Title", array()) != null)) {
                echo " <li> Titre : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "proprietes", array()), "Title", array()), "html", null, true);
                echo " </li> ";
            }
            // line 35
            echo "
                ";
            // line 36
            if (($this->getAttribute($this->getAttribute($context["new"], "proprietes", array()), "Creator", array()) != null)) {
                echo " <li> Auteur : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "proprietes", array()), "Creator", array()), "html", null, true);
                echo " </li> ";
            }
            // line 37
            echo "
                ";
            // line 38
            if (($this->getAttribute($this->getAttribute($context["new"], "proprietes", array()), "Subject", array()) != null)) {
                echo " <li> Sujet : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "proprietes", array()), "Subject", array()), "html", null, true);
                echo " </li> ";
            }
            // line 39
            echo "
                ";
            // line 40
            if (($this->getAttribute($this->getAttribute($context["new"], "proprietes", array()), "Keywords", array()) != null)) {
                echo " <li> Mots : ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "proprietes", array()), "Keywords", array()), "html", null, true);
                echo " </li> ";
            }
            // line 41
            echo "
                <li> Posté le : ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "dateEnvoi", array()), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "


";
        
        $__internal_a8cf60a5fc85061ead88117c6c43f9cb5b8cf51fa518b7620d847aadf74cb31c->leave($__internal_a8cf60a5fc85061ead88117c6c43f9cb5b8cf51fa518b7620d847aadf74cb31c_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:RH:affichageExcel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 49,  156 => 42,  153 => 41,  147 => 40,  144 => 39,  138 => 38,  135 => 37,  129 => 36,  126 => 35,  120 => 34,  115 => 32,  102 => 24,  97 => 22,  88 => 18,  85 => 17,  76 => 13,  69 => 9,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*     {% if is_granted('ROLE_RH') %} */
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
/*                 {% if new.proprietes.Title != null %} <li> Titre : {{ new.proprietes.Title }} </li> {% endif %}*/
/* */
/*                 {% if new.proprietes.Creator != null %} <li> Auteur : {{ new.proprietes.Creator }} </li> {% endif %}*/
/* */
/*                 {% if new.proprietes.Subject != null %} <li> Sujet : {{ new.proprietes.Subject }} </li> {% endif %}*/
/* */
/*                 {% if new.proprietes.Keywords != null %} <li> Mots : {{ new.proprietes.Keywords }} </li> {% endif %}*/
/* */
/*                 <li> Posté le : {{ new.dateEnvoi }} </li>*/
/* */
/*             </ul>*/
/* */
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
