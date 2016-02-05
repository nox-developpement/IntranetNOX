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
        $__internal_79d140990d7d5f7369865ff42d0450df96d87c7644265870575d3004dcf20ac8 = $this->env->getExtension("native_profiler");
        $__internal_79d140990d7d5f7369865ff42d0450df96d87c7644265870575d3004dcf20ac8->enter($__internal_79d140990d7d5f7369865ff42d0450df96d87c7644265870575d3004dcf20ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79d140990d7d5f7369865ff42d0450df96d87c7644265870575d3004dcf20ac8->leave($__internal_79d140990d7d5f7369865ff42d0450df96d87c7644265870575d3004dcf20ac8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b59d1e1a11b792be1b7e695b3f0f4aa8316c78e123fdb25ed01f3b4b3a20e06 = $this->env->getExtension("native_profiler");
        $__internal_5b59d1e1a11b792be1b7e695b3f0f4aa8316c78e123fdb25ed01f3b4b3a20e06->enter($__internal_5b59d1e1a11b792be1b7e695b3f0f4aa8316c78e123fdb25ed01f3b4b3a20e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5b59d1e1a11b792be1b7e695b3f0f4aa8316c78e123fdb25ed01f3b4b3a20e06->leave($__internal_5b59d1e1a11b792be1b7e695b3f0f4aa8316c78e123fdb25ed01f3b4b3a20e06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1260b478e75e02c4d7c76d508698f315134ef26743e704d3dcbcf2a8a780b4f7 = $this->env->getExtension("native_profiler");
        $__internal_1260b478e75e02c4d7c76d508698f315134ef26743e704d3dcbcf2a8a780b4f7->enter($__internal_1260b478e75e02c4d7c76d508698f315134ef26743e704d3dcbcf2a8a780b4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1260b478e75e02c4d7c76d508698f315134ef26743e704d3dcbcf2a8a780b4f7->leave($__internal_1260b478e75e02c4d7c76d508698f315134ef26743e704d3dcbcf2a8a780b4f7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0fb00faf1e0df7be3b7a99a45f83d603401f4b8a7e83a673698fda2ff9274f5 = $this->env->getExtension("native_profiler");
        $__internal_d0fb00faf1e0df7be3b7a99a45f83d603401f4b8a7e83a673698fda2ff9274f5->enter($__internal_d0fb00faf1e0df7be3b7a99a45f83d603401f4b8a7e83a673698fda2ff9274f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d0fb00faf1e0df7be3b7a99a45f83d603401f4b8a7e83a673698fda2ff9274f5->leave($__internal_d0fb00faf1e0df7be3b7a99a45f83d603401f4b8a7e83a673698fda2ff9274f5_prof);

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
