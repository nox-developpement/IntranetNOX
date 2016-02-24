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
        $__internal_79d9ff7ef11890e8af54440ade5c07c3a4d0fc95a111ec2860bf123bf63455f4 = $this->env->getExtension("native_profiler");
        $__internal_79d9ff7ef11890e8af54440ade5c07c3a4d0fc95a111ec2860bf123bf63455f4->enter($__internal_79d9ff7ef11890e8af54440ade5c07c3a4d0fc95a111ec2860bf123bf63455f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79d9ff7ef11890e8af54440ade5c07c3a4d0fc95a111ec2860bf123bf63455f4->leave($__internal_79d9ff7ef11890e8af54440ade5c07c3a4d0fc95a111ec2860bf123bf63455f4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cb16a004b404117ab837c699893c952901ca2e550c47fc93df926c42f84b5eb4 = $this->env->getExtension("native_profiler");
        $__internal_cb16a004b404117ab837c699893c952901ca2e550c47fc93df926c42f84b5eb4->enter($__internal_cb16a004b404117ab837c699893c952901ca2e550c47fc93df926c42f84b5eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cb16a004b404117ab837c699893c952901ca2e550c47fc93df926c42f84b5eb4->leave($__internal_cb16a004b404117ab837c699893c952901ca2e550c47fc93df926c42f84b5eb4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_33c2a5a40c273c5612b970e252c18daf83d8ec363a5b090ab49b061be689588f = $this->env->getExtension("native_profiler");
        $__internal_33c2a5a40c273c5612b970e252c18daf83d8ec363a5b090ab49b061be689588f->enter($__internal_33c2a5a40c273c5612b970e252c18daf83d8ec363a5b090ab49b061be689588f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_33c2a5a40c273c5612b970e252c18daf83d8ec363a5b090ab49b061be689588f->leave($__internal_33c2a5a40c273c5612b970e252c18daf83d8ec363a5b090ab49b061be689588f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b5da22b0f4b9edd38a136c0475c64be4e2331c44c18b95fa7f31783cf255a26 = $this->env->getExtension("native_profiler");
        $__internal_9b5da22b0f4b9edd38a136c0475c64be4e2331c44c18b95fa7f31783cf255a26->enter($__internal_9b5da22b0f4b9edd38a136c0475c64be4e2331c44c18b95fa7f31783cf255a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9b5da22b0f4b9edd38a136c0475c64be4e2331c44c18b95fa7f31783cf255a26->leave($__internal_9b5da22b0f4b9edd38a136c0475c64be4e2331c44c18b95fa7f31783cf255a26_prof);

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
