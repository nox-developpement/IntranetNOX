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
        $__internal_d77a984bb28293982dc1b596ef31829d91b37c7dabdb84d952b373d38daf008c = $this->env->getExtension("native_profiler");
        $__internal_d77a984bb28293982dc1b596ef31829d91b37c7dabdb84d952b373d38daf008c->enter($__internal_d77a984bb28293982dc1b596ef31829d91b37c7dabdb84d952b373d38daf008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d77a984bb28293982dc1b596ef31829d91b37c7dabdb84d952b373d38daf008c->leave($__internal_d77a984bb28293982dc1b596ef31829d91b37c7dabdb84d952b373d38daf008c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2054ffc9b2b36ebbb9fadc8643a48ccb66f904b5905b0f22015e26be2f100f95 = $this->env->getExtension("native_profiler");
        $__internal_2054ffc9b2b36ebbb9fadc8643a48ccb66f904b5905b0f22015e26be2f100f95->enter($__internal_2054ffc9b2b36ebbb9fadc8643a48ccb66f904b5905b0f22015e26be2f100f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2054ffc9b2b36ebbb9fadc8643a48ccb66f904b5905b0f22015e26be2f100f95->leave($__internal_2054ffc9b2b36ebbb9fadc8643a48ccb66f904b5905b0f22015e26be2f100f95_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a78c5852ddfa100de634f05eb592b5828a1f2b414534bf6fed7db917042fbff3 = $this->env->getExtension("native_profiler");
        $__internal_a78c5852ddfa100de634f05eb592b5828a1f2b414534bf6fed7db917042fbff3->enter($__internal_a78c5852ddfa100de634f05eb592b5828a1f2b414534bf6fed7db917042fbff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a78c5852ddfa100de634f05eb592b5828a1f2b414534bf6fed7db917042fbff3->leave($__internal_a78c5852ddfa100de634f05eb592b5828a1f2b414534bf6fed7db917042fbff3_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3cfe7d50ccff301621bd2a7e6caab401b2d245e20a6ff7d1f19c23c6e2edd65 = $this->env->getExtension("native_profiler");
        $__internal_f3cfe7d50ccff301621bd2a7e6caab401b2d245e20a6ff7d1f19c23c6e2edd65->enter($__internal_f3cfe7d50ccff301621bd2a7e6caab401b2d245e20a6ff7d1f19c23c6e2edd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f3cfe7d50ccff301621bd2a7e6caab401b2d245e20a6ff7d1f19c23c6e2edd65->leave($__internal_f3cfe7d50ccff301621bd2a7e6caab401b2d245e20a6ff7d1f19c23c6e2edd65_prof);

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
