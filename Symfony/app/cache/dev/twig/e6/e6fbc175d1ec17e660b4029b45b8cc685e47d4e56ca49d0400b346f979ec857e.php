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
        $__internal_ff032371d4a0dce2d0657b54f4a2660d883a2f445cb6e5f4011185e13675b16e = $this->env->getExtension("native_profiler");
        $__internal_ff032371d4a0dce2d0657b54f4a2660d883a2f445cb6e5f4011185e13675b16e->enter($__internal_ff032371d4a0dce2d0657b54f4a2660d883a2f445cb6e5f4011185e13675b16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ff032371d4a0dce2d0657b54f4a2660d883a2f445cb6e5f4011185e13675b16e->leave($__internal_ff032371d4a0dce2d0657b54f4a2660d883a2f445cb6e5f4011185e13675b16e_prof);

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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
