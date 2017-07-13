<?php

/* support/include/i18n/en_US/templates/email/ticket.notice.yaml */
class __TwigTemplate_f90daf78eacc50db25cf4671dbc5e3b6409b28c468b90d4bb7b682480dd2e6b0 extends Twig_Template
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
# Email template: ticket.notice.yaml
#
# Sent to a user when a staff member creates a ticket on the user's behalf.
# This is most commonly performed when user's call in on the phone.
#
---
notes: |
    Sent to a user when a staff member creates a ticket on the user's behalf.
    This is most commonly performed when user's call in on the phone.

subject: |
    %{ticket.subject} [#%{ticket.number}]
body: |
    <h3><strong>Dear %{recipient.name.first},</strong></h3>
    Our customer care team has created a ticket, <a
    href=\"%{recipient.ticket_link}\">#%{ticket.number}</a> on your behalf, with
    the following details and summary:
    <br>
    <br>
    Topic: <strong>%{ticket.topic.name}</strong>
    <br>
    Subject: <strong>%{ticket.subject}</strong>
    <br>
    <br>
    %{message}
    <br>
    <br>
    If need be, a representative will follow-up with you as soon as
    possible. You can also <a href=\"%{recipient.ticket_link}\">view this
    ticket's progress online</a>.
    <br>
    <br>
    <div style=\"color: rgb(127, 127, 127);\">
    Your %{company.name} Team,<br>
    %{signature}</div>
    <hr>
    <div style=\"color: rgb(127, 127, 127); font-size: small; \"><em>If you
    wish to provide additional comments or information regarding the issue,
    please reply to this email or <a href=\"%{recipient.ticket_link}\"><span
    style=\"color: rgb(84, 141, 212);\" >login to your account</span></a> for
    a complete archive of your support requests.</em></div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.notice.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/email/ticket.notice.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\email\\ticket.notice.yaml");
    }
}
