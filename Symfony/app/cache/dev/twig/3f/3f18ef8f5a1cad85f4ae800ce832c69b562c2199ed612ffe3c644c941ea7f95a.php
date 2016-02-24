<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_77ad3a7c8c088e70ac2acc4cd329b19717ec1ee6bc2025a5ae41c3b74de58459 extends Twig_Template
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
        $__internal_d13635d13b7f7d6847264228a65d74d82e320fd5532b1b2356a375cea261b100 = $this->env->getExtension("native_profiler");
        $__internal_d13635d13b7f7d6847264228a65d74d82e320fd5532b1b2356a375cea261b100->enter($__internal_d13635d13b7f7d6847264228a65d74d82e320fd5532b1b2356a375cea261b100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d13635d13b7f7d6847264228a65d74d82e320fd5532b1b2356a375cea261b100->leave($__internal_d13635d13b7f7d6847264228a65d74d82e320fd5532b1b2356a375cea261b100_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
