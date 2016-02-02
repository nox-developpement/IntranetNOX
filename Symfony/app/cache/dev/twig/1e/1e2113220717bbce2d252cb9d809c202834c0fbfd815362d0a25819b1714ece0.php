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
        $__internal_bbb037a2a41b4c878de11550e20c92786b9a97045b3c0a4a41f609fa9050676b = $this->env->getExtension("native_profiler");
        $__internal_bbb037a2a41b4c878de11550e20c92786b9a97045b3c0a4a41f609fa9050676b->enter($__internal_bbb037a2a41b4c878de11550e20c92786b9a97045b3c0a4a41f609fa9050676b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetVerifMajDBBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_bbb037a2a41b4c878de11550e20c92786b9a97045b3c0a4a41f609fa9050676b->leave($__internal_bbb037a2a41b4c878de11550e20c92786b9a97045b3c0a4a41f609fa9050676b_prof);

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
