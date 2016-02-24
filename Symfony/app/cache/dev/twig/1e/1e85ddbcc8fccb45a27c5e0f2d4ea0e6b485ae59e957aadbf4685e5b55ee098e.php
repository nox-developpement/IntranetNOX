<?php

/* support/include/i18n/en_US/help/tips/dashboard.my_profile.yaml */
class __TwigTemplate_983c7f85c67f5822ce3a0693e1594beca534232c8db3a4471dc9f47479083e2c extends Twig_Template
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
        $__internal_a9b4938a8b89242e947c045e4d9cd693f2404e004a6e102dcbeb61bf733cc967 = $this->env->getExtension("native_profiler");
        $__internal_a9b4938a8b89242e947c045e4d9cd693f2404e004a6e102dcbeb61bf733cc967->enter($__internal_a9b4938a8b89242e947c045e4d9cd693f2404e004a6e102dcbeb61bf733cc967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/dashboard.my_profile.yaml"));

        // line 1
        echo "#
# This is popup help messages for the Staff Panel -> Dashboard -> My Profile
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
contact_information:
    title: Contact Information
    content: >

username:
    title: Username
    content: >
        Only those Agents with Admin status may change a username. If you are an
        Agent with Admin privileges, you may accomplish this by selecting an Agent
        to edit from the <span class=\"doc-desc-title\">Staff Members</span> table.
    links:
      - title: Change a username as an Administrator
        href: /scp/staff.php

time_zone:
    title: Time Zone
    content: >

daylight_saving:
    title: Daylight Saving
    content: >

maximum_page_size:
    title: Maximum Page Size
    content: >

auto_refresh_rate:
    title: Auto Refresh Rate
    content: >

default_signature:
    title: Default Signature
    content: >

default_paper_size:
    title: Default Paper Size
    content: >

show_assigned_tickets:
    title: Show Assigned Tickets
    content: >
        Enable this to hide your name from the <span class=\"doc-desc-title\">Open 
        Tickets</span> queue for those tickets which you have been assigned. Upon 
        hiding, the <span class=\"doc-desc-title\">Department</span> name to which
        you belong will replace where your name would normally be displayed.

password:
    title: Password
    content: >

current_password:
    title: Current Password
    content: >

new_password:
    title: New Password
    content: >

confirm_new_password:
    title: Confirm New Password
    content: >

signature:
    title: Signature
    content: >
        Create an optional <span class=\"doc-desc-title\">Signature</span> 
        that perhaps appears at the end of your Ticket Responses. Whether this 
        <span class=\"doc-desc-title\">Signature</span> appears, or not, depends 
        on the <span class=\"doc-desc-title\">Email Template</span> that will be 
        used in a Ticket Response. 
    links:
      - title: Create Emails Templates in the Admin Panel
        href: /scp/templates.php
";
        
        $__internal_a9b4938a8b89242e947c045e4d9cd693f2404e004a6e102dcbeb61bf733cc967->leave($__internal_a9b4938a8b89242e947c045e4d9cd693f2404e004a6e102dcbeb61bf733cc967_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/dashboard.my_profile.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Staff Panel -> Dashboard -> My Profile*/
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
/* contact_information:*/
/*     title: Contact Information*/
/*     content: >*/
/* */
/* username:*/
/*     title: Username*/
/*     content: >*/
/*         Only those Agents with Admin status may change a username. If you are an*/
/*         Agent with Admin privileges, you may accomplish this by selecting an Agent*/
/*         to edit from the <span class="doc-desc-title">Staff Members</span> table.*/
/*     links:*/
/*       - title: Change a username as an Administrator*/
/*         href: /scp/staff.php*/
/* */
/* time_zone:*/
/*     title: Time Zone*/
/*     content: >*/
/* */
/* daylight_saving:*/
/*     title: Daylight Saving*/
/*     content: >*/
/* */
/* maximum_page_size:*/
/*     title: Maximum Page Size*/
/*     content: >*/
/* */
/* auto_refresh_rate:*/
/*     title: Auto Refresh Rate*/
/*     content: >*/
/* */
/* default_signature:*/
/*     title: Default Signature*/
/*     content: >*/
/* */
/* default_paper_size:*/
/*     title: Default Paper Size*/
/*     content: >*/
/* */
/* show_assigned_tickets:*/
/*     title: Show Assigned Tickets*/
/*     content: >*/
/*         Enable this to hide your name from the <span class="doc-desc-title">Open */
/*         Tickets</span> queue for those tickets which you have been assigned. Upon */
/*         hiding, the <span class="doc-desc-title">Department</span> name to which*/
/*         you belong will replace where your name would normally be displayed.*/
/* */
/* password:*/
/*     title: Password*/
/*     content: >*/
/* */
/* current_password:*/
/*     title: Current Password*/
/*     content: >*/
/* */
/* new_password:*/
/*     title: New Password*/
/*     content: >*/
/* */
/* confirm_new_password:*/
/*     title: Confirm New Password*/
/*     content: >*/
/* */
/* signature:*/
/*     title: Signature*/
/*     content: >*/
/*         Create an optional <span class="doc-desc-title">Signature</span> */
/*         that perhaps appears at the end of your Ticket Responses. Whether this */
/*         <span class="doc-desc-title">Signature</span> appears, or not, depends */
/*         on the <span class="doc-desc-title">Email Template</span> that will be */
/*         used in a Ticket Response. */
/*     links:*/
/*       - title: Create Emails Templates in the Admin Panel*/
/*         href: /scp/templates.php*/
/* */
