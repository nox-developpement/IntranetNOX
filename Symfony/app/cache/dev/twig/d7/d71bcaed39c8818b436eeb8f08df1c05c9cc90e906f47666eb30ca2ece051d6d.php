<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d9d063667a99d0f642c552ac9b364bca455af40b197a393a216902ad7e4e4427 extends Twig_Template
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
        $__internal_173be3957e94eba464413c4df31fa55f0a839fb822a171f484a71d8a37e9a9e5 = $this->env->getExtension("native_profiler");
        $__internal_173be3957e94eba464413c4df31fa55f0a839fb822a171f484a71d8a37e9a9e5->enter($__internal_173be3957e94eba464413c4df31fa55f0a839fb822a171f484a71d8a37e9a9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_173be3957e94eba464413c4df31fa55f0a839fb822a171f484a71d8a37e9a9e5->leave($__internal_173be3957e94eba464413c4df31fa55f0a839fb822a171f484a71d8a37e9a9e5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
