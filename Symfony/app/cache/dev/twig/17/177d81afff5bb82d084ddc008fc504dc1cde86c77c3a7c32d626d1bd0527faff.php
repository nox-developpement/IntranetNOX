<?php

/* NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesMenu.html.twig */
class __TwigTemplate_860f28aa0750601231fe1b6ee6cc83b1a68070bbed4983d3a22ce62e3302fe10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesMenu.html.twig", 1);
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
        $__internal_be5dbf706f91ed54d7d27edb3e3e2ab6f7f91754810ef0b29e0dbf7e5bba9a11 = $this->env->getExtension("native_profiler");
        $__internal_be5dbf706f91ed54d7d27edb3e3e2ab6f7f91754810ef0b29e0dbf7e5bba9a11->enter($__internal_be5dbf706f91ed54d7d27edb3e3e2ab6f7f91754810ef0b29e0dbf7e5bba9a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesMenu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be5dbf706f91ed54d7d27edb3e3e2ab6f7f91754810ef0b29e0dbf7e5bba9a11->leave($__internal_be5dbf706f91ed54d7d27edb3e3e2ab6f7f91754810ef0b29e0dbf7e5bba9a11_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_71d5589b3ca3dcf99bcbcb0da721aa3e1ebe1bdd279327234630443fb89db8ee = $this->env->getExtension("native_profiler");
        $__internal_71d5589b3ca3dcf99bcbcb0da721aa3e1ebe1bdd279327234630443fb89db8ee->enter($__internal_71d5589b3ca3dcf99bcbcb0da721aa3e1ebe1bdd279327234630443fb89db8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Prestations internes ";
        
        $__internal_71d5589b3ca3dcf99bcbcb0da721aa3e1ebe1bdd279327234630443fb89db8ee->leave($__internal_71d5589b3ca3dcf99bcbcb0da721aa3e1ebe1bdd279327234630443fb89db8ee_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_8744149b49bca540bec943f2ff988bf3ec0f6a29d3eeb7b0bf5104e0317f851a = $this->env->getExtension("native_profiler");
        $__internal_8744149b49bca540bec943f2ff988bf3ec0f6a29d3eeb7b0bf5104e0317f851a->enter($__internal_8744149b49bca540bec943f2ff988bf3ec0f6a29d3eeb7b0bf5104e0317f851a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Prestations internes";
        
        $__internal_8744149b49bca540bec943f2ff988bf3ec0f6a29d3eeb7b0bf5104e0317f851a->leave($__internal_8744149b49bca540bec943f2ff988bf3ec0f6a29d3eeb7b0bf5104e0317f851a_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c3060fbc7de3ff06f8ca50a762924483c94cc76bc82a6291c942127196a040de = $this->env->getExtension("native_profiler");
        $__internal_c3060fbc7de3ff06f8ca50a762924483c94cc76bc82a6291c942127196a040de->enter($__internal_c3060fbc7de3ff06f8ca50a762924483c94cc76bc82a6291c942127196a040de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "    <div style='width: 70%; margin: auto; text-align: center;'>
        <ul id='DRHPointageList'>
            <li>
                <a href='";
        // line 11
        echo $this->env->getExtension('routing')->getPath("nox_intranet_prestation_search");
        echo "'>Faire une demande de prestation interne</a>
            </li>
            <li>
                <a href='";
        // line 14
        echo $this->env->getExtension('routing')->getPath("nox_intranet_demande_prestation_perso_reporting");
        echo "'>Consulter mes demandes/propositions</a>
            </li>
            <li>
                <a href='";
        // line 17
        echo $this->env->getExtension('routing')->getPath("nox_intranet_demande_prestation_reporting");
        echo "'>Consulter la liste des demandes</a>
            </li>
        </ul>
    </div>
";
        
        $__internal_c3060fbc7de3ff06f8ca50a762924483c94cc76bc82a6291c942127196a040de->leave($__internal_c3060fbc7de3ff06f8ca50a762924483c94cc76bc82a6291c942127196a040de_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:PrestationsInternes:prestationsInternesMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  77 => 14,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Prestations internes {% endblock %}*/
/* */
/* {% block messageAccueil %}Prestations internes{% endblock %}*/
/* */
/* {% block contenu %}*/
/*     <div style='width: 70%; margin: auto; text-align: center;'>*/
/*         <ul id='DRHPointageList'>*/
/*             <li>*/
/*                 <a href='{{ path('nox_intranet_prestation_search') }}'>Faire une demande de prestation interne</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href='{{ path('nox_intranet_demande_prestation_perso_reporting') }}'>Consulter mes demandes/propositions</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href='{{ path('nox_intranet_demande_prestation_reporting') }}'>Consulter la liste des demandes</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
