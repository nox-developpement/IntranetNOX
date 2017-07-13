<?php

/* @NoxIntranetVerifMajDB/Default/index.html.twig */
class __TwigTemplate_02b76c3588b5d1fd25d599906a71fa1455cad0072e84d5236a8d9f0965d6357a extends Twig_Template
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
        return "@NoxIntranetVerifMajDB/Default/index.html.twig";
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
        return new Twig_Source("", "@NoxIntranetVerifMajDB/Default/index.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\VerifMajDBBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
