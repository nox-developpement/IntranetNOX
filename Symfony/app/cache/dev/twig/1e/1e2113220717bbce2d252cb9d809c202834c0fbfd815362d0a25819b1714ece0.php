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
        $__internal_9d6dba06b7513cfde0ef6dcd9baf299073feb08866afc1b1874be395e57ceb4d = $this->env->getExtension("native_profiler");
        $__internal_9d6dba06b7513cfde0ef6dcd9baf299073feb08866afc1b1874be395e57ceb4d->enter($__internal_9d6dba06b7513cfde0ef6dcd9baf299073feb08866afc1b1874be395e57ceb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetVerifMajDBBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_9d6dba06b7513cfde0ef6dcd9baf299073feb08866afc1b1874be395e57ceb4d->leave($__internal_9d6dba06b7513cfde0ef6dcd9baf299073feb08866afc1b1874be395e57ceb4d_prof);

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
