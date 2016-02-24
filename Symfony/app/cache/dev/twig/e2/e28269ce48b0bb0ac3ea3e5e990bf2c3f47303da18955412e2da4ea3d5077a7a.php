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
        $__internal_7bca864af0986a3d09d653895ac9cee4c6afdf3eccc79b7d2a535009565aebc4 = $this->env->getExtension("native_profiler");
        $__internal_7bca864af0986a3d09d653895ac9cee4c6afdf3eccc79b7d2a535009565aebc4->enter($__internal_7bca864af0986a3d09d653895ac9cee4c6afdf3eccc79b7d2a535009565aebc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_7bca864af0986a3d09d653895ac9cee4c6afdf3eccc79b7d2a535009565aebc4->leave($__internal_7bca864af0986a3d09d653895ac9cee4c6afdf3eccc79b7d2a535009565aebc4_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9810b86ac55a14fb5e9e346cf8921c7eb88ab4c3755d0d05d007ee51f3eaf173 = $this->env->getExtension("native_profiler");
        $__internal_9810b86ac55a14fb5e9e346cf8921c7eb88ab4c3755d0d05d007ee51f3eaf173->enter($__internal_9810b86ac55a14fb5e9e346cf8921c7eb88ab4c3755d0d05d007ee51f3eaf173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9810b86ac55a14fb5e9e346cf8921c7eb88ab4c3755d0d05d007ee51f3eaf173->leave($__internal_9810b86ac55a14fb5e9e346cf8921c7eb88ab4c3755d0d05d007ee51f3eaf173_prof);

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
