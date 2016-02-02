<?php

/* NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig */
class __TwigTemplate_187cfb8210cfc88a149b4edf7b885092e0600af8d84c30d74049607e71985bc4 extends Twig_Template
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
        $__internal_d46e7288ccb5d8c2492b387caddaf0e430345bbe1b3902a1b6b7b3a510703deb = $this->env->getExtension("native_profiler");
        $__internal_d46e7288ccb5d8c2492b387caddaf0e430345bbe1b3902a1b6b7b3a510703deb->enter($__internal_d46e7288ccb5d8c2492b387caddaf0e430345bbe1b3902a1b6b7b3a510703deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:accueilSupport.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d46e7288ccb5d8c2492b387caddaf0e430345bbe1b3902a1b6b7b3a510703deb->leave($__internal_d46e7288ccb5d8c2492b387caddaf0e430345bbe1b3902a1b6b7b3a510703deb_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_03aed92281cee7bddf5c215f748ebf6c63304f1e5762ee60453d5edbc0e24781 = $this->env->getExtension("native_profiler");
        $__internal_03aed92281cee7bddf5c215f748ebf6c63304f1e5762ee60453d5edbc0e24781->enter($__internal_03aed92281cee7bddf5c215f748ebf6c63304f1e5762ee60453d5edbc0e24781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Support ";
        
        $__internal_03aed92281cee7bddf5c215f748ebf6c63304f1e5762ee60453d5edbc0e24781->leave($__internal_03aed92281cee7bddf5c215f748ebf6c63304f1e5762ee60453d5edbc0e24781_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_73d69b331325d1ffe51ba05efff41bec7f82664da08283f125808bc37b629c05 = $this->env->getExtension("native_profiler");
        $__internal_73d69b331325d1ffe51ba05efff41bec7f82664da08283f125808bc37b629c05->enter($__internal_73d69b331325d1ffe51ba05efff41bec7f82664da08283f125808bc37b629c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Support SI";
        
        $__internal_73d69b331325d1ffe51ba05efff41bec7f82664da08283f125808bc37b629c05->leave($__internal_73d69b331325d1ffe51ba05efff41bec7f82664da08283f125808bc37b629c05_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_adf5cf29db59f13ef7974469a89394d080177b6c930365f0f30910cc2f9bad29 = $this->env->getExtension("native_profiler");
        $__internal_adf5cf29db59f13ef7974469a89394d080177b6c930365f0f30910cc2f9bad29->enter($__internal_adf5cf29db59f13ef7974469a89394d080177b6c930365f0f30910cc2f9bad29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_adf5cf29db59f13ef7974469a89394d080177b6c930365f0f30910cc2f9bad29->leave($__internal_adf5cf29db59f13ef7974469a89394d080177b6c930365f0f30910cc2f9bad29_prof);

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
        return array (  210 => 81,  206 => 80,  202 => 79,  196 => 76,  186 => 69,  182 => 68,  178 => 67,  172 => 64,  161 => 56,  157 => 55,  153 => 54,  147 => 51,  136 => 43,  132 => 42,  128 => 41,  122 => 38,  110 => 29,  106 => 28,  102 => 27,  96 => 24,  86 => 17,  82 => 16,  78 => 15,  72 => 12,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
