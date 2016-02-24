<?php

/* support/include/i18n/en_US/templates/email/ticket.activity.notice.yaml */
class __TwigTemplate_9a0d7d0f0138f6dadf981c1f97dc04454a685b90514ac36699eb7005f064cb2a extends Twig_Template
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
        $__internal_889ec3316c0503034f77c8edee3a49515c4ee34fefda8a94e3a099fe4d336c93 = $this->env->getExtension("native_profiler");
        $__internal_889ec3316c0503034f77c8edee3a49515c4ee34fefda8a94e3a099fe4d336c93->enter($__internal_889ec3316c0503034f77c8edee3a49515c4ee34fefda8a94e3a099fe4d336c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/email/ticket.activity.notice.yaml"));

        // line 1
        echo "#
# Email template: ticket.activity.notice.yaml
#
# Notice sent to collaborators on ticket activity e.g reply or message
#
---
notes: |
    Notice sent to collaborators on ticket activity e.g reply or message.

subject: |
    Re: %{ticket.subject} [#%{ticket.number}]
body: |
    <h3><strong>Dear %{recipient.name.first},</strong></h3>
    <div>
        <em>%{poster.name}</em> just logged a message to a ticket in which you participate.
    </div>
    <br>
    %{message}
    <br>
    <br>
    <hr>
    <div style=\"color: rgb(127, 127, 127); font-size: small; text-align: center;\">
    <em>You're getting this email because you are a collaborator
    on ticket <a href=\"%{recipient.ticket_link}\" style=\"color: rgb(84, 141, 212);\"
    >#%{ticket.number}</a>.  To participate, simply reply to this email
    or <a href=\"%{recipient.ticket_link}\" style=\"color: rgb(84, 141, 212);\"
    >click here</a> for a complete archive of the ticket thread.</em>
    </div>
";
        
        $__internal_889ec3316c0503034f77c8edee3a49515c4ee34fefda8a94e3a099fe4d336c93->leave($__internal_889ec3316c0503034f77c8edee3a49515c4ee34fefda8a94e3a099fe4d336c93_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.activity.notice.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Email template: ticket.activity.notice.yaml*/
/* #*/
/* # Notice sent to collaborators on ticket activity e.g reply or message*/
/* #*/
/* ---*/
/* notes: |*/
/*     Notice sent to collaborators on ticket activity e.g reply or message.*/
/* */
/* subject: |*/
/*     Re: %{ticket.subject} [#%{ticket.number}]*/
/* body: |*/
/*     <h3><strong>Dear %{recipient.name.first},</strong></h3>*/
/*     <div>*/
/*         <em>%{poster.name}</em> just logged a message to a ticket in which you participate.*/
/*     </div>*/
/*     <br>*/
/*     %{message}*/
/*     <br>*/
/*     <br>*/
/*     <hr>*/
/*     <div style="color: rgb(127, 127, 127); font-size: small; text-align: center;">*/
/*     <em>You're getting this email because you are a collaborator*/
/*     on ticket <a href="%{recipient.ticket_link}" style="color: rgb(84, 141, 212);"*/
/*     >#%{ticket.number}</a>.  To participate, simply reply to this email*/
/*     or <a href="%{recipient.ticket_link}" style="color: rgb(84, 141, 212);"*/
/*     >click here</a> for a complete archive of the ticket thread.</em>*/
/*     </div>*/
/* */
