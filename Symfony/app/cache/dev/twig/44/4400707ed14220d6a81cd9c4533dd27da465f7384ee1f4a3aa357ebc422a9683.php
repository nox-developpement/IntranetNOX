<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_96833ad18ff90283419371b372bc99f35319267d66cc56caccca57e1de786eb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aeb2d3f0332c3543596905673ca01aa999dce474301dc6328827aebc01c21527 = $this->env->getExtension("native_profiler");
        $__internal_aeb2d3f0332c3543596905673ca01aa999dce474301dc6328827aebc01c21527->enter($__internal_aeb2d3f0332c3543596905673ca01aa999dce474301dc6328827aebc01c21527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_aeb2d3f0332c3543596905673ca01aa999dce474301dc6328827aebc01c21527->leave($__internal_aeb2d3f0332c3543596905673ca01aa999dce474301dc6328827aebc01c21527_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
