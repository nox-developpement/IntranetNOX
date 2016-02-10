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
        $__internal_944c3a5e1849a836a89d4f3b7530d5b8183f83ab9a2b04bd0745955ab1d0b9e1 = $this->env->getExtension("native_profiler");
        $__internal_944c3a5e1849a836a89d4f3b7530d5b8183f83ab9a2b04bd0745955ab1d0b9e1->enter($__internal_944c3a5e1849a836a89d4f3b7530d5b8183f83ab9a2b04bd0745955ab1d0b9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_944c3a5e1849a836a89d4f3b7530d5b8183f83ab9a2b04bd0745955ab1d0b9e1->leave($__internal_944c3a5e1849a836a89d4f3b7530d5b8183f83ab9a2b04bd0745955ab1d0b9e1_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_a488f38b5d0f6d55a8c9ee3ffc6a1ca8f51905e0a08bc73d54713ad598bb007c = $this->env->getExtension("native_profiler");
        $__internal_a488f38b5d0f6d55a8c9ee3ffc6a1ca8f51905e0a08bc73d54713ad598bb007c->enter($__internal_a488f38b5d0f6d55a8c9ee3ffc6a1ca8f51905e0a08bc73d54713ad598bb007c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ressources ";
        
        $__internal_a488f38b5d0f6d55a8c9ee3ffc6a1ca8f51905e0a08bc73d54713ad598bb007c->leave($__internal_a488f38b5d0f6d55a8c9ee3ffc6a1ca8f51905e0a08bc73d54713ad598bb007c_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_7e9c68940bb7a7fb5700156e68e17321a897217c6c623fd69ca94b6a1b0a7498 = $this->env->getExtension("native_profiler");
        $__internal_7e9c68940bb7a7fb5700156e68e17321a897217c6c623fd69ca94b6a1b0a7498->enter($__internal_7e9c68940bb7a7fb5700156e68e17321a897217c6c623fd69ca94b6a1b0a7498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Ressources";
        
        $__internal_7e9c68940bb7a7fb5700156e68e17321a897217c6c623fd69ca94b6a1b0a7498->leave($__internal_7e9c68940bb7a7fb5700156e68e17321a897217c6c623fd69ca94b6a1b0a7498_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c87ca7d2ce173f59dce7287a12a09728d270146b7f42089a44d51952eafa755a = $this->env->getExtension("native_profiler");
        $__internal_c87ca7d2ce173f59dce7287a12a09728d270146b7f42089a44d51952eafa755a->enter($__internal_c87ca7d2ce173f59dce7287a12a09728d270146b7f42089a44d51952eafa755a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-128.png"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Thumbs-Up-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Thumbs-Up-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Thumbs-Up-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>

        <br>

        <!-- Compétences (en attente)
        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("nox_intranet_competences");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Compétences</figcaption>
            </figure>
        </a>
        <!---------------------------->

        <!-- FAQ -->
        <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("nox_intranet_faq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/FAQ-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/FAQ-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/FAQ-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>FAQ</figcaption>
            </figure>
        </a>

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Reference-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Reference-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Reference-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- Serveurs -->            
        <a href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("nox_intranet_serveurs");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Serveurs</figcaption>
            </figure>
        </a>

    </div>

";
        
        $__internal_c87ca7d2ce173f59dce7287a12a09728d270146b7f42089a44d51952eafa755a->leave($__internal_c87ca7d2ce173f59dce7287a12a09728d270146b7f42089a44d51952eafa755a_prof);

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
        return array (  306 => 129,  302 => 128,  298 => 127,  292 => 124,  282 => 117,  278 => 116,  274 => 115,  268 => 112,  257 => 104,  253 => 103,  249 => 102,  243 => 99,  233 => 92,  229 => 91,  225 => 90,  219 => 87,  208 => 79,  204 => 78,  200 => 77,  194 => 74,  184 => 67,  180 => 66,  176 => 65,  170 => 62,  159 => 54,  155 => 53,  151 => 52,  145 => 49,  133 => 40,  129 => 39,  125 => 38,  119 => 35,  109 => 28,  105 => 27,  101 => 26,  95 => 23,  85 => 16,  81 => 15,  77 => 14,  71 => 11,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*                     src="{{ asset('bundles/noxintranetressources/images/Business-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Business-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Business-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assistant d'affaire</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Assurance qualité -->*/
/*         <a href="{{ path('nox_intranet_aq') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetcommunication/images/Thumbs-Up-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetcommunication/images/Thumbs-Up-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetcommunication/images/Thumbs-Up-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assurance qualité</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <br>*/
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
/*                     src="{{ asset('bundles/noxintranetressources/images/FAQ-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/FAQ-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/FAQ-128.png') }}';"*/
/*                     > */
/*                 <figcaption>FAQ</figcaption>*/
/*             </figure>*/
/*         </a>*/
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
/*                     src="{{ asset('bundles/noxintranetressources/images/Reference-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Reference-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Reference-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Références</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Serveurs -->            */
/*         <a href="{{ path('nox_intranet_serveurs') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Server-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Server-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Server-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Serveurs</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
