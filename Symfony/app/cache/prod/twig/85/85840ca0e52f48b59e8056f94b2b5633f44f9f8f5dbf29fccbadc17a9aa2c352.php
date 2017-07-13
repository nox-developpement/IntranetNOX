<?php

/* NoxIntranetListingKeywordsReferencesBundle:Default:index.html.twig */
class __TwigTemplate_9a38dc889bafff3dd15a2e8026176f591673d7f9aa2e8348c8db7543d01a78f1 extends Twig_Template
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
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "!
";
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
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetListingKeywordsReferencesBundle:Default:index.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\ListingKeywordsReferencesBundle/Resources/views/Default/index.html.twig");
    }
}
