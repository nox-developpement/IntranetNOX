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
        $__internal_e96d2225e08399d011dfecf09952abe685893836326439346aed75dcf4fc4d13 = $this->env->getExtension("native_profiler");
        $__internal_e96d2225e08399d011dfecf09952abe685893836326439346aed75dcf4fc4d13->enter($__internal_e96d2225e08399d011dfecf09952abe685893836326439346aed75dcf4fc4d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e96d2225e08399d011dfecf09952abe685893836326439346aed75dcf4fc4d13->leave($__internal_e96d2225e08399d011dfecf09952abe685893836326439346aed75dcf4fc4d13_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f5faa1c437d72cfc8d682504461df5f7a37e97611d64ecde5af0e075e522dc1 = $this->env->getExtension("native_profiler");
        $__internal_2f5faa1c437d72cfc8d682504461df5f7a37e97611d64ecde5af0e075e522dc1->enter($__internal_2f5faa1c437d72cfc8d682504461df5f7a37e97611d64ecde5af0e075e522dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_2f5faa1c437d72cfc8d682504461df5f7a37e97611d64ecde5af0e075e522dc1->leave($__internal_2f5faa1c437d72cfc8d682504461df5f7a37e97611d64ecde5af0e075e522dc1_prof);

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
