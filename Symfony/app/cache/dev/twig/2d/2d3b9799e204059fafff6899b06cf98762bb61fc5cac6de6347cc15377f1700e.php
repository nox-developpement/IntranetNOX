<?php

/* support/include/i18n/en_US/help/tips/staff.department.yaml */
class __TwigTemplate_ccc3f8449db612517d93a97809aa2716b698edabfba01f1bb3ab786c53312ae6 extends Twig_Template
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
        $__internal_9e39b1e0daf62d8466ad7400981051a35a616d1da176f27c147c31ab3ab91f98 = $this->env->getExtension("native_profiler");
        $__internal_9e39b1e0daf62d8466ad7400981051a35a616d1da176f27c147c31ab3ab91f98->enter($__internal_9e39b1e0daf62d8466ad7400981051a35a616d1da176f27c147c31ab3ab91f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/staff.department.yaml"));

        // line 1
        echo "#
# This is popup help messages for the Admin Panel -> Staff -> Add New Department -> Department Form
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
type:
    title: Type
    content: >
        Select <span class=\"doc-desc-opt\">Private</span> if you wish to mask
        assignments to this Department in the Client Portal.  Additionally,
        when labeled as <span class=\"doc-desc-opt\">Private</span>, the <span
        class=\"doc-desc-title\">Department Signature</span> will not be
        displayed in email replies.
        <br/><br/>
        At least one department must be <span
        class=\"doc-desc-opt\">Public</span>

email:
    title: Email
    content: >
        Email Address used when responses are sent to Users when Agents post
        Responses to Tickets.

template:
    title: Template Set
    content: >
        Email <span class=\"doc-desc-title\">Template Set</span> used for
        Auto-Responses and Alerts &amp; Notices for tickets routed to this
        Department.
    links:
      - title: Manage Templates
        href: /scp/templates.php

sla:
    title: SLA
    content: >
        Service Level Agreement for tickets routed to this Department.
    links:
      - title: Manage SLA Plans
        href: /scp/slas.php

manager:
    title: Department Manager
    content: >
        Select a <span class=\"doc-desc-title\">Manager</span> for this department.
        <br/><br/>
        Managers can be configured to receive special alerts and
        also have the right to unassign tickets.
    links:
      - title: Manage Alerts &amp; Notices
        href: /scp/settings.php?t=alerts

group_membership:
    title: Alerts &amp; Notices Recipients
    content: >
        Select the recipients of configured <span
        class=\"doc-desc-title\">Alerts &amp; Notices</span>.
    links:
      - title: Configure Alerts &amp; Notices
        href: /scp/settings.php?t=alerts

sandboxing:
    title: Ticket Assignment Restrictions
    content: >
        Enable this to restrict ticket assignment to include only members
        of this Department. Department membership can be extended to Groups,
        if <span class=\"doc-desc-title\">Alerts &amp; Notices
        Recipients</span> includes groups members.

auto_response_settings:
    title: Autoresponder Settings
    content: >
        This allows you to override the global Autoresponder settings for
        this Department.

new_ticket:
    title: New Ticket Auto-Response
    content: >
        You may disable the Auto-Response sent to the User when a new ticket
        is created and routed to this Department.

new_message:
    title: New Message Auto-Response
    content: >
        You may disable the Auto-Response sent to the User to confirm
        a newly posted message for tickets in this Department.

auto_response_email:
    title: Auto Response Email
    content: >
        Select an email address from which Auto-Responses are sent for this
        Department.

department_access:
    title: Group Access
    content: >
        Allow Agents of other Departments access to this Deparmtent's
        tickets.

department_signature:
    title: Department Signature
    content: >
        Signature is made available as a choice, for <span
        class=\"doc-desc-opt\">Public</span> Departments, on Agent Responses.
";
        
        $__internal_9e39b1e0daf62d8466ad7400981051a35a616d1da176f27c147c31ab3ab91f98->leave($__internal_9e39b1e0daf62d8466ad7400981051a35a616d1da176f27c147c31ab3ab91f98_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.department.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Staff -> Add New Department -> Department Form*/
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
/* type:*/
/*     title: Type*/
/*     content: >*/
/*         Select <span class="doc-desc-opt">Private</span> if you wish to mask*/
/*         assignments to this Department in the Client Portal.  Additionally,*/
/*         when labeled as <span class="doc-desc-opt">Private</span>, the <span*/
/*         class="doc-desc-title">Department Signature</span> will not be*/
/*         displayed in email replies.*/
/*         <br/><br/>*/
/*         At least one department must be <span*/
/*         class="doc-desc-opt">Public</span>*/
/* */
/* email:*/
/*     title: Email*/
/*     content: >*/
/*         Email Address used when responses are sent to Users when Agents post*/
/*         Responses to Tickets.*/
/* */
/* template:*/
/*     title: Template Set*/
/*     content: >*/
/*         Email <span class="doc-desc-title">Template Set</span> used for*/
/*         Auto-Responses and Alerts &amp; Notices for tickets routed to this*/
/*         Department.*/
/*     links:*/
/*       - title: Manage Templates*/
/*         href: /scp/templates.php*/
/* */
/* sla:*/
/*     title: SLA*/
/*     content: >*/
/*         Service Level Agreement for tickets routed to this Department.*/
/*     links:*/
/*       - title: Manage SLA Plans*/
/*         href: /scp/slas.php*/
/* */
/* manager:*/
/*     title: Department Manager*/
/*     content: >*/
/*         Select a <span class="doc-desc-title">Manager</span> for this department.*/
/*         <br/><br/>*/
/*         Managers can be configured to receive special alerts and*/
/*         also have the right to unassign tickets.*/
/*     links:*/
/*       - title: Manage Alerts &amp; Notices*/
/*         href: /scp/settings.php?t=alerts*/
/* */
/* group_membership:*/
/*     title: Alerts &amp; Notices Recipients*/
/*     content: >*/
/*         Select the recipients of configured <span*/
/*         class="doc-desc-title">Alerts &amp; Notices</span>.*/
/*     links:*/
/*       - title: Configure Alerts &amp; Notices*/
/*         href: /scp/settings.php?t=alerts*/
/* */
/* sandboxing:*/
/*     title: Ticket Assignment Restrictions*/
/*     content: >*/
/*         Enable this to restrict ticket assignment to include only members*/
/*         of this Department. Department membership can be extended to Groups,*/
/*         if <span class="doc-desc-title">Alerts &amp; Notices*/
/*         Recipients</span> includes groups members.*/
/* */
/* auto_response_settings:*/
/*     title: Autoresponder Settings*/
/*     content: >*/
/*         This allows you to override the global Autoresponder settings for*/
/*         this Department.*/
/* */
/* new_ticket:*/
/*     title: New Ticket Auto-Response*/
/*     content: >*/
/*         You may disable the Auto-Response sent to the User when a new ticket*/
/*         is created and routed to this Department.*/
/* */
/* new_message:*/
/*     title: New Message Auto-Response*/
/*     content: >*/
/*         You may disable the Auto-Response sent to the User to confirm*/
/*         a newly posted message for tickets in this Department.*/
/* */
/* auto_response_email:*/
/*     title: Auto Response Email*/
/*     content: >*/
/*         Select an email address from which Auto-Responses are sent for this*/
/*         Department.*/
/* */
/* department_access:*/
/*     title: Group Access*/
/*     content: >*/
/*         Allow Agents of other Departments access to this Deparmtent's*/
/*         tickets.*/
/* */
/* department_signature:*/
/*     title: Department Signature*/
/*     content: >*/
/*         Signature is made available as a choice, for <span*/
/*         class="doc-desc-opt">Public</span> Departments, on Agent Responses.*/
/* */
