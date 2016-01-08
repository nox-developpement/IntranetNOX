<?php

/* NoxIntranetAccueilBundle:Accueil:accueil.html.twig */
class __TwigTemplate_d57e7b2cf90f6764b1b0c30011a96aa50174b5d164bf7c87747897765e693ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAccueilBundle:Accueil:accueil.html.twig", 1);
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
        $__internal_838a8883039a49da1a4143a8ff28df7adc33560566fdfdf1a3af989a1e125d8e = $this->env->getExtension("native_profiler");
        $__internal_838a8883039a49da1a4143a8ff28df7adc33560566fdfdf1a3af989a1e125d8e->enter($__internal_838a8883039a49da1a4143a8ff28df7adc33560566fdfdf1a3af989a1e125d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAccueilBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_838a8883039a49da1a4143a8ff28df7adc33560566fdfdf1a3af989a1e125d8e->leave($__internal_838a8883039a49da1a4143a8ff28df7adc33560566fdfdf1a3af989a1e125d8e_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_844455aa6e11bfe92ac763bfb34b35a3d7487c2af030645962c0fcc974c1f623 = $this->env->getExtension("native_profiler");
        $__internal_844455aa6e11bfe92ac763bfb34b35a3d7487c2af030645962c0fcc974c1f623->enter($__internal_844455aa6e11bfe92ac763bfb34b35a3d7487c2af030645962c0fcc974c1f623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Accueil ";
        
        $__internal_844455aa6e11bfe92ac763bfb34b35a3d7487c2af030645962c0fcc974c1f623->leave($__internal_844455aa6e11bfe92ac763bfb34b35a3d7487c2af030645962c0fcc974c1f623_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_cff995064386d2ce0d039d8d960e1ec7f52b554f7bd8861d172eb3e0fd35e25a = $this->env->getExtension("native_profiler");
        $__internal_cff995064386d2ce0d039d8d960e1ec7f52b554f7bd8861d172eb3e0fd35e25a->enter($__internal_cff995064386d2ce0d039d8d960e1ec7f52b554f7bd8861d172eb3e0fd35e25a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Bienvenue ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
            echo " ";
        }
        
        $__internal_cff995064386d2ce0d039d8d960e1ec7f52b554f7bd8861d172eb3e0fd35e25a->leave($__internal_cff995064386d2ce0d039d8d960e1ec7f52b554f7bd8861d172eb3e0fd35e25a_prof);

    }

    // line 6
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_1656e08506ac8bc9eb1443868646c20d569eb21a45c97070d1b4d92f183c0091 = $this->env->getExtension("native_profiler");
        $__internal_1656e08506ac8bc9eb1443868646c20d569eb21a45c97070d1b4d92f183c0091->enter($__internal_1656e08506ac8bc9eb1443868646c20d569eb21a45c97070d1b4d92f183c0091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Les dernières news";
        
        $__internal_1656e08506ac8bc9eb1443868646c20d569eb21a45c97070d1b4d92f183c0091->leave($__internal_1656e08506ac8bc9eb1443868646c20d569eb21a45c97070d1b4d92f183c0091_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_29cc0abcf96269d9f36421a0011ed13e446aedf148f31bb4b842cce62f75bd54 = $this->env->getExtension("native_profiler");
        $__internal_29cc0abcf96269d9f36421a0011ed13e446aedf148f31bb4b842cce62f75bd54->enter($__internal_29cc0abcf96269d9f36421a0011ed13e446aedf148f31bb4b842cce62f75bd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 9
        echo "
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 11
            echo "
        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "lien", array(), "array"), "html", null, true);
            echo "', 'News SI');\">
                <img 
                    src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "\" alt=\"PDF\" 
                    onmouseover=\"this.src = '";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png"), "html", null, true);
            echo "';\" 
                    onmouseout=\"this.src = '";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "';\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "nom", array(), "array"), "html", null, true);
            echo " </li>

                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["new"], "proprietes", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
                // line 27
                echo "
                    ";
                // line 28
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Title")) {
                    echo " <li> Titre : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 29
                echo "
                    ";
                // line 30
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Author")) {
                    echo " <li> Auteur : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 31
                echo "
                    ";
                // line 32
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Subject")) {
                    echo " <li> Sujet : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 33
                echo "
                    ";
                // line 34
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Keywords")) {
                    echo " <li> Mots clés : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 35
                echo "
                    ";
                // line 36
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Pages")) {
                    echo " <li> Nombre de page(s) : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 37
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
                <li> Posté le : ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "dateEnvoi", array(), "array"), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
";
        
        $__internal_29cc0abcf96269d9f36421a0011ed13e446aedf148f31bb4b842cce62f75bd54->leave($__internal_29cc0abcf96269d9f36421a0011ed13e446aedf148f31bb4b842cce62f75bd54_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAccueilBundle:Accueil:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 47,  184 => 40,  181 => 39,  174 => 37,  168 => 36,  165 => 35,  159 => 34,  156 => 33,  150 => 32,  147 => 31,  141 => 30,  138 => 29,  132 => 28,  129 => 27,  125 => 26,  120 => 24,  111 => 18,  107 => 17,  103 => 16,  98 => 14,  93 => 11,  89 => 10,  86 => 9,  80 => 8,  68 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Accueil {% endblock %}*/
/* */
/* {% block messageAccueil %}Bienvenue {% if app.user != null %} {{ app.user.firstname }} {{ app.user.lastname }} {% endif %}{% endblock %}*/
/* {% block sousMessageAccueil %}Les dernières news{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% for new in news %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ new['lien'] }}', 'News SI');">*/
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
