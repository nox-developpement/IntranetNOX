<?php

/* support/include/i18n/en_US/help/tips/manage.sla.yaml */
class __TwigTemplate_4e0d8e23ae11be7b6e3cc09e07f4fc7afc13aa6309dc4d78ce951307a00fa6f0 extends Twig_Template
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
        $__internal_15d5874008a8f2a44ec78aeac5629ef4d6c831998749c4154fcefa42457e6040 = $this->env->getExtension("native_profiler");
        $__internal_15d5874008a8f2a44ec78aeac5629ef4d6c831998749c4154fcefa42457e6040->enter($__internal_15d5874008a8f2a44ec78aeac5629ef4d6c831998749c4154fcefa42457e6040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/manage.sla.yaml"));

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
        
        $__internal_15d5874008a8f2a44ec78aeac5629ef4d6c831998749c4154fcefa42457e6040->leave($__internal_15d5874008a8f2a44ec78aeac5629ef4d6c831998749c4154fcefa42457e6040_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/manage.sla.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
