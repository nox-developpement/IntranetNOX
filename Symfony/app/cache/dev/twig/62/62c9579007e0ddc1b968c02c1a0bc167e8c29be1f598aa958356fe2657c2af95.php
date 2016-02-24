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
        $__internal_58109446dbf80400f560963403a545b8b0687438fe88257d38e87b749d5f797d = $this->env->getExtension("native_profiler");
        $__internal_58109446dbf80400f560963403a545b8b0687438fe88257d38e87b749d5f797d->enter($__internal_58109446dbf80400f560963403a545b8b0687438fe88257d38e87b749d5f797d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_58109446dbf80400f560963403a545b8b0687438fe88257d38e87b749d5f797d->leave($__internal_58109446dbf80400f560963403a545b8b0687438fe88257d38e87b749d5f797d_prof);

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
