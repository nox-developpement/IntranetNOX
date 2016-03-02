<?php

/* support/include/i18n/en_US/templates/email/note.alert.yaml */
class __TwigTemplate_d9695ec83e5ebecce9bf80f69bbe43ab867de34abc9fcd87ecaa5ee7a47130b0 extends Twig_Template
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
}
/* #*/
/* # Email template: note.alert.yaml*/
/* #*/
/* # Sent to staff members when a new internal note is appended to a ticket.*/
/* # Internal notes can only be added by staff members.*/
/* #*/
/* ---*/
/* notes: |*/
/*     Alert sent out to Agents when internal activity such as an internal*/
/*     note or an agent reply is appended to a ticket.*/
/* */
/* subject: |*/
/*     New Internal Activity Alert*/
/* body: |*/
/*     <h3><strong>Hi %{recipient.name},</strong></h3>*/
/*     An agent has logged activity on ticket <a*/
/*     href="%{ticket.staff_link}">#%{ticket.number}</a>*/
/*     <br>*/
/*     <br>*/
/*     <table>*/
/*     <tbody>*/
/*     <tr>*/
/*         <td>*/
/*             <strong>From</strong>:*/
/*         </td>*/
/*         <td>*/
/*             %{note.poster}*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*             <strong>Title</strong>:*/
/*         </td>*/
/*         <td>*/
/*             %{note.title}*/
/*         </td>*/
/*     </tr>*/
/*     </tbody>*/
/*     </table>*/
/*     <br>*/
/*     %{note.message}*/
/*     <br>*/
/*     <br>*/
/*     <hr>*/
/*     To view/respond to the ticket, please <a*/
/*     href="%{ticket.staff_link}">login</a> to the support ticket system*/
/*     <br>*/
/*     <br>*/
/*     <em style="font-size: small; ">Your friendly Customer Support*/
/*     System</em>*/
/*     <br>*/
/*     <img src="cid:b56944cb4722cc5cda9d1e23a3ea7fbc"*/
/*     alt="Powered by osTicket" width="126" height="19" style="width: 126px;">*/
/* */
