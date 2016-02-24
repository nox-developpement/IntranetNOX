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
        $__internal_58eed24ceb3c172ff9abdc8907bccad8c9fd4a1000037c7a7e10258b7b913d91 = $this->env->getExtension("native_profiler");
        $__internal_58eed24ceb3c172ff9abdc8907bccad8c9fd4a1000037c7a7e10258b7b913d91->enter($__internal_58eed24ceb3c172ff9abdc8907bccad8c9fd4a1000037c7a7e10258b7b913d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58eed24ceb3c172ff9abdc8907bccad8c9fd4a1000037c7a7e10258b7b913d91->leave($__internal_58eed24ceb3c172ff9abdc8907bccad8c9fd4a1000037c7a7e10258b7b913d91_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d7eee0ad826645cc7ca3dd18abad2e3f48ed0c837c52e91a38efc4c980d2b22 = $this->env->getExtension("native_profiler");
        $__internal_4d7eee0ad826645cc7ca3dd18abad2e3f48ed0c837c52e91a38efc4c980d2b22->enter($__internal_4d7eee0ad826645cc7ca3dd18abad2e3f48ed0c837c52e91a38efc4c980d2b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4d7eee0ad826645cc7ca3dd18abad2e3f48ed0c837c52e91a38efc4c980d2b22->leave($__internal_4d7eee0ad826645cc7ca3dd18abad2e3f48ed0c837c52e91a38efc4c980d2b22_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_13348bfdb5f874919be8040a72a5d187ce393a9728636f6200a9351e036b88ab = $this->env->getExtension("native_profiler");
        $__internal_13348bfdb5f874919be8040a72a5d187ce393a9728636f6200a9351e036b88ab->enter($__internal_13348bfdb5f874919be8040a72a5d187ce393a9728636f6200a9351e036b88ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_13348bfdb5f874919be8040a72a5d187ce393a9728636f6200a9351e036b88ab->leave($__internal_13348bfdb5f874919be8040a72a5d187ce393a9728636f6200a9351e036b88ab_prof);

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
