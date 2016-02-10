<?php

/* support/include/i18n/en_US/help/tips/dashboard.staff_directory.yaml */
class __TwigTemplate_229fd93cbcefbca4f32ed6897e8c980af7d75c1d1a1b4784f1063d1b74435ac8 extends Twig_Template
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
}
/* #*/
/* # This is popup help messages for the Staff Panel -> Dashboard -> Staff Directory*/
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
/* staff_members:*/
/*     title: Staff Members*/
/*     content: >*/
/*         The following table displays the results of the filter above it. If no filter*/
/*         settings are chosen, then all <span class="doc-desc-title">Staff Members*/
/*         </span> are displayed, and broken up by pages. See the pages section*/
/*          below to navigate through more results.*/
/* */
/* apply_filtering_criteria:*/
/*     title: Apply Filtering Criteria*/
/*     content: >*/
/*         Choose a <span class="doc-desc-title">Department</span> that is relevant to your */
/*         current interests. You may also perform a search for a specific Agent.*/
/* */
