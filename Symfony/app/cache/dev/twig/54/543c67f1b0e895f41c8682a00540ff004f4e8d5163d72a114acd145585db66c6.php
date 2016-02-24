<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8e0c7079f608a9fbd613bf1a6dec84db57f217830260094782d300caea79776d extends Twig_Template
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
        $__internal_216b75094a9ccd160cf9bc55661a21ca76d65815530642fc85817d06d39931de = $this->env->getExtension("native_profiler");
        $__internal_216b75094a9ccd160cf9bc55661a21ca76d65815530642fc85817d06d39931de->enter($__internal_216b75094a9ccd160cf9bc55661a21ca76d65815530642fc85817d06d39931de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_216b75094a9ccd160cf9bc55661a21ca76d65815530642fc85817d06d39931de->leave($__internal_216b75094a9ccd160cf9bc55661a21ca76d65815530642fc85817d06d39931de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
