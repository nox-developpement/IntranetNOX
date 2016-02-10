<?php

/* support/include/i18n/en_US/templates/email/ticket.alert.yaml */
class __TwigTemplate_60208c8d64df40b7ac7c2137a4c8ea7419cdb8c3d4ea7cd61360a04eae5b85a1 extends Twig_Template
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
}
/* #*/
/* # Email template: ticket.alert.yaml*/
/* #*/
/* # Sent to a staff member when a new ticket is created in the system. This*/
/* # applies to tickets created via email, the web portal, or the api.*/
/* #*/
/* ---*/
/* notes: |*/
/*     Sent to a staff member when a new ticket is created in the system. This*/
/*     applies to tickets created via email, the web portal, or the api.*/
/* */
/* subject: |*/
/*     New Ticket Alert*/
/* body: |*/
/*     <h2>Hi %{recipient.name},</h2>*/
/*     New ticket #%{ticket.number} created*/
/*     <br>*/
/*     <br>*/
/*     <table>*/
/*     <tbody>*/
/*     <tr>*/
/*         <td>*/
/*             <strong>From</strong>:*/
/*         </td>*/
/*         <td>*/
/*             %{ticket.name} &lt;%{ticket.email}&gt;*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             <strong>Department</strong>:*/
/*         </td>*/
/*         <td>*/
/*             %{ticket.dept.name}*/
/*         </td>*/
/*     </tr>*/
/*     </tbody>*/
/*     </table>*/
/*     <br>*/
/*     %{message}*/
/*     <br>*/
/*     <br>*/
/*     <hr>*/
/*     <div>To view or respond to the ticket, please <a*/
/*     href="%{ticket.staff_link}">login</a> to the support ticket system</div>*/
/*     <em style="font-size: small">Your friendly Customer Support System</em>*/
/*     <br>*/
/*     <a href="http://osticket.com/"><img width="126" height="19"*/
/*         style="width: 126px; " alt="Powered By osTicket"*/
/*         src="cid:b56944cb4722cc5cda9d1e23a3ea7fbc"/></a>*/
/* */
