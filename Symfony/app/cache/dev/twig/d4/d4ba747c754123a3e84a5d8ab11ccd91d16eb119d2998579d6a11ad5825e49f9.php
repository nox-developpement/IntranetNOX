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
        $__internal_0645d9b0849231b51da36d0a3207856be06925a0ea115537a92122d3ebb20e90 = $this->env->getExtension("native_profiler");
        $__internal_0645d9b0849231b51da36d0a3207856be06925a0ea115537a92122d3ebb20e90->enter($__internal_0645d9b0849231b51da36d0a3207856be06925a0ea115537a92122d3ebb20e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireaccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0645d9b0849231b51da36d0a3207856be06925a0ea115537a92122d3ebb20e90->leave($__internal_0645d9b0849231b51da36d0a3207856be06925a0ea115537a92122d3ebb20e90_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_69c05780c91505b976078505ec22547448d3a035c014a8f38ac86c685ec2a25d = $this->env->getExtension("native_profiler");
        $__internal_69c05780c91505b976078505ec22547448d3a035c014a8f38ac86c685ec2a25d->enter($__internal_69c05780c91505b976078505ec22547448d3a035c014a8f38ac86c685ec2a25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assistant d'affaire ";
        
        $__internal_69c05780c91505b976078505ec22547448d3a035c014a8f38ac86c685ec2a25d->leave($__internal_69c05780c91505b976078505ec22547448d3a035c014a8f38ac86c685ec2a25d_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_3d3169045f7fc11fba7c255ecfd40942d9828f805845ef8053d6ed62211b25b5 = $this->env->getExtension("native_profiler");
        $__internal_3d3169045f7fc11fba7c255ecfd40942d9828f805845ef8053d6ed62211b25b5->enter($__internal_3d3169045f7fc11fba7c255ecfd40942d9828f805845ef8053d6ed62211b25b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assistant d'affaire";
        
        $__internal_3d3169045f7fc11fba7c255ecfd40942d9828f805845ef8053d6ed62211b25b5->leave($__internal_3d3169045f7fc11fba7c255ecfd40942d9828f805845ef8053d6ed62211b25b5_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_54e0969c7fc975ffc845187d4e42d1b9bc28c8f4bf0cd4e37147dcc240571fa2 = $this->env->getExtension("native_profiler");
        $__internal_54e0969c7fc975ffc845187d4e42d1b9bc28c8f4bf0cd4e37147dcc240571fa2->enter($__internal_54e0969c7fc975ffc845187d4e42d1b9bc28c8f4bf0cd4e37147dcc240571fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('routing')->getPath("nox_intranet_archives");
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
        
        $__internal_54e0969c7fc975ffc845187d4e42d1b9bc28c8f4bf0cd4e37147dcc240571fa2->leave($__internal_54e0969c7fc975ffc845187d4e42d1b9bc28c8f4bf0cd4e37147dcc240571fa2_prof);

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
/*         <a href="{{ path('nox_intranet_archives') }}" class="icon">*/
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
