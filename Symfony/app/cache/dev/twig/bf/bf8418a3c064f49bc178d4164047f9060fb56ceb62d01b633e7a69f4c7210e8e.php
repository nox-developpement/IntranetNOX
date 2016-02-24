<?php

/* support/include/i18n/en_US/templates/email/message.alert.yaml */
class __TwigTemplate_a0037f5382cc217f7f547aa15857e174d6149c3a803169f29d79d6abfe2af597 extends Twig_Template
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
        $__internal_bf3443fad9418c827277b7a65ca3d7b1b8c2e4839c9938ff48eccb71023a1d61 = $this->env->getExtension("native_profiler");
        $__internal_bf3443fad9418c827277b7a65ca3d7b1b8c2e4839c9938ff48eccb71023a1d61->enter($__internal_bf3443fad9418c827277b7a65ca3d7b1b8c2e4839c9938ff48eccb71023a1d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/email/message.alert.yaml"));

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
        
        $__internal_bf3443fad9418c827277b7a65ca3d7b1b8c2e4839c9938ff48eccb71023a1d61->leave($__internal_bf3443fad9418c827277b7a65ca3d7b1b8c2e4839c9938ff48eccb71023a1d61_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/message.alert.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Email template: message.alert.yaml*/
/* #*/
/* # Sent to staff members when a new message is posted by a user to a ticket.*/
/* # This can occur if the users responds to an email from the system or visits*/
/* # the customer web portal and posts a new message there.*/
/* #*/
/* ---*/
/* notes: |*/
/*     Sent to staff members when a new message is posted by a user to a*/
/*     ticket.  This can occur if the users responds to an email from the*/
/*     system or visits the customer web portal and posts a new message there.*/
/* */
/* subject: |*/
/*     New Message Alert*/
/* body: |*/
/*     <h3><strong>Hi %{recipient.name},</strong></h3>*/
/*     New message appended to ticket <a*/
/*     href="%{ticket.staff_link}">#%{ticket.number}</a>*/
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
/*              <strong>Department</strong>:*/
/*         </td>*/
/*         <td>*/
/*              %{ticket.dept.name}*/
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
/*     href="%{ticket.staff_link}"><span style="color: rgb(84, 141, 212);"*/
/*     >login</span></a> to the support ticket system</div>*/
/*     <em style="color: rgb(127,127,127); font-size: small; ">Your friendly*/
/*     Customer Support System</em><br>*/
/*     <img src="cid:b56944cb4722cc5cda9d1e23a3ea7fbc"*/
/*     alt="Powered by osTicket" width="126" height="19" style="width: 126px;">*/
/* */
