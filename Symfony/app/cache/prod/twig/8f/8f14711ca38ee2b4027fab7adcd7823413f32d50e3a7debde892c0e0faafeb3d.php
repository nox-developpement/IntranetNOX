<?php

/* support/include/i18n/en_US/help/tips/manage.sla.yaml */
class __TwigTemplate_b8d057aae66de576e8cccb84ebfa70e3624688e5ae5147ee12fe5ef50110b8dd extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/manage.sla.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\manage.sla.yaml");
    }
}
