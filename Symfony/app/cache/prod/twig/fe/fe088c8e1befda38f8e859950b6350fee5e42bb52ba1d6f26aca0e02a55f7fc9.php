<?php

/* support/include/i18n/en_US/templates/page/thank-you.yaml */
class __TwigTemplate_40af205dbe55d9ce1c92739804f9861ee378c10bb41a53f349c7c80d8bffc3fb extends Twig_Template
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
# Page template: thank-you.yaml
#
# The thank-you page is served to the customer portal when a user submites a
# new ticket via the customer portal.
#
---
notes: |
    This template defines the content displayed on the Thank-You page after a 
    Client submits a new ticket in the Client Portal.

name: Thank You
body: |
    <div>%{ticket.name},
    <br>
    <br>
    Thank you for contacting us.
    <br>
    <br>
    A support ticket request has been created and a representative will be
    getting back to you shortly if necessary.</p>
    <br>
    <br>
    Support Team
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/thank-you.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/page/thank-you.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\page\\thank-you.yaml");
    }
}
