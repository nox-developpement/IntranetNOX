<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b5196730d4d66a6f7877b50ce0df446d495cbaff6b30296eefa250aad7fc08dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0045c955a2d6a132252f7e11d69b06ac2ca2c0cde9093ca2b2d9c4418f24fb3 = $this->env->getExtension("native_profiler");
        $__internal_b0045c955a2d6a132252f7e11d69b06ac2ca2c0cde9093ca2b2d9c4418f24fb3->enter($__internal_b0045c955a2d6a132252f7e11d69b06ac2ca2c0cde9093ca2b2d9c4418f24fb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0045c955a2d6a132252f7e11d69b06ac2ca2c0cde9093ca2b2d9c4418f24fb3->leave($__internal_b0045c955a2d6a132252f7e11d69b06ac2ca2c0cde9093ca2b2d9c4418f24fb3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b901d29cd01a33f7ade006ae67dcae2dfa3d8b3d6d9b6608397f2710afdb15d = $this->env->getExtension("native_profiler");
        $__internal_7b901d29cd01a33f7ade006ae67dcae2dfa3d8b3d6d9b6608397f2710afdb15d->enter($__internal_7b901d29cd01a33f7ade006ae67dcae2dfa3d8b3d6d9b6608397f2710afdb15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7b901d29cd01a33f7ade006ae67dcae2dfa3d8b3d6d9b6608397f2710afdb15d->leave($__internal_7b901d29cd01a33f7ade006ae67dcae2dfa3d8b3d6d9b6608397f2710afdb15d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9683c2f56bf6921d7d31cfff02be488560b232e9b245e903b8140afd0d6186af = $this->env->getExtension("native_profiler");
        $__internal_9683c2f56bf6921d7d31cfff02be488560b232e9b245e903b8140afd0d6186af->enter($__internal_9683c2f56bf6921d7d31cfff02be488560b232e9b245e903b8140afd0d6186af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9683c2f56bf6921d7d31cfff02be488560b232e9b245e903b8140afd0d6186af->leave($__internal_9683c2f56bf6921d7d31cfff02be488560b232e9b245e903b8140afd0d6186af_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c58506e77dc15b6ae675d2b669ede3a87a2c7a88547f96f25a68caa2822bd66 = $this->env->getExtension("native_profiler");
        $__internal_3c58506e77dc15b6ae675d2b669ede3a87a2c7a88547f96f25a68caa2822bd66->enter($__internal_3c58506e77dc15b6ae675d2b669ede3a87a2c7a88547f96f25a68caa2822bd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3c58506e77dc15b6ae675d2b669ede3a87a2c7a88547f96f25a68caa2822bd66->leave($__internal_3c58506e77dc15b6ae675d2b669ede3a87a2c7a88547f96f25a68caa2822bd66_prof);

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
/* {% extends '@Twig/layout.html.twig' %}*/
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
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
