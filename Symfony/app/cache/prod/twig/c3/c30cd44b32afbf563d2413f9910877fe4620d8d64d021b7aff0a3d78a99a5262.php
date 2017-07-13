<?php

/* support/include/i18n/en_US/help/tips/staff.staff_members.yaml */
class __TwigTemplate_b40766e291041a16a2e87c16128b118144d7572536b5c7d3997a2a391706947d extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Staff -> Staff Members
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
staff_members:
    title: Staff Members
    content: >
        The following table displays the results of the filter above. If not filter
        settings are chosen, then all <span class=\"doc-desc-title\">Agent</span>
        (Staff) <span class=\"doc-desc-title\">Members</span> are displayed, and
        broken up by pages. See the pages section below to navigate through more
        results.

status:
    title: Status
    content: >
        This will display whether the <span class=\"doc-desc-title\">Agent</span> is
        Locked, Active, or Active (Vacation).
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.staff_members.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/staff.staff_members.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\staff.staff_members.yaml");
    }
}
