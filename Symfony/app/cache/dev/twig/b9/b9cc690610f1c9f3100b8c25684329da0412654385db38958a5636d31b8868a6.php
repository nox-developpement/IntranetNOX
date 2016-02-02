<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3facc6e7c147de9d50d22086c778623009b00ec2f0474cea3b37df94ec8eb244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_995f77aabdbc235b0fdd693494a026f87c637891ffd8b34990a09486e2bfc761 = $this->env->getExtension("native_profiler");
        $__internal_995f77aabdbc235b0fdd693494a026f87c637891ffd8b34990a09486e2bfc761->enter($__internal_995f77aabdbc235b0fdd693494a026f87c637891ffd8b34990a09486e2bfc761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995f77aabdbc235b0fdd693494a026f87c637891ffd8b34990a09486e2bfc761->leave($__internal_995f77aabdbc235b0fdd693494a026f87c637891ffd8b34990a09486e2bfc761_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_21e57987e076a875964463325f4f7905d29d2a98f8cfd5ab9d757dd62204e8fc = $this->env->getExtension("native_profiler");
        $__internal_21e57987e076a875964463325f4f7905d29d2a98f8cfd5ab9d757dd62204e8fc->enter($__internal_21e57987e076a875964463325f4f7905d29d2a98f8cfd5ab9d757dd62204e8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_21e57987e076a875964463325f4f7905d29d2a98f8cfd5ab9d757dd62204e8fc->leave($__internal_21e57987e076a875964463325f4f7905d29d2a98f8cfd5ab9d757dd62204e8fc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_da00ce788fa93579e0f1eef273cff2db01a7b71adc18895cf3254c43030cec6d = $this->env->getExtension("native_profiler");
        $__internal_da00ce788fa93579e0f1eef273cff2db01a7b71adc18895cf3254c43030cec6d->enter($__internal_da00ce788fa93579e0f1eef273cff2db01a7b71adc18895cf3254c43030cec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_da00ce788fa93579e0f1eef273cff2db01a7b71adc18895cf3254c43030cec6d->leave($__internal_da00ce788fa93579e0f1eef273cff2db01a7b71adc18895cf3254c43030cec6d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
