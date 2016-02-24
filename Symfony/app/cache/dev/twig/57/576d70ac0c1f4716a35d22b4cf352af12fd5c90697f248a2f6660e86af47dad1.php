<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5ebaa8cd706cee64f36c374710dfccaa9755c85672c12f69c5d7920faaa2117b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_5abf035537964d9ad29f80d081e14125c4fac7f7f9f3c27fe017dcdba39d3eaf = $this->env->getExtension("native_profiler");
        $__internal_5abf035537964d9ad29f80d081e14125c4fac7f7f9f3c27fe017dcdba39d3eaf->enter($__internal_5abf035537964d9ad29f80d081e14125c4fac7f7f9f3c27fe017dcdba39d3eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5abf035537964d9ad29f80d081e14125c4fac7f7f9f3c27fe017dcdba39d3eaf->leave($__internal_5abf035537964d9ad29f80d081e14125c4fac7f7f9f3c27fe017dcdba39d3eaf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9220a5d0c2558e75f38df2e0fe817bb2547e2022ccceffb608c16f794b39ab7 = $this->env->getExtension("native_profiler");
        $__internal_b9220a5d0c2558e75f38df2e0fe817bb2547e2022ccceffb608c16f794b39ab7->enter($__internal_b9220a5d0c2558e75f38df2e0fe817bb2547e2022ccceffb608c16f794b39ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b9220a5d0c2558e75f38df2e0fe817bb2547e2022ccceffb608c16f794b39ab7->leave($__internal_b9220a5d0c2558e75f38df2e0fe817bb2547e2022ccceffb608c16f794b39ab7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e7fc0180c59699f5eb8de107c438fdb2ae0cf50d524db1b58fd1f69b57f1be3 = $this->env->getExtension("native_profiler");
        $__internal_4e7fc0180c59699f5eb8de107c438fdb2ae0cf50d524db1b58fd1f69b57f1be3->enter($__internal_4e7fc0180c59699f5eb8de107c438fdb2ae0cf50d524db1b58fd1f69b57f1be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e7fc0180c59699f5eb8de107c438fdb2ae0cf50d524db1b58fd1f69b57f1be3->leave($__internal_4e7fc0180c59699f5eb8de107c438fdb2ae0cf50d524db1b58fd1f69b57f1be3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
