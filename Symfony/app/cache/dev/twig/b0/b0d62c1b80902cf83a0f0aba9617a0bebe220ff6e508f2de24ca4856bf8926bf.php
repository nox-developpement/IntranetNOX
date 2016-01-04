<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_447d7204f443e37f1d5ca27274ee50252662b9bb60b93a2d79a47d311e339eef extends Twig_Template
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
        $__internal_767e4fd55cc66f461547b36c50c3181985778c4e1f19d78d334ada09505629c8 = $this->env->getExtension("native_profiler");
        $__internal_767e4fd55cc66f461547b36c50c3181985778c4e1f19d78d334ada09505629c8->enter($__internal_767e4fd55cc66f461547b36c50c3181985778c4e1f19d78d334ada09505629c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_767e4fd55cc66f461547b36c50c3181985778c4e1f19d78d334ada09505629c8->leave($__internal_767e4fd55cc66f461547b36c50c3181985778c4e1f19d78d334ada09505629c8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
