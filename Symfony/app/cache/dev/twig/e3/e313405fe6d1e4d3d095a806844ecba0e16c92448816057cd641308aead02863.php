<?php

/* support/include/i18n/en_US/help/tips/staff.agent.yaml */
class __TwigTemplate_929ab207a5368d5304a242d4946d0a2b0c5659a16e6fd8ce5906af1f9293ab94 extends Twig_Template
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
        $__internal_20688d9bd55ede0fca98544ac47728e54f1e94c31b146a1147d5bfbc8aa8e8ae = $this->env->getExtension("native_profiler");
        $__internal_20688d9bd55ede0fca98544ac47728e54f1e94c31b146a1147d5bfbc8aa8e8ae->enter($__internal_20688d9bd55ede0fca98544ac47728e54f1e94c31b146a1147d5bfbc8aa8e8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/staff.agent.yaml"));

        // line 1
        echo "#
# This is popup help messages for the Admin Panel -> Staff -> Add Staff Form
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
username:
    title: Username
    content: >
        Please choose an Agent <span class=\"doc-desc-title\">username</span>
        that is unique to your <span class=\"doc-desc-title\">Help
        Desk</span>.

email_address:
    title: Email Address
    content: >
        Enter Agent's email that will receive <span
        class=\"doc-desc-title\">Alerts &amp; Notices</span> from the <span
        class=\"doc-desc-title\">Help Desk</span>.
\t\t<br><br>
\t\tStaff can sign in into the staff control panel with either username or email address.

welcome_email:
    title: Welcome Email
    content: >
        Send the new Agent an account access link from which the Agent will
        be able to set thier own password. If unchecked, you will need to set password
        and communicate the log-in information to the new staff.

account_password:
    title: Account Password
    content: >
        As an <span class=\"doc-desc-title\">administrator</span>, you may
        change an Agent’s password.

forced_password_change:
    title: Forced Password Change
    content: >
        Enable this if you would like to force the new Agent to change
        their own password upon next log-in.

agents_signature:
    title: Agent’s Signature
    content: >
        Create a signature for the Agent which can be selected when replying to a ticket.

account_status:
    title: Account Status
    content: >
        If the Agent's status is <span
        class=\"doc-desc-opt\">Locked</span>, they will not be able to
        sign in to the help desk.

assigned_group:
    title: Assigned Group
    content: >
        The <span class=\"doc-desc-title\">Group</span> that you choose for
        this Agent to belong will determine what permissions the Agent has
        within the <span class=\"doc-desc-title\">Help Desk</span>.
    links:
      - title: Manage Groups
        href: /scp/groups.php

primary_department:
    title: Primary Department
    content: >
        Choose the primary <span class=\"doc-desc-title\">department</span> to which this Agent belongs.

    links:
      - title: Manage Departments
        href: /scp/departments.php

daylight_saving:
    title: Daylight Saving
    content: >
        Enable this feature if you would like Daylight Saving to automatically
        come into play for this Agent’s time zone.

limited_access:
    title: Limited Access
    content: >
        If enabled, the Agent will only have access to tickets assigned directly or via the Team.

directory_listing:
    title: Directory Listing
    content: >
        Enable this if you would like to list this Agent in the <span
        class=\"doc-desc-title\">Staff Directory</span>.
    links:
      - title: Visit the Staff Directory
        href: /scp/directory.php

vacation_mode:
    title: Vacation Mode
    content: >
        If you change the Agent’s status to <span
        class=\"doc-desc-opt\">Vacation Mode</span>, the Agent will not
        receive any <span class=\"doc-desc-title\">Alerts &amp; Notices</span>
        nor be available for tickets assignment.

";
        
        $__internal_20688d9bd55ede0fca98544ac47728e54f1e94c31b146a1147d5bfbc8aa8e8ae->leave($__internal_20688d9bd55ede0fca98544ac47728e54f1e94c31b146a1147d5bfbc8aa8e8ae_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.agent.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Staff -> Add Staff Form*/
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
/* username:*/
/*     title: Username*/
/*     content: >*/
/*         Please choose an Agent <span class="doc-desc-title">username</span>*/
/*         that is unique to your <span class="doc-desc-title">Help*/
/*         Desk</span>.*/
/* */
/* email_address:*/
/*     title: Email Address*/
/*     content: >*/
/*         Enter Agent's email that will receive <span*/
/*         class="doc-desc-title">Alerts &amp; Notices</span> from the <span*/
/*         class="doc-desc-title">Help Desk</span>.*/
/* 		<br><br>*/
/* 		Staff can sign in into the staff control panel with either username or email address.*/
/* */
/* welcome_email:*/
/*     title: Welcome Email*/
/*     content: >*/
/*         Send the new Agent an account access link from which the Agent will*/
/*         be able to set thier own password. If unchecked, you will need to set password*/
/*         and communicate the log-in information to the new staff.*/
/* */
/* account_password:*/
/*     title: Account Password*/
/*     content: >*/
/*         As an <span class="doc-desc-title">administrator</span>, you may*/
/*         change an Agent’s password.*/
/* */
/* forced_password_change:*/
/*     title: Forced Password Change*/
/*     content: >*/
/*         Enable this if you would like to force the new Agent to change*/
/*         their own password upon next log-in.*/
/* */
/* agents_signature:*/
/*     title: Agent’s Signature*/
/*     content: >*/
/*         Create a signature for the Agent which can be selected when replying to a ticket.*/
/* */
/* account_status:*/
/*     title: Account Status*/
/*     content: >*/
/*         If the Agent's status is <span*/
/*         class="doc-desc-opt">Locked</span>, they will not be able to*/
/*         sign in to the help desk.*/
/* */
/* assigned_group:*/
/*     title: Assigned Group*/
/*     content: >*/
/*         The <span class="doc-desc-title">Group</span> that you choose for*/
/*         this Agent to belong will determine what permissions the Agent has*/
/*         within the <span class="doc-desc-title">Help Desk</span>.*/
/*     links:*/
/*       - title: Manage Groups*/
/*         href: /scp/groups.php*/
/* */
/* primary_department:*/
/*     title: Primary Department*/
/*     content: >*/
/*         Choose the primary <span class="doc-desc-title">department</span> to which this Agent belongs.*/
/* */
/*     links:*/
/*       - title: Manage Departments*/
/*         href: /scp/departments.php*/
/* */
/* daylight_saving:*/
/*     title: Daylight Saving*/
/*     content: >*/
/*         Enable this feature if you would like Daylight Saving to automatically*/
/*         come into play for this Agent’s time zone.*/
/* */
/* limited_access:*/
/*     title: Limited Access*/
/*     content: >*/
/*         If enabled, the Agent will only have access to tickets assigned directly or via the Team.*/
/* */
/* directory_listing:*/
/*     title: Directory Listing*/
/*     content: >*/
/*         Enable this if you would like to list this Agent in the <span*/
/*         class="doc-desc-title">Staff Directory</span>.*/
/*     links:*/
/*       - title: Visit the Staff Directory*/
/*         href: /scp/directory.php*/
/* */
/* vacation_mode:*/
/*     title: Vacation Mode*/
/*     content: >*/
/*         If you change the Agent’s status to <span*/
/*         class="doc-desc-opt">Vacation Mode</span>, the Agent will not*/
/*         receive any <span class="doc-desc-title">Alerts &amp; Notices</span>*/
/*         nor be available for tickets assignment.*/
/* */
/* */
