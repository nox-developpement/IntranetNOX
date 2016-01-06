<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_96833ad18ff90283419371b372bc99f35319267d66cc56caccca57e1de786eb1 extends Twig_Template
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
        $__internal_d34572d5324621a1a16e7df7b45367f0549313954d29f00b1c7b517ea3f5543b = $this->env->getExtension("native_profiler");
        $__internal_d34572d5324621a1a16e7df7b45367f0549313954d29f00b1c7b517ea3f5543b->enter($__internal_d34572d5324621a1a16e7df7b45367f0549313954d29f00b1c7b517ea3f5543b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d34572d5324621a1a16e7df7b45367f0549313954d29f00b1c7b517ea3f5543b->leave($__internal_d34572d5324621a1a16e7df7b45367f0549313954d29f00b1c7b517ea3f5543b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
