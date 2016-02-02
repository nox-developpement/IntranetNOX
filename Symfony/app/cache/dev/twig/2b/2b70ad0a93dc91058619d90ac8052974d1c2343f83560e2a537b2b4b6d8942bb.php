<?php

/* NoxIntranetCommunicationBundle:News:noxNews.html.twig */
class __TwigTemplate_8dcdddb51710f889dfcd05751a7ee072acf5abc66fec82721151f18fbb2e4a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:News:noxNews.html.twig", 1);
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
        $__internal_5f12efe3fe9b87c87563e4be58a6fac2f1bd12b720f156ddbb3a163c00d0cbdb = $this->env->getExtension("native_profiler");
        $__internal_5f12efe3fe9b87c87563e4be58a6fac2f1bd12b720f156ddbb3a163c00d0cbdb->enter($__internal_5f12efe3fe9b87c87563e4be58a6fac2f1bd12b720f156ddbb3a163c00d0cbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:News:noxNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f12efe3fe9b87c87563e4be58a6fac2f1bd12b720f156ddbb3a163c00d0cbdb->leave($__internal_5f12efe3fe9b87c87563e4be58a6fac2f1bd12b720f156ddbb3a163c00d0cbdb_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_80e050ca95d0efa40c0082606a665ad77bc28b40d2ebcac639c9775951474a22 = $this->env->getExtension("native_profiler");
        $__internal_80e050ca95d0efa40c0082606a665ad77bc28b40d2ebcac639c9775951474a22->enter($__internal_80e050ca95d0efa40c0082606a665ad77bc28b40d2ebcac639c9775951474a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Nox news
";
        
        $__internal_80e050ca95d0efa40c0082606a665ad77bc28b40d2ebcac639c9775951474a22->leave($__internal_80e050ca95d0efa40c0082606a665ad77bc28b40d2ebcac639c9775951474a22_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c71825eff30fc63932a25458e82ec6dc538d57e965f9413ac5e492ef1907dd95 = $this->env->getExtension("native_profiler");
        $__internal_c71825eff30fc63932a25458e82ec6dc538d57e965f9413ac5e492ef1907dd95->enter($__internal_c71825eff30fc63932a25458e82ec6dc538d57e965f9413ac5e492ef1907dd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "NoxNews";
        
        $__internal_c71825eff30fc63932a25458e82ec6dc538d57e965f9413ac5e492ef1907dd95->leave($__internal_c71825eff30fc63932a25458e82ec6dc538d57e965f9413ac5e492ef1907dd95_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0a115f1713f44e3d03c44d4fa19c2b84b6977d8dcb2a7c6d9580d26836a41033 = $this->env->getExtension("native_profiler");
        $__internal_0a115f1713f44e3d03c44d4fa19c2b84b6977d8dcb2a7c6d9580d26836a41033->enter($__internal_0a115f1713f44e3d03c44d4fa19c2b84b6977d8dcb2a7c6d9580d26836a41033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxNews', 'Gestionnaire de fichiers - Nox news');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 19
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 21
            echo "
        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "lien", array(), "array"), "html", null, true);
            echo "', 'Nox news');\">
                <img 
                    src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "\" alt=\"PDF\" 
                    onmouseover=\"this.src = '";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png"), "html", null, true);
            echo "';\" 
                    onmouseout=\"this.src = '";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "';\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "nom", array(), "array"), "html", null, true);
            echo " </li>

                ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["new"], "proprietes", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
                // line 37
                echo "
                    ";
                // line 38
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Title")) {
                    echo " <li> Titre : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 39
                echo "
                    ";
                // line 40
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Author")) {
                    echo " <li> Auteur : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 41
                echo "
                    ";
                // line 42
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Subject")) {
                    echo " <li> Sujet : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 43
                echo "
                    ";
                // line 44
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Keywords")) {
                    echo " <li> Mots clés : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 45
                echo "
                    ";
                // line 46
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Pages")) {
                    echo " <li> Nombre de page(s) : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 47
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "
                <li> Posté le : ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "dateEnvoi", array(), "array"), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "
";
        
        $__internal_0a115f1713f44e3d03c44d4fa19c2b84b6977d8dcb2a7c6d9580d26836a41033->leave($__internal_0a115f1713f44e3d03c44d4fa19c2b84b6977d8dcb2a7c6d9580d26836a41033_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:News:noxNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 57,  180 => 50,  177 => 49,  170 => 47,  164 => 46,  161 => 45,  155 => 44,  152 => 43,  146 => 42,  143 => 41,  137 => 40,  134 => 39,  128 => 38,  125 => 37,  121 => 36,  116 => 34,  107 => 28,  103 => 27,  99 => 26,  94 => 24,  89 => 21,  85 => 20,  82 => 19,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Nox news*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}NoxNews{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_COMMUNICATION') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxNews', 'Gestionnaire de fichiers - Nox news');"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     {% for new in news %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ new['lien'] }}', 'Nox news');">*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}" alt="PDF" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}';"*/
/*                     >*/
/*             </a>*/
/* */
/*             <ul>*/
/* */
/*                 <li> Nom du fichier : {{ new['nom'] }} </li>*/
/* */
/*                 {% for propriete in new['proprietes'] %}*/
/* */
/*                     {% if propriete['label'] == 'Title' %} <li> Titre : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Author' %} <li> Auteur : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Subject' %} <li> Sujet : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Keywords' %} <li> Mots clés : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Pages' %} <li> Nombre de page(s) : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                 {% endfor %}*/
/* */
/*                 <li> Posté le : {{ new['dateEnvoi'] }} </li>*/
/* */
/*             </ul>*/
/* */
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
