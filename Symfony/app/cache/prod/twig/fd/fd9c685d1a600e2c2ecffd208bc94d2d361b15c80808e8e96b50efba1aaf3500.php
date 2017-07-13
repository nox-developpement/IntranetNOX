<?php

/* support/include/i18n/en_US/help/tips/dashboard.staff_directory.yaml */
class __TwigTemplate_9da6110f3c88d98058e97bdeb52e2d0522024c6e0d921bee73a97209fed5f675 extends Twig_Template
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
# This is popup help messages for the Staff Panel -> Dashboard -> Staff Directory
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
        The following table displays the results of the filter above it. If no filter
        settings are chosen, then all <span class=\"doc-desc-title\">Staff Members
        </span> are displayed, and broken up by pages. See the pages section
         below to navigate through more results.

apply_filtering_criteria:
    title: Apply Filtering Criteria
    content: >
        Choose a <span class=\"doc-desc-title\">Department</span> that is relevant to your 
        current interests. You may also perform a search for a specific Agent.
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/dashboard.staff_directory.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/dashboard.staff_directory.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\dashboard.staff_directory.yaml");
    }
}
