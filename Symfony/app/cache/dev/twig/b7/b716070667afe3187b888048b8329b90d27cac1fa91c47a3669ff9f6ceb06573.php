<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_37faa9c681cab342aee250ac504d11cd25a78d726b9981e93f0dddc93777700c extends Twig_Template
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
        $__internal_503fd0f48012691dbe6a7eef1b7a663f4e65671a79e580e50c9ec0cd9047e30e = $this->env->getExtension("native_profiler");
        $__internal_503fd0f48012691dbe6a7eef1b7a663f4e65671a79e580e50c9ec0cd9047e30e->enter($__internal_503fd0f48012691dbe6a7eef1b7a663f4e65671a79e580e50c9ec0cd9047e30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_503fd0f48012691dbe6a7eef1b7a663f4e65671a79e580e50c9ec0cd9047e30e->leave($__internal_503fd0f48012691dbe6a7eef1b7a663f4e65671a79e580e50c9ec0cd9047e30e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
