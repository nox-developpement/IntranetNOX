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
        $__internal_816580041af7d48cbf58ac52e5e8cedd6fb0cdb982d2b57d5127dd5a09a22e99 = $this->env->getExtension("native_profiler");
        $__internal_816580041af7d48cbf58ac52e5e8cedd6fb0cdb982d2b57d5127dd5a09a22e99->enter($__internal_816580041af7d48cbf58ac52e5e8cedd6fb0cdb982d2b57d5127dd5a09a22e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_816580041af7d48cbf58ac52e5e8cedd6fb0cdb982d2b57d5127dd5a09a22e99->leave($__internal_816580041af7d48cbf58ac52e5e8cedd6fb0cdb982d2b57d5127dd5a09a22e99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6392045a7d0c1915907d99c8a96b94df9e24cb5b99522051359ec1a5781263a = $this->env->getExtension("native_profiler");
        $__internal_d6392045a7d0c1915907d99c8a96b94df9e24cb5b99522051359ec1a5781263a->enter($__internal_d6392045a7d0c1915907d99c8a96b94df9e24cb5b99522051359ec1a5781263a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6392045a7d0c1915907d99c8a96b94df9e24cb5b99522051359ec1a5781263a->leave($__internal_d6392045a7d0c1915907d99c8a96b94df9e24cb5b99522051359ec1a5781263a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc7fdb8ec9b980a3a14af1aaf04dc4cc8cce0f054abce723dd64b0e613d5f1ea = $this->env->getExtension("native_profiler");
        $__internal_cc7fdb8ec9b980a3a14af1aaf04dc4cc8cce0f054abce723dd64b0e613d5f1ea->enter($__internal_cc7fdb8ec9b980a3a14af1aaf04dc4cc8cce0f054abce723dd64b0e613d5f1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cc7fdb8ec9b980a3a14af1aaf04dc4cc8cce0f054abce723dd64b0e613d5f1ea->leave($__internal_cc7fdb8ec9b980a3a14af1aaf04dc4cc8cce0f054abce723dd64b0e613d5f1ea_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc75d942740e595c8de463812a4e2bd3da65e1e9b4399d386e491f7d1127675c = $this->env->getExtension("native_profiler");
        $__internal_bc75d942740e595c8de463812a4e2bd3da65e1e9b4399d386e491f7d1127675c->enter($__internal_bc75d942740e595c8de463812a4e2bd3da65e1e9b4399d386e491f7d1127675c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bc75d942740e595c8de463812a4e2bd3da65e1e9b4399d386e491f7d1127675c->leave($__internal_bc75d942740e595c8de463812a4e2bd3da65e1e9b4399d386e491f7d1127675c_prof);

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
