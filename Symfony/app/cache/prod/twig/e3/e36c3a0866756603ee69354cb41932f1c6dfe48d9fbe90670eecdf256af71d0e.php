<?php

/* support/include/i18n/en_US/help/tips/staff.groups.yaml */
class __TwigTemplate_f61759ee8d25b457140ba16c5806b87426b7addfffe5bf109f12573c9b8ab466 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.groups.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/staff.groups.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\staff.groups.yaml");
    }
}
