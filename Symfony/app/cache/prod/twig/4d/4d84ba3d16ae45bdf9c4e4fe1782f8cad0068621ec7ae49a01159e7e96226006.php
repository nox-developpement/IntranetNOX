<?php

/* support/include/i18n/en_US/templates/email/ticket.autoreply.yaml */
class __TwigTemplate_4fca06cdebf1dc9e4e8081bab7430f58ad1ad4da694428b2e542263d8eb31bae extends Twig_Template
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
# Email template: ticket.autoreply.yaml
#
# Sent to a user when an automatic canned response is posted to a ticket
# when it is created
#
---
notes: |
    Sent to a user when an automatic canned response is posted to a ticket
    when it is created.

    Available variables for replacement: %{ticket.*}, %{response}

subject: |
    Re: %{ticket.subject} [#%{ticket.number}]
body: |
    <h3><strong>Dear %{recipient.name.first},</strong></h3>
    A request for support has been created and assigned ticket <a
    href=\"%{recipient.ticket_link}\">#%{ticket.number}</a> with the following
    automatic reply
    <br>
    <br>
    Topic: <strong>%{ticket.topic.name}</strong>
    <br>
    Subject: <strong>%{ticket.subject}</strong>
    <br>
    <br>
    %{response}
    <br>
    <br>
    <div style=\"color: rgb(127, 127, 127);\">Your %{company.name} Team,<br>
    %{signature}</div>
    <hr>
    <div style=\"color: rgb(127, 127, 127); font-size: small;\"><em>We hope
    this response has sufficiently answered your questions.  If you wish to
    provide additional comments or informatione, please reply to this email
    or <a href=\"%{recipient.ticket_link}\"><span
    style=\"color: rgb(84, 141, 212);\" >login to your account</span></a> for
    a complete archive of your support requests.</em></div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.autoreply.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/email/ticket.autoreply.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\email\\ticket.autoreply.yaml");
    }
}
