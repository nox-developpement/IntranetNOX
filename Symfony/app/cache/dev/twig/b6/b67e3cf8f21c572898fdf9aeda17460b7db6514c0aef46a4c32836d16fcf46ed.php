<?php

/* NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig */
class __TwigTemplate_5e65ab79b4e2b27837867646f3fd02f17df8a0d56f7770c256e708f6cbbf2f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig", 1);
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
        $__internal_deb85851a89282384172f9777da4840ee4c6c2eaa8c46d466715b1deb26052c7 = $this->env->getExtension("native_profiler");
        $__internal_deb85851a89282384172f9777da4840ee4c6c2eaa8c46d466715b1deb26052c7->enter($__internal_deb85851a89282384172f9777da4840ee4c6c2eaa8c46d466715b1deb26052c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deb85851a89282384172f9777da4840ee4c6c2eaa8c46d466715b1deb26052c7->leave($__internal_deb85851a89282384172f9777da4840ee4c6c2eaa8c46d466715b1deb26052c7_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_97b14ff103958f73ae43ede7d5d84f77d1b97bd93721b1470c823c3181960a8f = $this->env->getExtension("native_profiler");
        $__internal_97b14ff103958f73ae43ede7d5d84f77d1b97bd93721b1470c823c3181960a8f->enter($__internal_97b14ff103958f73ae43ede7d5d84f77d1b97bd93721b1470c823c3181960a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier"));
        
        $__internal_97b14ff103958f73ae43ede7d5d84f77d1b97bd93721b1470c823c3181960a8f->leave($__internal_97b14ff103958f73ae43ede7d5d84f77d1b97bd93721b1470c823c3181960a8f_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_ce5f8acc906b2a8885c2ad8e020573fe2fb0a9be1d48ab8f3343f1f058b5b740 = $this->env->getExtension("native_profiler");
        $__internal_ce5f8acc906b2a8885c2ad8e020573fe2fb0a9be1d48ab8f3343f1f058b5b740->enter($__internal_ce5f8acc906b2a8885c2ad8e020573fe2fb0a9be1d48ab8f3343f1f058b5b740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier"));
        
        $__internal_ce5f8acc906b2a8885c2ad8e020573fe2fb0a9be1d48ab8f3343f1f058b5b740->leave($__internal_ce5f8acc906b2a8885c2ad8e020573fe2fb0a9be1d48ab8f3343f1f058b5b740_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_980002caf39e0163d27f0b0bec7b85b21c8ccab64098d9d5656a601b3f4b5294 = $this->env->getExtension("native_profiler");
        $__internal_980002caf39e0163d27f0b0bec7b85b21c8ccab64098d9d5656a601b3f4b5294->enter($__internal_980002caf39e0163d27f0b0bec7b85b21c8ccab64098d9d5656a601b3f4b5294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier"));
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
            echo "', 'Nox Letters');\">
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
        
        $__internal_980002caf39e0163d27f0b0bec7b85b21c8ccab64098d9d5656a601b3f4b5294->leave($__internal_980002caf39e0163d27f0b0bec7b85b21c8ccab64098d9d5656a601b3f4b5294_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 51,  165 => 44,  162 => 43,  156 => 42,  153 => 41,  147 => 40,  144 => 39,  138 => 38,  135 => 37,  129 => 36,  126 => 35,  120 => 34,  115 => 32,  102 => 24,  97 => 22,  88 => 18,  85 => 17,  76 => 13,  69 => 9,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/* {% endblock %}*/
/* */
