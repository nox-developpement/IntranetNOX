<?php

/* support/include/i18n/en_US/templates/email/ticket.autoreply.yaml */
class __TwigTemplate_160712439c38f220c7b65a43d2e8441623746f094e95a0c32faad555f62a04ed extends Twig_Template
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
        $__internal_b06a1fbb5d4173611a073bc2800afd14de69700987df192a224dc4c00ead779f = $this->env->getExtension("native_profiler");
        $__internal_b06a1fbb5d4173611a073bc2800afd14de69700987df192a224dc4c00ead779f->enter($__internal_b06a1fbb5d4173611a073bc2800afd14de69700987df192a224dc4c00ead779f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/email/ticket.autoreply.yaml"));

        // line 1
        echo "#
# Email template: ticket.autoreply.yaml
#
# Sent to a user when an automatic canned response is posted to a ticket
# when it is created
#
---
notes: |
    Sent to a user when an automatic canned response is posted to a ticket
    when it is created.

    Available variables for replacement: %{ticket.*}, %{response}

subject: |
    Re: %{ticket.subject} [#%{ticket.number}]
body: |
    <h3><strong>Dear %{recipient.name.first},</strong></h3>
    A request for support has been created and assigned ticket <a
    href=\"%{recipient.ticket_link}\">#%{ticket.number}</a> with the following
    automatic reply
    <br>
    <br>
    Topic: <strong>%{ticket.topic.name}</strong>
    <br>
    Subject: <strong>%{ticket.subject}</strong>
    <br>
    <br>
    %{response}
    <br>
    <br>
    <div style=\"color: rgb(127, 127, 127);\">Your %{company.name} Team,<br>
    %{signature}</div>
    <hr>
    <div style=\"color: rgb(127, 127, 127); font-size: small;\"><em>We hope
    this response has sufficiently answered your questions.  If you wish to
    provide additional comments or informatione, please reply to this email
    or <a href=\"%{recipient.ticket_link}\"><span
    style=\"color: rgb(84, 141, 212);\" >login to your account</span></a> for
    a complete archive of your support requests.</em></div>
";
        
        $__internal_b06a1fbb5d4173611a073bc2800afd14de69700987df192a224dc4c00ead779f->leave($__internal_b06a1fbb5d4173611a073bc2800afd14de69700987df192a224dc4c00ead779f_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.autoreply.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Email template: ticket.autoreply.yaml*/
/* #*/
/* # Sent to a user when an automatic canned response is posted to a ticket*/
/* # when it is created*/
/* #*/
/* ---*/
/* notes: |*/
/*     Sent to a user when an automatic canned response is posted to a ticket*/
/*     when it is created.*/
/* */
/*     Available variables for replacement: %{ticket.*}, %{response}*/
/* */
/* subject: |*/
/*     Re: %{ticket.subject} [#%{ticket.number}]*/
/* body: |*/
/*     <h3><strong>Dear %{recipient.name.first},</strong></h3>*/
/*     A request for support has been created and assigned ticket <a*/
/*     href="%{recipient.ticket_link}">#%{ticket.number}</a> with the following*/
/*     automatic reply*/
/*     <br>*/
/*     <br>*/
/*     Topic: <strong>%{ticket.topic.name}</strong>*/
/*     <br>*/
/*     Subject: <strong>%{ticket.subject}</strong>*/
/*     <br>*/
/*     <br>*/
/*     %{response}*/
/*     <br>*/
/*     <br>*/
/*     <div style="color: rgb(127, 127, 127);">Your %{company.name} Team,<br>*/
/*     %{signature}</div>*/
/*     <hr>*/
/*     <div style="color: rgb(127, 127, 127); font-size: small;"><em>We hope*/
/*     this response has sufficiently answered your questions.  If you wish to*/
/*     provide additional comments or informatione, please reply to this email*/
/*     or <a href="%{recipient.ticket_link}"><span*/
/*     style="color: rgb(84, 141, 212);" >login to your account</span></a> for*/
/*     a complete archive of your support requests.</em></div>*/
/* */
