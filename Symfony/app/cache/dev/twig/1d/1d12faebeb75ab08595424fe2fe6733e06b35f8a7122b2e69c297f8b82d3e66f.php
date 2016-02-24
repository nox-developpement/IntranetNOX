<?php

/* support/include/i18n/en_US/help/tips/settings.kb.yaml */
class __TwigTemplate_bba08cf7ec50e8ec8d22aa3ce06ce15944ba0bd4706ba97efb474a143fff1422 extends Twig_Template
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
        $__internal_803973e30f5d031d716a77c17cf3ab8b7cc91cdb25a2a8bd5e1b1ca6a2c4998f = $this->env->getExtension("native_profiler");
        $__internal_803973e30f5d031d716a77c17cf3ab8b7cc91cdb25a2a8bd5e1b1ca6a2c4998f->enter($__internal_803973e30f5d031d716a77c17cf3ab8b7cc91cdb25a2a8bd5e1b1ca6a2c4998f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/settings.kb.yaml"));

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
        
        $__internal_803973e30f5d031d716a77c17cf3ab8b7cc91cdb25a2a8bd5e1b1ca6a2c4998f->leave($__internal_803973e30f5d031d716a77c17cf3ab8b7cc91cdb25a2a8bd5e1b1ca6a2c4998f_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/settings.kb.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
