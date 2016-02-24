<?php

/* @NoxIntranetRessources/AssistantAffaire/assistantaffaireaccueil.html.twig */
class __TwigTemplate_85b223aaf0225ebb8d6bdde2eb7087902bcfdc5999dbb3887151f33fcf980b10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/AssistantAffaire/assistantaffaireaccueil.html.twig", 1);
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
        $__internal_78825b858f303238ebbf00d34cac1515308cb8abbec76782011dc97d62e7ddf3 = $this->env->getExtension("native_profiler");
        $__internal_78825b858f303238ebbf00d34cac1515308cb8abbec76782011dc97d62e7ddf3->enter($__internal_78825b858f303238ebbf00d34cac1515308cb8abbec76782011dc97d62e7ddf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/AssistantAffaire/assistantaffaireaccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78825b858f303238ebbf00d34cac1515308cb8abbec76782011dc97d62e7ddf3->leave($__internal_78825b858f303238ebbf00d34cac1515308cb8abbec76782011dc97d62e7ddf3_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_3c3c6d4c72fd8a5eb4d1a6293b7e2407e64d8f42c6d92703fb431c0ec1d87d6d = $this->env->getExtension("native_profiler");
        $__internal_3c3c6d4c72fd8a5eb4d1a6293b7e2407e64d8f42c6d92703fb431c0ec1d87d6d->enter($__internal_3c3c6d4c72fd8a5eb4d1a6293b7e2407e64d8f42c6d92703fb431c0ec1d87d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assistant d'affaire ";
        
        $__internal_3c3c6d4c72fd8a5eb4d1a6293b7e2407e64d8f42c6d92703fb431c0ec1d87d6d->leave($__internal_3c3c6d4c72fd8a5eb4d1a6293b7e2407e64d8f42c6d92703fb431c0ec1d87d6d_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_968fa5a805a60c712b99a5560de1f4ceff498b87cf673bfb5a6fd9ae2077400d = $this->env->getExtension("native_profiler");
        $__internal_968fa5a805a60c712b99a5560de1f4ceff498b87cf673bfb5a6fd9ae2077400d->enter($__internal_968fa5a805a60c712b99a5560de1f4ceff498b87cf673bfb5a6fd9ae2077400d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assistant d'affaire";
        
        $__internal_968fa5a805a60c712b99a5560de1f4ceff498b87cf673bfb5a6fd9ae2077400d->leave($__internal_968fa5a805a60c712b99a5560de1f4ceff498b87cf673bfb5a6fd9ae2077400d_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_508a73691047914947755bf8b54ead35ab64a58cbeda5d65f04322ac2ded24a8 = $this->env->getExtension("native_profiler");
        $__internal_508a73691047914947755bf8b54ead35ab64a58cbeda5d65f04322ac2ded24a8->enter($__internal_508a73691047914947755bf8b54ead35ab64a58cbeda5d65f04322ac2ded24a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('routing')->getPath("nox_intranet_assistant_affaire_parcour_suivi_termine");
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
        
        $__internal_508a73691047914947755bf8b54ead35ab64a58cbeda5d65f04322ac2ded24a8->leave($__internal_508a73691047914947755bf8b54ead35ab64a58cbeda5d65f04322ac2ded24a8_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/AssistantAffaire/assistantaffaireaccueil.html.twig";
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
/*         <a href="{{ path('nox_intranet_assistant_affaire_parcour_suivi_termine') }}" class="icon">*/
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
