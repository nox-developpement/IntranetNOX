<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_fecc7b1a081ad83e559bb3b422891cd5e55f071a0a883978e5a65fae10186a6c extends Twig_Template
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
        $__internal_45ae3a334ac6342b39a8b0369545303cfe17dee0de9e8500f4039547253c6c12 = $this->env->getExtension("native_profiler");
        $__internal_45ae3a334ac6342b39a8b0369545303cfe17dee0de9e8500f4039547253c6c12->enter($__internal_45ae3a334ac6342b39a8b0369545303cfe17dee0de9e8500f4039547253c6c12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_45ae3a334ac6342b39a8b0369545303cfe17dee0de9e8500f4039547253c6c12->leave($__internal_45ae3a334ac6342b39a8b0369545303cfe17dee0de9e8500f4039547253c6c12_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
