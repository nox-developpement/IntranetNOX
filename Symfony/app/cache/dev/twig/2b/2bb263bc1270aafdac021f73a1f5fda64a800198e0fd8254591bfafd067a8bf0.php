<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_b528418e7c57d52803301103f79e496cd1b1fb99844b1c8a6acb206fb28dd329 extends Twig_Template
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
        $__internal_b055bd08468de570d75026a9637dd5a7c7da6cccc0938502bed8d67953aa33f9 = $this->env->getExtension("native_profiler");
        $__internal_b055bd08468de570d75026a9637dd5a7c7da6cccc0938502bed8d67953aa33f9->enter($__internal_b055bd08468de570d75026a9637dd5a7c7da6cccc0938502bed8d67953aa33f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b055bd08468de570d75026a9637dd5a7c7da6cccc0938502bed8d67953aa33f9->leave($__internal_b055bd08468de570d75026a9637dd5a7c7da6cccc0938502bed8d67953aa33f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
