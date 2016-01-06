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
        $__internal_2003b06116e9b047e0c6b61fa4b9a0cb9d565cb82543bdff3511c266ba630e9b = $this->env->getExtension("native_profiler");
        $__internal_2003b06116e9b047e0c6b61fa4b9a0cb9d565cb82543bdff3511c266ba630e9b->enter($__internal_2003b06116e9b047e0c6b61fa4b9a0cb9d565cb82543bdff3511c266ba630e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2003b06116e9b047e0c6b61fa4b9a0cb9d565cb82543bdff3511c266ba630e9b->leave($__internal_2003b06116e9b047e0c6b61fa4b9a0cb9d565cb82543bdff3511c266ba630e9b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a3c468b16882bd80ecc5869e81835e1a12e3d2c8a14c56d53c00811ae783c79 = $this->env->getExtension("native_profiler");
        $__internal_2a3c468b16882bd80ecc5869e81835e1a12e3d2c8a14c56d53c00811ae783c79->enter($__internal_2a3c468b16882bd80ecc5869e81835e1a12e3d2c8a14c56d53c00811ae783c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_2a3c468b16882bd80ecc5869e81835e1a12e3d2c8a14c56d53c00811ae783c79->leave($__internal_2a3c468b16882bd80ecc5869e81835e1a12e3d2c8a14c56d53c00811ae783c79_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_707ed3fa461e4a1a64cdee60e64bd96eec63d241d7f60f2a5394b75d6c14b52c = $this->env->getExtension("native_profiler");
        $__internal_707ed3fa461e4a1a64cdee60e64bd96eec63d241d7f60f2a5394b75d6c14b52c->enter($__internal_707ed3fa461e4a1a64cdee60e64bd96eec63d241d7f60f2a5394b75d6c14b52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_707ed3fa461e4a1a64cdee60e64bd96eec63d241d7f60f2a5394b75d6c14b52c->leave($__internal_707ed3fa461e4a1a64cdee60e64bd96eec63d241d7f60f2a5394b75d6c14b52c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_75f96c4b7fe2c15b432fd7d86273aea7b4482947c5dc36c332f23ad3b861f8aa = $this->env->getExtension("native_profiler");
        $__internal_75f96c4b7fe2c15b432fd7d86273aea7b4482947c5dc36c332f23ad3b861f8aa->enter($__internal_75f96c4b7fe2c15b432fd7d86273aea7b4482947c5dc36c332f23ad3b861f8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_75f96c4b7fe2c15b432fd7d86273aea7b4482947c5dc36c332f23ad3b861f8aa->leave($__internal_75f96c4b7fe2c15b432fd7d86273aea7b4482947c5dc36c332f23ad3b861f8aa_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_87033c165d0477998c2363c6b4c5f300487f465db3540279a7a23198f56a702a = $this->env->getExtension("native_profiler");
        $__internal_87033c165d0477998c2363c6b4c5f300487f465db3540279a7a23198f56a702a->enter($__internal_87033c165d0477998c2363c6b4c5f300487f465db3540279a7a23198f56a702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_87033c165d0477998c2363c6b4c5f300487f465db3540279a7a23198f56a702a->leave($__internal_87033c165d0477998c2363c6b4c5f300487f465db3540279a7a23198f56a702a_prof);

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
