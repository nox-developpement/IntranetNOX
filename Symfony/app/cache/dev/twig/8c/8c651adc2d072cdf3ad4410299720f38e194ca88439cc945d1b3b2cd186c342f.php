<?php

/* support/include/i18n/en_US/help/tips/emails.diagnostic.yaml */
class __TwigTemplate_2188cdedb6d2c10ec7d949cdcbd75a3e37486d105e706aec2224d75d16a483d3 extends Twig_Template
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
        $__internal_c1ca70fdef5cd37fdc7f956176c73f5581b19aa7468229186ae14cbdd19e20fc = $this->env->getExtension("native_profiler");
        $__internal_c1ca70fdef5cd37fdc7f956176c73f5581b19aa7468229186ae14cbdd19e20fc->enter($__internal_c1ca70fdef5cd37fdc7f956176c73f5581b19aa7468229186ae14cbdd19e20fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help/tips/emails.diagnostic.yaml"));

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
        
        $__internal_c1ca70fdef5cd37fdc7f956176c73f5581b19aa7468229186ae14cbdd19e20fc->leave($__internal_c1ca70fdef5cd37fdc7f956176c73f5581b19aa7468229186ae14cbdd19e20fc_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help/tips/emails.diagnostic.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # This is popup help messages for the Admin Panel -> Emails -> Diagnostics*/
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
/* test_outgoing_email:*/
/*     title: Test Outgoing Email*/
/*     content: >*/
/*         The email’s delivery depends on your server settings (php.ini) and/or SMTP*/
/*         configuration.*/
/*     links:*/
/*       - title: Select an email to configure SMTP (Outgoing) Settings*/
/*         href: /scp/emails.php*/
/* */
/* from:*/
/*     title: From*/
/*     content: >*/
/* */
/* to:*/
/*     title: To*/
/*     content: >*/
/* */
/* subject:*/
/*     title: Subject*/
/*     content: >*/
/* */
/* message:*/
/*     title: Message*/
/*     content: >*/
/* */
