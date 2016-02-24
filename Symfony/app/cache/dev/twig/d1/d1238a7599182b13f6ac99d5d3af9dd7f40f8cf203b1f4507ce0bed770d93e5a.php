<?php

/* support/include/i18n/en_US/templates/page/access-link.yaml */
class __TwigTemplate_41426c64587bafd6ce58101cf998d294058db605c7a5dbd439e6020bf4bdd0f0 extends Twig_Template
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
        $__internal_ed5df2fa94b9d282e7d3bb20b4a47041ae83872c88a5a5e28b6a4034659c7463 = $this->env->getExtension("native_profiler");
        $__internal_ed5df2fa94b9d282e7d3bb20b4a47041ae83872c88a5a5e28b6a4034659c7463->enter($__internal_ed5df2fa94b9d282e7d3bb20b4a47041ae83872c88a5a5e28b6a4034659c7463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/page/access-link.yaml"));

        // line 1
        echo "#
# access-link.yaml
#
# Ticket access link sent to clients for guest-only systems where the ticket
# number and email address will trigger an access link sent via email
#
---
notes: >
    This template defines the notification for Clients that an access link was 
    sent to their email. The ticket number and email address trigger the access 
    link.
name: \"Ticket [#%{ticket.number}] Access Link\"
body: >
    <h3><strong>Hi %{recipient.name.first},</strong></h3>
    <div>
    An access link request for ticket #%{ticket.number} has been submitted
    on your behalf for the helpdesk at %{url}.<br />
    <br />
    Follow the link below to check the status of the ticket
    #%{ticket.number}.<br />
    <br />
    <a href=\"%{recipient.ticket_link}\">%{recipient.ticket_link}</a><br />
    <br />
    If you <strong>did not</strong> make the request, please delete and
    disregard this email. Your account is still secure and no one has been
    given access to the ticket. Someone could have mistakenly entered your
    email address.<br />
    <br />
    --<br />
    %{company.name}
    </div>
";
        
        $__internal_ed5df2fa94b9d282e7d3bb20b4a47041ae83872c88a5a5e28b6a4034659c7463->leave($__internal_ed5df2fa94b9d282e7d3bb20b4a47041ae83872c88a5a5e28b6a4034659c7463_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/access-link.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # access-link.yaml*/
/* #*/
/* # Ticket access link sent to clients for guest-only systems where the ticket*/
/* # number and email address will trigger an access link sent via email*/
/* #*/
/* ---*/
/* notes: >*/
/*     This template defines the notification for Clients that an access link was */
/*     sent to their email. The ticket number and email address trigger the access */
/*     link.*/
/* name: "Ticket [#%{ticket.number}] Access Link"*/
/* body: >*/
/*     <h3><strong>Hi %{recipient.name.first},</strong></h3>*/
/*     <div>*/
/*     An access link request for ticket #%{ticket.number} has been submitted*/
/*     on your behalf for the helpdesk at %{url}.<br />*/
/*     <br />*/
/*     Follow the link below to check the status of the ticket*/
/*     #%{ticket.number}.<br />*/
/*     <br />*/
/*     <a href="%{recipient.ticket_link}">%{recipient.ticket_link}</a><br />*/
/*     <br />*/
/*     If you <strong>did not</strong> make the request, please delete and*/
/*     disregard this email. Your account is still secure and no one has been*/
/*     given access to the ticket. Someone could have mistakenly entered your*/
/*     email address.<br />*/
/*     <br />*/
/*     --<br />*/
/*     %{company.name}*/
/*     </div>*/
/* */
