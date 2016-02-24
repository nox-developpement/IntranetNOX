<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e50d3801d145014b8bc6f783d39a1bf0bd674cad5bd881b93e5d0dceb19cba06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_e25717797f9e217fb2548f46a9615c64043cfd82f39c0f266fd0cf432e16b270 = $this->env->getExtension("native_profiler");
        $__internal_e25717797f9e217fb2548f46a9615c64043cfd82f39c0f266fd0cf432e16b270->enter($__internal_e25717797f9e217fb2548f46a9615c64043cfd82f39c0f266fd0cf432e16b270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e25717797f9e217fb2548f46a9615c64043cfd82f39c0f266fd0cf432e16b270->leave($__internal_e25717797f9e217fb2548f46a9615c64043cfd82f39c0f266fd0cf432e16b270_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6f2c0306d49a0a4a42767dcbed74a10618a1c76f6332f0b6198cd0026941711 = $this->env->getExtension("native_profiler");
        $__internal_f6f2c0306d49a0a4a42767dcbed74a10618a1c76f6332f0b6198cd0026941711->enter($__internal_f6f2c0306d49a0a4a42767dcbed74a10618a1c76f6332f0b6198cd0026941711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6f2c0306d49a0a4a42767dcbed74a10618a1c76f6332f0b6198cd0026941711->leave($__internal_f6f2c0306d49a0a4a42767dcbed74a10618a1c76f6332f0b6198cd0026941711_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7f21e1f0aedf2ff4c27bb6657601eb5f0786834b8b96c26f08d61849ca940b7 = $this->env->getExtension("native_profiler");
        $__internal_e7f21e1f0aedf2ff4c27bb6657601eb5f0786834b8b96c26f08d61849ca940b7->enter($__internal_e7f21e1f0aedf2ff4c27bb6657601eb5f0786834b8b96c26f08d61849ca940b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e7f21e1f0aedf2ff4c27bb6657601eb5f0786834b8b96c26f08d61849ca940b7->leave($__internal_e7f21e1f0aedf2ff4c27bb6657601eb5f0786834b8b96c26f08d61849ca940b7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c523a5c8ca7b7c8d676bc684a934fbd06769dbb44a40215d35017fc79d1d0da = $this->env->getExtension("native_profiler");
        $__internal_7c523a5c8ca7b7c8d676bc684a934fbd06769dbb44a40215d35017fc79d1d0da->enter($__internal_7c523a5c8ca7b7c8d676bc684a934fbd06769dbb44a40215d35017fc79d1d0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7c523a5c8ca7b7c8d676bc684a934fbd06769dbb44a40215d35017fc79d1d0da->leave($__internal_7c523a5c8ca7b7c8d676bc684a934fbd06769dbb44a40215d35017fc79d1d0da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
