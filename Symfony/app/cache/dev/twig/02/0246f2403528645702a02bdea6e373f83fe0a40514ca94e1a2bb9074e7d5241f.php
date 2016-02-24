<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_a0ca18fe537a4093ab0819c26677c6e64d5df532c50bf6042a4a863406e6c159 extends Twig_Template
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
        $__internal_4c522253209d74a2b9f8297b544daa125a5ce3f09a30409f39e94ffadce82d33 = $this->env->getExtension("native_profiler");
        $__internal_4c522253209d74a2b9f8297b544daa125a5ce3f09a30409f39e94ffadce82d33->enter($__internal_4c522253209d74a2b9f8297b544daa125a5ce3f09a30409f39e94ffadce82d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4c522253209d74a2b9f8297b544daa125a5ce3f09a30409f39e94ffadce82d33->leave($__internal_4c522253209d74a2b9f8297b544daa125a5ce3f09a30409f39e94ffadce82d33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
