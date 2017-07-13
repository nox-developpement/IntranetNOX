<?php

/* support/include/i18n/en_US/templates/page/pwreset-client.yaml */
class __TwigTemplate_82904d30364af944b9b445e84c1322e24f4ddaae3ef483c0d9f136f8401c301b extends Twig_Template
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
# pwreset-client.yaml
#
# Template of the email sent to clients when using the Forgot My Password
# link on the login page
---
notes: >
    This template defines the email sent to Clients who select the <strong>Forgot My
    Password</strong> link on the Client Log In page.
name: \"%{company.name} Help Desk Access\"
body: >
    <h3><strong>Hi %{user.name.first},</strong></h3>
    <div>
    A password reset request has been submitted on your behalf for the
    helpdesk at %{url}.<br />
    <br />
    If you feel that this has been done in error, delete and disregard this
    email. Your account is still secure and no one has been given access to
    it. It is not locked and your password has not been reset. Someone could
    have mistakenly entered your email address.<br />
    <br />
    Follow the link below to login to the help desk and change your
    password.<br />
    <br />
    <a href=\"%{link}\">%{link}</a><br />
    <br />
    <em style=\"font-size: small\">Your friendly Customer Support System
    <br />
    %{company.name}</em>
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/pwreset-client.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/page/pwreset-client.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\page\\pwreset-client.yaml");
    }
}
