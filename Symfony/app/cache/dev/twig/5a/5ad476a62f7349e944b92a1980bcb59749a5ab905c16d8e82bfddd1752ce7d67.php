<?php

/* support/include/i18n/en_US/templates/email/ticket.autoresp.yaml */
class __TwigTemplate_00125f0b04dd073a5348bb15dcef472407deca4b420a94cc81ead5f1c2eaca24 extends Twig_Template
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
        $__internal_bb806c8b6e40d69e011c5b695a31677dd0acd8f6f2417d2db323d79ad439eb66 = $this->env->getExtension("native_profiler");
        $__internal_bb806c8b6e40d69e011c5b695a31677dd0acd8f6f2417d2db323d79ad439eb66->enter($__internal_bb806c8b6e40d69e011c5b695a31677dd0acd8f6f2417d2db323d79ad439eb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/email/ticket.autoresp.yaml"));

        // line 1
        echo "#
# Email template: ticket.autoresp.yaml
#
# Sent to a user when a new ticket is created
#
---
notes: |
    Sent to a user when a new ticket is created

subject: |
    Support Ticket Opened [#%{ticket.number}]
body: |
    <h3><strong>Dear %{recipient.name.first},</strong></h3>
    <p>
    A request for support has been created and assigned #%{ticket.number}.
    A representative will follow-up with you as soon as possible. You can
    <a href=\"%{recipient.ticket_link}\">view this ticket's progress
    online</a>.
    </p>
    <br>
    <div style=\"color: rgb(127, 127, 127)\">
    Your %{company.name} Team,
    <br>
    %{signature}
    </div>
    <hr>
    <div style=\"color: rgb(127, 127, 127); font-size: small; \"><em>If you
    wish to provide additional comments or information regarding the issue,
    please reply to this email or <a href=\"%{recipient.ticket_link}\"><span
    style=\"color: rgb(84, 141, 212);\" >login to your account</span></a> for
    a complete archive of your support requests.</em></div>
";
        
        $__internal_bb806c8b6e40d69e011c5b695a31677dd0acd8f6f2417d2db323d79ad439eb66->leave($__internal_bb806c8b6e40d69e011c5b695a31677dd0acd8f6f2417d2db323d79ad439eb66_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.autoresp.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Email template: ticket.autoresp.yaml*/
/* #*/
/* # Sent to a user when a new ticket is created*/
/* #*/
/* ---*/
/* notes: |*/
/*     Sent to a user when a new ticket is created*/
/* */
/* subject: |*/
/*     Support Ticket Opened [#%{ticket.number}]*/
/* body: |*/
/*     <h3><strong>Dear %{recipient.name.first},</strong></h3>*/
/*     <p>*/
/*     A request for support has been created and assigned #%{ticket.number}.*/
/*     A representative will follow-up with you as soon as possible. You can*/
/*     <a href="%{recipient.ticket_link}">view this ticket's progress*/
/*     online</a>.*/
/*     </p>*/
/*     <br>*/
/*     <div style="color: rgb(127, 127, 127)">*/
/*     Your %{company.name} Team,*/
/*     <br>*/
/*     %{signature}*/
/*     </div>*/
/*     <hr>*/
/*     <div style="color: rgb(127, 127, 127); font-size: small; "><em>If you*/
/*     wish to provide additional comments or information regarding the issue,*/
/*     please reply to this email or <a href="%{recipient.ticket_link}"><span*/
/*     style="color: rgb(84, 141, 212);" >login to your account</span></a> for*/
/*     a complete archive of your support requests.</em></div>*/
/* */
