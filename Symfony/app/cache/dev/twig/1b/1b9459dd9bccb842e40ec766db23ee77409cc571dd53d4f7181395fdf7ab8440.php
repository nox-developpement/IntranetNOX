<?php

/* NoxIntranetSupportBundle:Ticket:ticket.html.twig */
class __TwigTemplate_ee7b4baf4954a912918728203c0c2824a488ede98cb0ced810731644dfc7f882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportBundle:Ticket:ticket.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba9ece6ac5024ad3d4d4678058f985c24600feee00ed68c4f47ca4b011501a67 = $this->env->getExtension("native_profiler");
        $__internal_ba9ece6ac5024ad3d4d4678058f985c24600feee00ed68c4f47ca4b011501a67->enter($__internal_ba9ece6ac5024ad3d4d4678058f985c24600feee00ed68c4f47ca4b011501a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportBundle:Ticket:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba9ece6ac5024ad3d4d4678058f985c24600feee00ed68c4f47ca4b011501a67->leave($__internal_ba9ece6ac5024ad3d4d4678058f985c24600feee00ed68c4f47ca4b011501a67_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f9ac5b7b0e0a3e2bf4240823fc65c17a728fac86d599fa4293d69330590c38f0 = $this->env->getExtension("native_profiler");
        $__internal_f9ac5b7b0e0a3e2bf4240823fc65c17a728fac86d599fa4293d69330590c38f0->enter($__internal_f9ac5b7b0e0a3e2bf4240823fc65c17a728fac86d599fa4293d69330590c38f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ticket ";
        
        $__internal_f9ac5b7b0e0a3e2bf4240823fc65c17a728fac86d599fa4293d69330590c38f0->leave($__internal_f9ac5b7b0e0a3e2bf4240823fc65c17a728fac86d599fa4293d69330590c38f0_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_e579fdefe7f40d1a659d7a39f9c192bacee1eb4cca77f2b9b4e8c5e8f2f5ffd9 = $this->env->getExtension("native_profiler");
        $__internal_e579fdefe7f40d1a659d7a39f9c192bacee1eb4cca77f2b9b4e8c5e8f2f5ffd9->enter($__internal_e579fdefe7f40d1a659d7a39f9c192bacee1eb4cca77f2b9b4e8c5e8f2f5ffd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "
    <div class=\"selectionAction\">

        <h2> Veuillez séléctionner une action. </h2>

        <ul>
            <li> <a href= ";
        // line 12
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ticket_new");
        echo " > Poster un nouveau ticket </a> </li>
            <li> <a href= ";
        // line 13
        echo $this->env->getExtension('routing')->getPath("nox_intranet_mes_tickets");
        echo " > Consulter mes tickets </a> </li>
        </ul>

    </div>

";
        
        $__internal_e579fdefe7f40d1a659d7a39f9c192bacee1eb4cca77f2b9b4e8c5e8f2f5ffd9->leave($__internal_e579fdefe7f40d1a659d7a39f9c192bacee1eb4cca77f2b9b4e8c5e8f2f5ffd9_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportBundle:Ticket:ticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  61 => 12,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Ticket {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="selectionAction">*/
/* */
/*         <h2> Veuillez séléctionner une action. </h2>*/
/* */
/*         <ul>*/
/*             <li> <a href= {{ path('nox_intranet_ticket_new') }} > Poster un nouveau ticket </a> </li>*/
/*             <li> <a href= {{ path('nox_intranet_mes_tickets') }} > Consulter mes tickets </a> </li>*/
/*         </ul>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
