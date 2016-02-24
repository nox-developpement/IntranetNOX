<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a8b167826b3f71bc2f6fde48c062f4a5804ad1a0bdc1124e8b5236e46b6c98d5 extends Twig_Template
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
        $__internal_d1c7d0fc609ac92b2651c4de2d251bfe7248a967d55029fa75b78b9bf482dc6b = $this->env->getExtension("native_profiler");
        $__internal_d1c7d0fc609ac92b2651c4de2d251bfe7248a967d55029fa75b78b9bf482dc6b->enter($__internal_d1c7d0fc609ac92b2651c4de2d251bfe7248a967d55029fa75b78b9bf482dc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d1c7d0fc609ac92b2651c4de2d251bfe7248a967d55029fa75b78b9bf482dc6b->leave($__internal_d1c7d0fc609ac92b2651c4de2d251bfe7248a967d55029fa75b78b9bf482dc6b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
