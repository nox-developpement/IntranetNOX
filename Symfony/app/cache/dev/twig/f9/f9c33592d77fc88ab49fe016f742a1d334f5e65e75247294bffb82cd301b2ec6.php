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
        $__internal_e8d57000d300634eac7bce58bf790b76ec0d34c52a6c3233fb24b4884b0cb90b = $this->env->getExtension("native_profiler");
        $__internal_e8d57000d300634eac7bce58bf790b76ec0d34c52a6c3233fb24b4884b0cb90b->enter($__internal_e8d57000d300634eac7bce58bf790b76ec0d34c52a6c3233fb24b4884b0cb90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e8d57000d300634eac7bce58bf790b76ec0d34c52a6c3233fb24b4884b0cb90b->leave($__internal_e8d57000d300634eac7bce58bf790b76ec0d34c52a6c3233fb24b4884b0cb90b_prof);

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
