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
        $__internal_7e8a12a4aa2c70d44a05b893768bfd6451e5974cbcde1fd93c449c97e354cde6 = $this->env->getExtension("native_profiler");
        $__internal_7e8a12a4aa2c70d44a05b893768bfd6451e5974cbcde1fd93c449c97e354cde6->enter($__internal_7e8a12a4aa2c70d44a05b893768bfd6451e5974cbcde1fd93c449c97e354cde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e8a12a4aa2c70d44a05b893768bfd6451e5974cbcde1fd93c449c97e354cde6->leave($__internal_7e8a12a4aa2c70d44a05b893768bfd6451e5974cbcde1fd93c449c97e354cde6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a17dd9416618ca8623adee4422c1e4be836cadd824f8fe689c422a89d82827e6 = $this->env->getExtension("native_profiler");
        $__internal_a17dd9416618ca8623adee4422c1e4be836cadd824f8fe689c422a89d82827e6->enter($__internal_a17dd9416618ca8623adee4422c1e4be836cadd824f8fe689c422a89d82827e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a17dd9416618ca8623adee4422c1e4be836cadd824f8fe689c422a89d82827e6->leave($__internal_a17dd9416618ca8623adee4422c1e4be836cadd824f8fe689c422a89d82827e6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_74e2ac8e5168296f0f441d20d64cca4c1d5720d7ace89262cde9a603686440d6 = $this->env->getExtension("native_profiler");
        $__internal_74e2ac8e5168296f0f441d20d64cca4c1d5720d7ace89262cde9a603686440d6->enter($__internal_74e2ac8e5168296f0f441d20d64cca4c1d5720d7ace89262cde9a603686440d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_74e2ac8e5168296f0f441d20d64cca4c1d5720d7ace89262cde9a603686440d6->leave($__internal_74e2ac8e5168296f0f441d20d64cca4c1d5720d7ace89262cde9a603686440d6_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ec9295143c15af876c2f6d796df1160ae31f1b2605b197d27c6c08da6b0bd04 = $this->env->getExtension("native_profiler");
        $__internal_9ec9295143c15af876c2f6d796df1160ae31f1b2605b197d27c6c08da6b0bd04->enter($__internal_9ec9295143c15af876c2f6d796df1160ae31f1b2605b197d27c6c08da6b0bd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9ec9295143c15af876c2f6d796df1160ae31f1b2605b197d27c6c08da6b0bd04->leave($__internal_9ec9295143c15af876c2f6d796df1160ae31f1b2605b197d27c6c08da6b0bd04_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_3360d94945e9de327224037ff942cd08070e6cbd0cca7cfe5206d596e9c152bf = $this->env->getExtension("native_profiler");
        $__internal_3360d94945e9de327224037ff942cd08070e6cbd0cca7cfe5206d596e9c152bf->enter($__internal_3360d94945e9de327224037ff942cd08070e6cbd0cca7cfe5206d596e9c152bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3360d94945e9de327224037ff942cd08070e6cbd0cca7cfe5206d596e9c152bf->leave($__internal_3360d94945e9de327224037ff942cd08070e6cbd0cca7cfe5206d596e9c152bf_prof);

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
