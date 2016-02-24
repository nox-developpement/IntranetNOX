<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_13fc9d2fead3f5ffc8f3b6726d2a92a1b30cab6c04fcaa701575eb0baf45960a extends Twig_Template
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
        $__internal_67170a5c854c591cc0b6481fbbdbd75c2e38a79d019bff6ae7a3cce7064695c8 = $this->env->getExtension("native_profiler");
        $__internal_67170a5c854c591cc0b6481fbbdbd75c2e38a79d019bff6ae7a3cce7064695c8->enter($__internal_67170a5c854c591cc0b6481fbbdbd75c2e38a79d019bff6ae7a3cce7064695c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_67170a5c854c591cc0b6481fbbdbd75c2e38a79d019bff6ae7a3cce7064695c8->leave($__internal_67170a5c854c591cc0b6481fbbdbd75c2e38a79d019bff6ae7a3cce7064695c8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
