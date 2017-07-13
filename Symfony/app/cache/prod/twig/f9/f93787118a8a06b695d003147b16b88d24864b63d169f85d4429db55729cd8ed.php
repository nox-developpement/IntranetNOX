<?php

/* support/include/i18n/en_US/help/tips/emails.diagnostic.yaml */
class __TwigTemplate_97fd117ab88962e4ab49ace69bcfad44753b506e07887de97a1d4f15d9c757b0 extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Emails -> Diagnostics
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
test_outgoing_email:
    title: Test Outgoing Email
    content: >
        The email’s delivery depends on your server settings (php.ini) and/or SMTP
        configuration.
    links:
      - title: Select an email to configure SMTP (Outgoing) Settings
        href: /scp/emails.php

from:
    title: From
    content: >

to:
    title: To
    content: >

subject:
    title: Subject
    content: >

message:
    title: Message
    content: >
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/emails.diagnostic.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help/tips/emails.diagnostic.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help\\tips\\emails.diagnostic.yaml");
    }
}
