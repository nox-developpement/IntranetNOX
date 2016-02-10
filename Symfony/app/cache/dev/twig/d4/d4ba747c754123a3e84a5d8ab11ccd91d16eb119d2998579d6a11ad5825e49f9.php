<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireaccueil.html.twig */
class __TwigTemplate_cc497fa2e2f42caf63dd25d58a2714006e79c9c8e8b49f243cd999de21cdcc1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireaccueil.html.twig", 1);
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
        $__internal_121ea2c8131d3449740c989d100513cf9ef252ef294c4d1470cebf9018097095 = $this->env->getExtension("native_profiler");
        $__internal_121ea2c8131d3449740c989d100513cf9ef252ef294c4d1470cebf9018097095->enter($__internal_121ea2c8131d3449740c989d100513cf9ef252ef294c4d1470cebf9018097095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireaccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_121ea2c8131d3449740c989d100513cf9ef252ef294c4d1470cebf9018097095->leave($__internal_121ea2c8131d3449740c989d100513cf9ef252ef294c4d1470cebf9018097095_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_a23e7f2bf9038dad1d551a28a889eef2206efa88d35fc6b1d43df9da8a6f15a7 = $this->env->getExtension("native_profiler");
        $__internal_a23e7f2bf9038dad1d551a28a889eef2206efa88d35fc6b1d43df9da8a6f15a7->enter($__internal_a23e7f2bf9038dad1d551a28a889eef2206efa88d35fc6b1d43df9da8a6f15a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assistant d'affaire ";
        
        $__internal_a23e7f2bf9038dad1d551a28a889eef2206efa88d35fc6b1d43df9da8a6f15a7->leave($__internal_a23e7f2bf9038dad1d551a28a889eef2206efa88d35fc6b1d43df9da8a6f15a7_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b33b3280777352aabd43b2745eea57fd32a20c7e50d5dcd958b93d393f6d3156 = $this->env->getExtension("native_profiler");
        $__internal_b33b3280777352aabd43b2745eea57fd32a20c7e50d5dcd958b93d393f6d3156->enter($__internal_b33b3280777352aabd43b2745eea57fd32a20c7e50d5dcd958b93d393f6d3156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assistant d'affaire";
        
        $__internal_b33b3280777352aabd43b2745eea57fd32a20c7e50d5dcd958b93d393f6d3156->leave($__internal_b33b3280777352aabd43b2745eea57fd32a20c7e50d5dcd958b93d393f6d3156_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_663f5ef4e7af6f27dba4dfbadbcbd167d87a093c1f3a950e93589cbd593b7680 = $this->env->getExtension("native_profiler");
        $__internal_663f5ef4e7af6f27dba4dfbadbcbd167d87a093c1f3a950e93589cbd593b7680->enter($__internal_663f5ef4e7af6f27dba4dfbadbcbd167d87a093c1f3a950e93589cbd593b7680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div class=\"iconContener\">

        <!-- Créer un suivis -->
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("nox_intranet_assistant_affaire_nouvelle");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Document-Add-02-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Document-Add-02-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Document-Add-02-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Créer un suivis</figcaption>
            </figure>
        </a>

        <!-- Parcourir les suivis en cours -->
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("nox_intranet_assistant_affaire_parcour_suivi_en_cours");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Document-Exchange-02-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Document-Exchange-02-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Document-Exchange-02-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Parcourir les suivis en cours</figcaption>
            </figure>
        </a>

        <!-- Parcourir les suivis terminés -->
        <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("nox_intranet_archives");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Document-Zoom-In-03-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Document-Zoom-In-03-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Document-Zoom-In-03-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Parcourir les suivis terminés</figcaption>
            </figure>
        </a>

    </div>

";
        
        $__internal_663f5ef4e7af6f27dba4dfbadbcbd167d87a093c1f3a950e93589cbd593b7680->leave($__internal_663f5ef4e7af6f27dba4dfbadbcbd167d87a093c1f3a950e93589cbd593b7680_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireaccueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 41,  130 => 40,  126 => 39,  120 => 36,  110 => 29,  106 => 28,  102 => 27,  96 => 24,  86 => 17,  82 => 16,  78 => 15,  72 => 12,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Assistant d'affaire {% endblock %}*/
/* */
/* {% block messageAccueil %}Assistant d'affaire{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="iconContener">*/
/* */
/*         <!-- Créer un suivis -->*/
/*         <a href="{{ path('nox_intranet_assistant_affaire_nouvelle') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Document-Add-02-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Document-Add-02-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Document-Add-02-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Créer un suivis</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Parcourir les suivis en cours -->*/
/*         <a href="{{ path('nox_intranet_assistant_affaire_parcour_suivi_en_cours') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Document-Exchange-02-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Document-Exchange-02-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Document-Exchange-02-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Parcourir les suivis en cours</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Parcourir les suivis terminés -->*/
/*         <a href="{{ path('nox_intranet_archives') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Document-Zoom-In-03-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Document-Zoom-In-03-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Document-Zoom-In-03-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Parcourir les suivis terminés</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
