<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b5507c701be335ed81a35fbf954c41e68d7bcd5dc0ae48c1bea257520b8f654b extends Twig_Template
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
        $__internal_61d93e3f67f05391b6913ef760cd11db055c0abce64af238a7990485dc6baebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d93e3f67f05391b6913ef760cd11db055c0abce64af238a7990485dc6baebe->enter($__internal_61d93e3f67f05391b6913ef760cd11db055c0abce64af238a7990485dc6baebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61d93e3f67f05391b6913ef760cd11db055c0abce64af238a7990485dc6baebe->leave($__internal_61d93e3f67f05391b6913ef760cd11db055c0abce64af238a7990485dc6baebe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62b33142b924ae898f92d6c9bb86f17a91595d7dc428560b4f39a013da620ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62b33142b924ae898f92d6c9bb86f17a91595d7dc428560b4f39a013da620ce5->enter($__internal_62b33142b924ae898f92d6c9bb86f17a91595d7dc428560b4f39a013da620ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_62b33142b924ae898f92d6c9bb86f17a91595d7dc428560b4f39a013da620ce5->leave($__internal_62b33142b924ae898f92d6c9bb86f17a91595d7dc428560b4f39a013da620ce5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a201b816951b98910d767dc3844e18445fb3d198742e400de9c58b7de82aa87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a201b816951b98910d767dc3844e18445fb3d198742e400de9c58b7de82aa87->enter($__internal_1a201b816951b98910d767dc3844e18445fb3d198742e400de9c58b7de82aa87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1a201b816951b98910d767dc3844e18445fb3d198742e400de9c58b7de82aa87->leave($__internal_1a201b816951b98910d767dc3844e18445fb3d198742e400de9c58b7de82aa87_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebde295ca0d0396e28f883abd00bfee420a5190b932d401a5340a31ad7aab498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebde295ca0d0396e28f883abd00bfee420a5190b932d401a5340a31ad7aab498->enter($__internal_ebde295ca0d0396e28f883abd00bfee420a5190b932d401a5340a31ad7aab498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ebde295ca0d0396e28f883abd00bfee420a5190b932d401a5340a31ad7aab498->leave($__internal_ebde295ca0d0396e28f883abd00bfee420a5190b932d401a5340a31ad7aab498_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
