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
        $__internal_6d5735be63600534cb04c1c1703e12ae7c9f840827f8a4c8351ba2d559fe287a = $this->env->getExtension("native_profiler");
        $__internal_6d5735be63600534cb04c1c1703e12ae7c9f840827f8a4c8351ba2d559fe287a->enter($__internal_6d5735be63600534cb04c1c1703e12ae7c9f840827f8a4c8351ba2d559fe287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d5735be63600534cb04c1c1703e12ae7c9f840827f8a4c8351ba2d559fe287a->leave($__internal_6d5735be63600534cb04c1c1703e12ae7c9f840827f8a4c8351ba2d559fe287a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_035a039d2b8b2cef260829b923d410d714abe9d6c2b9260f0c6601338a46fcd0 = $this->env->getExtension("native_profiler");
        $__internal_035a039d2b8b2cef260829b923d410d714abe9d6c2b9260f0c6601338a46fcd0->enter($__internal_035a039d2b8b2cef260829b923d410d714abe9d6c2b9260f0c6601338a46fcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_035a039d2b8b2cef260829b923d410d714abe9d6c2b9260f0c6601338a46fcd0->leave($__internal_035a039d2b8b2cef260829b923d410d714abe9d6c2b9260f0c6601338a46fcd0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea53fc2014f1fc1981af6c8229d7f5be760c19aebf7a0a8f94e4ec5474f3312b = $this->env->getExtension("native_profiler");
        $__internal_ea53fc2014f1fc1981af6c8229d7f5be760c19aebf7a0a8f94e4ec5474f3312b->enter($__internal_ea53fc2014f1fc1981af6c8229d7f5be760c19aebf7a0a8f94e4ec5474f3312b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ea53fc2014f1fc1981af6c8229d7f5be760c19aebf7a0a8f94e4ec5474f3312b->leave($__internal_ea53fc2014f1fc1981af6c8229d7f5be760c19aebf7a0a8f94e4ec5474f3312b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dddcc85c9bba66790fed1368e249bde41b8cd2da9af0b1fe0b0056009caefef = $this->env->getExtension("native_profiler");
        $__internal_0dddcc85c9bba66790fed1368e249bde41b8cd2da9af0b1fe0b0056009caefef->enter($__internal_0dddcc85c9bba66790fed1368e249bde41b8cd2da9af0b1fe0b0056009caefef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0dddcc85c9bba66790fed1368e249bde41b8cd2da9af0b1fe0b0056009caefef->leave($__internal_0dddcc85c9bba66790fed1368e249bde41b8cd2da9af0b1fe0b0056009caefef_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c5de460ab72a85225d971f79c952836d24596ba976a7a184c4c789e68f429dff = $this->env->getExtension("native_profiler");
        $__internal_c5de460ab72a85225d971f79c952836d24596ba976a7a184c4c789e68f429dff->enter($__internal_c5de460ab72a85225d971f79c952836d24596ba976a7a184c4c789e68f429dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c5de460ab72a85225d971f79c952836d24596ba976a7a184c4c789e68f429dff->leave($__internal_c5de460ab72a85225d971f79c952836d24596ba976a7a184c4c789e68f429dff_prof);

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
