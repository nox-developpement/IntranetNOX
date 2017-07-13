<?php

/* support/include/i18n/en_US/templates/page/landing.yaml */
class __TwigTemplate_baaccd8ed4700ef21cbba8b06e8f6fa4236035844a8603bc58b3ae0ca4232fd5 extends Twig_Template
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
# Page template: landing.yaml
#
# The landing page is served on the front page of the customer portal above
# the two links for creating new tickets and viewing ticket status.
#
---
notes: >
    The Landing Page refers to the content of the Customer Portal's
    initial view. The template modifies the content seen above the two links
    <strong>Open a New Ticket</strong> and <strong>Check Ticket Status</strong>.

name: Landing
body: >
    <h1>Welcome to the Support Center</h1>
    <p>
    In order to streamline support requests and better serve you, we utilize
    a support ticket system. Every support request is assigned a unique
    ticket number which you can use to track the progress and responses
    online. For your reference we provide complete archives and history of
    all your support requests. A valid email address is required to submit a
    ticket.
    </p>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/landing.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/page/landing.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\page\\landing.yaml");
    }
}
