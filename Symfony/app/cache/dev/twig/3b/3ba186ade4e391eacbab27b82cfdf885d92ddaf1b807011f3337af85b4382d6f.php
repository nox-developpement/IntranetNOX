<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_db9eb85c03e65974402a654d6b9772553aabdf0a48933988884e0084588f72b4 extends Twig_Template
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
        $__internal_e5fe62d9f260349ac879ada1eaeb5bdaffab09d6e1ae25ec1fc82602e41fcf81 = $this->env->getExtension("native_profiler");
        $__internal_e5fe62d9f260349ac879ada1eaeb5bdaffab09d6e1ae25ec1fc82602e41fcf81->enter($__internal_e5fe62d9f260349ac879ada1eaeb5bdaffab09d6e1ae25ec1fc82602e41fcf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_e5fe62d9f260349ac879ada1eaeb5bdaffab09d6e1ae25ec1fc82602e41fcf81->leave($__internal_e5fe62d9f260349ac879ada1eaeb5bdaffab09d6e1ae25ec1fc82602e41fcf81_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
