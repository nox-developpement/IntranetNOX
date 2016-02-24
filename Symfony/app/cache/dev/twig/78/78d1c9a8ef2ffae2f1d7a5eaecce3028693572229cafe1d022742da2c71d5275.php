<?php

/* support/include/i18n/en_US/help/tips/dashboard.staff_directory.yaml */
class __TwigTemplate_fd8c7a41d58f11ef30785c645436344155692eeb32120daa856951440b4f168c extends Twig_Template
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
        $__internal_68b521bd35b0f64858f766f63b009b27ad07561b337f2218986d83653eddaf7c = $this->env->getExtension("native_profiler");
        $__internal_68b521bd35b0f64858f766f63b009b27ad07561b337f2218986d83653eddaf7c->enter($__internal_68b521bd35b0f64858f766f63b009b27ad07561b337f2218986d83653eddaf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/dashboard.staff_directory.yaml"));

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
        
        $__internal_68b521bd35b0f64858f766f63b009b27ad07561b337f2218986d83653eddaf7c->leave($__internal_68b521bd35b0f64858f766f63b009b27ad07561b337f2218986d83653eddaf7c_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/dashboard.staff_directory.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
