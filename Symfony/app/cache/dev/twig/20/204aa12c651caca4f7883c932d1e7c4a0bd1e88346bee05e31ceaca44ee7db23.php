<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4d3594ac227e3262104ecb4ff5b7d22ecc676b335bc2c14481a299bbd467e227 extends Twig_Template
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
        $__internal_d6524cb2e5a95b62d418c6592fcc947378ded4a95d0a8c2edae5634d0d301c5a = $this->env->getExtension("native_profiler");
        $__internal_d6524cb2e5a95b62d418c6592fcc947378ded4a95d0a8c2edae5634d0d301c5a->enter($__internal_d6524cb2e5a95b62d418c6592fcc947378ded4a95d0a8c2edae5634d0d301c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d6524cb2e5a95b62d418c6592fcc947378ded4a95d0a8c2edae5634d0d301c5a->leave($__internal_d6524cb2e5a95b62d418c6592fcc947378ded4a95d0a8c2edae5634d0d301c5a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
