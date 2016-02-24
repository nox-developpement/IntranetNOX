<?php

/* support/include/i18n/en_US/help/tips/emails.banlist.yaml */
class __TwigTemplate_46d8da9b7d4de93ff9e055d959bc978cd7ca5af9c13f875d3877238ca7e3ccf0 extends Twig_Template
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
        $__internal_36b4be8f26ae7a02feadfd93e6055789a1772c0d0a98fe6ae6d25449569c26ca = $this->env->getExtension("native_profiler");
        $__internal_36b4be8f26ae7a02feadfd93e6055789a1772c0d0a98fe6ae6d25449569c26ca->enter($__internal_36b4be8f26ae7a02feadfd93e6055789a1772c0d0a98fe6ae6d25449569c26ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/emails.banlist.yaml"));

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
        
        $__internal_36b4be8f26ae7a02feadfd93e6055789a1772c0d0a98fe6ae6d25449569c26ca->leave($__internal_36b4be8f26ae7a02feadfd93e6055789a1772c0d0a98fe6ae6d25449569c26ca_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/emails.banlist.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
