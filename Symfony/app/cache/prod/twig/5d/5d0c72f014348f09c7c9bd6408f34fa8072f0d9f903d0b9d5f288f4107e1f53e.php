<?php

/* support/include/i18n/en_US/templates/email/note.alert.yaml */
class __TwigTemplate_4a54d3a73aa9113f65a7db0db59b6cd3ec2c7b970f9d92ef9a7676fb7b70b9ca extends Twig_Template
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
# Email template: note.alert.yaml
#
# Sent to staff members when a new internal note is appended to a ticket.
# Internal notes can only be added by staff members.
#
---
notes: |
    Alert sent out to Agents when internal activity such as an internal
    note or an agent reply is appended to a ticket.

subject: |
    New Internal Activity Alert
body: |
    <h3><strong>Hi %{recipient.name},</strong></h3>
    An agent has logged activity on ticket <a
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
            %{note.poster}
        </td>
    </tr>
    <tr>
        <td>
            <strong>Title</strong>:
        </td>
        <td>
            %{note.title}
        </td>
    </tr>
    </tbody>
    </table>
    <br>
    %{note.message}
    <br>
    <br>
    <hr>
    To view/respond to the ticket, please <a
    href=\"%{ticket.staff_link}\">login</a> to the support ticket system
    <br>
    <br>
    <em style=\"font-size: small; \">Your friendly Customer Support
    System</em>
    <br>
    <img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\"
    alt=\"Powered by osTicket\" width=\"126\" height=\"19\" style=\"width: 126px;\">
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/note.alert.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/email/note.alert.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\email\\note.alert.yaml");
    }
}
