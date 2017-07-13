<?php

/* support/include/i18n/en_US/templates/page/registration-client.yaml */
class __TwigTemplate_50d80f249c5426829b325ece0ec70acb47851466469688dd9215e5ff307039bb extends Twig_Template
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
# registration-staff.yaml
#
# Confirmation email sent to clients when accounts are created for them by
# staff or via the client portal. This email serves as an email address
# verification.
#
---
notes: >
    This template defines the email sent to Clients when their account has been
    created in the Client Portal or by an Agent on their behalf. This email serves as
    an email address verification. Please use %{link} somewhere in the body.
name: \"Welcome to %{company.name}\"
body: >
    <h3><strong>Hi %{recipient.name.first},</strong></h3>
    <div>
    We've created an account for you at our help desk at %{url}.<br />
    <br />
    Please follow the link below to confirm your account and gain access to
    your tickets.<br />
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
        return "support/include/i18n/en_US/templates/page/registration-client.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/page/registration-client.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\page\\registration-client.yaml");
    }
}
