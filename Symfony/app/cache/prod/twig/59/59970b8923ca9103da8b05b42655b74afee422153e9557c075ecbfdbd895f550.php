<?php

/* support/include/i18n/en_US/help/tips/manage.sla.yaml */
class __TwigTemplate_4b3dc330fb73b05b43ac505e06d54e4d29cfcba04dcebbb9f7e7842022bf596f extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Manage -> SLA Plan
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
name:
    title: Name
    content: >
        Choose a discriptive name for this <span class=\"doc-desc-title\">SLA Plan</span>
        that will reflect its purpose.

grace_period:
    title: Grace Period
    content: >
        Determine the number of hours after a ticket is created that it will
        be automatically marked as overdue.
        <br><br>
        <em>Hours are counted from ticket create time.</em>

transient:
    title: Transient
    content: >
        Transient SLAs are considered temporary and can be overridden by
        a non-transient SLA on <span class=\"doc-desc-opt\">Department</span>
        transfer or when its <span class=\"doc-desc-title\">Help Topic</span>
        is changed.
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/manage.sla.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Manage -> SLA Plan*/
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
/* name:*/
/*     title: Name*/
/*     content: >*/
/*         Choose a discriptive name for this <span class="doc-desc-title">SLA Plan</span>*/
/*         that will reflect its purpose.*/
/* */
/* grace_period:*/
/*     title: Grace Period*/
/*     content: >*/
/*         Determine the number of hours after a ticket is created that it will*/
/*         be automatically marked as overdue.*/
/*         <br><br>*/
/*         <em>Hours are counted from ticket create time.</em>*/
/* */
/* transient:*/
/*     title: Transient*/
/*     content: >*/
/*         Transient SLAs are considered temporary and can be overridden by*/
/*         a non-transient SLA on <span class="doc-desc-opt">Department</span>*/
/*         transfer or when its <span class="doc-desc-title">Help Topic</span>*/
/*         is changed.*/
/* */
