<?php

/* support/include/i18n/en_US/templates/page/banner-client.yaml */
class __TwigTemplate_5e57bba4833464f2aa06b8365ff518f9e25673ad01e76bdb72ad644dd9a8fa56 extends Twig_Template
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
        echo "#
# banner-client.yaml
#
# This forms the header on the staff login page. It can be useful to inform
# your clients about your login and registration policies.
---
notes: >
    This composes the header on the Client Log In page. It can be useful to
    inform your Clients about your log in and registration policies.
name: \"Sign in to %{company.name}\"
body: >
    To better serve you, we encourage our Clients to register for an account.";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/banner-client.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/page/banner-client.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\page\\banner-client.yaml");
    }
}
