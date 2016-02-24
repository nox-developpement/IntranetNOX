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
        $__internal_802f665a4cb5af78e2394f8f969b7bdf1ba511afbcfe16c710960f2ef9ee9428 = $this->env->getExtension("native_profiler");
        $__internal_802f665a4cb5af78e2394f8f969b7bdf1ba511afbcfe16c710960f2ef9ee9428->enter($__internal_802f665a4cb5af78e2394f8f969b7bdf1ba511afbcfe16c710960f2ef9ee9428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_802f665a4cb5af78e2394f8f969b7bdf1ba511afbcfe16c710960f2ef9ee9428->leave($__internal_802f665a4cb5af78e2394f8f969b7bdf1ba511afbcfe16c710960f2ef9ee9428_prof);

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
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
