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
        $__internal_40f89dc85805efc9d39bf18d26ded7ab57a661bb7787ef6a667b371b87a80b3a = $this->env->getExtension("native_profiler");
        $__internal_40f89dc85805efc9d39bf18d26ded7ab57a661bb7787ef6a667b371b87a80b3a->enter($__internal_40f89dc85805efc9d39bf18d26ded7ab57a661bb7787ef6a667b371b87a80b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40f89dc85805efc9d39bf18d26ded7ab57a661bb7787ef6a667b371b87a80b3a->leave($__internal_40f89dc85805efc9d39bf18d26ded7ab57a661bb7787ef6a667b371b87a80b3a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_62b864458078762ca55af6a8323d79b509476e679393bc01f6be915bf3583cac = $this->env->getExtension("native_profiler");
        $__internal_62b864458078762ca55af6a8323d79b509476e679393bc01f6be915bf3583cac->enter($__internal_62b864458078762ca55af6a8323d79b509476e679393bc01f6be915bf3583cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_62b864458078762ca55af6a8323d79b509476e679393bc01f6be915bf3583cac->leave($__internal_62b864458078762ca55af6a8323d79b509476e679393bc01f6be915bf3583cac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_091e8badcc11440fc981c6cdd87eafbd2fb61b92adf9cfba3b20422b90a056b0 = $this->env->getExtension("native_profiler");
        $__internal_091e8badcc11440fc981c6cdd87eafbd2fb61b92adf9cfba3b20422b90a056b0->enter($__internal_091e8badcc11440fc981c6cdd87eafbd2fb61b92adf9cfba3b20422b90a056b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_091e8badcc11440fc981c6cdd87eafbd2fb61b92adf9cfba3b20422b90a056b0->leave($__internal_091e8badcc11440fc981c6cdd87eafbd2fb61b92adf9cfba3b20422b90a056b0_prof);

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
