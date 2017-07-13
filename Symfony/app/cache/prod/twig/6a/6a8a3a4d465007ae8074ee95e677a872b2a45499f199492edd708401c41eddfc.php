<?php

/* support/include/i18n/en_US/templates/email/ticket.overdue.yaml */
class __TwigTemplate_eb2ae6d0ee7df19c56c9d1c6bc7d86513324747d2c4bd848c78458ca0a320f2f extends Twig_Template
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
# Email template: ticket.overdue.yaml
#
# Sent to staff members when a ticket transitions to overdue in the system.
# Overdue tickets occur based on the ticket's due-date as well as the SLA
# defined for the ticket.
#
---
notes: |
    Sent to staff members when a ticket transitions to overdue in the system.
    Overdue tickets occur based on the ticket's due-date as well as the SLA
    defined for the ticket.

subject: |
    Stale Ticket Alert
body: |
    <h3><strong>Hi %{recipient.name}</strong>,</h3>
    A ticket, <a href=\"%{ticket.staff_link}\">#%{ticket.number}</a> is
    seriously overdue.
    <br>
    <br>
    We should all work hard to guarantee that all tickets are being
    addressed in a timely manner.
    <br>
    <br>
    Signed,<br>
    %{ticket.dept.manager.name}
    <hr>
    <div>To view or respond to the ticket, please <a
    href=\"%{ticket.staff_link}\"><span style=\"color: rgb(84, 141, 212);\"
    >login</span></a> to the support ticket system. You're receiving this
    notice because the ticket is assigned directly to you or to a team or
    department of which you're a member.</div>
    <em style=\"font-size: small\">Your friendly <span style=\"font-size: smaller\"
    >(although with limited patience)</span> Customer Support
    System</em><br>
    <img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" height=\"19\"
        alt=\"Powered by osTicket\" width=\"126\" style=\"width: 126px;\">
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.overdue.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/email/ticket.overdue.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\email\\ticket.overdue.yaml");
    }
}
