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
        $__internal_af477e9be37efaddbb15930c09c95dad6aefde05c885d6ba65d6b1823aa42282 = $this->env->getExtension("native_profiler");
        $__internal_af477e9be37efaddbb15930c09c95dad6aefde05c885d6ba65d6b1823aa42282->enter($__internal_af477e9be37efaddbb15930c09c95dad6aefde05c885d6ba65d6b1823aa42282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffaireaccueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af477e9be37efaddbb15930c09c95dad6aefde05c885d6ba65d6b1823aa42282->leave($__internal_af477e9be37efaddbb15930c09c95dad6aefde05c885d6ba65d6b1823aa42282_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_78a770511d8d848a9b9222b2d2968fcc9f1f517c0bd90539c8f6ce0b5e5efcc2 = $this->env->getExtension("native_profiler");
        $__internal_78a770511d8d848a9b9222b2d2968fcc9f1f517c0bd90539c8f6ce0b5e5efcc2->enter($__internal_78a770511d8d848a9b9222b2d2968fcc9f1f517c0bd90539c8f6ce0b5e5efcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Assistant d'affaire ";
        
        $__internal_78a770511d8d848a9b9222b2d2968fcc9f1f517c0bd90539c8f6ce0b5e5efcc2->leave($__internal_78a770511d8d848a9b9222b2d2968fcc9f1f517c0bd90539c8f6ce0b5e5efcc2_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_a013a7ed334b76205965b9d761caf49d407b716d2d5bec1716cde8d14280aecc = $this->env->getExtension("native_profiler");
        $__internal_a013a7ed334b76205965b9d761caf49d407b716d2d5bec1716cde8d14280aecc->enter($__internal_a013a7ed334b76205965b9d761caf49d407b716d2d5bec1716cde8d14280aecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Assistant d'affaire";
        
        $__internal_a013a7ed334b76205965b9d761caf49d407b716d2d5bec1716cde8d14280aecc->leave($__internal_a013a7ed334b76205965b9d761caf49d407b716d2d5bec1716cde8d14280aecc_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9d375b21c649dac6f977427270e65448f25813410a41afd263ed50a0d88f98b0 = $this->env->getExtension("native_profiler");
        $__internal_9d375b21c649dac6f977427270e65448f25813410a41afd263ed50a0d88f98b0->enter($__internal_9d375b21c649dac6f977427270e65448f25813410a41afd263ed50a0d88f98b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_9d375b21c649dac6f977427270e65448f25813410a41afd263ed50a0d88f98b0->leave($__internal_9d375b21c649dac6f977427270e65448f25813410a41afd263ed50a0d88f98b0_prof);

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
