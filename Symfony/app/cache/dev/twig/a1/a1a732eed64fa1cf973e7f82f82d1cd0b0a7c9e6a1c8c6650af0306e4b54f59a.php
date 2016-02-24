<?php

/* support/include/i18n/en_US/help/tips/staff.groups.yaml */
class __TwigTemplate_e3252ec2b53dd5b410abd337f9d10dd7fd91baf96076fd320f6db5a95595a370 extends Twig_Template
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
        $__internal_44ddde6959504968dff9903932c19a13c5b56181f1f965ca3a29209293f8806b = $this->env->getExtension("native_profiler");
        $__internal_44ddde6959504968dff9903932c19a13c5b56181f1f965ca3a29209293f8806b->enter($__internal_44ddde6959504968dff9903932c19a13c5b56181f1f965ca3a29209293f8806b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/staff.groups.yaml"));

        // line 1
        echo "#
# This is popup help messages for the Admin Panel -> Staff -> Add New Group  -> User Group Form
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
groups:
    title: Groups
    content: >
        Groups are used to define an Agent's permissions in the help desk.
        Groups can also grant access to Departments other than an Agent's
        primary Department.

status:
    title: Status
    content: >
        If <span class=\"doc-desc-opt\">Disabled</span>, Agents assigned to
        this Group cannot sign in and will not receive Department Alerts
        &amp; Notices.

department_access:
    title: Department Access
    content: >
        Check all departments to which the Group members are allowed access.
";
        
        $__internal_44ddde6959504968dff9903932c19a13c5b56181f1f965ca3a29209293f8806b->leave($__internal_44ddde6959504968dff9903932c19a13c5b56181f1f965ca3a29209293f8806b_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.groups.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Staff -> Add New Group  -> User Group Form*/
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
/* groups:*/
/*     title: Groups*/
/*     content: >*/
/*         Groups are used to define an Agent's permissions in the help desk.*/
/*         Groups can also grant access to Departments other than an Agent's*/
/*         primary Department.*/
/* */
/* status:*/
/*     title: Status*/
/*     content: >*/
/*         If <span class="doc-desc-opt">Disabled</span>, Agents assigned to*/
/*         this Group cannot sign in and will not receive Department Alerts*/
/*         &amp; Notices.*/
/* */
/* department_access:*/
/*     title: Department Access*/
/*     content: >*/
/*         Check all departments to which the Group members are allowed access.*/
/* */
