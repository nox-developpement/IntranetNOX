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
        $__internal_8bb7e218b706e6ba1049064a5bd85ab72262065b5db0daaaab9caa54f09034a9 = $this->env->getExtension("native_profiler");
        $__internal_8bb7e218b706e6ba1049064a5bd85ab72262065b5db0daaaab9caa54f09034a9->enter($__internal_8bb7e218b706e6ba1049064a5bd85ab72262065b5db0daaaab9caa54f09034a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8bb7e218b706e6ba1049064a5bd85ab72262065b5db0daaaab9caa54f09034a9->leave($__internal_8bb7e218b706e6ba1049064a5bd85ab72262065b5db0daaaab9caa54f09034a9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12f5b68cf95b3e5d426b2600a6a791f536608410f2bd2988c06e7c015035b7d0 = $this->env->getExtension("native_profiler");
        $__internal_12f5b68cf95b3e5d426b2600a6a791f536608410f2bd2988c06e7c015035b7d0->enter($__internal_12f5b68cf95b3e5d426b2600a6a791f536608410f2bd2988c06e7c015035b7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_12f5b68cf95b3e5d426b2600a6a791f536608410f2bd2988c06e7c015035b7d0->leave($__internal_12f5b68cf95b3e5d426b2600a6a791f536608410f2bd2988c06e7c015035b7d0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f923d3e654d80f3a04118a767a9671dba2be5beb7bfaf8e6a6bb568e789103ff = $this->env->getExtension("native_profiler");
        $__internal_f923d3e654d80f3a04118a767a9671dba2be5beb7bfaf8e6a6bb568e789103ff->enter($__internal_f923d3e654d80f3a04118a767a9671dba2be5beb7bfaf8e6a6bb568e789103ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f923d3e654d80f3a04118a767a9671dba2be5beb7bfaf8e6a6bb568e789103ff->leave($__internal_f923d3e654d80f3a04118a767a9671dba2be5beb7bfaf8e6a6bb568e789103ff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf8f6f5210de93490091533c5ff2bbd4c05de6c4d9272b3e1a07a2d9816036d7 = $this->env->getExtension("native_profiler");
        $__internal_cf8f6f5210de93490091533c5ff2bbd4c05de6c4d9272b3e1a07a2d9816036d7->enter($__internal_cf8f6f5210de93490091533c5ff2bbd4c05de6c4d9272b3e1a07a2d9816036d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_cf8f6f5210de93490091533c5ff2bbd4c05de6c4d9272b3e1a07a2d9816036d7->leave($__internal_cf8f6f5210de93490091533c5ff2bbd4c05de6c4d9272b3e1a07a2d9816036d7_prof);

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
