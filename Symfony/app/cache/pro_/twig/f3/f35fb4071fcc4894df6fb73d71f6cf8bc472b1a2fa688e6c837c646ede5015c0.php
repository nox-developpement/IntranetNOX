<?php

/* support/include/i18n/en_US/help/tips/manage.custom_list.yaml */
class __TwigTemplate_87094e0c818d15baa7b1231250f3dd8c01081a024ee9375d1a139cf6db4da054 extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Manage -> Add New Custom List
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
custom_lists:
    title: Custom Lists
    content: >
        Your <span class=\"doc-desc-title\">custom lists</span> will permit you to create dropdown boxes with predefined options from which a Client can select in your <span class=\"doc-desc-title\">Custom Forms</span>. If you would like to use this <span class=\"doc-desc-title\">custom list</span> as a <span class=\"doc-desc-title\">target</span> in a <span class=\"doc-desc-title\">Ticket Filter</span>, be sure to add this list to your <span class=\"doc-desc-title\">Ticket Details</span> form.

name:
    title: Name
    content: >

plural_name:
    title: Plural Name
    content: >

sort_order:
    title: Sort Order
    content: >

list_s_initial_items:
    title: List’s Initial Items
    content: >

value:
    title: Value
    content: >

extra:
    title: Extra
    content: >
        Abbreviations and such. If you happen to use internal codes for the
        items in this list, those codes and abbreviations can be entered in
        this column. If the custom list is rendered as a <span class=\"doc-desc-option\">
        TypeAhead</span>, these abbreviations can be used to search for the
        custom list items.
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/manage.custom_list.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Manage -> Add New Custom List*/
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
/* custom_lists:*/
/*     title: Custom Lists*/
/*     content: >*/
/*         Your <span class="doc-desc-title">custom lists</span> will permit you to create dropdown boxes with predefined options from which a Client can select in your <span class="doc-desc-title">Custom Forms</span>. If you would like to use this <span class="doc-desc-title">custom list</span> as a <span class="doc-desc-title">target</span> in a <span class="doc-desc-title">Ticket Filter</span>, be sure to add this list to your <span class="doc-desc-title">Ticket Details</span> form.*/
/* */
/* name:*/
/*     title: Name*/
/*     content: >*/
/* */
/* plural_name:*/
/*     title: Plural Name*/
/*     content: >*/
/* */
/* sort_order:*/
/*     title: Sort Order*/
/*     content: >*/
/* */
/* list_s_initial_items:*/
/*     title: List’s Initial Items*/
/*     content: >*/
/* */
/* value:*/
/*     title: Value*/
/*     content: >*/
/* */
/* extra:*/
/*     title: Extra*/
/*     content: >*/
/*         Abbreviations and such. If you happen to use internal codes for the*/
/*         items in this list, those codes and abbreviations can be entered in*/
/*         this column. If the custom list is rendered as a <span class="doc-desc-option">*/
/*         TypeAhead</span>, these abbreviations can be used to search for the*/
/*         custom list items.*/
/* */
