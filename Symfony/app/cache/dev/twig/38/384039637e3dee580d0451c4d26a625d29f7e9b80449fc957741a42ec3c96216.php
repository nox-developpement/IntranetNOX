<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_13eb5550d436bbabf01f865a43672a35402431f5d13005274d73e19cb82f5e2b extends Twig_Template
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
        $__internal_44d0867e51312a5d429fb7c921b708dd08c7da01505a5fd3d2e8160275ef94e2 = $this->env->getExtension("native_profiler");
        $__internal_44d0867e51312a5d429fb7c921b708dd08c7da01505a5fd3d2e8160275ef94e2->enter($__internal_44d0867e51312a5d429fb7c921b708dd08c7da01505a5fd3d2e8160275ef94e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_44d0867e51312a5d429fb7c921b708dd08c7da01505a5fd3d2e8160275ef94e2->leave($__internal_44d0867e51312a5d429fb7c921b708dd08c7da01505a5fd3d2e8160275ef94e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
