<?php

/* support/include/i18n/en_US/templates/email/assigned.alert.yaml */
class __TwigTemplate_d2644210ac0cd1c14cb8a7c3606fc2c86c812b463ceef38bd5401d93af1be091 extends Twig_Template
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
}
/* #*/
/* # Email template: assigned.alert.yaml*/
/* #*/
/* # Sent to staff members when a ticket is assigned to them. Tickets can be*/
/* # assigned automatically by the system or manually by another staff member.*/
/* # Use %{assigner} to distinguish who made the assignment.*/
/* #*/
/* ---*/
/* notes: |*/
/*     Sent to staff members when a ticket is assigned to them. Tickets can be*/
/*     assigned automatically by the system or manually by another staff*/
/*     member.  Use %{assigner} to distinguish who made the assignment.*/
/* */
/* subject: |*/
/*     Ticket Assigned to you*/
/* body: |*/
/*     <h3><strong>Hi %{assignee.name.first},</strong></h3>*/
/*     Ticket <a href="%{ticket.staff_link}">#%{ticket.number}</a> has been*/
/*     assigned to you by %{assigner.name.short}*/
/*     <br>*/
/*     <br>*/
/*     <table>*/
/*     <tbody>*/
/*     <tr>*/
/*         <td>*/
/*              <strong>From</strong>:*/
/*         </td>*/
/*         <td>*/
/*              %{ticket.name} &lt;%{ticket.email}&gt;*/
/*         </td>*/
/*     </tr>*/
/*     <tr>*/
/*         <td>*/
/*              <strong>Subject</strong>:*/
/*         </td>*/
/*         <td>*/
/*              %{ticket.subject}*/
/*         </td>*/
/*     </tr>*/
/*     </tbody>*/
/*     </table>*/
/*     <br>*/
/*     %{comments}*/
/*     <br>*/
/*     <br>*/
/*     <hr>*/
/*     <div>To view/respond to the ticket, please <a*/
/*     href="%{ticket.staff_link}"><span style="color: rgb(84, 141, 212);"*/
/*     >login</span></a> to the support ticket system</div>*/
/*     <em style="font-size: small; ">Your friendly Customer Support*/
/*     System</em>*/
/*     <br>*/
/*     <img src="cid:b56944cb4722cc5cda9d1e23a3ea7fbc"*/
/*     alt="Powered by osTicket" width="126" height="19" style="width: 126px;">*/
/* */
