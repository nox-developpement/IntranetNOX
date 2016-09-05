<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_10909f73904f3e1e89e7774c5a8347c69f50c0d760e9d1401803e9741715d112 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d2c54c9b5122ea6804d208454380a60ebc7ee577809d9a9f61782b24faece85 = $this->env->getExtension("native_profiler");
        $__internal_5d2c54c9b5122ea6804d208454380a60ebc7ee577809d9a9f61782b24faece85->enter($__internal_5d2c54c9b5122ea6804d208454380a60ebc7ee577809d9a9f61782b24faece85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d2c54c9b5122ea6804d208454380a60ebc7ee577809d9a9f61782b24faece85->leave($__internal_5d2c54c9b5122ea6804d208454380a60ebc7ee577809d9a9f61782b24faece85_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_249da43802a818b47edc2aaaac49a7580b0728b0c30b1f1c3c38f20cefed68a0 = $this->env->getExtension("native_profiler");
        $__internal_249da43802a818b47edc2aaaac49a7580b0728b0c30b1f1c3c38f20cefed68a0->enter($__internal_249da43802a818b47edc2aaaac49a7580b0728b0c30b1f1c3c38f20cefed68a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_249da43802a818b47edc2aaaac49a7580b0728b0c30b1f1c3c38f20cefed68a0->leave($__internal_249da43802a818b47edc2aaaac49a7580b0728b0c30b1f1c3c38f20cefed68a0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_413f88e39925c96c9d69b1053ff5fa9c03a1dc9bc911c5ab8d45bdcb18db4c03 = $this->env->getExtension("native_profiler");
        $__internal_413f88e39925c96c9d69b1053ff5fa9c03a1dc9bc911c5ab8d45bdcb18db4c03->enter($__internal_413f88e39925c96c9d69b1053ff5fa9c03a1dc9bc911c5ab8d45bdcb18db4c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_413f88e39925c96c9d69b1053ff5fa9c03a1dc9bc911c5ab8d45bdcb18db4c03->leave($__internal_413f88e39925c96c9d69b1053ff5fa9c03a1dc9bc911c5ab8d45bdcb18db4c03_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d5a3310f00cd9810bc05b182890dbb45deabd73a0cf865fafccfbe7c999735f = $this->env->getExtension("native_profiler");
        $__internal_9d5a3310f00cd9810bc05b182890dbb45deabd73a0cf865fafccfbe7c999735f->enter($__internal_9d5a3310f00cd9810bc05b182890dbb45deabd73a0cf865fafccfbe7c999735f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9d5a3310f00cd9810bc05b182890dbb45deabd73a0cf865fafccfbe7c999735f->leave($__internal_9d5a3310f00cd9810bc05b182890dbb45deabd73a0cf865fafccfbe7c999735f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
