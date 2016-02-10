<?php

/* support/include/i18n/en_US/help/tips/manage.api_keys.yaml */
class __TwigTemplate_aaa686b6814248cc161d123b69c7f919b44864b14604114d8fceac20bcb2c0f6 extends Twig_Template
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
# This is popup help messages for the Admin Panel -> Manage -> API Keys
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

api_key:
    title: API Key
    content: >
        API keys are used to authenticate clients submitting new tickets via
        the Application Programming Interface (API). API keys are used
        instead of passwords. Since API keys may be sent unencrypted, they
        are linked to each client's network IP address.
    links:
      - title: osTicket API Documentation
        href: https://github.com/osTicket/osTicket-1.8/blob/develop/setup/doc/api.md

ip_addr:
    title: IP Address
    content: >
        Client's network IP address. Each unique client IP address will
        require separate API keys
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/manage.api_keys.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Manage -> API Keys*/
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
/* */
/* api_key:*/
/*     title: API Key*/
/*     content: >*/
/*         API keys are used to authenticate clients submitting new tickets via*/
/*         the Application Programming Interface (API). API keys are used*/
/*         instead of passwords. Since API keys may be sent unencrypted, they*/
/*         are linked to each client's network IP address.*/
/*     links:*/
/*       - title: osTicket API Documentation*/
/*         href: https://github.com/osTicket/osTicket-1.8/blob/develop/setup/doc/api.md*/
/* */
/* ip_addr:*/
/*     title: IP Address*/
/*     content: >*/
/*         Client's network IP address. Each unique client IP address will*/
/*         require separate API keys*/
/* */
