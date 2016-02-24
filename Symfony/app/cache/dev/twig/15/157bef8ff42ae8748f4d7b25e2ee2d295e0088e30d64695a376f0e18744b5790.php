<?php

/* @NoxIntranetPDFParsing/Default/index.html.twig */
class __TwigTemplate_b5b53e40b10e5ed6696a23fb818e4cbcd94d3daa2cfac3b3e00d45fd54a7ecdd extends Twig_Template
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
        $__internal_2fc1de2469fa7f70a9f76beb310befc1e4f6fb56a64a7577e49ee4f1c41324ab = $this->env->getExtension("native_profiler");
        $__internal_2fc1de2469fa7f70a9f76beb310befc1e4f6fb56a64a7577e49ee4f1c41324ab->enter($__internal_2fc1de2469fa7f70a9f76beb310befc1e4f6fb56a64a7577e49ee4f1c41324ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetPDFParsing/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_2fc1de2469fa7f70a9f76beb310befc1e4f6fb56a64a7577e49ee4f1c41324ab->leave($__internal_2fc1de2469fa7f70a9f76beb310befc1e4f6fb56a64a7577e49ee4f1c41324ab_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetPDFParsing/Default/index.html.twig";
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
/* Hello {{ name }}!*/
/* */
