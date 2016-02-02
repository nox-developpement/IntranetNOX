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
        $__internal_ef56f87f9ecc2b1c53fb302ba0835f729f285862fcdc55d68c81f45a90c01b53 = $this->env->getExtension("native_profiler");
        $__internal_ef56f87f9ecc2b1c53fb302ba0835f729f285862fcdc55d68c81f45a90c01b53->enter($__internal_ef56f87f9ecc2b1c53fb302ba0835f729f285862fcdc55d68c81f45a90c01b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef56f87f9ecc2b1c53fb302ba0835f729f285862fcdc55d68c81f45a90c01b53->leave($__internal_ef56f87f9ecc2b1c53fb302ba0835f729f285862fcdc55d68c81f45a90c01b53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd3a75d6c85261a43395508941ce1cc8e44431a0baa8e3535dcd5d7ca9e45419 = $this->env->getExtension("native_profiler");
        $__internal_fd3a75d6c85261a43395508941ce1cc8e44431a0baa8e3535dcd5d7ca9e45419->enter($__internal_fd3a75d6c85261a43395508941ce1cc8e44431a0baa8e3535dcd5d7ca9e45419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_fd3a75d6c85261a43395508941ce1cc8e44431a0baa8e3535dcd5d7ca9e45419->leave($__internal_fd3a75d6c85261a43395508941ce1cc8e44431a0baa8e3535dcd5d7ca9e45419_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9bdd56960c49d8d4bd6cf6416c246a01c77ec3c57826c47ac946917e8c39240e = $this->env->getExtension("native_profiler");
        $__internal_9bdd56960c49d8d4bd6cf6416c246a01c77ec3c57826c47ac946917e8c39240e->enter($__internal_9bdd56960c49d8d4bd6cf6416c246a01c77ec3c57826c47ac946917e8c39240e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_9bdd56960c49d8d4bd6cf6416c246a01c77ec3c57826c47ac946917e8c39240e->leave($__internal_9bdd56960c49d8d4bd6cf6416c246a01c77ec3c57826c47ac946917e8c39240e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_85c1eab91df1087a9d6effd22cd982e5371c2c726b844d254ffad2140c719490 = $this->env->getExtension("native_profiler");
        $__internal_85c1eab91df1087a9d6effd22cd982e5371c2c726b844d254ffad2140c719490->enter($__internal_85c1eab91df1087a9d6effd22cd982e5371c2c726b844d254ffad2140c719490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_85c1eab91df1087a9d6effd22cd982e5371c2c726b844d254ffad2140c719490->leave($__internal_85c1eab91df1087a9d6effd22cd982e5371c2c726b844d254ffad2140c719490_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad1b0cc29c5ad869bbef94cc6ca1c2b0d2e9c804a9ffaa0adfd00302d716273d = $this->env->getExtension("native_profiler");
        $__internal_ad1b0cc29c5ad869bbef94cc6ca1c2b0d2e9c804a9ffaa0adfd00302d716273d->enter($__internal_ad1b0cc29c5ad869bbef94cc6ca1c2b0d2e9c804a9ffaa0adfd00302d716273d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ad1b0cc29c5ad869bbef94cc6ca1c2b0d2e9c804a9ffaa0adfd00302d716273d->leave($__internal_ad1b0cc29c5ad869bbef94cc6ca1c2b0d2e9c804a9ffaa0adfd00302d716273d_prof);

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
