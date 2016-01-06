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
        $__internal_572b8f1feffa70373b5e07f9c666e76d0f450d89c25216d0f853f51ebae372f2 = $this->env->getExtension("native_profiler");
        $__internal_572b8f1feffa70373b5e07f9c666e76d0f450d89c25216d0f853f51ebae372f2->enter($__internal_572b8f1feffa70373b5e07f9c666e76d0f450d89c25216d0f853f51ebae372f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_572b8f1feffa70373b5e07f9c666e76d0f450d89c25216d0f853f51ebae372f2->leave($__internal_572b8f1feffa70373b5e07f9c666e76d0f450d89c25216d0f853f51ebae372f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea040e1643b2f6b4358e00db0b810b512e463fd6ed8049bd20cf624849808a16 = $this->env->getExtension("native_profiler");
        $__internal_ea040e1643b2f6b4358e00db0b810b512e463fd6ed8049bd20cf624849808a16->enter($__internal_ea040e1643b2f6b4358e00db0b810b512e463fd6ed8049bd20cf624849808a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ea040e1643b2f6b4358e00db0b810b512e463fd6ed8049bd20cf624849808a16->leave($__internal_ea040e1643b2f6b4358e00db0b810b512e463fd6ed8049bd20cf624849808a16_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_09695746496c11a1b5cd0f9d3291ade602ec7730c6dc666ef7cd11d4a1aef715 = $this->env->getExtension("native_profiler");
        $__internal_09695746496c11a1b5cd0f9d3291ade602ec7730c6dc666ef7cd11d4a1aef715->enter($__internal_09695746496c11a1b5cd0f9d3291ade602ec7730c6dc666ef7cd11d4a1aef715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_09695746496c11a1b5cd0f9d3291ade602ec7730c6dc666ef7cd11d4a1aef715->leave($__internal_09695746496c11a1b5cd0f9d3291ade602ec7730c6dc666ef7cd11d4a1aef715_prof);

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
