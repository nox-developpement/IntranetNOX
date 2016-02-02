<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bea8a5e4ed07835534a3f3600409818e12897fe29c6a4c28b085ade639eed57d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29dd443ce77cbc025057762c4d76fa2b47252b5a628b7f2ed5b4334050bcfd7c = $this->env->getExtension("native_profiler");
        $__internal_29dd443ce77cbc025057762c4d76fa2b47252b5a628b7f2ed5b4334050bcfd7c->enter($__internal_29dd443ce77cbc025057762c4d76fa2b47252b5a628b7f2ed5b4334050bcfd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_29dd443ce77cbc025057762c4d76fa2b47252b5a628b7f2ed5b4334050bcfd7c->leave($__internal_29dd443ce77cbc025057762c4d76fa2b47252b5a628b7f2ed5b4334050bcfd7c_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e479f17eb7b086836b51c2f80c7d88a6ca7fbab5e2fdb69f080d144a753528d6 = $this->env->getExtension("native_profiler");
        $__internal_e479f17eb7b086836b51c2f80c7d88a6ca7fbab5e2fdb69f080d144a753528d6->enter($__internal_e479f17eb7b086836b51c2f80c7d88a6ca7fbab5e2fdb69f080d144a753528d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e479f17eb7b086836b51c2f80c7d88a6ca7fbab5e2fdb69f080d144a753528d6->leave($__internal_e479f17eb7b086836b51c2f80c7d88a6ca7fbab5e2fdb69f080d144a753528d6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
