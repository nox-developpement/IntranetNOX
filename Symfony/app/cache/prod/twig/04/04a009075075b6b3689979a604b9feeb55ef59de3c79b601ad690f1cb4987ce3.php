<?php

/* @NoxIntranetSupport/Ticket/ticket.html.twig */
class __TwigTemplate_42cdac467f19e66ce4d6bcee028dc3fed7550c13fd00d5937d021c0ca91c2add extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Ticket ";
    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
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
        return array (  50 => 13,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
