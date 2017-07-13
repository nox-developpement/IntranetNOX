<?php

/* support/include/i18n/en_US/templates/page/pwreset-staff.yaml */
class __TwigTemplate_8196e965cf48398c1005f346c298a0da5455ff3a415f07c0ce92246272bed15e extends Twig_Template
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
# pwreset-staff.yaml
#
# Template of the email sent to staff members when using the Forgot My
# Password link
---
notes: >
    This template defines the email sent to Staff who select the <strong>Forgot My 
    Password</strong> link on the Staff Control Panel Log In page.
name: \"osTicket Staff Password Reset\"
body: >
    <h3><strong>Hi %{staff.name.first},</strong></h3>
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
    <em style=\"font-size: small\">Your friendly Customer Support System</em>
    <br />
    <img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by
    osTicket\" width=\"126\" height=\"19\" style=\"width: 126px\" />
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/pwreset-staff.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/page/pwreset-staff.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\page\\pwreset-staff.yaml");
    }
}
