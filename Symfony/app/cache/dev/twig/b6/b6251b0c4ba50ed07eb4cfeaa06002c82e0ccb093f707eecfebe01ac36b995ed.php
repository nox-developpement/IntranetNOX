<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_380118edf91e3f42b5a5e3bcdb307c7bc1b1b422fa494f6a1bc530b2c3bf91b7 extends Twig_Template
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
        $__internal_567fb64fa92fbf48809b55b36613474bcdf9819c6b1de2177db4fc2e69f62664 = $this->env->getExtension("native_profiler");
        $__internal_567fb64fa92fbf48809b55b36613474bcdf9819c6b1de2177db4fc2e69f62664->enter($__internal_567fb64fa92fbf48809b55b36613474bcdf9819c6b1de2177db4fc2e69f62664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_567fb64fa92fbf48809b55b36613474bcdf9819c6b1de2177db4fc2e69f62664->leave($__internal_567fb64fa92fbf48809b55b36613474bcdf9819c6b1de2177db4fc2e69f62664_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
