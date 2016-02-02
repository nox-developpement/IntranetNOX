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
        $__internal_b5edc77384365cd5ffbc303ba0cd6c6850edeeafdae7228f127fdf677b50d279 = $this->env->getExtension("native_profiler");
        $__internal_b5edc77384365cd5ffbc303ba0cd6c6850edeeafdae7228f127fdf677b50d279->enter($__internal_b5edc77384365cd5ffbc303ba0cd6c6850edeeafdae7228f127fdf677b50d279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetVerifMajDBBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_b5edc77384365cd5ffbc303ba0cd6c6850edeeafdae7228f127fdf677b50d279->leave($__internal_b5edc77384365cd5ffbc303ba0cd6c6850edeeafdae7228f127fdf677b50d279_prof);

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
