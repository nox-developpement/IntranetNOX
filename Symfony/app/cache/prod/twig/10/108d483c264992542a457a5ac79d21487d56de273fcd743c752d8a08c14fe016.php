<?php

/* support/include/i18n/en_US/templates/email/message.alert.yaml */
class __TwigTemplate_d066172de60008a090a65c595fc08125c4c0287ca718a32e2ef301307f09ed37 extends Twig_Template
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
# Email template: message.alert.yaml
#
# Sent to staff members when a new message is posted by a user to a ticket.
# This can occur if the users responds to an email from the system or visits
# the customer web portal and posts a new message there.
#
---
notes: |
    Sent to staff members when a new message is posted by a user to a
    ticket.  This can occur if the users responds to an email from the
    system or visits the customer web portal and posts a new message there.

subject: |
    New Message Alert
body: |
    <h3><strong>Hi %{recipient.name},</strong></h3>
    New message appended to ticket <a
    href=\"%{ticket.staff_link}\">#%{ticket.number}</a>
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
             <strong>Department</strong>:
        </td>
        <td>
             %{ticket.dept.name}
        </td>
    </tr>
    </tbody>
    </table>
    <br>
    %{message}
    <br>
    <br>
    <hr>
    <div>To view or respond to the ticket, please <a
    href=\"%{ticket.staff_link}\"><span style=\"color: rgb(84, 141, 212);\"
    >login</span></a> to the support ticket system</div>
    <em style=\"color: rgb(127,127,127); font-size: small; \">Your friendly
    Customer Support System</em><br>
    <img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\"
    alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width: 126px;\">
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/message.alert.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/email/message.alert.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\email\\message.alert.yaml");
    }
}
