<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_5b6338ed8078d1807535b94d4c610969a5a1cb0276b998209911ffa22ef5da5c extends Twig_Template
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
        $__internal_f17929260412a48676c35ca70047b1eb94d89b34651f7738cbabb76b44eae683 = $this->env->getExtension("native_profiler");
        $__internal_f17929260412a48676c35ca70047b1eb94d89b34651f7738cbabb76b44eae683->enter($__internal_f17929260412a48676c35ca70047b1eb94d89b34651f7738cbabb76b44eae683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f17929260412a48676c35ca70047b1eb94d89b34651f7738cbabb76b44eae683->leave($__internal_f17929260412a48676c35ca70047b1eb94d89b34651f7738cbabb76b44eae683_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
