<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_77b1df0793f8ad8850b518af74fae033882bb2886396bed2edca835fd47835e0 extends Twig_Template
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
        $__internal_c79588f4a16d4cd4c25fb931941a864ee9a6a3a31360b8bb1ad7f9acfc16d4ff = $this->env->getExtension("native_profiler");
        $__internal_c79588f4a16d4cd4c25fb931941a864ee9a6a3a31360b8bb1ad7f9acfc16d4ff->enter($__internal_c79588f4a16d4cd4c25fb931941a864ee9a6a3a31360b8bb1ad7f9acfc16d4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c79588f4a16d4cd4c25fb931941a864ee9a6a3a31360b8bb1ad7f9acfc16d4ff->leave($__internal_c79588f4a16d4cd4c25fb931941a864ee9a6a3a31360b8bb1ad7f9acfc16d4ff_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
