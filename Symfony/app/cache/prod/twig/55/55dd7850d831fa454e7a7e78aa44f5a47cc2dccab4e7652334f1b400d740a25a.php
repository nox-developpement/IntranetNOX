<?php

/* support/include/i18n/en_US/templates/email/ticket.alert.yaml */
class __TwigTemplate_164ea4631933dd8fbabf960b5fda7a96cbe9a2c02a5053a37f10b97a27291890 extends Twig_Template
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
# Email template: ticket.alert.yaml
#
# Sent to a staff member when a new ticket is created in the system. This
# applies to tickets created via email, the web portal, or the api.
#
---
notes: |
    Sent to a staff member when a new ticket is created in the system. This
    applies to tickets created via email, the web portal, or the api.

subject: |
    New Ticket Alert
body: |
    <h2>Hi %{recipient.name},</h2>
    New ticket #%{ticket.number} created
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
    href=\"%{ticket.staff_link}\">login</a> to the support ticket system</div>
    <em style=\"font-size: small\">Your friendly Customer Support System</em>
    <br>
    <a href=\"http://osticket.com/\"><img width=\"126\" height=\"19\"
        style=\"width: 126px; \" alt=\"Powered By osTicket\"
        src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\"/></a>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.alert.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/email/ticket.alert.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\email\\ticket.alert.yaml");
    }
}
