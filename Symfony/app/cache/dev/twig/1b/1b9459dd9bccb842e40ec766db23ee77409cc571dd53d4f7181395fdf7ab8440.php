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
        $__internal_00615785192e86c04e56a4276c50672e251c1b3da2c8e248f7859f17fb6e3ca3 = $this->env->getExtension("native_profiler");
        $__internal_00615785192e86c04e56a4276c50672e251c1b3da2c8e248f7859f17fb6e3ca3->enter($__internal_00615785192e86c04e56a4276c50672e251c1b3da2c8e248f7859f17fb6e3ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportBundle:Ticket:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00615785192e86c04e56a4276c50672e251c1b3da2c8e248f7859f17fb6e3ca3->leave($__internal_00615785192e86c04e56a4276c50672e251c1b3da2c8e248f7859f17fb6e3ca3_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_92d35789a1388b0b48114d3b7e6306dafbadc7db4f87fcc9bf0134ad45c84042 = $this->env->getExtension("native_profiler");
        $__internal_92d35789a1388b0b48114d3b7e6306dafbadc7db4f87fcc9bf0134ad45c84042->enter($__internal_92d35789a1388b0b48114d3b7e6306dafbadc7db4f87fcc9bf0134ad45c84042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ticket ";
        
        $__internal_92d35789a1388b0b48114d3b7e6306dafbadc7db4f87fcc9bf0134ad45c84042->leave($__internal_92d35789a1388b0b48114d3b7e6306dafbadc7db4f87fcc9bf0134ad45c84042_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8dc273fe639029d8c9a728b9c3e6b6024331f41c12e14517e77a21e079a66446 = $this->env->getExtension("native_profiler");
        $__internal_8dc273fe639029d8c9a728b9c3e6b6024331f41c12e14517e77a21e079a66446->enter($__internal_8dc273fe639029d8c9a728b9c3e6b6024331f41c12e14517e77a21e079a66446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_8dc273fe639029d8c9a728b9c3e6b6024331f41c12e14517e77a21e079a66446->leave($__internal_8dc273fe639029d8c9a728b9c3e6b6024331f41c12e14517e77a21e079a66446_prof);

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
