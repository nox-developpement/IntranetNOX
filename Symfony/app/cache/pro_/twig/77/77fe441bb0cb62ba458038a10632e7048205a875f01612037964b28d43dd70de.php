<?php

/* support/include/i18n/en_US/help/tips/staff.team.yaml */
class __TwigTemplate_7c1250c8dea815071fcb1efc2143fbaa3e763e09fa43162df05fc2e78438fe45 extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Staff -> Teams
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
teams:
    title: Teams
    content: >
        Teams are one or more Agents teamed together for the purpose of
        ticket assignment. Team membership can span across Department
        boundaries.

status:
    title: Status
    content: >
        If <span class=\"doc-desc-opt\">Disabled</span>, this Team will not be
        available for ticket assignments nor receive Alerts &amp; Notices on
        previous assignments.

lead:
    title: Team Lead
    content: >
        A <span class=\"doc-desc-title\">Team</span> can have an appointed
        leader who can receive <span class=\"doc-desc-title\">Alerts &amp;
        Notices</span> separate from the members.
    links:
      - title: Configure Alerts &amp; Notices
        href: /scp/settings.php?t=alerts

assignment_alert:
    title: Assignment Alert
    content: >
        You may disable the <span class=\"doc-desc-title\">Ticket Assignment
        Alert</span> for tickets assigned to this Team.
    links:
      - title: Configure Alerts &amp; Notices
        href: /scp/settings.php?t=alerts

members:
    title: Team Members
    content: >
        Team membership is configured via the Agent profile.
    links:
      - title: Manage Staff
        href: /scp/staff.php
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.team.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Staff -> Teams*/
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
/* teams:*/
/*     title: Teams*/
/*     content: >*/
/*         Teams are one or more Agents teamed together for the purpose of*/
/*         ticket assignment. Team membership can span across Department*/
/*         boundaries.*/
/* */
/* status:*/
/*     title: Status*/
/*     content: >*/
/*         If <span class="doc-desc-opt">Disabled</span>, this Team will not be*/
/*         available for ticket assignments nor receive Alerts &amp; Notices on*/
/*         previous assignments.*/
/* */
/* lead:*/
/*     title: Team Lead*/
/*     content: >*/
/*         A <span class="doc-desc-title">Team</span> can have an appointed*/
/*         leader who can receive <span class="doc-desc-title">Alerts &amp;*/
/*         Notices</span> separate from the members.*/
/*     links:*/
/*       - title: Configure Alerts &amp; Notices*/
/*         href: /scp/settings.php?t=alerts*/
/* */
/* assignment_alert:*/
/*     title: Assignment Alert*/
/*     content: >*/
/*         You may disable the <span class="doc-desc-title">Ticket Assignment*/
/*         Alert</span> for tickets assigned to this Team.*/
/*     links:*/
/*       - title: Configure Alerts &amp; Notices*/
/*         href: /scp/settings.php?t=alerts*/
/* */
/* members:*/
/*     title: Team Members*/
/*     content: >*/
/*         Team membership is configured via the Agent profile.*/
/*     links:*/
/*       - title: Manage Staff*/
/*         href: /scp/staff.php*/
/* */
