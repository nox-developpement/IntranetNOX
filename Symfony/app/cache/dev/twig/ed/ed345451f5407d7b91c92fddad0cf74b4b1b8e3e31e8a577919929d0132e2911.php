<?php

/* NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig */
class __TwigTemplate_3d0fffd8360f32530bfb0f28280a42d2b3cde14b6bfa97e374e9f4dd907393f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig", 1);
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
        $__internal_f34f15c3186ea8a6bccae5ce5b7bab1abb489cd3a0a7dd2da3b9ccd8ef040811 = $this->env->getExtension("native_profiler");
        $__internal_f34f15c3186ea8a6bccae5ce5b7bab1abb489cd3a0a7dd2da3b9ccd8ef040811->enter($__internal_f34f15c3186ea8a6bccae5ce5b7bab1abb489cd3a0a7dd2da3b9ccd8ef040811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f34f15c3186ea8a6bccae5ce5b7bab1abb489cd3a0a7dd2da3b9ccd8ef040811->leave($__internal_f34f15c3186ea8a6bccae5ce5b7bab1abb489cd3a0a7dd2da3b9ccd8ef040811_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_58a65e0cae496d43f83337dbbf65ec5993f50caadd9a3ccbdfb06dfb0fe3baa8 = $this->env->getExtension("native_profiler");
        $__internal_58a65e0cae496d43f83337dbbf65ec5993f50caadd9a3ccbdfb06dfb0fe3baa8->enter($__internal_58a65e0cae496d43f83337dbbf65ec5993f50caadd9a3ccbdfb06dfb0fe3baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ressources ";
        
        $__internal_58a65e0cae496d43f83337dbbf65ec5993f50caadd9a3ccbdfb06dfb0fe3baa8->leave($__internal_58a65e0cae496d43f83337dbbf65ec5993f50caadd9a3ccbdfb06dfb0fe3baa8_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b5079596241214bb71ad5fb2a4cb7d8872a49122a98f925dd555cf85a0f3ef5d = $this->env->getExtension("native_profiler");
        $__internal_b5079596241214bb71ad5fb2a4cb7d8872a49122a98f925dd555cf85a0f3ef5d->enter($__internal_b5079596241214bb71ad5fb2a4cb7d8872a49122a98f925dd555cf85a0f3ef5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Ressources";
        
        $__internal_b5079596241214bb71ad5fb2a4cb7d8872a49122a98f925dd555cf85a0f3ef5d->leave($__internal_b5079596241214bb71ad5fb2a4cb7d8872a49122a98f925dd555cf85a0f3ef5d_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d6d124888016f2c42f317aab629e7d1ce8941453d83d792256db5918b45ccc80 = $this->env->getExtension("native_profiler");
        $__internal_d6d124888016f2c42f317aab629e7d1ce8941453d83d792256db5918b45ccc80->enter($__internal_d6d124888016f2c42f317aab629e7d1ce8941453d83d792256db5918b45ccc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " 
    <div class=\"iconContener\">

        <!-- Archives -->
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("nox_intranet_archives");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Archive-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Archive-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Archive-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Archives</figcaption>
            </figure>
        </a>

        <!-- Assistant d'affaire -->
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("nox_intranet_assistant_affaire");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assistant d'affaire</figcaption>
            </figure>
        </a>

        <!-- Assurance qualité -->
        <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("nox_intranet_aq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>

        <!-- Compétences (en attente)
        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("nox_intranet_competences");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Compétences</figcaption>
            </figure>
        </a>
        <!---------------------------->

        <!-- FAQ -->
        <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("nox_intranet_faq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Help-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Help-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Help-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>FAQ</figcaption>
            </figure>
        </a>

        <br />

        <!-- Imprimantes (A tester !)
        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("nox_intranet_imprimantes");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Printer-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Printer-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Printer-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Imprimantes</figcaption>
            </figure>
        </a>
        -->

        <!-- Liens -->
        <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("nox_intranet_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Liens</figcaption>
            </figure>
        </a>

        <!-- Procédures (A ajouter)
        <a href=\"";
        // line 99
        echo $this->env->getExtension('routing')->getPath("nox_intranet_procedures");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Procédures</figcaption>
            </figure>
        </a>
        -->

        <!-- Références -->
        <a href=\"";
        // line 112
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- RH -->
        <a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("nox_intranet_rh");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>RH</figcaption>
            </figure>
        </a>

        <!-- Serveurs -->            
        <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("nox_intranet_serveurs");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Serveurs</figcaption>
            </figure>
        </a>

    </div>

";
        
        $__internal_d6d124888016f2c42f317aab629e7d1ce8941453d83d792256db5918b45ccc80->leave($__internal_d6d124888016f2c42f317aab629e7d1ce8941453d83d792256db5918b45ccc80_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 141,  326 => 140,  322 => 139,  316 => 136,  306 => 129,  302 => 128,  298 => 127,  292 => 124,  282 => 117,  278 => 116,  274 => 115,  268 => 112,  257 => 104,  253 => 103,  249 => 102,  243 => 99,  233 => 92,  229 => 91,  225 => 90,  219 => 87,  208 => 79,  204 => 78,  200 => 77,  194 => 74,  182 => 65,  178 => 64,  174 => 63,  168 => 60,  157 => 52,  153 => 51,  149 => 50,  143 => 47,  133 => 40,  129 => 39,  125 => 38,  119 => 35,  109 => 28,  105 => 27,  101 => 26,  95 => 23,  85 => 16,  81 => 15,  77 => 14,  71 => 11,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Ressources {% endblock %}*/
/* */
/* {% block messageAccueil %}Ressources{% endblock %}*/
/* */
/* {% block contenu %} */
/*     <div class="iconContener">*/
/* */
/*         <!-- Archives -->*/
/*         <a href="{{ path('nox_intranet_archives') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Archive-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Archive-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Archive-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Archives</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Assistant d'affaire -->*/
/*         <a href="{{ path('nox_intranet_assistant_affaire') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Business-Man-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Business-Man-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Business-Man-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assistant d'affaire</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Assurance qualité -->*/
/*         <a href="{{ path('nox_intranet_aq') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assurance qualité</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Compétences (en attente)*/
/*         <a href="{{ path('nox_intranet_competences') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Competences-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Competences-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Competences-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Compétences</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         <!---------------------------->*/
/* */
/*         <!-- FAQ -->*/
/*         <a href="{{ path('nox_intranet_faq') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Help-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Help-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Help-128.png') }}';"*/
/*                     > */
/*                 <figcaption>FAQ</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <br />*/
/* */
/*         <!-- Imprimantes (A tester !)*/
/*         <a href="{{ path('nox_intranet_imprimantes') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Printer-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Printer-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Printer-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Imprimantes</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         -->*/
/* */
/*         <!-- Liens -->*/
/*         <a href="{{ path('nox_intranet_liens') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Link-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Link-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Link-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Liens</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Procédures (A ajouter)*/
/*         <a href="{{ path('nox_intranet_procedures') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Procedures-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Procedures-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Procedures-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Procédures</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         -->*/
/* */
/*         <!-- Références -->*/
/*         <a href="{{ path('nox_intranet_references') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Références</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- RH -->*/
/*         <a href="{{ path('nox_intranet_rh') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/User-Group-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/User-Group-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/User-Group-128.png') }}';"*/
/*                     > */
/*                 <figcaption>RH</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Serveurs -->            */
/*         <a href="{{ path('nox_intranet_serveurs') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Server-02-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Server-02-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Server-02-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Serveurs</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
