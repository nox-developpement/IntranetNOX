<?php

/* support/include/i18n/en_US/templates/page/registration-confirm.yaml */
class __TwigTemplate_3c2934dcd0172df973e6d3b6c4978fac29f60be3800e483ec585e4f12dd222c5 extends Twig_Template
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
# registration-confirm.yaml
#
# Template of the page shown to the user after registering for an account.
# The system will send the user an email with a link they should follow to
# confirm the account. This page should inform them of the next step in
# the process.
#
---
notes: >
    This templates defines the page shown to Clients after completing the registration
    form. The template should mention that the system is sending 
    them an email confirmation link and what is the next step in the registration
    process.
name: \"Account registration\"
body: >
    <div><strong>Thanks for registering for an account.</strong><br/>
    <br />
    We've just sent you an email to the address you entered. Please follow
    the link in the email to confirm your account and gain access to your
    tickets.
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/registration-confirm.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/page/registration-confirm.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\page\\registration-confirm.yaml");
    }
}
