<?php

/* @FMElfinder/Elfinder/helper/assets_css.html.twig */
class __TwigTemplate_03c14cfed4e8f1bbc049577f010c49a738e80a22332b572f1e3c8b6304408300 extends Twig_Template
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
        $__internal_f8aa5437034ed63e093be94c62756f2e303a47dae4989fc0c5a2b9fadecd7c02 = $this->env->getExtension("native_profiler");
        $__internal_f8aa5437034ed63e093be94c62756f2e303a47dae4989fc0c5a2b9fadecd7c02->enter($__internal_f8aa5437034ed63e093be94c62756f2e303a47dae4989fc0c5a2b9fadecd7c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/helper/assets_css.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")), "html", null, true);
        echo "/jquery-ui/themes/";
        echo twig_escape_filter($this->env, (isset($context["theme"]) ? $context["theme"] : $this->getContext($context, "theme")), "html", null, true);
        echo "/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")), "html", null, true);
        echo "/elfinder/dist/css/elfinder.min.css\" rel=\"stylesheet\" type=\"text/css\">
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")), "html", null, true);
        echo "/elfinder/dist/css/theme.css\" rel=\"stylesheet\" type=\"text/css\">

";
        
        $__internal_f8aa5437034ed63e093be94c62756f2e303a47dae4989fc0c5a2b9fadecd7c02->leave($__internal_f8aa5437034ed63e093be94c62756f2e303a47dae4989fc0c5a2b9fadecd7c02_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/assets_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 3,  29 => 2,  22 => 1,);
    }
}
/* <link href="{{ prefix }}/jquery-ui/themes/{{ theme }}/jquery-ui.min.css" rel="stylesheet" type="text/css">*/
/* <link href="{{ prefix }}/elfinder/dist/css/elfinder.min.css" rel="stylesheet" type="text/css">*/
/* <link href="{{ prefix }}/elfinder/dist/css/theme.css" rel="stylesheet" type="text/css">*/
/* */
/* */
