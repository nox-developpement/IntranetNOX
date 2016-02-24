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
        $__internal_e1450f006addffb8435ef281bc489460d66516488b01e6bea79c9692fba2e990 = $this->env->getExtension("native_profiler");
        $__internal_e1450f006addffb8435ef281bc489460d66516488b01e6bea79c9692fba2e990->enter($__internal_e1450f006addffb8435ef281bc489460d66516488b01e6bea79c9692fba2e990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireaccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1450f006addffb8435ef281bc489460d66516488b01e6bea79c9692fba2e990->leave($__internal_e1450f006addffb8435ef281bc489460d66516488b01e6bea79c9692fba2e990_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_d57857160456de9dc50fa359b2647910f1453ada9646ae0f99028c4a7b0b5354 = $this->env->getExtension("native_profiler");
        $__internal_d57857160456de9dc50fa359b2647910f1453ada9646ae0f99028c4a7b0b5354->enter($__internal_d57857160456de9dc50fa359b2647910f1453ada9646ae0f99028c4a7b0b5354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assistant d'affaire ";
        
        $__internal_d57857160456de9dc50fa359b2647910f1453ada9646ae0f99028c4a7b0b5354->leave($__internal_d57857160456de9dc50fa359b2647910f1453ada9646ae0f99028c4a7b0b5354_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b9acfc62f8b4ebe3f4a510308c6f38e3dce230116795a1cffe44c13706107ae3 = $this->env->getExtension("native_profiler");
        $__internal_b9acfc62f8b4ebe3f4a510308c6f38e3dce230116795a1cffe44c13706107ae3->enter($__internal_b9acfc62f8b4ebe3f4a510308c6f38e3dce230116795a1cffe44c13706107ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assistant d'affaire";
        
        $__internal_b9acfc62f8b4ebe3f4a510308c6f38e3dce230116795a1cffe44c13706107ae3->leave($__internal_b9acfc62f8b4ebe3f4a510308c6f38e3dce230116795a1cffe44c13706107ae3_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a1907c72c44870158b3f4b0c201f97eb2c1b7f2f83c0305a75e6fb1e60911aa4 = $this->env->getExtension("native_profiler");
        $__internal_a1907c72c44870158b3f4b0c201f97eb2c1b7f2f83c0305a75e6fb1e60911aa4->enter($__internal_a1907c72c44870158b3f4b0c201f97eb2c1b7f2f83c0305a75e6fb1e60911aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_a1907c72c44870158b3f4b0c201f97eb2c1b7f2f83c0305a75e6fb1e60911aa4->leave($__internal_a1907c72c44870158b3f4b0c201f97eb2c1b7f2f83c0305a75e6fb1e60911aa4_prof);

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
