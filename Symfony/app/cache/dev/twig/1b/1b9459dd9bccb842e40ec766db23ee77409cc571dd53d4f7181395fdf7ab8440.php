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
        $__internal_95f5381486ec96489094463aa3d4f7d2bc9e8407b9aead9eea052a639368f648 = $this->env->getExtension("native_profiler");
        $__internal_95f5381486ec96489094463aa3d4f7d2bc9e8407b9aead9eea052a639368f648->enter($__internal_95f5381486ec96489094463aa3d4f7d2bc9e8407b9aead9eea052a639368f648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportBundle:Ticket:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95f5381486ec96489094463aa3d4f7d2bc9e8407b9aead9eea052a639368f648->leave($__internal_95f5381486ec96489094463aa3d4f7d2bc9e8407b9aead9eea052a639368f648_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_5eb3110dda73d2ea3fdbef5c4de020ce598e16c9a073677ce7d530eabbb75f10 = $this->env->getExtension("native_profiler");
        $__internal_5eb3110dda73d2ea3fdbef5c4de020ce598e16c9a073677ce7d530eabbb75f10->enter($__internal_5eb3110dda73d2ea3fdbef5c4de020ce598e16c9a073677ce7d530eabbb75f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ticket ";
        
        $__internal_5eb3110dda73d2ea3fdbef5c4de020ce598e16c9a073677ce7d530eabbb75f10->leave($__internal_5eb3110dda73d2ea3fdbef5c4de020ce598e16c9a073677ce7d530eabbb75f10_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_043bc6c3ac6ef1e0b34965d2d20ab1692018f31deeda414afb674a839c646c6c = $this->env->getExtension("native_profiler");
        $__internal_043bc6c3ac6ef1e0b34965d2d20ab1692018f31deeda414afb674a839c646c6c->enter($__internal_043bc6c3ac6ef1e0b34965d2d20ab1692018f31deeda414afb674a839c646c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_043bc6c3ac6ef1e0b34965d2d20ab1692018f31deeda414afb674a839c646c6c->leave($__internal_043bc6c3ac6ef1e0b34965d2d20ab1692018f31deeda414afb674a839c646c6c_prof);

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
