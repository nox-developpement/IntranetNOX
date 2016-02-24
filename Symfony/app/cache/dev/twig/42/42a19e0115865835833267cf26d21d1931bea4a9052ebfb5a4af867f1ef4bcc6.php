<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_039fc4277b80c8fc907370a8820b50605eda7b6c6a1d96034e5e034fe15b2fef extends Twig_Template
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
        $__internal_1a92e68f525dde9eea705d68453af65e4e93bf42f907d337bdd79caafa398c4c = $this->env->getExtension("native_profiler");
        $__internal_1a92e68f525dde9eea705d68453af65e4e93bf42f907d337bdd79caafa398c4c->enter($__internal_1a92e68f525dde9eea705d68453af65e4e93bf42f907d337bdd79caafa398c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1a92e68f525dde9eea705d68453af65e4e93bf42f907d337bdd79caafa398c4c->leave($__internal_1a92e68f525dde9eea705d68453af65e4e93bf42f907d337bdd79caafa398c4c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
