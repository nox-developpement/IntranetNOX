<?php

/* support/include/i18n/en_US/templates/email/ticket.overdue.yaml */
class __TwigTemplate_6e93991d2f54ee5b20d018df4a7910d8aecc3a5776a890a9ceb2f8a2fda98828 extends Twig_Template
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
}
/* #*/
/* # Email template: ticket.overdue.yaml*/
/* #*/
/* # Sent to staff members when a ticket transitions to overdue in the system.*/
/* # Overdue tickets occur based on the ticket's due-date as well as the SLA*/
/* # defined for the ticket.*/
/* #*/
/* ---*/
/* notes: |*/
/*     Sent to staff members when a ticket transitions to overdue in the system.*/
/*     Overdue tickets occur based on the ticket's due-date as well as the SLA*/
/*     defined for the ticket.*/
/* */
/* subject: |*/
/*     Stale Ticket Alert*/
/* body: |*/
/*     <h3><strong>Hi %{recipient.name}</strong>,</h3>*/
/*     A ticket, <a href="%{ticket.staff_link}">#%{ticket.number}</a> is*/
/*     seriously overdue.*/
/*     <br>*/
/*     <br>*/
/*     We should all work hard to guarantee that all tickets are being*/
/*     addressed in a timely manner.*/
/*     <br>*/
/*     <br>*/
/*     Signed,<br>*/
/*     %{ticket.dept.manager.name}*/
/*     <hr>*/
/*     <div>To view or respond to the ticket, please <a*/
/*     href="%{ticket.staff_link}"><span style="color: rgb(84, 141, 212);"*/
/*     >login</span></a> to the support ticket system. You're receiving this*/
/*     notice because the ticket is assigned directly to you or to a team or*/
/*     department of which you're a member.</div>*/
/*     <em style="font-size: small">Your friendly <span style="font-size: smaller"*/
/*     >(although with limited patience)</span> Customer Support*/
/*     System</em><br>*/
/*     <img src="cid:b56944cb4722cc5cda9d1e23a3ea7fbc" height="19"*/
/*         alt="Powered by osTicket" width="126" style="width: 126px;">*/
/* */
