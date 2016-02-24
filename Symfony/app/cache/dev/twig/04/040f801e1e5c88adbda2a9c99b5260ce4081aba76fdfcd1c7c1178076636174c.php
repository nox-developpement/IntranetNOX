<?php

/* support/include/i18n/en_US/help/tips/staff.departments.yaml */
class __TwigTemplate_17889c8fe82ade87b23496a4bac4d90d749361654d7d0aa5225c51b05aabd5ad extends Twig_Template
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
        $__internal_a6f0918951b16d7c5c8598af33516883860e3f7b6fdf883e1cca0684358ddd94 = $this->env->getExtension("native_profiler");
        $__internal_a6f0918951b16d7c5c8598af33516883860e3f7b6fdf883e1cca0684358ddd94->enter($__internal_a6f0918951b16d7c5c8598af33516883860e3f7b6fdf883e1cca0684358ddd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/staff.departments.yaml"));

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
        
        $__internal_a6f0918951b16d7c5c8598af33516883860e3f7b6fdf883e1cca0684358ddd94->leave($__internal_a6f0918951b16d7c5c8598af33516883860e3f7b6fdf883e1cca0684358ddd94_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.departments.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
