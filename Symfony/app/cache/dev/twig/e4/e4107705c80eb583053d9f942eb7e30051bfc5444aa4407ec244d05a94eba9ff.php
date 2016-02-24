<?php

/* support/include/i18n/en_US/help/tips/staff.yaml */
class __TwigTemplate_d33e4d93120bcf7f64c7aa9434b1582776f5ce464ff5ab39fefbaa7736345e94 extends Twig_Template
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
        $__internal_df4e72cefc27b3f01a3f01bd3ed5e6b8d75976d9a138f1e47375ede67f164c83 = $this->env->getExtension("native_profiler");
        $__internal_df4e72cefc27b3f01a3f01bd3ed5e6b8d75976d9a138f1e47375ede67f164c83->enter($__internal_df4e72cefc27b3f01a3f01bd3ed5e6b8d75976d9a138f1e47375ede67f164c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/staff.yaml"));

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
        
        $__internal_df4e72cefc27b3f01a3f01bd3ed5e6b8d75976d9a138f1e47375ede67f164c83->leave($__internal_df4e72cefc27b3f01a3f01bd3ed5e6b8d75976d9a138f1e47375ede67f164c83_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
