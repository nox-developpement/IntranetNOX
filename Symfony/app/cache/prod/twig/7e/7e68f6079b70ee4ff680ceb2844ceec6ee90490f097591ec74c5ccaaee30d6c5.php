<?php

/* support/include/i18n/en_US/help/tips/knowledgebase.canned_response.yaml */
class __TwigTemplate_d1263676ded359879b02ba2d61302184d8c66dd14d52464b062fa73bb86bf6d3 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/knowledgebase.canned_response.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/knowledgebase.canned_response.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\knowledgebase.canned_response.yaml");
    }
}
