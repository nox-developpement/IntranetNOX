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
        $__internal_63b80ced8e59595745bd4f2507cd807786437c743588d95f9d1bdf19179e1812 = $this->env->getExtension("native_profiler");
        $__internal_63b80ced8e59595745bd4f2507cd807786437c743588d95f9d1bdf19179e1812->enter($__internal_63b80ced8e59595745bd4f2507cd807786437c743588d95f9d1bdf19179e1812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63b80ced8e59595745bd4f2507cd807786437c743588d95f9d1bdf19179e1812->leave($__internal_63b80ced8e59595745bd4f2507cd807786437c743588d95f9d1bdf19179e1812_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9d2d82eb655f127497f2f5c79687ae324b2a07c108240fd1634900d0653e4a7d = $this->env->getExtension("native_profiler");
        $__internal_9d2d82eb655f127497f2f5c79687ae324b2a07c108240fd1634900d0653e4a7d->enter($__internal_9d2d82eb655f127497f2f5c79687ae324b2a07c108240fd1634900d0653e4a7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9d2d82eb655f127497f2f5c79687ae324b2a07c108240fd1634900d0653e4a7d->leave($__internal_9d2d82eb655f127497f2f5c79687ae324b2a07c108240fd1634900d0653e4a7d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17dc26fe09afce2081afb5d52da1e9c0c92efe88961e6d7acf7ae7503e41f24b = $this->env->getExtension("native_profiler");
        $__internal_17dc26fe09afce2081afb5d52da1e9c0c92efe88961e6d7acf7ae7503e41f24b->enter($__internal_17dc26fe09afce2081afb5d52da1e9c0c92efe88961e6d7acf7ae7503e41f24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17dc26fe09afce2081afb5d52da1e9c0c92efe88961e6d7acf7ae7503e41f24b->leave($__internal_17dc26fe09afce2081afb5d52da1e9c0c92efe88961e6d7acf7ae7503e41f24b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad20ffd4767a75ff57c04275c1fe5701bff74ae673a7e6d7e922b5d3fefdf4a0 = $this->env->getExtension("native_profiler");
        $__internal_ad20ffd4767a75ff57c04275c1fe5701bff74ae673a7e6d7e922b5d3fefdf4a0->enter($__internal_ad20ffd4767a75ff57c04275c1fe5701bff74ae673a7e6d7e922b5d3fefdf4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ad20ffd4767a75ff57c04275c1fe5701bff74ae673a7e6d7e922b5d3fefdf4a0->leave($__internal_ad20ffd4767a75ff57c04275c1fe5701bff74ae673a7e6d7e922b5d3fefdf4a0_prof);

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
