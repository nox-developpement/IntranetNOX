<?php

/* support/include/i18n/en_US/help/tips/settings.kb.yaml */
class __TwigTemplate_6acd685a16606bd317f0c7cf11c7a88fb2f064b4a28743d7800705be767f6fe8 extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Settings -> Knowledgebase
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
knowledge_base_settings:
    title: Knowledge Base Settings
    content: >

knowledge_base_status:
    title: Knowledge Base Status
    content: >
        Enable this setting to allow your users self-service access to
        your public knowledge base articles.
        <br><br>
        Knowledge base categories and FAQs can be made internal (viewable only by Agents).
    links:
      - title: Manage Knowledge Base
        href: /scp/kb.php

restrict_kb:
    title: Resctrict Access to the Knowledge Base
    content: >
        Enable this setting to prevent unregistered users from accessing
        your knowledge base articles on the client interface.
    links:
      - title: Access Control Settings
        href: /scp/settings.php?t=access

canned_responses:
    title: Canned Responses
    content: >
        Enable this setting to allow Agents to use <span
        class=\"doc-desc-title\">Canned Responses</span> when replying to
        tickets.
    links:
      - title: Manage Canned Responses
        href: /scp/canned.php
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/settings.kb.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Settings -> Knowledgebase*/
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
/* knowledge_base_settings:*/
/*     title: Knowledge Base Settings*/
/*     content: >*/
/* */
/* knowledge_base_status:*/
/*     title: Knowledge Base Status*/
/*     content: >*/
/*         Enable this setting to allow your users self-service access to*/
/*         your public knowledge base articles.*/
/*         <br><br>*/
/*         Knowledge base categories and FAQs can be made internal (viewable only by Agents).*/
/*     links:*/
/*       - title: Manage Knowledge Base*/
/*         href: /scp/kb.php*/
/* */
/* restrict_kb:*/
/*     title: Resctrict Access to the Knowledge Base*/
/*     content: >*/
/*         Enable this setting to prevent unregistered users from accessing*/
/*         your knowledge base articles on the client interface.*/
/*     links:*/
/*       - title: Access Control Settings*/
/*         href: /scp/settings.php?t=access*/
/* */
/* canned_responses:*/
/*     title: Canned Responses*/
/*     content: >*/
/*         Enable this setting to allow Agents to use <span*/
/*         class="doc-desc-title">Canned Responses</span> when replying to*/
/*         tickets.*/
/*     links:*/
/*       - title: Manage Canned Responses*/
/*         href: /scp/canned.php*/
/* */
