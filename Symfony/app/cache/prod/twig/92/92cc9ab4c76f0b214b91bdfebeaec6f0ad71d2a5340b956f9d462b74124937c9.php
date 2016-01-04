<?php

/* NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig */
class __TwigTemplate_9cf5e154479a4d6532d62e44e31ef36a4bd6e92b8587bb31174c836cfc36f7e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Support ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Support SI";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"iconContener\">

        <!-- Av. projet -->
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("nox_intranet_avancement_projet");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Date-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Date-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Date-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Av. projet</figcaption>
            </figure>
        </a>

        <!-- Demande de matériels, logiciels -->
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("nox_intranet_demande_materiel");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Materiel-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Materiel-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Materiel-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Matériel/Logiciel</figcaption>
            </figure>
        </a>

        <br>

        <!-- Information -->
        <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("nox_intranet_information");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Information-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Information-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Information-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Information</figcaption>
            </figure>
        </a>


        <!-- Licences (A ajouter) 
        <a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("nox_intranet_accueil");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Licenses-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Licenses-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Licenses-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Licences</figcaption>
            </figure>
        </a>
        -->

        <!-- Ticketing -->
        <a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_ticketing");
        echo "\" class=\"icon\" target='_blank'>
            <figure>
                <img 
                    src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Ticket-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Ticket-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Ticket-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Ticketing</figcaption>
            </figure>
        </a>

        <!-- Wiki -->
        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("nox_intranet_support_wiki");
        echo "\" class=\"icon\" target='_blank'>
            <figure>
                <img 
                    src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Book-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Book-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupportsi/images/Book-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Wiki</figcaption>
            </figure>
        </a>

    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 81,  185 => 80,  181 => 79,  175 => 76,  165 => 69,  161 => 68,  157 => 67,  151 => 64,  140 => 56,  136 => 55,  132 => 54,  126 => 51,  115 => 43,  111 => 42,  107 => 41,  101 => 38,  89 => 29,  85 => 28,  81 => 27,  75 => 24,  65 => 17,  61 => 16,  57 => 15,  51 => 12,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Support {% endblock %}*/
/* */
/* {% block messageAccueil %}Support SI{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="iconContener">*/
/* */
/*         <!-- Av. projet -->*/
/*         <a href="{{ path('nox_intranet_avancement_projet') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Date-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Date-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Date-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Av. projet</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Demande de matériels, logiciels -->*/
/*         <a href="{{ path('nox_intranet_demande_materiel') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Materiel-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Materiel-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Materiel-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Matériel/Logiciel</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <br>*/
/* */
/*         <!-- Information -->*/
/*         <a href="{{ path('nox_intranet_information') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Information-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Information-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Information-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Information</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/* */
/*         <!-- Licences (A ajouter) */
/*         <a href="{{ path('nox_intranet_accueil') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Licenses-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Licenses-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Licenses-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Licences</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         -->*/
/* */
/*         <!-- Ticketing -->*/
/*         <a href="{{ path('nox_intranet_support_ticketing') }}" class="icon" target='_blank'>*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Ticket-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Ticket-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Ticket-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Ticketing</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Wiki -->*/
/*         <a href="{{ path('nox_intranet_support_wiki') }}" class="icon" target='_blank'>*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetsupportsi/images/Book-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Book-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetsupportsi/images/Book-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Wiki</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
