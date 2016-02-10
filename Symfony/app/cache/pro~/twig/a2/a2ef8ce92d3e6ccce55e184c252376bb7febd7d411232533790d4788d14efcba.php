<?php

/* support/include/i18n/en_US/help/tips/emails.banlist.yaml */
class __TwigTemplate_aa89cb1c9eb7188a04316a84b833134c1a4881ddc2cc66d54b29830d199a78ed extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Emails -> Banlist
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
ban_list:
    title: Banned Email Addresses
    content: >
        Emails received from banned email addresses listed in the ban list
        will be automatically rejected.
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/emails.banlist.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Emails -> Banlist*/
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
/* ban_list:*/
/*     title: Banned Email Addresses*/
/*     content: >*/
/*         Emails received from banned email addresses listed in the ban list*/
/*         will be automatically rejected.*/
/* */
