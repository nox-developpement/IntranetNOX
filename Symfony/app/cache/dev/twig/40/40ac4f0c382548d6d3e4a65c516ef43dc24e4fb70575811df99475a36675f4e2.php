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
        $__internal_3af1b15f12067c3805b4e04dec17b4239551390530e37acc571cba2582131ef2 = $this->env->getExtension("native_profiler");
        $__internal_3af1b15f12067c3805b4e04dec17b4239551390530e37acc571cba2582131ef2->enter($__internal_3af1b15f12067c3805b4e04dec17b4239551390530e37acc571cba2582131ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3af1b15f12067c3805b4e04dec17b4239551390530e37acc571cba2582131ef2->leave($__internal_3af1b15f12067c3805b4e04dec17b4239551390530e37acc571cba2582131ef2_prof);

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
