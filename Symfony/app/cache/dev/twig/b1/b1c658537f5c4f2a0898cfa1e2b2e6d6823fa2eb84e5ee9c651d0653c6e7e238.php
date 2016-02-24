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
        $__internal_4f8ea15d5c4a776e06c6b5154f5f02368a8130a334d839d7281477751beb0c51 = $this->env->getExtension("native_profiler");
        $__internal_4f8ea15d5c4a776e06c6b5154f5f02368a8130a334d839d7281477751beb0c51->enter($__internal_4f8ea15d5c4a776e06c6b5154f5f02368a8130a334d839d7281477751beb0c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetSupport/Ticket/ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f8ea15d5c4a776e06c6b5154f5f02368a8130a334d839d7281477751beb0c51->leave($__internal_4f8ea15d5c4a776e06c6b5154f5f02368a8130a334d839d7281477751beb0c51_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ab6344ff21b649779a93d413db677c07ac909461dbdad58887c7a23e37059428 = $this->env->getExtension("native_profiler");
        $__internal_ab6344ff21b649779a93d413db677c07ac909461dbdad58887c7a23e37059428->enter($__internal_ab6344ff21b649779a93d413db677c07ac909461dbdad58887c7a23e37059428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ticket ";
        
        $__internal_ab6344ff21b649779a93d413db677c07ac909461dbdad58887c7a23e37059428->leave($__internal_ab6344ff21b649779a93d413db677c07ac909461dbdad58887c7a23e37059428_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_94bd9d583051c285cf76ea208b2e550fe72fa8fe995e82b443705685eaa03fc4 = $this->env->getExtension("native_profiler");
        $__internal_94bd9d583051c285cf76ea208b2e550fe72fa8fe995e82b443705685eaa03fc4->enter($__internal_94bd9d583051c285cf76ea208b2e550fe72fa8fe995e82b443705685eaa03fc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_94bd9d583051c285cf76ea208b2e550fe72fa8fe995e82b443705685eaa03fc4->leave($__internal_94bd9d583051c285cf76ea208b2e550fe72fa8fe995e82b443705685eaa03fc4_prof);

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
