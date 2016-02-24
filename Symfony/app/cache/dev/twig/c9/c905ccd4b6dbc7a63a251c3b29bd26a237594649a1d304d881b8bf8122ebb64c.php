<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_f70d526983976d36f6eaab4d5fd180490055453d073ae3f5ddbdf11a82932d53 extends Twig_Template
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
        $__internal_4b9fcbf96a10c32daa652bcf281a559590be5df0bdff22b53a75ec72c15b4192 = $this->env->getExtension("native_profiler");
        $__internal_4b9fcbf96a10c32daa652bcf281a559590be5df0bdff22b53a75ec72c15b4192->enter($__internal_4b9fcbf96a10c32daa652bcf281a559590be5df0bdff22b53a75ec72c15b4192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4b9fcbf96a10c32daa652bcf281a559590be5df0bdff22b53a75ec72c15b4192->leave($__internal_4b9fcbf96a10c32daa652bcf281a559590be5df0bdff22b53a75ec72c15b4192_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
