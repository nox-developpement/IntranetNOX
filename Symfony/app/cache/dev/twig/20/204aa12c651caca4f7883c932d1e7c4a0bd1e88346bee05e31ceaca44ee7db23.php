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
        $__internal_51cb74ab3a60fc55e3339e19e6d454f4558c4ec3c928b872030bc6154eff9166 = $this->env->getExtension("native_profiler");
        $__internal_51cb74ab3a60fc55e3339e19e6d454f4558c4ec3c928b872030bc6154eff9166->enter($__internal_51cb74ab3a60fc55e3339e19e6d454f4558c4ec3c928b872030bc6154eff9166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_51cb74ab3a60fc55e3339e19e6d454f4558c4ec3c928b872030bc6154eff9166->leave($__internal_51cb74ab3a60fc55e3339e19e6d454f4558c4ec3c928b872030bc6154eff9166_prof);

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
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
