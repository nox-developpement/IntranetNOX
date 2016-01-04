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
        $__internal_83adf86aa31e390e9ebdf2f4cc8e0671310a253f23f837c0182ca21d731753f2 = $this->env->getExtension("native_profiler");
        $__internal_83adf86aa31e390e9ebdf2f4cc8e0671310a253f23f837c0182ca21d731753f2->enter($__internal_83adf86aa31e390e9ebdf2f4cc8e0671310a253f23f837c0182ca21d731753f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:News:noxNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83adf86aa31e390e9ebdf2f4cc8e0671310a253f23f837c0182ca21d731753f2->leave($__internal_83adf86aa31e390e9ebdf2f4cc8e0671310a253f23f837c0182ca21d731753f2_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_70aa5ae6ff08ececaf77409e44eca3865239f468754fe936386050ed94a0ce80 = $this->env->getExtension("native_profiler");
        $__internal_70aa5ae6ff08ececaf77409e44eca3865239f468754fe936386050ed94a0ce80->enter($__internal_70aa5ae6ff08ececaf77409e44eca3865239f468754fe936386050ed94a0ce80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Nox news
";
        
        $__internal_70aa5ae6ff08ececaf77409e44eca3865239f468754fe936386050ed94a0ce80->leave($__internal_70aa5ae6ff08ececaf77409e44eca3865239f468754fe936386050ed94a0ce80_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_980b5e3391eeee19ee30e06f70c32a1588c7d127f3d0204682f89de96138edf4 = $this->env->getExtension("native_profiler");
        $__internal_980b5e3391eeee19ee30e06f70c32a1588c7d127f3d0204682f89de96138edf4->enter($__internal_980b5e3391eeee19ee30e06f70c32a1588c7d127f3d0204682f89de96138edf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Nox news";
        
        $__internal_980b5e3391eeee19ee30e06f70c32a1588c7d127f3d0204682f89de96138edf4->leave($__internal_980b5e3391eeee19ee30e06f70c32a1588c7d127f3d0204682f89de96138edf4_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ecac9ad20a275df24ca4b3bc18ebe9a2486b20d1b83c4bc37d834520dc5e298b = $this->env->getExtension("native_profiler");
        $__internal_ecac9ad20a275df24ca4b3bc18ebe9a2486b20d1b83c4bc37d834520dc5e298b->enter($__internal_ecac9ad20a275df24ca4b3bc18ebe9a2486b20d1b83c4bc37d834520dc5e298b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_NEWS")) {
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
        
        $__internal_ecac9ad20a275df24ca4b3bc18ebe9a2486b20d1b83c4bc37d834520dc5e298b->leave($__internal_ecac9ad20a275df24ca4b3bc18ebe9a2486b20d1b83c4bc37d834520dc5e298b_prof);

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
        return array (  188 => 55,  175 => 48,  172 => 47,  165 => 45,  159 => 44,  156 => 43,  150 => 42,  147 => 41,  141 => 40,  138 => 39,  132 => 38,  129 => 37,  123 => 36,  120 => 35,  116 => 34,  107 => 28,  103 => 27,  99 => 26,  94 => 24,  89 => 21,  85 => 20,  82 => 19,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Nox news*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Nox news{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_NEWS') %} */
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
