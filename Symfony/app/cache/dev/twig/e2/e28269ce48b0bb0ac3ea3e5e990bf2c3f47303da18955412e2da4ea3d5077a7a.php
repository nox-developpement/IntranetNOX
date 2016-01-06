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
        $__internal_b51ff5d5614dd5ca294b951708eb2e2ffd0fdeb375a3e59d8ee93ae2a1aeb999 = $this->env->getExtension("native_profiler");
        $__internal_b51ff5d5614dd5ca294b951708eb2e2ffd0fdeb375a3e59d8ee93ae2a1aeb999->enter($__internal_b51ff5d5614dd5ca294b951708eb2e2ffd0fdeb375a3e59d8ee93ae2a1aeb999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b51ff5d5614dd5ca294b951708eb2e2ffd0fdeb375a3e59d8ee93ae2a1aeb999->leave($__internal_b51ff5d5614dd5ca294b951708eb2e2ffd0fdeb375a3e59d8ee93ae2a1aeb999_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f6c48c6d2069f9e628871a5a9c83f3a5f99f601a547186aeddd2107b8957cc10 = $this->env->getExtension("native_profiler");
        $__internal_f6c48c6d2069f9e628871a5a9c83f3a5f99f601a547186aeddd2107b8957cc10->enter($__internal_f6c48c6d2069f9e628871a5a9c83f3a5f99f601a547186aeddd2107b8957cc10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f6c48c6d2069f9e628871a5a9c83f3a5f99f601a547186aeddd2107b8957cc10->leave($__internal_f6c48c6d2069f9e628871a5a9c83f3a5f99f601a547186aeddd2107b8957cc10_prof);

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
