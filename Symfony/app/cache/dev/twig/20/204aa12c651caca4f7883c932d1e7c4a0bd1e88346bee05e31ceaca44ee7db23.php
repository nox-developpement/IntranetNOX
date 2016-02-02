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
        $__internal_1993c5bbc153e2a492a2ba3e831deffa231d0f164b94f92a079b7012f75b28d4 = $this->env->getExtension("native_profiler");
        $__internal_1993c5bbc153e2a492a2ba3e831deffa231d0f164b94f92a079b7012f75b28d4->enter($__internal_1993c5bbc153e2a492a2ba3e831deffa231d0f164b94f92a079b7012f75b28d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1993c5bbc153e2a492a2ba3e831deffa231d0f164b94f92a079b7012f75b28d4->leave($__internal_1993c5bbc153e2a492a2ba3e831deffa231d0f164b94f92a079b7012f75b28d4_prof);

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
