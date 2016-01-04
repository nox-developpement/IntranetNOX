<?php

/* NoxIntranetCommunicationBundle:News:newsSI.html.twig */
class __TwigTemplate_3fa95d74d2748d520a6618b2d147596882b2235ae0d19f2bee71fe5112e92647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:News:newsSI.html.twig", 1);
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
        $__internal_7b3115959be4a25b5079f591212bf161bd138803991b6c46c6e465a1e779ad1c = $this->env->getExtension("native_profiler");
        $__internal_7b3115959be4a25b5079f591212bf161bd138803991b6c46c6e465a1e779ad1c->enter($__internal_7b3115959be4a25b5079f591212bf161bd138803991b6c46c6e465a1e779ad1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:News:newsSI.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b3115959be4a25b5079f591212bf161bd138803991b6c46c6e465a1e779ad1c->leave($__internal_7b3115959be4a25b5079f591212bf161bd138803991b6c46c6e465a1e779ad1c_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_64e97f3b291475148b1b59c5b554f03f3b7eb5af2ffeb0e00b6ef344ade2a592 = $this->env->getExtension("native_profiler");
        $__internal_64e97f3b291475148b1b59c5b554f03f3b7eb5af2ffeb0e00b6ef344ade2a592->enter($__internal_64e97f3b291475148b1b59c5b554f03f3b7eb5af2ffeb0e00b6ef344ade2a592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    News SI
";
        
        $__internal_64e97f3b291475148b1b59c5b554f03f3b7eb5af2ffeb0e00b6ef344ade2a592->leave($__internal_64e97f3b291475148b1b59c5b554f03f3b7eb5af2ffeb0e00b6ef344ade2a592_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_88e4b055dfb702e3a7bba1d6cfcfae2a8816cfeea3495423384502198b54ce72 = $this->env->getExtension("native_profiler");
        $__internal_88e4b055dfb702e3a7bba1d6cfcfae2a8816cfeea3495423384502198b54ce72->enter($__internal_88e4b055dfb702e3a7bba1d6cfcfae2a8816cfeea3495423384502198b54ce72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "News SI";
        
        $__internal_88e4b055dfb702e3a7bba1d6cfcfae2a8816cfeea3495423384502198b54ce72->leave($__internal_88e4b055dfb702e3a7bba1d6cfcfae2a8816cfeea3495423384502198b54ce72_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_23283dd7e6f0a039916b9372b1664b4ef40f77a6d4e8b9e32f03135f4a399f60 = $this->env->getExtension("native_profiler");
        $__internal_23283dd7e6f0a039916b9372b1664b4ef40f77a6d4e8b9e32f03135f4a399f60->enter($__internal_23283dd7e6f0a039916b9372b1664b4ef40f77a6d4e8b9e32f03135f4a399f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_NEWS")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'Gestionnaire de fichiers - News SI');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
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
            echo "', 'News SI');\">
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
        
        $__internal_23283dd7e6f0a039916b9372b1664b4ef40f77a6d4e8b9e32f03135f4a399f60->leave($__internal_23283dd7e6f0a039916b9372b1664b4ef40f77a6d4e8b9e32f03135f4a399f60_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:News:newsSI.html.twig";
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
/*     News SI*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}News SI{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_NEWS') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/newsSI', 'Gestionnaire de fichiers - News SI');"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
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
