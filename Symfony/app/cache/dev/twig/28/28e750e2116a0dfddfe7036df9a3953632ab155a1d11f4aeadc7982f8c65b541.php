<?php

/* NoxIntranetMenuBundle:Default:index.html.twig */
class __TwigTemplate_f18222ebcf661b9b546038fa693a70d881dc195ce4dfc541fea73949d2e9f819 extends Twig_Template
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
        $__internal_400a21224da7c9b148c10b796634e99a2b6e45741fb7511126827acbc4b70975 = $this->env->getExtension("native_profiler");
        $__internal_400a21224da7c9b148c10b796634e99a2b6e45741fb7511126827acbc4b70975->enter($__internal_400a21224da7c9b148c10b796634e99a2b6e45741fb7511126827acbc4b70975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetMenuBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_400a21224da7c9b148c10b796634e99a2b6e45741fb7511126827acbc4b70975->leave($__internal_400a21224da7c9b148c10b796634e99a2b6e45741fb7511126827acbc4b70975_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetMenuBundle:Default:index.html.twig";
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
