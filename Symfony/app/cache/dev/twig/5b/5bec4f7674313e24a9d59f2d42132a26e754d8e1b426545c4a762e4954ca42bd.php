<?php

/* support/include/i18n/en_US/help/tips/manage.pages.yaml */
class __TwigTemplate_eb26cda01064b6f354b4c558293cece4916205c3cb05e01daa3cb4339a3a1577 extends Twig_Template
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
        $__internal_42f0204b73d129ca707e9501a8e562f63dc35a50868973fccd0b9801495d9c61 = $this->env->getExtension("native_profiler");
        $__internal_42f0204b73d129ca707e9501a8e562f63dc35a50868973fccd0b9801495d9c61->enter($__internal_42f0204b73d129ca707e9501a8e562f63dc35a50868973fccd0b9801495d9c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/manage.pages.yaml"));

        // line 1
        echo "#
# This is popup help messages for the Admin Panel -> Manage -> Pages
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
site_pages:
    title: Site Pages
    content: >
        Site pages can serve as a mini Content Management System (CMS). You
        can define multiple landing, offline, and thank-you pages and
        configure them in the company settings and help topics.
    links:
      - title: Company Settings
        href: /scp/settings.php?t=pages

type:
    title: Type
    content: >
        <span class=\"doc-desc-opt\">Offline</span> pages are displayed on the
        client portal if your help desk is disabled. <span
        class=\"doc-desc-opt\">Landing</span> pages are displayed on the home
        page of your client portal. <span class=\"doc-desc-opt\">Thank
        You</span> pages are displayed after a user submits a ticket. <span
        class=\"doc-desc-opt\">Other</span> pages can be used as a simple
        content management system (CMS).
";
        
        $__internal_42f0204b73d129ca707e9501a8e562f63dc35a50868973fccd0b9801495d9c61->leave($__internal_42f0204b73d129ca707e9501a8e562f63dc35a50868973fccd0b9801495d9c61_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/manage.pages.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Manage -> Pages*/
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
/* site_pages:*/
/*     title: Site Pages*/
/*     content: >*/
/*         Site pages can serve as a mini Content Management System (CMS). You*/
/*         can define multiple landing, offline, and thank-you pages and*/
/*         configure them in the company settings and help topics.*/
/*     links:*/
/*       - title: Company Settings*/
/*         href: /scp/settings.php?t=pages*/
/* */
/* type:*/
/*     title: Type*/
/*     content: >*/
/*         <span class="doc-desc-opt">Offline</span> pages are displayed on the*/
/*         client portal if your help desk is disabled. <span*/
/*         class="doc-desc-opt">Landing</span> pages are displayed on the home*/
/*         page of your client portal. <span class="doc-desc-opt">Thank*/
/*         You</span> pages are displayed after a user submits a ticket. <span*/
/*         class="doc-desc-opt">Other</span> pages can be used as a simple*/
/*         content management system (CMS).*/
/* */
