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
        $__internal_1593182eaa662036d73684be2860532b897fd0e3842f856913789b93da9e7809 = $this->env->getExtension("native_profiler");
        $__internal_1593182eaa662036d73684be2860532b897fd0e3842f856913789b93da9e7809->enter($__internal_1593182eaa662036d73684be2860532b897fd0e3842f856913789b93da9e7809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetMajDB/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_1593182eaa662036d73684be2860532b897fd0e3842f856913789b93da9e7809->leave($__internal_1593182eaa662036d73684be2860532b897fd0e3842f856913789b93da9e7809_prof);

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
