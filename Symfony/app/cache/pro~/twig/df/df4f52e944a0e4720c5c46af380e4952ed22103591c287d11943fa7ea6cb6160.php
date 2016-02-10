<?php

/* support/include/i18n/en_US/templates/email/ticket.overlimit.yaml */
class __TwigTemplate_0b546749cb327ea1d612e331af2d14ec43ce458aae8472e4d4028764c65db336 extends Twig_Template
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
# Email template: ticket.overlimit.yaml
#
# Sent to users when they have exceeded the maximum open ticket limit. The
# limit is configurable in the Admin Panel, and is defined by the number of
# tickets open by a particular email address.
#
---
notes: |
    Sent to users when they have exceeded the maximum open ticket limit. The
    limit is configurable in the Admin Panel, and is defined by the number
    of tickets open by a particular email address.

subject: |
    Open Tickets Limit Reached
body: |
    <h3><strong>Dear %{ticket.name.first},</strong></h3>
    You have reached the maximum number of open tickets allowed. To be able
    to open another ticket, one of your pending tickets must be closed. To
    update or add comments to an open ticket simply <a
    href=\"%{url}/tickets.php?e=%{ticket.email}\">login to our helpdesk</a>.
    <br>
    <br>
    Thank you,<br/>
    Support Ticket System
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/email/ticket.overlimit.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # Email template: ticket.overlimit.yaml*/
/* #*/
/* # Sent to users when they have exceeded the maximum open ticket limit. The*/
/* # limit is configurable in the Admin Panel, and is defined by the number of*/
/* # tickets open by a particular email address.*/
/* #*/
/* ---*/
/* notes: |*/
/*     Sent to users when they have exceeded the maximum open ticket limit. The*/
/*     limit is configurable in the Admin Panel, and is defined by the number*/
/*     of tickets open by a particular email address.*/
/* */
/* subject: |*/
/*     Open Tickets Limit Reached*/
/* body: |*/
/*     <h3><strong>Dear %{ticket.name.first},</strong></h3>*/
/*     You have reached the maximum number of open tickets allowed. To be able*/
/*     to open another ticket, one of your pending tickets must be closed. To*/
/*     update or add comments to an open ticket simply <a*/
/*     href="%{url}/tickets.php?e=%{ticket.email}">login to our helpdesk</a>.*/
/*     <br>*/
/*     <br>*/
/*     Thank you,<br/>*/
/*     Support Ticket System*/
/* */
