<?php

/* NoxIntranetPDFParsingBundle:Default:index.html.twig */
class __TwigTemplate_7b636627a9cedb9b2c7901d8bdac27179af4044052bedcd1068a0484d97c5967 extends Twig_Template
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
        $__internal_5c39209e907ed0126cf930a8713d6c8dac6feefdb0b0ea42dd68171f0efb84e4 = $this->env->getExtension("native_profiler");
        $__internal_5c39209e907ed0126cf930a8713d6c8dac6feefdb0b0ea42dd68171f0efb84e4->enter($__internal_5c39209e907ed0126cf930a8713d6c8dac6feefdb0b0ea42dd68171f0efb84e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetPDFParsingBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_5c39209e907ed0126cf930a8713d6c8dac6feefdb0b0ea42dd68171f0efb84e4->leave($__internal_5c39209e907ed0126cf930a8713d6c8dac6feefdb0b0ea42dd68171f0efb84e4_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetPDFParsingBundle:Default:index.html.twig";
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
