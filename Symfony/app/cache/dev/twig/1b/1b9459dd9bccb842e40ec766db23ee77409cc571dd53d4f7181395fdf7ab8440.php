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
        $__internal_b8b48d3e5f1db32acc759e64c275764bde2b5021eda3e29c24fe0117ea63fdac = $this->env->getExtension("native_profiler");
        $__internal_b8b48d3e5f1db32acc759e64c275764bde2b5021eda3e29c24fe0117ea63fdac->enter($__internal_b8b48d3e5f1db32acc759e64c275764bde2b5021eda3e29c24fe0117ea63fdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportBundle:Ticket:ticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8b48d3e5f1db32acc759e64c275764bde2b5021eda3e29c24fe0117ea63fdac->leave($__internal_b8b48d3e5f1db32acc759e64c275764bde2b5021eda3e29c24fe0117ea63fdac_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_6ff47651bae20dc4d27475037f041803c8988bdc96d0158aa8df9bf42414425c = $this->env->getExtension("native_profiler");
        $__internal_6ff47651bae20dc4d27475037f041803c8988bdc96d0158aa8df9bf42414425c->enter($__internal_6ff47651bae20dc4d27475037f041803c8988bdc96d0158aa8df9bf42414425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ticket ";
        
        $__internal_6ff47651bae20dc4d27475037f041803c8988bdc96d0158aa8df9bf42414425c->leave($__internal_6ff47651bae20dc4d27475037f041803c8988bdc96d0158aa8df9bf42414425c_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9e73d6228d5f601625e87cf5330d95b3422c4e34c20781290ea688fc56d6bc51 = $this->env->getExtension("native_profiler");
        $__internal_9e73d6228d5f601625e87cf5330d95b3422c4e34c20781290ea688fc56d6bc51->enter($__internal_9e73d6228d5f601625e87cf5330d95b3422c4e34c20781290ea688fc56d6bc51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_9e73d6228d5f601625e87cf5330d95b3422c4e34c20781290ea688fc56d6bc51->leave($__internal_9e73d6228d5f601625e87cf5330d95b3422c4e34c20781290ea688fc56d6bc51_prof);

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
