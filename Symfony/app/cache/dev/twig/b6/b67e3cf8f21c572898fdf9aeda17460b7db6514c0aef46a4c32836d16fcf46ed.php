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
        $__internal_bdaff5f72f88c2c572867f4e9e524074fcbf855e7f55faf2e30cbec87f6b8006 = $this->env->getExtension("native_profiler");
        $__internal_bdaff5f72f88c2c572867f4e9e524074fcbf855e7f55faf2e30cbec87f6b8006->enter($__internal_bdaff5f72f88c2c572867f4e9e524074fcbf855e7f55faf2e30cbec87f6b8006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Accueil:affichageContenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdaff5f72f88c2c572867f4e9e524074fcbf855e7f55faf2e30cbec87f6b8006->leave($__internal_bdaff5f72f88c2c572867f4e9e524074fcbf855e7f55faf2e30cbec87f6b8006_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_45b64b0163654ee88c3833a5a1af277a643a48aa5a5febf6c44dc55aec0c65f6 = $this->env->getExtension("native_profiler");
        $__internal_45b64b0163654ee88c3833a5a1af277a643a48aa5a5febf6c44dc55aec0c65f6->enter($__internal_45b64b0163654ee88c3833a5a1af277a643a48aa5a5febf6c44dc55aec0c65f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_45b64b0163654ee88c3833a5a1af277a643a48aa5a5febf6c44dc55aec0c65f6->leave($__internal_45b64b0163654ee88c3833a5a1af277a643a48aa5a5febf6c44dc55aec0c65f6_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_31a5624e0322c6cc0cb79208995f1e34d6957e5cea130c817e77e0bd70a15324 = $this->env->getExtension("native_profiler");
        $__internal_31a5624e0322c6cc0cb79208995f1e34d6957e5cea130c817e77e0bd70a15324->enter($__internal_31a5624e0322c6cc0cb79208995f1e34d6957e5cea130c817e77e0bd70a15324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_31a5624e0322c6cc0cb79208995f1e34d6957e5cea130c817e77e0bd70a15324->leave($__internal_31a5624e0322c6cc0cb79208995f1e34d6957e5cea130c817e77e0bd70a15324_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_06be17d94ac92f7d1fa6ee39f89362b11f2fa78016fc166aa8adc62e5327c39a = $this->env->getExtension("native_profiler");
        $__internal_06be17d94ac92f7d1fa6ee39f89362b11f2fa78016fc166aa8adc62e5327c39a->enter($__internal_06be17d94ac92f7d1fa6ee39f89362b11f2fa78016fc166aa8adc62e5327c39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "lien", array(), "array"), "html", null, true);
            echo "', 'Nox Letters');\">
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "nom", array(), "array"), "html", null, true);
            echo " </li>

                ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["new"], "proprietes", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
                // line 35
                echo "
                    ";
                // line 36
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Title")) {
                    echo " <li> Titre : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 37
                echo "
                    ";
                // line 38
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Author")) {
                    echo " <li> Auteur : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 39
                echo "
                    ";
                // line 40
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Subject")) {
                    echo " <li> Sujet : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 41
                echo "
                    ";
                // line 42
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Keywords")) {
                    echo " <li> Mots clés : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 43
                echo "
                    ";
                // line 44
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Pages")) {
                    echo " <li> Nombre de page(s) : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 45
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
                <li> Posté le : ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "dateEnvoi", array(), "array"), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
";
        
        $__internal_06be17d94ac92f7d1fa6ee39f89362b11f2fa78016fc166aa8adc62e5327c39a->leave($__internal_06be17d94ac92f7d1fa6ee39f89362b11f2fa78016fc166aa8adc62e5327c39a_prof);

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
        return array (  196 => 55,  183 => 48,  180 => 47,  173 => 45,  167 => 44,  164 => 43,  158 => 42,  155 => 41,  149 => 40,  146 => 39,  140 => 38,  137 => 37,  131 => 36,  128 => 35,  124 => 34,  119 => 32,  110 => 26,  106 => 25,  102 => 24,  97 => 22,  88 => 18,  85 => 17,  76 => 13,  69 => 9,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*     {% if is_granted('ROLE_COMMUNICATION') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/{{ config }}', 'Gestionnaire de fichiers - {{ dossier }}');"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     {% for new in news %} */
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ new['lien'] }}', 'Nox Letters');">*/
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
