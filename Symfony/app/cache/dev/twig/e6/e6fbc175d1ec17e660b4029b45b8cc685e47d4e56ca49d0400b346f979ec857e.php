<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c0909e759e2d684990897270a5c4306b3bb9e94dfa9d34cb80ee1063ea3ccfbc extends Twig_Template
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
        $__internal_7ad410b01a5b9aff6358711191e84ab31fe7720a4590e6c40cee14e4828fbbdd = $this->env->getExtension("native_profiler");
        $__internal_7ad410b01a5b9aff6358711191e84ab31fe7720a4590e6c40cee14e4828fbbdd->enter($__internal_7ad410b01a5b9aff6358711191e84ab31fe7720a4590e6c40cee14e4828fbbdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7ad410b01a5b9aff6358711191e84ab31fe7720a4590e6c40cee14e4828fbbdd->leave($__internal_7ad410b01a5b9aff6358711191e84ab31fe7720a4590e6c40cee14e4828fbbdd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
