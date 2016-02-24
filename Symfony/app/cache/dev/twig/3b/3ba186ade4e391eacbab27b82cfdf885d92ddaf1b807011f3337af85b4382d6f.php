<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_db9eb85c03e65974402a654d6b9772553aabdf0a48933988884e0084588f72b4 extends Twig_Template
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
        $__internal_7ff613f52e07c5c3e9ed6e7476d29e57ee5b850b490a27c15e394b349fec8e4d = $this->env->getExtension("native_profiler");
        $__internal_7ff613f52e07c5c3e9ed6e7476d29e57ee5b850b490a27c15e394b349fec8e4d->enter($__internal_7ff613f52e07c5c3e9ed6e7476d29e57ee5b850b490a27c15e394b349fec8e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_7ff613f52e07c5c3e9ed6e7476d29e57ee5b850b490a27c15e394b349fec8e4d->leave($__internal_7ff613f52e07c5c3e9ed6e7476d29e57ee5b850b490a27c15e394b349fec8e4d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
