<?php

/* NoxIntranetListingKeywordsReferencesBundle:Default:index.html.twig */
class __TwigTemplate_5182ee15c9d2f36285190ba37342f2426d113bce31e0cbe84a8f60be5b830013 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e507c419d593ed6693ffb27d4042a1e3a78ece4e8d9bdb207d1d937be995bcc = $this->env->getExtension("native_profiler");
        $__internal_1e507c419d593ed6693ffb27d4042a1e3a78ece4e8d9bdb207d1d937be995bcc->enter($__internal_1e507c419d593ed6693ffb27d4042a1e3a78ece4e8d9bdb207d1d937be995bcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetListingKeywordsReferencesBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_1e507c419d593ed6693ffb27d4042a1e3a78ece4e8d9bdb207d1d937be995bcc->leave($__internal_1e507c419d593ed6693ffb27d4042a1e3a78ece4e8d9bdb207d1d937be995bcc_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetListingKeywordsReferencesBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
