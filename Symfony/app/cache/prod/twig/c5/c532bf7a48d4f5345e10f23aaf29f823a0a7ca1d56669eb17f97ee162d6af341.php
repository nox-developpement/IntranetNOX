<?php

/* support/include/i18n/en_US/templates/page/access-link.yaml */
class __TwigTemplate_15a85ce75de5925a44be8d5652faa6d7d55392d5ba0b2ded2bf61e9b80ce759b extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/access-link.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
