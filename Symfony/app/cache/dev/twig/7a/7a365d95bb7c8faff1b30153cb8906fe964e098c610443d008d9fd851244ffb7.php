<?php

/* support/include/i18n/en_US/templates/email/ticket.overdue.yaml */
class __TwigTemplate_0d5a7bc123a15b7c5897adede9e500a85b108f14a04fff7f7f680404459e12a9 extends Twig_Template
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
        $__internal_8d260c0dd4fe3daa9c2072ffaea37fa4ed7c45b8d9d8a9d35f28af96776c9d4e = $this->env->getExtension("native_profiler");
        $__internal_8d260c0dd4fe3daa9c2072ffaea37fa4ed7c45b8d9d8a9d35f28af96776c9d4e->enter($__internal_8d260c0dd4fe3daa9c2072ffaea37fa4ed7c45b8d9d8a9d35f28af96776c9d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/email/ticket.overdue.yaml"));

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
        
        $__internal_8d260c0dd4fe3daa9c2072ffaea37fa4ed7c45b8d9d8a9d35f28af96776c9d4e->leave($__internal_8d260c0dd4fe3daa9c2072ffaea37fa4ed7c45b8d9d8a9d35f28af96776c9d4e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.overdue.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
