<?php

/* support/include/i18n/en_US/help/tips/settings.autoresponder.yaml */
class __TwigTemplate_221e04540ea28ad875c76e13588ca610b886fd6738eee4234af70edc02d61005 extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Settings -> Autoresponder
#
# Fields:
# title - Shown in bold at the top of the popover window
# content - The body of the help popover
# links - List of links shows below the content
#   title - Link title
#   href - href of link (links starting with / are translated to the
#       helpdesk installation path)
#
# The key names such as 'helpdesk_name' should not be translated as they
# must match the HTML #ids put into the page template.
#
---
new_ticket:
    title: New Ticket
    content: >
        Enable this if you want an autoresponse to be sent to the User on new ticket.
    links:
      - title: New Ticket Autoresponse Template
        href: /scp/templates.php?default_for=ticket.autoresp

new_ticket_by_staff:
    title: New Ticket by Staff
    content: >
        Notice sent when an Agent creates a ticket on behalf of the User. <em>Agent
        can override this when creating new tickets.</em>
    links:
      - title: New Ticket Notice Template
        href: /scp/templates.php?default_for=ticket.notice

new_message_for_submitter:
    title: New Message Confirmation
    content: >
        Confirmation notice sent when a new message is appended to an existing
        ticket.
    links:
      - title: New Message Confirmation Template
        href: /scp/templates.php?default_for=message.autoresp

new_message_for_participants:
    title: New Message Notice
    content: >
        Broadcast messages received from message submitter to all other
        participants on the ticket.
    links:
      - title: New Activity Notice Template
        href: /scp/templates.php?default_for=ticket.activity.notice

overlimit_notice:
    title: Overlimit Notice
    content: >
        Ticket denied notice sent to User on <span
        class=\"doc-desc-title\">Maximum Open Tickets</span> violation.
    links:
      - title: Overlimit Notice Template
        href: /scp/templates.php?default_for=ticket.overlimit

      - title: Set <em>Maximum Open Tickets</em>
        href: /scp/settings.php?t=tickets
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/settings.autoresponder.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Settings -> Autoresponder*/
/* #*/
/* # Fields:*/
/* # title - Shown in bold at the top of the popover window*/
/* # content - The body of the help popover*/
/* # links - List of links shows below the content*/
/* #   title - Link title*/
/* #   href - href of link (links starting with / are translated to the*/
/* #       helpdesk installation path)*/
/* #*/
/* # The key names such as 'helpdesk_name' should not be translated as they*/
/* # must match the HTML #ids put into the page template.*/
/* #*/
/* ---*/
/* new_ticket:*/
/*     title: New Ticket*/
/*     content: >*/
/*         Enable this if you want an autoresponse to be sent to the User on new ticket.*/
/*     links:*/
/*       - title: New Ticket Autoresponse Template*/
/*         href: /scp/templates.php?default_for=ticket.autoresp*/
/* */
/* new_ticket_by_staff:*/
/*     title: New Ticket by Staff*/
/*     content: >*/
/*         Notice sent when an Agent creates a ticket on behalf of the User. <em>Agent*/
/*         can override this when creating new tickets.</em>*/
/*     links:*/
/*       - title: New Ticket Notice Template*/
/*         href: /scp/templates.php?default_for=ticket.notice*/
/* */
/* new_message_for_submitter:*/
/*     title: New Message Confirmation*/
/*     content: >*/
/*         Confirmation notice sent when a new message is appended to an existing*/
/*         ticket.*/
/*     links:*/
/*       - title: New Message Confirmation Template*/
/*         href: /scp/templates.php?default_for=message.autoresp*/
/* */
/* new_message_for_participants:*/
/*     title: New Message Notice*/
/*     content: >*/
/*         Broadcast messages received from message submitter to all other*/
/*         participants on the ticket.*/
/*     links:*/
/*       - title: New Activity Notice Template*/
/*         href: /scp/templates.php?default_for=ticket.activity.notice*/
/* */
/* overlimit_notice:*/
/*     title: Overlimit Notice*/
/*     content: >*/
/*         Ticket denied notice sent to User on <span*/
/*         class="doc-desc-title">Maximum Open Tickets</span> violation.*/
/*     links:*/
/*       - title: Overlimit Notice Template*/
/*         href: /scp/templates.php?default_for=ticket.overlimit*/
/* */
/*       - title: Set <em>Maximum Open Tickets</em>*/
/*         href: /scp/settings.php?t=tickets*/
/* */
