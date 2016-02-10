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
        $__internal_4f9bbcb003025a0642507b181a4edd64b675746c92dab0e6c049c68621dca876 = $this->env->getExtension("native_profiler");
        $__internal_4f9bbcb003025a0642507b181a4edd64b675746c92dab0e6c049c68621dca876->enter($__internal_4f9bbcb003025a0642507b181a4edd64b675746c92dab0e6c049c68621dca876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f9bbcb003025a0642507b181a4edd64b675746c92dab0e6c049c68621dca876->leave($__internal_4f9bbcb003025a0642507b181a4edd64b675746c92dab0e6c049c68621dca876_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f777971117ab2e014c3977e3ff4108b9038e7f269c367326a82d4de0d3c13d01 = $this->env->getExtension("native_profiler");
        $__internal_f777971117ab2e014c3977e3ff4108b9038e7f269c367326a82d4de0d3c13d01->enter($__internal_f777971117ab2e014c3977e3ff4108b9038e7f269c367326a82d4de0d3c13d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f777971117ab2e014c3977e3ff4108b9038e7f269c367326a82d4de0d3c13d01->leave($__internal_f777971117ab2e014c3977e3ff4108b9038e7f269c367326a82d4de0d3c13d01_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b279fc160d3aca3a4addc73ddb36170074025b1bea78d55916993e3d94b243b2 = $this->env->getExtension("native_profiler");
        $__internal_b279fc160d3aca3a4addc73ddb36170074025b1bea78d55916993e3d94b243b2->enter($__internal_b279fc160d3aca3a4addc73ddb36170074025b1bea78d55916993e3d94b243b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b279fc160d3aca3a4addc73ddb36170074025b1bea78d55916993e3d94b243b2->leave($__internal_b279fc160d3aca3a4addc73ddb36170074025b1bea78d55916993e3d94b243b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b986447960c459510501ee8d0eeb9b61f78b4b14318bab457cb021daabbb1cd7 = $this->env->getExtension("native_profiler");
        $__internal_b986447960c459510501ee8d0eeb9b61f78b4b14318bab457cb021daabbb1cd7->enter($__internal_b986447960c459510501ee8d0eeb9b61f78b4b14318bab457cb021daabbb1cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b986447960c459510501ee8d0eeb9b61f78b4b14318bab457cb021daabbb1cd7->leave($__internal_b986447960c459510501ee8d0eeb9b61f78b4b14318bab457cb021daabbb1cd7_prof);

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
