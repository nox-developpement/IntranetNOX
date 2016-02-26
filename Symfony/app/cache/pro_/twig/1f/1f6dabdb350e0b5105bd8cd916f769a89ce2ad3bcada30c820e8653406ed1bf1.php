<?php

/* support/include/i18n/en_US/templates/email/message.autoresp.yaml */
class __TwigTemplate_78c3345f89160858e1323ef86a16f08807da7592580f8ad2ccf75d604214a42a extends Twig_Template
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
# Email template: message.autoresp.yaml
#
# Sent to a user when the user posts a new message to a ticket. This can
# happen if the users responds to an email from the system or visits the
# customer web portal and posts a new message there.
#
---
notes: |
    Sent to a user when the user posts a new message to a ticket. This can
    happen if the user responds to an email from the system or visits the
    customer web portal and posts a new message there.

subject: |
    Message Confirmation
body: |
    <h3><strong>Dear %{recipient.name.first},</strong></h3>
    Your reply to support request <a
    href=\"%{recipient.ticket_link}\">#%{ticket.number}</a> has been noted
    <br>
    <br>
    <div style=\"color: rgb(127, 127, 127); \">
    Your %{company.name} Team,<br>
    %{signature}
    </div>
    <hr>
    <div style=\"color: rgb(127, 127, 127); font-size: small; text-align:
    center\"><em>You can view the support request progress <a
    href=\"%{recipient.ticket_link}\">online here</a></em>
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/message.autoresp.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # Email template: message.autoresp.yaml*/
/* #*/
/* # Sent to a user when the user posts a new message to a ticket. This can*/
/* # happen if the users responds to an email from the system or visits the*/
/* # customer web portal and posts a new message there.*/
/* #*/
/* ---*/
/* notes: |*/
/*     Sent to a user when the user posts a new message to a ticket. This can*/
/*     happen if the user responds to an email from the system or visits the*/
/*     customer web portal and posts a new message there.*/
/* */
/* subject: |*/
/*     Message Confirmation*/
/* body: |*/
/*     <h3><strong>Dear %{recipient.name.first},</strong></h3>*/
/*     Your reply to support request <a*/
/*     href="%{recipient.ticket_link}">#%{ticket.number}</a> has been noted*/
/*     <br>*/
/*     <br>*/
/*     <div style="color: rgb(127, 127, 127); ">*/
/*     Your %{company.name} Team,<br>*/
/*     %{signature}*/
/*     </div>*/
/*     <hr>*/
/*     <div style="color: rgb(127, 127, 127); font-size: small; text-align:*/
/*     center"><em>You can view the support request progress <a*/
/*     href="%{recipient.ticket_link}">online here</a></em>*/
/*     </div>*/
/* */
