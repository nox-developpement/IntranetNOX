<?php

/* support/include/i18n/en_US/help/tips/emails.template.yaml */
class __TwigTemplate_debd1e32c98c94c41e640b6d39e41cb5fac9c70a70d1630d17c7a2ee303ab89a extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Emails -> Templates
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
email_templates:
    title: Email Templates
    content: >
        Email Template Sets are used to send Auto-Responses and Alerts for
        various actions that can take place during a Ticket’s lifetime.


template_to_clone:
    title: Template to Clone
    content: >
         Choose a Template Set to clone or simply start with the stock email
         templates.

language:
    title: Language
    content: >
        Select desired language for the <span
        class=\"doc-desc-opt\">stock</span> <span class=\"doc-desc-title\">Email
        Template Set</span>. Language packs are available on osTicket.com.
    links:
      - title: osTicket Language Packs
        href: http://osticket.com/download

status:
    title: Status
    content: >
        <span class=\"doc-desc-opt\">Enabled</span> Template Sets are
        available to be associated with Departments and set to the system
        default.  Template Sets currently in-use cannot be <span
        class=\"doc-desc-opt\">Disabled</span>.
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/emails.template.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/emails.template.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\emails.template.yaml");
    }
}
