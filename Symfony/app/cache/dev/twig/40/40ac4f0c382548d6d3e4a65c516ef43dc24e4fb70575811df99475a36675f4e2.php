<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_48a8d9315ca8a627561815446352a94ed6679c1947cf9417919263696b445d75 extends Twig_Template
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
        $__internal_362d26a9e13adbdf5527f6e64cf4122024997c57c7a6ef2bb8195e1c6a13d489 = $this->env->getExtension("native_profiler");
        $__internal_362d26a9e13adbdf5527f6e64cf4122024997c57c7a6ef2bb8195e1c6a13d489->enter($__internal_362d26a9e13adbdf5527f6e64cf4122024997c57c7a6ef2bb8195e1c6a13d489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_362d26a9e13adbdf5527f6e64cf4122024997c57c7a6ef2bb8195e1c6a13d489->leave($__internal_362d26a9e13adbdf5527f6e64cf4122024997c57c7a6ef2bb8195e1c6a13d489_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
