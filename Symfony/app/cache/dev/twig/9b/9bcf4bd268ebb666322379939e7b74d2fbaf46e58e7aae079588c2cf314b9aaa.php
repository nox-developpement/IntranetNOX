<?php

/* @NoxIntranetVerifMajDB/Default/index.html.twig */
class __TwigTemplate_524da082bfbf4bd4e0723d6f08854d06eb91d54163c4b2204a6c560d78b6e487 extends Twig_Template
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
        $__internal_a63ac5dc7c8e20e4fec7a23615ca028c3ce565a15d274fc0630a0c69f50f7234 = $this->env->getExtension("native_profiler");
        $__internal_a63ac5dc7c8e20e4fec7a23615ca028c3ce565a15d274fc0630a0c69f50f7234->enter($__internal_a63ac5dc7c8e20e4fec7a23615ca028c3ce565a15d274fc0630a0c69f50f7234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetVerifMajDB/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_a63ac5dc7c8e20e4fec7a23615ca028c3ce565a15d274fc0630a0c69f50f7234->leave($__internal_a63ac5dc7c8e20e4fec7a23615ca028c3ce565a15d274fc0630a0c69f50f7234_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetVerifMajDB/Default/index.html.twig";
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
