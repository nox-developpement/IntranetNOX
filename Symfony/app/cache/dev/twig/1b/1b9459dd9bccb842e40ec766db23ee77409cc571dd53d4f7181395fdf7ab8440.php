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
        $__internal_08810bbd47ce02f0559f0c94dd5fa96846eb35f5fd804652bf81aae995970d9e = $this->env->getExtension("native_profiler");
        $__internal_08810bbd47ce02f0559f0c94dd5fa96846eb35f5fd804652bf81aae995970d9e->enter($__internal_08810bbd47ce02f0559f0c94dd5fa96846eb35f5fd804652bf81aae995970d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportBundle:Ticket:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08810bbd47ce02f0559f0c94dd5fa96846eb35f5fd804652bf81aae995970d9e->leave($__internal_08810bbd47ce02f0559f0c94dd5fa96846eb35f5fd804652bf81aae995970d9e_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_6eb4b1ec54f3e2213a6d87d10ba8282d4432e7b56216e57fb880401c1cab7a84 = $this->env->getExtension("native_profiler");
        $__internal_6eb4b1ec54f3e2213a6d87d10ba8282d4432e7b56216e57fb880401c1cab7a84->enter($__internal_6eb4b1ec54f3e2213a6d87d10ba8282d4432e7b56216e57fb880401c1cab7a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ticket ";
        
        $__internal_6eb4b1ec54f3e2213a6d87d10ba8282d4432e7b56216e57fb880401c1cab7a84->leave($__internal_6eb4b1ec54f3e2213a6d87d10ba8282d4432e7b56216e57fb880401c1cab7a84_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7361f486b7cca9023b299e4b87ed09496933844fc9835bde56b5b8c6fe769b54 = $this->env->getExtension("native_profiler");
        $__internal_7361f486b7cca9023b299e4b87ed09496933844fc9835bde56b5b8c6fe769b54->enter($__internal_7361f486b7cca9023b299e4b87ed09496933844fc9835bde56b5b8c6fe769b54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_7361f486b7cca9023b299e4b87ed09496933844fc9835bde56b5b8c6fe769b54->leave($__internal_7361f486b7cca9023b299e4b87ed09496933844fc9835bde56b5b8c6fe769b54_prof);

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
