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
        $__internal_7a3782bff3be3fabb76755eb1510d6275c74cc89ce30c39bcf4d5d28de6cb309 = $this->env->getExtension("native_profiler");
        $__internal_7a3782bff3be3fabb76755eb1510d6275c74cc89ce30c39bcf4d5d28de6cb309->enter($__internal_7a3782bff3be3fabb76755eb1510d6275c74cc89ce30c39bcf4d5d28de6cb309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3782bff3be3fabb76755eb1510d6275c74cc89ce30c39bcf4d5d28de6cb309->leave($__internal_7a3782bff3be3fabb76755eb1510d6275c74cc89ce30c39bcf4d5d28de6cb309_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d02e85fb4bd54c1b3ef02ce45515360b3b33b829980c9bb0f2e200a4e12fd85 = $this->env->getExtension("native_profiler");
        $__internal_9d02e85fb4bd54c1b3ef02ce45515360b3b33b829980c9bb0f2e200a4e12fd85->enter($__internal_9d02e85fb4bd54c1b3ef02ce45515360b3b33b829980c9bb0f2e200a4e12fd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_9d02e85fb4bd54c1b3ef02ce45515360b3b33b829980c9bb0f2e200a4e12fd85->leave($__internal_9d02e85fb4bd54c1b3ef02ce45515360b3b33b829980c9bb0f2e200a4e12fd85_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6459e6a5c4747cdf887db1586e6cf0684712d6ada79e48779bc2b3b3aa0c67bf = $this->env->getExtension("native_profiler");
        $__internal_6459e6a5c4747cdf887db1586e6cf0684712d6ada79e48779bc2b3b3aa0c67bf->enter($__internal_6459e6a5c4747cdf887db1586e6cf0684712d6ada79e48779bc2b3b3aa0c67bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_6459e6a5c4747cdf887db1586e6cf0684712d6ada79e48779bc2b3b3aa0c67bf->leave($__internal_6459e6a5c4747cdf887db1586e6cf0684712d6ada79e48779bc2b3b3aa0c67bf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d7edd5fbcdc9cdbc426d0e240d735d60fdf0cbfc98bb5a7a1a4f3a83187c269 = $this->env->getExtension("native_profiler");
        $__internal_7d7edd5fbcdc9cdbc426d0e240d735d60fdf0cbfc98bb5a7a1a4f3a83187c269->enter($__internal_7d7edd5fbcdc9cdbc426d0e240d735d60fdf0cbfc98bb5a7a1a4f3a83187c269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7d7edd5fbcdc9cdbc426d0e240d735d60fdf0cbfc98bb5a7a1a4f3a83187c269->leave($__internal_7d7edd5fbcdc9cdbc426d0e240d735d60fdf0cbfc98bb5a7a1a4f3a83187c269_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2842365678b8c14ebcf72f6b6c39a1a60ef9581416c5c0dec81d6343856e5112 = $this->env->getExtension("native_profiler");
        $__internal_2842365678b8c14ebcf72f6b6c39a1a60ef9581416c5c0dec81d6343856e5112->enter($__internal_2842365678b8c14ebcf72f6b6c39a1a60ef9581416c5c0dec81d6343856e5112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2842365678b8c14ebcf72f6b6c39a1a60ef9581416c5c0dec81d6343856e5112->leave($__internal_2842365678b8c14ebcf72f6b6c39a1a60ef9581416c5c0dec81d6343856e5112_prof);

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
