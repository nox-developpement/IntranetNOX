<?php

/* support/include/i18n/en_US/help/tips/settings.access.yaml */
class __TwigTemplate_31a7ce5a56c72352590126c4f112c874f72dccf5c0b971ad168ee8da6a462611 extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Settings -> System page
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
# Authentication settings
password_reset:
    title: Password Expiration Policy
    content: >
        Sets how often (in months) staff members will be required to change
        their password. If disabled (set to \"No expiration\"), passwords will
        not expire.

password_expiration_policy:
    title: Password Expiration Policy
    content: >
        Choose how often Agents will be required to change their password. If
        disabled (i.e., <span class=\"doc-desc-opt\">No Expiration</span>), passwords
        will not expire.

allow_password_resets:
    title: Allow Password Resets
    content: >
        Enable this feature if you would like to display the
        <span class=\"doc-desc-title\">Forgot My Password</span> link on the
        <span class=\"doc-desc-title\">Staff Log In Panel</span>
        after a failed log in attempt.

reset_token_expiration:
    title: Password Reset Window
    content: >
        Choose the duration (in minutes) for which the <span class=\"doc-desc-title\">
        Password Reset Tokens</span> will be valid. When an Agent requests a <span
        class=\"doc-desc-title\">Password Reset</span>, they are emailed a token that
        will permit the reset to take place.

staff_session_timeout:
    title: Staff Session Timeout
    content: >
        Choose the maximum idle time (in minutes) before an Agent is required to
        log in again.
        <br><br>
        If you would like to disable <span class=\"doc-desc-title\">Staff
        Session Timeouts</span>, enter 0.

client_session_timeout:
    title: User Session Timeout
    content: >
        Choose the maximum idle time (in minutes) before a User is required to
        log in again.
        <br><br>
        If you would like to disable <span
        class=\"doc-desc-title\">User Session Timeouts,</span> enter 0.

bind_staff_session_to_ip:
    title: Bind Staff Session to IP
    content: >
        Enable this if you want Agent to be remembered by their current IP
        upon Log In.
        <br><br>
        This setting is not recommened for users assigned IP addreses dynamically.

registration_method:
    title: Registration Options
    content: >
        <span class=\"doc-desc-title\">Registration Method</span> and <span
        class=\"doc-desc-title\">Registration Required</span> are used
        together to configure how users register and access the web portal
        of your help desk. The table below summarizes how the two settings
        are interpreted by the system.
        <table border=\"1\" cellpadding=\"2px\" cellspacing=\"0\" style=\"margin-top:7px\"
            ><tbody style=\"vertical-align:top;\">
            <tr><th>Registration Required</th>
                <th>Registration Method</th>
                <th>Result</th></tr>
            <tr><td>No</td><td>Public</td>
                <td>Registration encouraged but not required for new
                    tickets.</td></tr>
            <tr><td>Yes</td><td>Public</td>
                <td>Registration and login are required for new tickets</td></tr>
            <tr><td>No</td><td>Private</td>
                <td>Anyone can create a ticket, but only agents
                    can register accounts</td></tr>
            <tr><td>Yes</td><td>Private</td>
                <td>User access is by invitation only</td></tr>
            <tr><td>No</td><td>Disabled</td>
                <td>No one can register for an account, but anyone can
                    create a ticket. <em>This was how osTicket functioned
                    prior to 1.9</em></td></tr>
            <tr><td>Yes</td><td>Disabled</td>
                <td>Disable new tickets via web portal</td></tr>
        </tbody></table>

client_verify_email:
    title: Require Email Verification
    content: >
        Disable this option to give your users immediate access to tickets
        via the \"Check Ticket Status\" login page in the client portal. If
        enabled, (which is the default), users will be required to receive
        an email and follow a link in the email to view the ticket.
        <br><br>
        Disabling email verification might allow third-parties (e.g. ticket
        collaborators) to impersonate the ticket owner.
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/settings.access.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Settings -> System page*/
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
/* # Authentication settings*/
/* password_reset:*/
/*     title: Password Expiration Policy*/
/*     content: >*/
/*         Sets how often (in months) staff members will be required to change*/
/*         their password. If disabled (set to "No expiration"), passwords will*/
/*         not expire.*/
/* */
/* password_expiration_policy:*/
/*     title: Password Expiration Policy*/
/*     content: >*/
/*         Choose how often Agents will be required to change their password. If*/
/*         disabled (i.e., <span class="doc-desc-opt">No Expiration</span>), passwords*/
/*         will not expire.*/
/* */
/* allow_password_resets:*/
/*     title: Allow Password Resets*/
/*     content: >*/
/*         Enable this feature if you would like to display the*/
/*         <span class="doc-desc-title">Forgot My Password</span> link on the*/
/*         <span class="doc-desc-title">Staff Log In Panel</span>*/
/*         after a failed log in attempt.*/
/* */
/* reset_token_expiration:*/
/*     title: Password Reset Window*/
/*     content: >*/
/*         Choose the duration (in minutes) for which the <span class="doc-desc-title">*/
/*         Password Reset Tokens</span> will be valid. When an Agent requests a <span*/
/*         class="doc-desc-title">Password Reset</span>, they are emailed a token that*/
/*         will permit the reset to take place.*/
/* */
/* staff_session_timeout:*/
/*     title: Staff Session Timeout*/
/*     content: >*/
/*         Choose the maximum idle time (in minutes) before an Agent is required to*/
/*         log in again.*/
/*         <br><br>*/
/*         If you would like to disable <span class="doc-desc-title">Staff*/
/*         Session Timeouts</span>, enter 0.*/
/* */
/* client_session_timeout:*/
/*     title: User Session Timeout*/
/*     content: >*/
/*         Choose the maximum idle time (in minutes) before a User is required to*/
/*         log in again.*/
/*         <br><br>*/
/*         If you would like to disable <span*/
/*         class="doc-desc-title">User Session Timeouts,</span> enter 0.*/
/* */
/* bind_staff_session_to_ip:*/
/*     title: Bind Staff Session to IP*/
/*     content: >*/
/*         Enable this if you want Agent to be remembered by their current IP*/
/*         upon Log In.*/
/*         <br><br>*/
/*         This setting is not recommened for users assigned IP addreses dynamically.*/
/* */
/* registration_method:*/
/*     title: Registration Options*/
/*     content: >*/
/*         <span class="doc-desc-title">Registration Method</span> and <span*/
/*         class="doc-desc-title">Registration Required</span> are used*/
/*         together to configure how users register and access the web portal*/
/*         of your help desk. The table below summarizes how the two settings*/
/*         are interpreted by the system.*/
/*         <table border="1" cellpadding="2px" cellspacing="0" style="margin-top:7px"*/
/*             ><tbody style="vertical-align:top;">*/
/*             <tr><th>Registration Required</th>*/
/*                 <th>Registration Method</th>*/
/*                 <th>Result</th></tr>*/
/*             <tr><td>No</td><td>Public</td>*/
/*                 <td>Registration encouraged but not required for new*/
/*                     tickets.</td></tr>*/
/*             <tr><td>Yes</td><td>Public</td>*/
/*                 <td>Registration and login are required for new tickets</td></tr>*/
/*             <tr><td>No</td><td>Private</td>*/
/*                 <td>Anyone can create a ticket, but only agents*/
/*                     can register accounts</td></tr>*/
/*             <tr><td>Yes</td><td>Private</td>*/
/*                 <td>User access is by invitation only</td></tr>*/
/*             <tr><td>No</td><td>Disabled</td>*/
/*                 <td>No one can register for an account, but anyone can*/
/*                     create a ticket. <em>This was how osTicket functioned*/
/*                     prior to 1.9</em></td></tr>*/
/*             <tr><td>Yes</td><td>Disabled</td>*/
/*                 <td>Disable new tickets via web portal</td></tr>*/
/*         </tbody></table>*/
/* */
/* client_verify_email:*/
/*     title: Require Email Verification*/
/*     content: >*/
/*         Disable this option to give your users immediate access to tickets*/
/*         via the "Check Ticket Status" login page in the client portal. If*/
/*         enabled, (which is the default), users will be required to receive*/
/*         an email and follow a link in the email to view the ticket.*/
/*         <br><br>*/
/*         Disabling email verification might allow third-parties (e.g. ticket*/
/*         collaborators) to impersonate the ticket owner.*/
/* */
