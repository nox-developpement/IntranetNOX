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
        $__internal_752057b7341860345643d89164737fc0474fc47a8fcea3594bc1cbff05d25a2d = $this->env->getExtension("native_profiler");
        $__internal_752057b7341860345643d89164737fc0474fc47a8fcea3594bc1cbff05d25a2d->enter($__internal_752057b7341860345643d89164737fc0474fc47a8fcea3594bc1cbff05d25a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_752057b7341860345643d89164737fc0474fc47a8fcea3594bc1cbff05d25a2d->leave($__internal_752057b7341860345643d89164737fc0474fc47a8fcea3594bc1cbff05d25a2d_prof);

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
