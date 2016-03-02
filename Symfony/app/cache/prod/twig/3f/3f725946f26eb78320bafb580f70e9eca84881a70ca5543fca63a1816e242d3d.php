<?php

/* support/include/i18n/en_US/templates/email/ticket.activity.notice.yaml */
class __TwigTemplate_8060a1298e52ccd0bfac88e475cf56b210082482ff989bbf5927fc04c3129c14 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.activity.notice.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
