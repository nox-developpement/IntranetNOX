<?php

/* support/include/i18n/en_US/templates/page/registration-thanks.yaml */
class __TwigTemplate_c1275167ab2d24eea34c4e7b5446e0d34993f0e616ff42444a159b3a58659622 extends Twig_Template
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
# registration-thanks.yaml
#
# Page shown to the user after successfully registring and confirming their
# account. This page should inform the user that the process is complete and
# that the user can now submit a ticket or access existing tickets
#
---
notes: >
    This template defines the content displayed after Clients successfully
    register by confirming their account. This page should inform the user 
    that registration is complete and that the Client can now submit a ticket 
    or access existing tickets.
name: \"Account Confirmed!\"
body: >
    <div>
    <strong>Thanks for registering for an account.</strong><br />
    <br />
    You've confirmed your email address and successfully activated your
    account. You may proceed to open a new ticket or manage existing tickets.<br />
    <br />
    <em>Your friendly support center</em><br />
    %{company.name}
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/registration-thanks.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/page/registration-thanks.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\page\\registration-thanks.yaml");
    }
}
