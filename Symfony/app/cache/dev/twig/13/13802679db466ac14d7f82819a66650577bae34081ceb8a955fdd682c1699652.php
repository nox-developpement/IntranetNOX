<?php

/* support/include/i18n/en_US/help/tips/knowledgebase.faq.yaml */
class __TwigTemplate_9e7e7042bac4a4532af608448897f098dec4d89945df617184ba4d9019f1bd7f extends Twig_Template
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
        $__internal_5e7b86fcac4055ba56db7e946a2656f7d961c280e7ed252cbb1405a39ab5ac8c = $this->env->getExtension("native_profiler");
        $__internal_5e7b86fcac4055ba56db7e946a2656f7d961c280e7ed252cbb1405a39ab5ac8c->enter($__internal_5e7b86fcac4055ba56db7e946a2656f7d961c280e7ed252cbb1405a39ab5ac8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/knowledgebase.faq.yaml"));

        // line 1
        echo "#
# This is popup help messages for the Staff Panel -> Knowledgebase -> FAQ
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
listing_type:
    title: Listing Type
    content: >
        Choose <span class=\"doc-desc-opt\">Public (publish)</span> if you would like this <span class=\"doc-desc-title\">
        FAQ</span> to be published on public knowledgebase if the parent category is public.
    links:
      - title: Enable the Public Knowledgebase for the Client Portal
        href: /scp/settings.php?t=kb
";
        
        $__internal_5e7b86fcac4055ba56db7e946a2656f7d961c280e7ed252cbb1405a39ab5ac8c->leave($__internal_5e7b86fcac4055ba56db7e946a2656f7d961c280e7ed252cbb1405a39ab5ac8c_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/knowledgebase.faq.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Staff Panel -> Knowledgebase -> FAQ*/
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
/* listing_type:*/
/*     title: Listing Type*/
/*     content: >*/
/*         Choose <span class="doc-desc-opt">Public (publish)</span> if you would like this <span class="doc-desc-title">*/
/*         FAQ</span> to be published on public knowledgebase if the parent category is public.*/
/*     links:*/
/*       - title: Enable the Public Knowledgebase for the Client Portal*/
/*         href: /scp/settings.php?t=kb*/
/* */
