<?php

/* support/include/i18n/en_US/help/tips/knowledgebase.faq.yaml */
class __TwigTemplate_63d849bb98f7b2ab98a0cbc2ccc722e4ce391b24862a89b475b684b2438a6195 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/knowledgebase.faq.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/knowledgebase.faq.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\knowledgebase.faq.yaml");
    }
}
