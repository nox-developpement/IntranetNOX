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
        $__internal_ac57da235f64f75ded6febebc8e373250fc16895dc264a08482bbba840421b24 = $this->env->getExtension("native_profiler");
        $__internal_ac57da235f64f75ded6febebc8e373250fc16895dc264a08482bbba840421b24->enter($__internal_ac57da235f64f75ded6febebc8e373250fc16895dc264a08482bbba840421b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac57da235f64f75ded6febebc8e373250fc16895dc264a08482bbba840421b24->leave($__internal_ac57da235f64f75ded6febebc8e373250fc16895dc264a08482bbba840421b24_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_536b59d6a90eff33f03c82328ffca4d63048ca4649dfba615c0190c86bf2977d = $this->env->getExtension("native_profiler");
        $__internal_536b59d6a90eff33f03c82328ffca4d63048ca4649dfba615c0190c86bf2977d->enter($__internal_536b59d6a90eff33f03c82328ffca4d63048ca4649dfba615c0190c86bf2977d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_536b59d6a90eff33f03c82328ffca4d63048ca4649dfba615c0190c86bf2977d->leave($__internal_536b59d6a90eff33f03c82328ffca4d63048ca4649dfba615c0190c86bf2977d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_55479af9a81b3b1fefa42fe2a09a9cc8458fcf912298874505482304cff68751 = $this->env->getExtension("native_profiler");
        $__internal_55479af9a81b3b1fefa42fe2a09a9cc8458fcf912298874505482304cff68751->enter($__internal_55479af9a81b3b1fefa42fe2a09a9cc8458fcf912298874505482304cff68751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_55479af9a81b3b1fefa42fe2a09a9cc8458fcf912298874505482304cff68751->leave($__internal_55479af9a81b3b1fefa42fe2a09a9cc8458fcf912298874505482304cff68751_prof);

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
