<?php

/* support/include/i18n/en_US/templates/email/transfer.alert.yaml */
class __TwigTemplate_0e5dd974d90e025dc7de88b4fde8b0a54039e56708b01767ef1dd861fa3fef53 extends Twig_Template
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
        $__internal_3ba12ad9fb17380e45a571810f15563725808d3922a841b8946570ee159b46b0 = $this->env->getExtension("native_profiler");
        $__internal_3ba12ad9fb17380e45a571810f15563725808d3922a841b8946570ee159b46b0->enter($__internal_3ba12ad9fb17380e45a571810f15563725808d3922a841b8946570ee159b46b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/email/transfer.alert.yaml"));

        // line 1
        echo "#
# Email template: transfer.alert.yaml
#
# Sent to staff members when a ticket is assigned to them. Tickets can be
# assigned automatically by the system or manually by another staff member.
# Use %{assigner} to distinguish who made the assignment.
#
---
notes: |

subject: |
    Ticket #%{ticket.number} transfer - %{ticket.dept.name}
body: |
    <h3>Hi %{recipient.name},</h3>
    Ticket <a href=\"%{ticket.staff_link}\">#%{ticket.number}</a> has been
    transferred to the %{ticket.dept.name} department by
    <strong>%{staff.name.short}</strong>
    <br>
    <br>
    <blockquote>
        %{comments}
    </blockquote>
    <hr>
    <div>To view or respond to the ticket, please <a
    href=\"%{ticket.staff_link}\">login</a> to the support ticket system.
    </div>
    <em style=\"font-size: small; \">Your friendly Customer Support
    System</em>
    <br>
    <a href=\"http://osticket.com/\"><img width=\"126\" height=\"19\"
        alt=\"Powered By osTicket\" style=\"width: 126px;\"
        src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\"/></a>
";
        
        $__internal_3ba12ad9fb17380e45a571810f15563725808d3922a841b8946570ee159b46b0->leave($__internal_3ba12ad9fb17380e45a571810f15563725808d3922a841b8946570ee159b46b0_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/transfer.alert.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Email template: transfer.alert.yaml*/
/* #*/
/* # Sent to staff members when a ticket is assigned to them. Tickets can be*/
/* # assigned automatically by the system or manually by another staff member.*/
/* # Use %{assigner} to distinguish who made the assignment.*/
/* #*/
/* ---*/
/* notes: |*/
/* */
/* subject: |*/
/*     Ticket #%{ticket.number} transfer - %{ticket.dept.name}*/
/* body: |*/
/*     <h3>Hi %{recipient.name},</h3>*/
/*     Ticket <a href="%{ticket.staff_link}">#%{ticket.number}</a> has been*/
/*     transferred to the %{ticket.dept.name} department by*/
/*     <strong>%{staff.name.short}</strong>*/
/*     <br>*/
/*     <br>*/
/*     <blockquote>*/
/*         %{comments}*/
/*     </blockquote>*/
/*     <hr>*/
/*     <div>To view or respond to the ticket, please <a*/
/*     href="%{ticket.staff_link}">login</a> to the support ticket system.*/
/*     </div>*/
/*     <em style="font-size: small; ">Your friendly Customer Support*/
/*     System</em>*/
/*     <br>*/
/*     <a href="http://osticket.com/"><img width="126" height="19"*/
/*         alt="Powered By osTicket" style="width: 126px;"*/
/*         src="cid:b56944cb4722cc5cda9d1e23a3ea7fbc"/></a>*/
/* */
