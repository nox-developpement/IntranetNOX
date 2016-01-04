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
        $__internal_0f7e223085da080c42c2be1b159cbd74d20eb72102cef79edde3c70b0c336eef = $this->env->getExtension("native_profiler");
        $__internal_0f7e223085da080c42c2be1b159cbd74d20eb72102cef79edde3c70b0c336eef->enter($__internal_0f7e223085da080c42c2be1b159cbd74d20eb72102cef79edde3c70b0c336eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0f7e223085da080c42c2be1b159cbd74d20eb72102cef79edde3c70b0c336eef->leave($__internal_0f7e223085da080c42c2be1b159cbd74d20eb72102cef79edde3c70b0c336eef_prof);

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
