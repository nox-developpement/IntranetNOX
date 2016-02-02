<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b5196730d4d66a6f7877b50ce0df446d495cbaff6b30296eefa250aad7fc08dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa0c578610c489a1c4ba68ab428c40dbd8d882c72540ea7856e8c1d99db6251d = $this->env->getExtension("native_profiler");
        $__internal_aa0c578610c489a1c4ba68ab428c40dbd8d882c72540ea7856e8c1d99db6251d->enter($__internal_aa0c578610c489a1c4ba68ab428c40dbd8d882c72540ea7856e8c1d99db6251d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa0c578610c489a1c4ba68ab428c40dbd8d882c72540ea7856e8c1d99db6251d->leave($__internal_aa0c578610c489a1c4ba68ab428c40dbd8d882c72540ea7856e8c1d99db6251d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c98908d2dfac1e185b8a27b8f3658bb5f578079618af8c465abcb2c71584bc4b = $this->env->getExtension("native_profiler");
        $__internal_c98908d2dfac1e185b8a27b8f3658bb5f578079618af8c465abcb2c71584bc4b->enter($__internal_c98908d2dfac1e185b8a27b8f3658bb5f578079618af8c465abcb2c71584bc4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c98908d2dfac1e185b8a27b8f3658bb5f578079618af8c465abcb2c71584bc4b->leave($__internal_c98908d2dfac1e185b8a27b8f3658bb5f578079618af8c465abcb2c71584bc4b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7602dd80b807bee5f7635f0c51b261f99836e02b7fb6a19065fa30385f614002 = $this->env->getExtension("native_profiler");
        $__internal_7602dd80b807bee5f7635f0c51b261f99836e02b7fb6a19065fa30385f614002->enter($__internal_7602dd80b807bee5f7635f0c51b261f99836e02b7fb6a19065fa30385f614002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7602dd80b807bee5f7635f0c51b261f99836e02b7fb6a19065fa30385f614002->leave($__internal_7602dd80b807bee5f7635f0c51b261f99836e02b7fb6a19065fa30385f614002_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3480af0b46b565680c4d6ee494531c5cf5ee3aa6a14c83d97d771bdaa91542c2 = $this->env->getExtension("native_profiler");
        $__internal_3480af0b46b565680c4d6ee494531c5cf5ee3aa6a14c83d97d771bdaa91542c2->enter($__internal_3480af0b46b565680c4d6ee494531c5cf5ee3aa6a14c83d97d771bdaa91542c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3480af0b46b565680c4d6ee494531c5cf5ee3aa6a14c83d97d771bdaa91542c2->leave($__internal_3480af0b46b565680c4d6ee494531c5cf5ee3aa6a14c83d97d771bdaa91542c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
/* {% extends 'TwigBundle::layout.html.twig' %}*/
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
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
