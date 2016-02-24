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
        $__internal_fcf668a7ee845847063bb4608c7ddda6b073c9f0bcb1a04e606cbda41c3a447e = $this->env->getExtension("native_profiler");
        $__internal_fcf668a7ee845847063bb4608c7ddda6b073c9f0bcb1a04e606cbda41c3a447e->enter($__internal_fcf668a7ee845847063bb4608c7ddda6b073c9f0bcb1a04e606cbda41c3a447e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportBundle:Ticket:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fcf668a7ee845847063bb4608c7ddda6b073c9f0bcb1a04e606cbda41c3a447e->leave($__internal_fcf668a7ee845847063bb4608c7ddda6b073c9f0bcb1a04e606cbda41c3a447e_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_cd8d580ba8543592aa260c57371cbe6bfcd6cc73640d6f5f373afedb02053ae2 = $this->env->getExtension("native_profiler");
        $__internal_cd8d580ba8543592aa260c57371cbe6bfcd6cc73640d6f5f373afedb02053ae2->enter($__internal_cd8d580ba8543592aa260c57371cbe6bfcd6cc73640d6f5f373afedb02053ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ticket ";
        
        $__internal_cd8d580ba8543592aa260c57371cbe6bfcd6cc73640d6f5f373afedb02053ae2->leave($__internal_cd8d580ba8543592aa260c57371cbe6bfcd6cc73640d6f5f373afedb02053ae2_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d09fef4deee85a6f853495ebab1c8cc95e58ae2185308dad455caf61c017e2fb = $this->env->getExtension("native_profiler");
        $__internal_d09fef4deee85a6f853495ebab1c8cc95e58ae2185308dad455caf61c017e2fb->enter($__internal_d09fef4deee85a6f853495ebab1c8cc95e58ae2185308dad455caf61c017e2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_d09fef4deee85a6f853495ebab1c8cc95e58ae2185308dad455caf61c017e2fb->leave($__internal_d09fef4deee85a6f853495ebab1c8cc95e58ae2185308dad455caf61c017e2fb_prof);

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
