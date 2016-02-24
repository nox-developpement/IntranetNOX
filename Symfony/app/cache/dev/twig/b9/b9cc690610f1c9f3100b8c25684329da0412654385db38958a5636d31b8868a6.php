<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3facc6e7c147de9d50d22086c778623009b00ec2f0474cea3b37df94ec8eb244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_58fda6815b8b7627dfce67cf34f6f1bb6c98ea05bc9b4b70246b66190691106b = $this->env->getExtension("native_profiler");
        $__internal_58fda6815b8b7627dfce67cf34f6f1bb6c98ea05bc9b4b70246b66190691106b->enter($__internal_58fda6815b8b7627dfce67cf34f6f1bb6c98ea05bc9b4b70246b66190691106b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58fda6815b8b7627dfce67cf34f6f1bb6c98ea05bc9b4b70246b66190691106b->leave($__internal_58fda6815b8b7627dfce67cf34f6f1bb6c98ea05bc9b4b70246b66190691106b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_815f0c1f5b7fd4578cf03bdf3b71023b5444281626b85f635db70bbc23206240 = $this->env->getExtension("native_profiler");
        $__internal_815f0c1f5b7fd4578cf03bdf3b71023b5444281626b85f635db70bbc23206240->enter($__internal_815f0c1f5b7fd4578cf03bdf3b71023b5444281626b85f635db70bbc23206240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_815f0c1f5b7fd4578cf03bdf3b71023b5444281626b85f635db70bbc23206240->leave($__internal_815f0c1f5b7fd4578cf03bdf3b71023b5444281626b85f635db70bbc23206240_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e695ebafcd7a3ce67536757d06349dbd84f1cd09fa7c915634f9f506588dd18e = $this->env->getExtension("native_profiler");
        $__internal_e695ebafcd7a3ce67536757d06349dbd84f1cd09fa7c915634f9f506588dd18e->enter($__internal_e695ebafcd7a3ce67536757d06349dbd84f1cd09fa7c915634f9f506588dd18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e695ebafcd7a3ce67536757d06349dbd84f1cd09fa7c915634f9f506588dd18e->leave($__internal_e695ebafcd7a3ce67536757d06349dbd84f1cd09fa7c915634f9f506588dd18e_prof);

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
/* {% extends '@Twig/layout.html.twig' %}*/
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
