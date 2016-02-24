<?php

/* support/include/i18n/en_US/help/tips/knowledgebase.canned_response.yaml */
class __TwigTemplate_afaa03d0a393363c0ef0d797a3dcf0fb6d3ef1740d2c69d9d325ff2aaa5b7a9a extends Twig_Template
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
        $__internal_d346d70bb41fc5ae4514af986f88c6c98d05661fa3d3e276da2294b0c406acac = $this->env->getExtension("native_profiler");
        $__internal_d346d70bb41fc5ae4514af986f88c6c98d05661fa3d3e276da2294b0c406acac->enter($__internal_d346d70bb41fc5ae4514af986f88c6c98d05661fa3d3e276da2294b0c406acac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/knowledgebase.canned_response.yaml"));

        // line 1
        echo "#
# This is popup help messages for the Staff Panel -> Knowledgebase -> Canned Responses -> Add New Response
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
canned_response:
    title: Canned Response
    content: >
        Create a <span class=\"doc-desc-title\">Canned Response</span> that can
        be included in a ticket response. It can also be used as a <span
        class=\"doc-desc-title\">Ticket Auto-Response</span> setup by a <span
        class=\"doc-desc-title\">Ticket Filter</span>.
    links:
      - title: Setup a Ticket Filter
        href: /scp/filters.php

canned_attachments:
    title: Canned Attachments
    content: >
        Attach a file  that you would like to be automatically included
        in the ticket response that utilizes the new <span class=\"doc-desc-title\">
        Canned Response</span>.
";
        
        $__internal_d346d70bb41fc5ae4514af986f88c6c98d05661fa3d3e276da2294b0c406acac->leave($__internal_d346d70bb41fc5ae4514af986f88c6c98d05661fa3d3e276da2294b0c406acac_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/knowledgebase.canned_response.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Staff Panel -> Knowledgebase -> Canned Responses -> Add New Response*/
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
/* canned_response:*/
/*     title: Canned Response*/
/*     content: >*/
/*         Create a <span class="doc-desc-title">Canned Response</span> that can*/
/*         be included in a ticket response. It can also be used as a <span*/
/*         class="doc-desc-title">Ticket Auto-Response</span> setup by a <span*/
/*         class="doc-desc-title">Ticket Filter</span>.*/
/*     links:*/
/*       - title: Setup a Ticket Filter*/
/*         href: /scp/filters.php*/
/* */
/* canned_attachments:*/
/*     title: Canned Attachments*/
/*     content: >*/
/*         Attach a file  that you would like to be automatically included*/
/*         in the ticket response that utilizes the new <span class="doc-desc-title">*/
/*         Canned Response</span>.*/
/* */
