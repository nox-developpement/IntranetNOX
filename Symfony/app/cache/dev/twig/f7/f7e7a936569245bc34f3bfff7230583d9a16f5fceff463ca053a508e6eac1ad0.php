<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_19cbc297835a0195ac84bd172cbe99f6c282b3a2af72f7451b50c1274c0e3771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd36eb9c3065664a79573efde11ced10ec0894a2c47f82935e83bc767abcf537 = $this->env->getExtension("native_profiler");
        $__internal_fd36eb9c3065664a79573efde11ced10ec0894a2c47f82935e83bc767abcf537->enter($__internal_fd36eb9c3065664a79573efde11ced10ec0894a2c47f82935e83bc767abcf537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd36eb9c3065664a79573efde11ced10ec0894a2c47f82935e83bc767abcf537->leave($__internal_fd36eb9c3065664a79573efde11ced10ec0894a2c47f82935e83bc767abcf537_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ab84bf42f6b8c720a39574b5f9351630a1f32c26afb033b948b42bd4b46999b5 = $this->env->getExtension("native_profiler");
        $__internal_ab84bf42f6b8c720a39574b5f9351630a1f32c26afb033b948b42bd4b46999b5->enter($__internal_ab84bf42f6b8c720a39574b5f9351630a1f32c26afb033b948b42bd4b46999b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ab84bf42f6b8c720a39574b5f9351630a1f32c26afb033b948b42bd4b46999b5->leave($__internal_ab84bf42f6b8c720a39574b5f9351630a1f32c26afb033b948b42bd4b46999b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dde2a770d3385ed259960128320d2f495ea67c7cb6e70e6dfec28141e72faf44 = $this->env->getExtension("native_profiler");
        $__internal_dde2a770d3385ed259960128320d2f495ea67c7cb6e70e6dfec28141e72faf44->enter($__internal_dde2a770d3385ed259960128320d2f495ea67c7cb6e70e6dfec28141e72faf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_dde2a770d3385ed259960128320d2f495ea67c7cb6e70e6dfec28141e72faf44->leave($__internal_dde2a770d3385ed259960128320d2f495ea67c7cb6e70e6dfec28141e72faf44_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_42b8e43c7e265db3fb7e647d80f3e228deaf3463faed5a65ed26cfa423617f73 = $this->env->getExtension("native_profiler");
        $__internal_42b8e43c7e265db3fb7e647d80f3e228deaf3463faed5a65ed26cfa423617f73->enter($__internal_42b8e43c7e265db3fb7e647d80f3e228deaf3463faed5a65ed26cfa423617f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_42b8e43c7e265db3fb7e647d80f3e228deaf3463faed5a65ed26cfa423617f73->leave($__internal_42b8e43c7e265db3fb7e647d80f3e228deaf3463faed5a65ed26cfa423617f73_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c0b71cf6b9e46a931e1a4425b44276fff0ce486c97bb6eaa3cf1dd0524628181 = $this->env->getExtension("native_profiler");
        $__internal_c0b71cf6b9e46a931e1a4425b44276fff0ce486c97bb6eaa3cf1dd0524628181->enter($__internal_c0b71cf6b9e46a931e1a4425b44276fff0ce486c97bb6eaa3cf1dd0524628181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c0b71cf6b9e46a931e1a4425b44276fff0ce486c97bb6eaa3cf1dd0524628181->leave($__internal_c0b71cf6b9e46a931e1a4425b44276fff0ce486c97bb6eaa3cf1dd0524628181_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
