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
        $__internal_9d521e36bd80ef1b412c1da47d333c8eaf80946482bdea7e3b1766d2da07ef99 = $this->env->getExtension("native_profiler");
        $__internal_9d521e36bd80ef1b412c1da47d333c8eaf80946482bdea7e3b1766d2da07ef99->enter($__internal_9d521e36bd80ef1b412c1da47d333c8eaf80946482bdea7e3b1766d2da07ef99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d521e36bd80ef1b412c1da47d333c8eaf80946482bdea7e3b1766d2da07ef99->leave($__internal_9d521e36bd80ef1b412c1da47d333c8eaf80946482bdea7e3b1766d2da07ef99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4605f1a41704f8bf44c16ac8e71223c21f96698fa5623b222a160a7397742f73 = $this->env->getExtension("native_profiler");
        $__internal_4605f1a41704f8bf44c16ac8e71223c21f96698fa5623b222a160a7397742f73->enter($__internal_4605f1a41704f8bf44c16ac8e71223c21f96698fa5623b222a160a7397742f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4605f1a41704f8bf44c16ac8e71223c21f96698fa5623b222a160a7397742f73->leave($__internal_4605f1a41704f8bf44c16ac8e71223c21f96698fa5623b222a160a7397742f73_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_92f1dc4d044e09438deb8947ed235495a32e9d0807fb228b5b5e6d46461f8a49 = $this->env->getExtension("native_profiler");
        $__internal_92f1dc4d044e09438deb8947ed235495a32e9d0807fb228b5b5e6d46461f8a49->enter($__internal_92f1dc4d044e09438deb8947ed235495a32e9d0807fb228b5b5e6d46461f8a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_92f1dc4d044e09438deb8947ed235495a32e9d0807fb228b5b5e6d46461f8a49->leave($__internal_92f1dc4d044e09438deb8947ed235495a32e9d0807fb228b5b5e6d46461f8a49_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c8d896487fd1d67f2e6df2e6d83ae52e9b388ba9d8cbe35b0cb0f0d4e747bdd = $this->env->getExtension("native_profiler");
        $__internal_1c8d896487fd1d67f2e6df2e6d83ae52e9b388ba9d8cbe35b0cb0f0d4e747bdd->enter($__internal_1c8d896487fd1d67f2e6df2e6d83ae52e9b388ba9d8cbe35b0cb0f0d4e747bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1c8d896487fd1d67f2e6df2e6d83ae52e9b388ba9d8cbe35b0cb0f0d4e747bdd->leave($__internal_1c8d896487fd1d67f2e6df2e6d83ae52e9b388ba9d8cbe35b0cb0f0d4e747bdd_prof);

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
