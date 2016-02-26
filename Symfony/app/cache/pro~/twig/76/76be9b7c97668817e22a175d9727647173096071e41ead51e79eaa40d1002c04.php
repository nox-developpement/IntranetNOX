<?php

/* support/include/i18n/en_US/help/tips/staff.yaml */
class __TwigTemplate_55ad2c6d9592baac4d03db5f356a43393a825cd7302f0be460c4f75f5f1a90c2 extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Staff
#
# Fields:
# title - Shown in bold at the top of the popover window
# content - The body of the help popover
#
# The key names such as 'helpdesk_name' should not be translated as they
# must match the HTML #ids put into the page template.
#
---
signature:
    title: Staff Signature Line
    content: |
        Create staff’s signature for response to tickets. This signature
        will appear as an option at the bottom of a ticket response

type:
    title: Account Type
    content: |
        Admins have the privilege of accessing the Admin Panel. Staff only
        have access to manage tickets and the knowledge base

group:
    title: Assigned Group
    content: |
        Group membership defines the staff’s role in the system. Visit the
        group management page to define what access this staff has to the
        help desk

notes:
    title: Internal Notes
    content: |
        Place internal notes regarding staff; notes are only visible to
        staff whose account type is Admin
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Staff*/
/* #*/
/* # Fields:*/
/* # title - Shown in bold at the top of the popover window*/
/* # content - The body of the help popover*/
/* #*/
/* # The key names such as 'helpdesk_name' should not be translated as they*/
/* # must match the HTML #ids put into the page template.*/
/* #*/
/* ---*/
/* signature:*/
/*     title: Staff Signature Line*/
/*     content: |*/
/*         Create staff’s signature for response to tickets. This signature*/
/*         will appear as an option at the bottom of a ticket response*/
/* */
/* type:*/
/*     title: Account Type*/
/*     content: |*/
/*         Admins have the privilege of accessing the Admin Panel. Staff only*/
/*         have access to manage tickets and the knowledge base*/
/* */
/* group:*/
/*     title: Assigned Group*/
/*     content: |*/
/*         Group membership defines the staff’s role in the system. Visit the*/
/*         group management page to define what access this staff has to the*/
/*         help desk*/
/* */
/* notes:*/
/*     title: Internal Notes*/
/*     content: |*/
/*         Place internal notes regarding staff; notes are only visible to*/
/*         staff whose account type is Admin*/
/* */
