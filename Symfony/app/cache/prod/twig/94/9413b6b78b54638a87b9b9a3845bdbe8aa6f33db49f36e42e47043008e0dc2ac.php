<?php

/* support/include/i18n/en_US/help/tips/staff.yaml */
class __TwigTemplate_3d58181d54ba41b58b6a2383af60bbf098bc64c8c9c1b55486806b0d2136cc0c extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/staff.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\staff.yaml");
    }
}
