<?php

/* @NoxIntranetMajDB/Default/index.html.twig */
class __TwigTemplate_fb1a922f9c9692154687f19a9c2b78cc96e5833769b93016efa767b4b26504d4 extends Twig_Template
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
        $__internal_22e7ddf1abde05b775db845e0150f6d19af471e86ec016f245aa7b444db9e762 = $this->env->getExtension("native_profiler");
        $__internal_22e7ddf1abde05b775db845e0150f6d19af471e86ec016f245aa7b444db9e762->enter($__internal_22e7ddf1abde05b775db845e0150f6d19af471e86ec016f245aa7b444db9e762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetMajDB/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_22e7ddf1abde05b775db845e0150f6d19af471e86ec016f245aa7b444db9e762->leave($__internal_22e7ddf1abde05b775db845e0150f6d19af471e86ec016f245aa7b444db9e762_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetMajDB/Default/index.html.twig";
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
/* Hello {{ name }}!*/
/* */
