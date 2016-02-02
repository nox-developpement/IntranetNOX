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
        $__internal_76b72ee46d5ed63f7c80bf1ed09421f4d9bc5c3ae8a84fd62ee7a2d6b98d200e = $this->env->getExtension("native_profiler");
        $__internal_76b72ee46d5ed63f7c80bf1ed09421f4d9bc5c3ae8a84fd62ee7a2d6b98d200e->enter($__internal_76b72ee46d5ed63f7c80bf1ed09421f4d9bc5c3ae8a84fd62ee7a2d6b98d200e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_76b72ee46d5ed63f7c80bf1ed09421f4d9bc5c3ae8a84fd62ee7a2d6b98d200e->leave($__internal_76b72ee46d5ed63f7c80bf1ed09421f4d9bc5c3ae8a84fd62ee7a2d6b98d200e_prof);

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
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
