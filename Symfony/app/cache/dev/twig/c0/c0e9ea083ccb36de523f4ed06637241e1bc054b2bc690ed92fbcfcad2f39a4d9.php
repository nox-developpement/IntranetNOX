<?php

/* @NoxIntranetMenu/Default/index.html.twig */
class __TwigTemplate_72ace71fe60f36b4186e42424d31b3aefa5b588b82082b298c5a2dc31ffbe925 extends Twig_Template
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
        $__internal_00cf73adc610ad2fa5d9d6ad355df44cd692abc58ca09e21784813cbf7640fd6 = $this->env->getExtension("native_profiler");
        $__internal_00cf73adc610ad2fa5d9d6ad355df44cd692abc58ca09e21784813cbf7640fd6->enter($__internal_00cf73adc610ad2fa5d9d6ad355df44cd692abc58ca09e21784813cbf7640fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetMenu/Default/index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_00cf73adc610ad2fa5d9d6ad355df44cd692abc58ca09e21784813cbf7640fd6->leave($__internal_00cf73adc610ad2fa5d9d6ad355df44cd692abc58ca09e21784813cbf7640fd6_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetMenu/Default/index.html.twig";
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
