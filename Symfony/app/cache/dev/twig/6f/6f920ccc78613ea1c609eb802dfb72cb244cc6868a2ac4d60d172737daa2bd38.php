<?php

/* support/include/i18n/en_US/help/tips/staff.staff_members.yaml */
class __TwigTemplate_5d11d595be6a4486c7a3f648a934cdcb173a3acd7832d22fc879773d3702856e extends Twig_Template
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
        $__internal_7a1fa8a4df3d8f1316483688a179f2bbc340557bdcd9cb47ef854646cafc10cd = $this->env->getExtension("native_profiler");
        $__internal_7a1fa8a4df3d8f1316483688a179f2bbc340557bdcd9cb47ef854646cafc10cd->enter($__internal_7a1fa8a4df3d8f1316483688a179f2bbc340557bdcd9cb47ef854646cafc10cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/staff.staff_members.yaml"));

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
        
        $__internal_7a1fa8a4df3d8f1316483688a179f2bbc340557bdcd9cb47ef854646cafc10cd->leave($__internal_7a1fa8a4df3d8f1316483688a179f2bbc340557bdcd9cb47ef854646cafc10cd_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/staff.staff_members.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Staff -> Staff Members*/
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
/*         The following table displays the results of the filter above. If not filter*/
/*         settings are chosen, then all <span class="doc-desc-title">Agent</span>*/
/*         (Staff) <span class="doc-desc-title">Members</span> are displayed, and*/
/*         broken up by pages. See the pages section below to navigate through more*/
/*         results.*/
/* */
/* status:*/
/*     title: Status*/
/*     content: >*/
/*         This will display whether the <span class="doc-desc-title">Agent</span> is*/
/*         Locked, Active, or Active (Vacation).*/
/* */
