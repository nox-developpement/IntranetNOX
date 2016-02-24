<?php

/* NoxIntranetVerifMajDBBundle:Default:index.html.twig */
class __TwigTemplate_33a1d5ebc2d8a94922747645455bfd70337cb3e5c823b1f5cb7471ad5886fba5 extends Twig_Template
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
        $__internal_91a3a8e4d2d3052420a34e47cc650350ba5c95fb3ec8759303aa8b2064a03999 = $this->env->getExtension("native_profiler");
        $__internal_91a3a8e4d2d3052420a34e47cc650350ba5c95fb3ec8759303aa8b2064a03999->enter($__internal_91a3a8e4d2d3052420a34e47cc650350ba5c95fb3ec8759303aa8b2064a03999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetVerifMajDBBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_91a3a8e4d2d3052420a34e47cc650350ba5c95fb3ec8759303aa8b2064a03999->leave($__internal_91a3a8e4d2d3052420a34e47cc650350ba5c95fb3ec8759303aa8b2064a03999_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetVerifMajDBBundle:Default:index.html.twig";
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
