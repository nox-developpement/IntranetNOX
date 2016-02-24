<?php

/* support/include/i18n/en_US/templates/email/ticket.notice.yaml */
class __TwigTemplate_e10e4c4e5472a5252d6a433dff58e650935a267d1aec3c166969666dc1cce1c3 extends Twig_Template
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
        $__internal_0d51fd204b71d200ba92817172f59e665b2dbe0acabb1eebf68ebc67e89861af = $this->env->getExtension("native_profiler");
        $__internal_0d51fd204b71d200ba92817172f59e665b2dbe0acabb1eebf68ebc67e89861af->enter($__internal_0d51fd204b71d200ba92817172f59e665b2dbe0acabb1eebf68ebc67e89861af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/email/ticket.notice.yaml"));

        // line 1
        echo "#
# Email template: ticket.notice.yaml
#
# Sent to a user when a staff member creates a ticket on the user's behalf.
# This is most commonly performed when user's call in on the phone.
#
---
notes: |
    Sent to a user when a staff member creates a ticket on the user's behalf.
    This is most commonly performed when user's call in on the phone.

subject: |
    %{ticket.subject} [#%{ticket.number}]
body: |
    <h3><strong>Dear %{recipient.name.first},</strong></h3>
    Our customer care team has created a ticket, <a
    href=\"%{recipient.ticket_link}\">#%{ticket.number}</a> on your behalf, with
    the following details and summary:
    <br>
    <br>
    Topic: <strong>%{ticket.topic.name}</strong>
    <br>
    Subject: <strong>%{ticket.subject}</strong>
    <br>
    <br>
    %{message}
    <br>
    <br>
    If need be, a representative will follow-up with you as soon as
    possible. You can also <a href=\"%{recipient.ticket_link}\">view this
    ticket's progress online</a>.
    <br>
    <br>
    <div style=\"color: rgb(127, 127, 127);\">
    Your %{company.name} Team,<br>
    %{signature}</div>
    <hr>
    <div style=\"color: rgb(127, 127, 127); font-size: small; \"><em>If you
    wish to provide additional comments or information regarding the issue,
    please reply to this email or <a href=\"%{recipient.ticket_link}\"><span
    style=\"color: rgb(84, 141, 212);\" >login to your account</span></a> for
    a complete archive of your support requests.</em></div>
";
        
        $__internal_0d51fd204b71d200ba92817172f59e665b2dbe0acabb1eebf68ebc67e89861af->leave($__internal_0d51fd204b71d200ba92817172f59e665b2dbe0acabb1eebf68ebc67e89861af_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.notice.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Email template: ticket.notice.yaml*/
/* #*/
/* # Sent to a user when a staff member creates a ticket on the user's behalf.*/
/* # This is most commonly performed when user's call in on the phone.*/
/* #*/
/* ---*/
/* notes: |*/
/*     Sent to a user when a staff member creates a ticket on the user's behalf.*/
/*     This is most commonly performed when user's call in on the phone.*/
/* */
/* subject: |*/
/*     %{ticket.subject} [#%{ticket.number}]*/
/* body: |*/
/*     <h3><strong>Dear %{recipient.name.first},</strong></h3>*/
/*     Our customer care team has created a ticket, <a*/
/*     href="%{recipient.ticket_link}">#%{ticket.number}</a> on your behalf, with*/
/*     the following details and summary:*/
/*     <br>*/
/*     <br>*/
/*     Topic: <strong>%{ticket.topic.name}</strong>*/
/*     <br>*/
/*     Subject: <strong>%{ticket.subject}</strong>*/
/*     <br>*/
/*     <br>*/
/*     %{message}*/
/*     <br>*/
/*     <br>*/
/*     If need be, a representative will follow-up with you as soon as*/
/*     possible. You can also <a href="%{recipient.ticket_link}">view this*/
/*     ticket's progress online</a>.*/
/*     <br>*/
/*     <br>*/
/*     <div style="color: rgb(127, 127, 127);">*/
/*     Your %{company.name} Team,<br>*/
/*     %{signature}</div>*/
/*     <hr>*/
/*     <div style="color: rgb(127, 127, 127); font-size: small; "><em>If you*/
/*     wish to provide additional comments or information regarding the issue,*/
/*     please reply to this email or <a href="%{recipient.ticket_link}"><span*/
/*     style="color: rgb(84, 141, 212);" >login to your account</span></a> for*/
/*     a complete archive of your support requests.</em></div>*/
/* */
