<?php

/* @NoxIntranetSupport/Ticket/ticket.html.twig */
class __TwigTemplate_cde51a0555537c901784ce78346a98e4b341b84c2737979ad307a480f2809553 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupport/Ticket/ticket.html.twig", 1);
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
        $__internal_100bf33c91a33d1c954cdac720796ad574f76d5bb06a5632327552e24ac9bb80 = $this->env->getExtension("native_profiler");
        $__internal_100bf33c91a33d1c954cdac720796ad574f76d5bb06a5632327552e24ac9bb80->enter($__internal_100bf33c91a33d1c954cdac720796ad574f76d5bb06a5632327552e24ac9bb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetSupport/Ticket/ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_100bf33c91a33d1c954cdac720796ad574f76d5bb06a5632327552e24ac9bb80->leave($__internal_100bf33c91a33d1c954cdac720796ad574f76d5bb06a5632327552e24ac9bb80_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f2d29d28ae0df854e2a25639f41c4deb795a79cf12aeaa5d9b2d422f0d9ed64e = $this->env->getExtension("native_profiler");
        $__internal_f2d29d28ae0df854e2a25639f41c4deb795a79cf12aeaa5d9b2d422f0d9ed64e->enter($__internal_f2d29d28ae0df854e2a25639f41c4deb795a79cf12aeaa5d9b2d422f0d9ed64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ticket ";
        
        $__internal_f2d29d28ae0df854e2a25639f41c4deb795a79cf12aeaa5d9b2d422f0d9ed64e->leave($__internal_f2d29d28ae0df854e2a25639f41c4deb795a79cf12aeaa5d9b2d422f0d9ed64e_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8013a999325c187b27e097e31b372281c29fa30a43052cd79364709fd67c50c4 = $this->env->getExtension("native_profiler");
        $__internal_8013a999325c187b27e097e31b372281c29fa30a43052cd79364709fd67c50c4->enter($__internal_8013a999325c187b27e097e31b372281c29fa30a43052cd79364709fd67c50c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_8013a999325c187b27e097e31b372281c29fa30a43052cd79364709fd67c50c4->leave($__internal_8013a999325c187b27e097e31b372281c29fa30a43052cd79364709fd67c50c4_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupport/Ticket/ticket.html.twig";
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
