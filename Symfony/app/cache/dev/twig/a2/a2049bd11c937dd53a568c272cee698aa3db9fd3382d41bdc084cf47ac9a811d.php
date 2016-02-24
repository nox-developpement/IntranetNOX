<?php

/* support/include/i18n/en_US/help/tips/staff.team.yaml */
class __TwigTemplate_3a4b8cfc7f0209051a3c19e03b3128e1a9565e001de41625e39bc8b1cd3ce617 extends Twig_Template
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
        $__internal_41b440fcfd6c254043954fbdba39e54fee87c2d7eee5983edd97f9d5afc1b188 = $this->env->getExtension("native_profiler");
        $__internal_41b440fcfd6c254043954fbdba39e54fee87c2d7eee5983edd97f9d5afc1b188->enter($__internal_41b440fcfd6c254043954fbdba39e54fee87c2d7eee5983edd97f9d5afc1b188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/staff.team.yaml"));

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
        
        $__internal_41b440fcfd6c254043954fbdba39e54fee87c2d7eee5983edd97f9d5afc1b188->leave($__internal_41b440fcfd6c254043954fbdba39e54fee87c2d7eee5983edd97f9d5afc1b188_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.team.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
