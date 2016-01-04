<?php

/* NoxIntranetCommunicationBundle:News:noxLetters.html.twig */
class __TwigTemplate_65e104a77a46c2ffaaa9f84c5def9094a68f182c3a993957099bb9eb5ba095ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:News:noxLetters.html.twig", 1);
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
        $__internal_64ba1aeecbaae2efb69b965746abab46e9bf9cfd6c1da912826d5b46e8a91120 = $this->env->getExtension("native_profiler");
        $__internal_64ba1aeecbaae2efb69b965746abab46e9bf9cfd6c1da912826d5b46e8a91120->enter($__internal_64ba1aeecbaae2efb69b965746abab46e9bf9cfd6c1da912826d5b46e8a91120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:News:noxLetters.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64ba1aeecbaae2efb69b965746abab46e9bf9cfd6c1da912826d5b46e8a91120->leave($__internal_64ba1aeecbaae2efb69b965746abab46e9bf9cfd6c1da912826d5b46e8a91120_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_2a8e64abb114dc16f955cdad74cff4ee9122b21766d4fa681947adc590261755 = $this->env->getExtension("native_profiler");
        $__internal_2a8e64abb114dc16f955cdad74cff4ee9122b21766d4fa681947adc590261755->enter($__internal_2a8e64abb114dc16f955cdad74cff4ee9122b21766d4fa681947adc590261755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Nox letters
";
        
        $__internal_2a8e64abb114dc16f955cdad74cff4ee9122b21766d4fa681947adc590261755->leave($__internal_2a8e64abb114dc16f955cdad74cff4ee9122b21766d4fa681947adc590261755_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_04b55c3d8caf11314c0c9963e5b1919099578879390761ad3bb6857106c3d613 = $this->env->getExtension("native_profiler");
        $__internal_04b55c3d8caf11314c0c9963e5b1919099578879390761ad3bb6857106c3d613->enter($__internal_04b55c3d8caf11314c0c9963e5b1919099578879390761ad3bb6857106c3d613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Nox letters";
        
        $__internal_04b55c3d8caf11314c0c9963e5b1919099578879390761ad3bb6857106c3d613->leave($__internal_04b55c3d8caf11314c0c9963e5b1919099578879390761ad3bb6857106c3d613_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_12402ed6ad9c469dc313051cc44dfa9fd2b4abc3d331622a478c53a52885e030 = $this->env->getExtension("native_profiler");
        $__internal_12402ed6ad9c469dc313051cc44dfa9fd2b4abc3d331622a478c53a52885e030->enter($__internal_12402ed6ad9c469dc313051cc44dfa9fd2b4abc3d331622a478c53a52885e030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_NEWS")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxLetters', 'Gestionnaire de fichiers - Nox letters');\"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>
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
            echo "', 'Nox Letters');\">
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
        
        $__internal_12402ed6ad9c469dc313051cc44dfa9fd2b4abc3d331622a478c53a52885e030->leave($__internal_12402ed6ad9c469dc313051cc44dfa9fd2b4abc3d331622a478c53a52885e030_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:News:noxLetters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 55,  175 => 48,  172 => 47,  165 => 45,  159 => 44,  156 => 43,  150 => 42,  147 => 41,  141 => 40,  138 => 39,  132 => 38,  129 => 37,  123 => 36,  120 => 35,  116 => 34,  107 => 28,  103 => 27,  99 => 26,  94 => 24,  89 => 21,  85 => 20,  82 => 19,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Nox letters*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Nox letters{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_NEWS') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/noxLetters', 'Gestionnaire de fichiers - Nox letters');"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     {% for new in news %}*/
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
