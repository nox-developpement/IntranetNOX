<?php

/* support/include/i18n/en_US/templates/email/note.alert.yaml */
class __TwigTemplate_48d303c5a4c084b2c0fc53af3983442d04d49929aa9bd9e420e211a9a1e11cdd extends Twig_Template
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
        $__internal_735f421d6b6dcc1aee8b6b2ff5006889fa7d873af8a85fab92ea35b1125bb092 = $this->env->getExtension("native_profiler");
        $__internal_735f421d6b6dcc1aee8b6b2ff5006889fa7d873af8a85fab92ea35b1125bb092->enter($__internal_735f421d6b6dcc1aee8b6b2ff5006889fa7d873af8a85fab92ea35b1125bb092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/email/note.alert.yaml"));

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
        
        $__internal_735f421d6b6dcc1aee8b6b2ff5006889fa7d873af8a85fab92ea35b1125bb092->leave($__internal_735f421d6b6dcc1aee8b6b2ff5006889fa7d873af8a85fab92ea35b1125bb092_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/note.alert.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
