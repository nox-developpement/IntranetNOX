<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_e2e3a4019d734893c6bebb7412fe51e6dea1d855bf12cfd322ead82de11b7f7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
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
        $__internal_62cffbf49d8ebc9668001009c455e8d69824ce6d0e6375bfb1e3cefe0e846d86 = $this->env->getExtension("native_profiler");
        $__internal_62cffbf49d8ebc9668001009c455e8d69824ce6d0e6375bfb1e3cefe0e846d86->enter($__internal_62cffbf49d8ebc9668001009c455e8d69824ce6d0e6375bfb1e3cefe0e846d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62cffbf49d8ebc9668001009c455e8d69824ce6d0e6375bfb1e3cefe0e846d86->leave($__internal_62cffbf49d8ebc9668001009c455e8d69824ce6d0e6375bfb1e3cefe0e846d86_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_804a8a72507370ddc9319c2a6d606aa613761e30ede9fa4df722394bb7843b72 = $this->env->getExtension("native_profiler");
        $__internal_804a8a72507370ddc9319c2a6d606aa613761e30ede9fa4df722394bb7843b72->enter($__internal_804a8a72507370ddc9319c2a6d606aa613761e30ede9fa4df722394bb7843b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_804a8a72507370ddc9319c2a6d606aa613761e30ede9fa4df722394bb7843b72->leave($__internal_804a8a72507370ddc9319c2a6d606aa613761e30ede9fa4df722394bb7843b72_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad63f4b6e2aa8dbdfdb6cbd70fda371dc48e25bed42627dc2fe66ef1c39d90cf = $this->env->getExtension("native_profiler");
        $__internal_ad63f4b6e2aa8dbdfdb6cbd70fda371dc48e25bed42627dc2fe66ef1c39d90cf->enter($__internal_ad63f4b6e2aa8dbdfdb6cbd70fda371dc48e25bed42627dc2fe66ef1c39d90cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ad63f4b6e2aa8dbdfdb6cbd70fda371dc48e25bed42627dc2fe66ef1c39d90cf->leave($__internal_ad63f4b6e2aa8dbdfdb6cbd70fda371dc48e25bed42627dc2fe66ef1c39d90cf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_13ebf47a89d6e3ff62bf62fb6765c0a837a3f57c2a56c3af70ebd861b1d3f3da = $this->env->getExtension("native_profiler");
        $__internal_13ebf47a89d6e3ff62bf62fb6765c0a837a3f57c2a56c3af70ebd861b1d3f3da->enter($__internal_13ebf47a89d6e3ff62bf62fb6765c0a837a3f57c2a56c3af70ebd861b1d3f3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13ebf47a89d6e3ff62bf62fb6765c0a837a3f57c2a56c3af70ebd861b1d3f3da->leave($__internal_13ebf47a89d6e3ff62bf62fb6765c0a837a3f57c2a56c3af70ebd861b1d3f3da_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_6c805dd08753c2d2bd8e98afd7e9b511af4abeeec9ee995b25ce602b05082095 = $this->env->getExtension("native_profiler");
        $__internal_6c805dd08753c2d2bd8e98afd7e9b511af4abeeec9ee995b25ce602b05082095->enter($__internal_6c805dd08753c2d2bd8e98afd7e9b511af4abeeec9ee995b25ce602b05082095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6c805dd08753c2d2bd8e98afd7e9b511af4abeeec9ee995b25ce602b05082095->leave($__internal_6c805dd08753c2d2bd8e98afd7e9b511af4abeeec9ee995b25ce602b05082095_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
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
