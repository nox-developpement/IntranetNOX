<?php

/* support/include/i18n/en_US/help/tips/settings.kb.yaml */
class __TwigTemplate_114e82034e635b09d7ba018375594569490b3b8ba98986953aea50b9b1e733b6 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/settings.kb.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\settings.kb.yaml");
    }
}
