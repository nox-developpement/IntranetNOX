<?php

/* support/include/i18n/en_US/help/tips/settings.email.yaml */
class __TwigTemplate_0ab7ba4957a70e27bd4cd9895c2e421c8c90e5f7911347746e059929cde24872 extends Twig_Template
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
        $__internal_cee000b88e136d3ecc744222b702442b78136c7233766fa156ff0740a79fe10e = $this->env->getExtension("native_profiler");
        $__internal_cee000b88e136d3ecc744222b702442b78136c7233766fa156ff0740a79fe10e->enter($__internal_cee000b88e136d3ecc744222b702442b78136c7233766fa156ff0740a79fe10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/settings.email.yaml"));

        // line 1
        echo "#
# This is popup help messages for the Admin Panel -> Settings -> Emails
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
default_email_templates:
    title: Default Email Template Set
    content: >
        Select <span class=\"doc-desc-title\">Email Template Set</span> used to send <span
        class=\"doc-desc-title\">Auto-Responses</span> and <span class=\"doc-desc-title\">Alerts</span> for various actions that can
        take place during a  Ticket’s lifetime.
        <br><br>
        Departments can be assigned a specific Email Template Set.
    links:
      - title: Manage Email Template Sets
        href: /scp/templates.php

default_system_email:
    title: Default Outgoing Email
    content: >
        Choose an email address from which outgoing emails are sent.
        <br><br>
        <span class=\"doc-desc-title\">Department</span> can set its own <span
        class=\"doc-desc-title\">email address</span> which will override what is set here.
    links:
      - title: Manage Email Addresses
        href: /scp/emails.php

default_alert_email:
    title: Default Alert Email
    content: >
        Choose an email address from which <span class=\"doc-desc-title\">Alerts &amp;
        Notices</span> are sent to Agents.
    links:
      - title: Manage Email Addresses
        href: /scp/emails.php

admins_email_address:
    title: Admin’s Email Address
    content: >
        Enter an adminstrator's email address to which <span
        class=\"doc-desc-title\">System Errors</span> and <span
        class=\"doc-desc-title\">New Ticket Alerts</span> (if enabled) are sent.
    links:
      - title: Manage Alerts & Notices
        href: /scp/settings.php?t=alerts

email_fetching:
    title: Email Fetching
    content: >
        Allow IMAP/POP polling for configured and enabled <span class=\"doc-desc-title\">Mail Boxes</span>.
    links:
      - title: Manage Mail Boxes
        href: /scp/emails.php

enable_autocron_fetch:
    title: Fetch Emails using Auto-cron
    content: >
        Enables periodic email fetching using an internal task manager
        triggered by Agents' activity.  <br><br> Please note that emails will not be
        fetched if no one is logged in to Staff Control Panel. External task scheduler
        is highly recommended for predictable fetch intervals.
    links:
      - title: Using External Task Scheduler
        href: http://osticket.com/wiki/POP3/IMAP_Setting_Guide#Schedule_Polling

strip_quoted_reply:
    title: Strip Quoted Reply
    content: >
        If enabled, this will remove preceding correspondence between email communications.
        <br><br>
        This feature is relationally dependent on the <span
        class=\"doc-desc-title\">Reply Separator Tag</span> below.

reply_separator_tag:
    title: Reply Separator Tag
    content: >
        This is a token indicating to the User to reply above the line.
        <br><br>
        <strong>Note:</strong> this is only relevant if <span
        class=\"doc-desc-title\">Strip Quoted Reply</span> is enabled above.

emailed_tickets_priority:
    title: Emailed Tickets Priority
    content: >
        Choose whether you would like the priority/importance option of the
        User's email (e.g. OutLook) to dictate the new ticket’s priority.
        <br><br>
        This setting can be overridden by a <span
        class=\"doc-desc-title\">Ticket Filter</span>.
    links:
      - title: Create &amp; Manage Ticket Filters
        href: /scp/filters.php

accept_all_emails:
    title: Accept All Emails
    content: >
        Accept emails from unknown Users.
        <br><br>
        Unchecking this setting will result in tickets getting rejected.

accept_email_collaborators:
    title: Accept Email Collaborators
    content: >
        Add email participants included in the <code><strong>To</strong></code>
        and <code><strong>CC</strong></code> fields as ticket collaborators.
        <br /><br />
        <em>Collaborators can always be added manually by Agents when
        viewing a ticket.</em>

default_mta:
    title: Default MTA
    content: >
        <span class=\"doc-desc-title\">Default MTA</span> takes care of
        email delivery process for outgoing emails without SMTP setting.

verify_email_addrs:
    title: Verify Email Addresses
    content: >
        Enable this option to check if the email address has a mail
        exchanger (MX) in the domain's DNS. This is useful to detect
        incorrectly typed email addresses. This is perfomed in addition to
        checking the email address wellformedness.
";
        
        $__internal_cee000b88e136d3ecc744222b702442b78136c7233766fa156ff0740a79fe10e->leave($__internal_cee000b88e136d3ecc744222b702442b78136c7233766fa156ff0740a79fe10e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/settings.email.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Settings -> Emails*/
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
/* default_email_templates:*/
/*     title: Default Email Template Set*/
/*     content: >*/
/*         Select <span class="doc-desc-title">Email Template Set</span> used to send <span*/
/*         class="doc-desc-title">Auto-Responses</span> and <span class="doc-desc-title">Alerts</span> for various actions that can*/
/*         take place during a  Ticket’s lifetime.*/
/*         <br><br>*/
/*         Departments can be assigned a specific Email Template Set.*/
/*     links:*/
/*       - title: Manage Email Template Sets*/
/*         href: /scp/templates.php*/
/* */
/* default_system_email:*/
/*     title: Default Outgoing Email*/
/*     content: >*/
/*         Choose an email address from which outgoing emails are sent.*/
/*         <br><br>*/
/*         <span class="doc-desc-title">Department</span> can set its own <span*/
/*         class="doc-desc-title">email address</span> which will override what is set here.*/
/*     links:*/
/*       - title: Manage Email Addresses*/
/*         href: /scp/emails.php*/
/* */
/* default_alert_email:*/
/*     title: Default Alert Email*/
/*     content: >*/
/*         Choose an email address from which <span class="doc-desc-title">Alerts &amp;*/
/*         Notices</span> are sent to Agents.*/
/*     links:*/
/*       - title: Manage Email Addresses*/
/*         href: /scp/emails.php*/
/* */
/* admins_email_address:*/
/*     title: Admin’s Email Address*/
/*     content: >*/
/*         Enter an adminstrator's email address to which <span*/
/*         class="doc-desc-title">System Errors</span> and <span*/
/*         class="doc-desc-title">New Ticket Alerts</span> (if enabled) are sent.*/
/*     links:*/
/*       - title: Manage Alerts & Notices*/
/*         href: /scp/settings.php?t=alerts*/
/* */
/* email_fetching:*/
/*     title: Email Fetching*/
/*     content: >*/
/*         Allow IMAP/POP polling for configured and enabled <span class="doc-desc-title">Mail Boxes</span>.*/
/*     links:*/
/*       - title: Manage Mail Boxes*/
/*         href: /scp/emails.php*/
/* */
/* enable_autocron_fetch:*/
/*     title: Fetch Emails using Auto-cron*/
/*     content: >*/
/*         Enables periodic email fetching using an internal task manager*/
/*         triggered by Agents' activity.  <br><br> Please note that emails will not be*/
/*         fetched if no one is logged in to Staff Control Panel. External task scheduler*/
/*         is highly recommended for predictable fetch intervals.*/
/*     links:*/
/*       - title: Using External Task Scheduler*/
/*         href: http://osticket.com/wiki/POP3/IMAP_Setting_Guide#Schedule_Polling*/
/* */
/* strip_quoted_reply:*/
/*     title: Strip Quoted Reply*/
/*     content: >*/
/*         If enabled, this will remove preceding correspondence between email communications.*/
/*         <br><br>*/
/*         This feature is relationally dependent on the <span*/
/*         class="doc-desc-title">Reply Separator Tag</span> below.*/
/* */
/* reply_separator_tag:*/
/*     title: Reply Separator Tag*/
/*     content: >*/
/*         This is a token indicating to the User to reply above the line.*/
/*         <br><br>*/
/*         <strong>Note:</strong> this is only relevant if <span*/
/*         class="doc-desc-title">Strip Quoted Reply</span> is enabled above.*/
/* */
/* emailed_tickets_priority:*/
/*     title: Emailed Tickets Priority*/
/*     content: >*/
/*         Choose whether you would like the priority/importance option of the*/
/*         User's email (e.g. OutLook) to dictate the new ticket’s priority.*/
/*         <br><br>*/
/*         This setting can be overridden by a <span*/
/*         class="doc-desc-title">Ticket Filter</span>.*/
/*     links:*/
/*       - title: Create &amp; Manage Ticket Filters*/
/*         href: /scp/filters.php*/
/* */
/* accept_all_emails:*/
/*     title: Accept All Emails*/
/*     content: >*/
/*         Accept emails from unknown Users.*/
/*         <br><br>*/
/*         Unchecking this setting will result in tickets getting rejected.*/
/* */
/* accept_email_collaborators:*/
/*     title: Accept Email Collaborators*/
/*     content: >*/
/*         Add email participants included in the <code><strong>To</strong></code>*/
/*         and <code><strong>CC</strong></code> fields as ticket collaborators.*/
/*         <br /><br />*/
/*         <em>Collaborators can always be added manually by Agents when*/
/*         viewing a ticket.</em>*/
/* */
/* default_mta:*/
/*     title: Default MTA*/
/*     content: >*/
/*         <span class="doc-desc-title">Default MTA</span> takes care of*/
/*         email delivery process for outgoing emails without SMTP setting.*/
/* */
/* verify_email_addrs:*/
/*     title: Verify Email Addresses*/
/*     content: >*/
/*         Enable this option to check if the email address has a mail*/
/*         exchanger (MX) in the domain's DNS. This is useful to detect*/
/*         incorrectly typed email addresses. This is perfomed in addition to*/
/*         checking the email address wellformedness.*/
/* */
