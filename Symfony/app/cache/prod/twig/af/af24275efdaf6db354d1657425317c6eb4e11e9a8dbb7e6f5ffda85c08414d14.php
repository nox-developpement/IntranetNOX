<?php

/* support/include/i18n/en_US/templates/email/assigned.alert.yaml */
class __TwigTemplate_9f53330864fa2f2c0375c51774d37055372c77ea4d82cbcf455205c197b5bb25 extends Twig_Template
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
# Email template: assigned.alert.yaml
#
# Sent to staff members when a ticket is assigned to them. Tickets can be
# assigned automatically by the system or manually by another staff member.
# Use %{assigner} to distinguish who made the assignment.
#
---
notes: |
    Sent to staff members when a ticket is assigned to them. Tickets can be
    assigned automatically by the system or manually by another staff
    member.  Use %{assigner} to distinguish who made the assignment.

subject: |
    Ticket Assigned to you
body: |
    <h3><strong>Hi %{assignee.name.first},</strong></h3>
    Ticket <a href=\"%{ticket.staff_link}\">#%{ticket.number}</a> has been
    assigned to you by %{assigner.name.short}
    <br>
    <br>
    <table>
    <tbody>
    <tr>
        <td>
             <strong>From</strong>:
        </td>
        <td>
             %{ticket.name} &lt;%{ticket.email}&gt;
        </td>
    </tr>
    <tr>
        <td>
             <strong>Subject</strong>:
        </td>
        <td>
             %{ticket.subject}
        </td>
    </tr>
    </tbody>
    </table>
    <br>
    %{comments}
    <br>
    <br>
    <hr>
    <div>To view/respond to the ticket, please <a
    href=\"%{ticket.staff_link}\"><span style=\"color: rgb(84, 141, 212);\"
    >login</span></a> to the support ticket system</div>
    <em style=\"font-size: small; \">Your friendly Customer Support
    System</em>
    <br>
    <img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\"
    alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width: 126px;\">
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/assigned.alert.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/email/assigned.alert.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\email\\assigned.alert.yaml");
    }
}
