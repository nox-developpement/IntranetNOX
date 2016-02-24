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
        $__internal_eac282a5221813a558dc0e1bc5514820b93f4c344524d1265002cab4b5624c9e = $this->env->getExtension("native_profiler");
        $__internal_eac282a5221813a558dc0e1bc5514820b93f4c344524d1265002cab4b5624c9e->enter($__internal_eac282a5221813a558dc0e1bc5514820b93f4c344524d1265002cab4b5624c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_eac282a5221813a558dc0e1bc5514820b93f4c344524d1265002cab4b5624c9e->leave($__internal_eac282a5221813a558dc0e1bc5514820b93f4c344524d1265002cab4b5624c9e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b2a032377e0ab72924e47cf7682f745b39a4728035009c721818197f4a0994b = $this->env->getExtension("native_profiler");
        $__internal_4b2a032377e0ab72924e47cf7682f745b39a4728035009c721818197f4a0994b->enter($__internal_4b2a032377e0ab72924e47cf7682f745b39a4728035009c721818197f4a0994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4b2a032377e0ab72924e47cf7682f745b39a4728035009c721818197f4a0994b->leave($__internal_4b2a032377e0ab72924e47cf7682f745b39a4728035009c721818197f4a0994b_prof);

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
