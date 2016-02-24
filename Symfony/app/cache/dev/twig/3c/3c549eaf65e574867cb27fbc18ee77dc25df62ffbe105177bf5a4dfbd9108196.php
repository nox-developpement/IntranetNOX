<?php

/* support/include/i18n/en_US/templates/email/message.autoresp.yaml */
class __TwigTemplate_cf549c1722056d632edaefb52ef98bd03938ae6ed776747ff0d9329679cc5911 extends Twig_Template
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
        $__internal_d9752c4877c244bdc509cf464eccaa6dcb73f4717788e24f9ccf3b1e7d3805e1 = $this->env->getExtension("native_profiler");
        $__internal_d9752c4877c244bdc509cf464eccaa6dcb73f4717788e24f9ccf3b1e7d3805e1->enter($__internal_d9752c4877c244bdc509cf464eccaa6dcb73f4717788e24f9ccf3b1e7d3805e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/email/message.autoresp.yaml"));

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
        
        $__internal_d9752c4877c244bdc509cf464eccaa6dcb73f4717788e24f9ccf3b1e7d3805e1->leave($__internal_d9752c4877c244bdc509cf464eccaa6dcb73f4717788e24f9ccf3b1e7d3805e1_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/message.autoresp.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
