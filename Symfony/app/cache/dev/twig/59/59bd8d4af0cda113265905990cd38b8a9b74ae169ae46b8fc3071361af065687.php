<?php

/* support/include/i18n/en_US/help/tips/tickets.queue.yaml */
class __TwigTemplate_6992d3c8945763bb3c0a00dcada2edfe1ea99a55b793044f663e39b0fb879657 extends Twig_Template
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
        $__internal_8fa255f31b55fa1f4d58495a46362ba97bd578a3e7faf6aae29e01b5a7b15f86 = $this->env->getExtension("native_profiler");
        $__internal_8fa255f31b55fa1f4d58495a46362ba97bd578a3e7faf6aae29e01b5a7b15f86->enter($__internal_8fa255f31b55fa1f4d58495a46362ba97bd578a3e7faf6aae29e01b5a7b15f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/tickets.queue.yaml"));

        // line 1
        echo "#
# This is popup help messages for the Staff Panel -> Tickets -> Open
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
search_field:
    title: Search Field
    content: >

advanced:
    title: Advanced
    content: >
        Narrow down your search parameters. Once you have selected your advanced
        search criteria and run the search, you can <span class=\"doc-desc-title\">Export
        </span> the data at the bottom of the tickets page.

open_tickets_table:
    title: Open Tickets Table
    content: >
        All tickets currently opened and requiring attention

ticket:
    title: Ticket
    content: >

date:
    title: Date
    content: >

subject:
    title: Subject
    content: >

from:
    title: From
    content: >

priority:
    title: Priority
    content: >

assigned_to:
    title: Assigned To
    content: >

export:
    title: Export
    content: >
        Export your data currently in view in a CSV file.
        CSV files may be opened with any spreadsheet software
        (i.e., Microsoft Excel, Apple Pages, OpenOffice, etc.).

advanced_search_dialog:
    title: Advanced Search
    content: >


adv_keyword:
    title: Keyword Search
    content: >
        Find hits based on the subject and message bodies of the ticket
        thread as well as all textual content associated with custom fields
        for the users and the tickets.

adv_date_range:
    title: Search by Date Range
    content: >
        Definition here
";
        
        $__internal_8fa255f31b55fa1f4d58495a46362ba97bd578a3e7faf6aae29e01b5a7b15f86->leave($__internal_8fa255f31b55fa1f4d58495a46362ba97bd578a3e7faf6aae29e01b5a7b15f86_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/tickets.queue.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Staff Panel -> Tickets -> Open*/
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
/* search_field:*/
/*     title: Search Field*/
/*     content: >*/
/* */
/* advanced:*/
/*     title: Advanced*/
/*     content: >*/
/*         Narrow down your search parameters. Once you have selected your advanced*/
/*         search criteria and run the search, you can <span class="doc-desc-title">Export*/
/*         </span> the data at the bottom of the tickets page.*/
/* */
/* open_tickets_table:*/
/*     title: Open Tickets Table*/
/*     content: >*/
/*         All tickets currently opened and requiring attention*/
/* */
/* ticket:*/
/*     title: Ticket*/
/*     content: >*/
/* */
/* date:*/
/*     title: Date*/
/*     content: >*/
/* */
/* subject:*/
/*     title: Subject*/
/*     content: >*/
/* */
/* from:*/
/*     title: From*/
/*     content: >*/
/* */
/* priority:*/
/*     title: Priority*/
/*     content: >*/
/* */
/* assigned_to:*/
/*     title: Assigned To*/
/*     content: >*/
/* */
/* export:*/
/*     title: Export*/
/*     content: >*/
/*         Export your data currently in view in a CSV file.*/
/*         CSV files may be opened with any spreadsheet software*/
/*         (i.e., Microsoft Excel, Apple Pages, OpenOffice, etc.).*/
/* */
/* advanced_search_dialog:*/
/*     title: Advanced Search*/
/*     content: >*/
/* */
/* */
/* adv_keyword:*/
/*     title: Keyword Search*/
/*     content: >*/
/*         Find hits based on the subject and message bodies of the ticket*/
/*         thread as well as all textual content associated with custom fields*/
/*         for the users and the tickets.*/
/* */
/* adv_date_range:*/
/*     title: Search by Date Range*/
/*     content: >*/
/*         Definition here*/
/* */
