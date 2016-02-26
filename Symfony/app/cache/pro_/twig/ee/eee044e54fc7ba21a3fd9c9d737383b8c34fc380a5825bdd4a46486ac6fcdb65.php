<?php

/* support/include/i18n/en_US/help/tips/staff.departments.yaml */
class __TwigTemplate_588a11f55247153bd7fb431971c1494e528dcfc3cce483de30eae3ff8c6f1148 extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Staff -> Departments
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
        If the Department’s Type is Private, then the Department Signature will not be available on response nor will the department assignment show from the Client Portal.

dept_manager:
    title: Department Manager
    content: >
        You may choose an Agent as a Department Manager to receive Alerts & Notices for tickets in departments. 
\t\tAgents do not have to be members of the Department to be the Manager of the Department
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.departments.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Staff -> Departments*/
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
/*         If the Department’s Type is Private, then the Department Signature will not be available on response nor will the department assignment show from the Client Portal.*/
/* */
/* dept_manager:*/
/*     title: Department Manager*/
/*     content: >*/
/*         You may choose an Agent as a Department Manager to receive Alerts & Notices for tickets in departments. */
/* 		Agents do not have to be members of the Department to be the Manager of the Department*/
/* */
