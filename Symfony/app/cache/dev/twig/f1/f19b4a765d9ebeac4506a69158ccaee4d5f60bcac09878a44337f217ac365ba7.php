<?php

/* FMElfinderBundle:Elfinder/helper:assets_css.html.twig */
class __TwigTemplate_846d41bddbef0160f7e4fe6d0f0ee0ca3410439020c6fca50286bf213271bf39 extends Twig_Template
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
        $__internal_b87ea0cf1fad617552ef708d1df26782cae11166f1e184a71c088487bc92130d = $this->env->getExtension("native_profiler");
        $__internal_b87ea0cf1fad617552ef708d1df26782cae11166f1e184a71c088487bc92130d->enter($__internal_b87ea0cf1fad617552ef708d1df26782cae11166f1e184a71c088487bc92130d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:assets_css.html.twig"));

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
        
        $__internal_b87ea0cf1fad617552ef708d1df26782cae11166f1e184a71c088487bc92130d->leave($__internal_b87ea0cf1fad617552ef708d1df26782cae11166f1e184a71c088487bc92130d_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:assets_css.html.twig";
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
