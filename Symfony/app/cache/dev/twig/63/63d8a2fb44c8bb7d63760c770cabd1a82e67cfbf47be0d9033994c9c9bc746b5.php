<?php

/* support/include/i18n/en_US/help/tips/manage.api_keys.yaml */
class __TwigTemplate_ebdf4cbd1a047d7834bebdb02c2c1767e3296c9d4e476ba836885a4d52b5c233 extends Twig_Template
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
        $__internal_640d23a99203ea483197e18ee3c31d9c52423ecfba05145bbde3e475c7d970ba = $this->env->getExtension("native_profiler");
        $__internal_640d23a99203ea483197e18ee3c31d9c52423ecfba05145bbde3e475c7d970ba->enter($__internal_640d23a99203ea483197e18ee3c31d9c52423ecfba05145bbde3e475c7d970ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/manage.api_keys.yaml"));

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
        
        $__internal_640d23a99203ea483197e18ee3c31d9c52423ecfba05145bbde3e475c7d970ba->leave($__internal_640d23a99203ea483197e18ee3c31d9c52423ecfba05145bbde3e475c7d970ba_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/manage.api_keys.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
