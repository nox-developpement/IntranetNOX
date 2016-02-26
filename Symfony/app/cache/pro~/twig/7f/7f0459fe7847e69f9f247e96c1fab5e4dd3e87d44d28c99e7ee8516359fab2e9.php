<?php

/* support/include/i18n/en_US/organization.yaml */
class __TwigTemplate_da19ca82a0dfbaf40de12e1fa9aa5293b4971b78988478da856c3cf51c400242 extends Twig_Template
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
# Initial organizations defined for the system.
#
# Fields:
# name - Descriptive name for the organization
# fields - custom fields
#
---
- name: osTicket
  fields:
    address:|
        420 Desoto Street
        Alexandria, LA 71301
    phone: (318) 290-3674
    website: http://osticket.com
    notes: >
        Not only do we develop the software, we also use it to manage
        support for osTicket. Let us help you quickly implement and leverage
        the full potential of osTicket's features and functionality. Contact
        us for professional support or visit our website for documentation
        and community support.
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/organization.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # Initial organizations defined for the system.*/
/* #*/
/* # Fields:*/
/* # name - Descriptive name for the organization*/
/* # fields - custom fields*/
/* #*/
/* ---*/
/* - name: osTicket*/
/*   fields:*/
/*     address:|*/
/*         420 Desoto Street*/
/*         Alexandria, LA 71301*/
/*     phone: (318) 290-3674*/
/*     website: http://osticket.com*/
/*     notes: >*/
/*         Not only do we develop the software, we also use it to manage*/
/*         support for osTicket. Let us help you quickly implement and leverage*/
/*         the full potential of osTicket's features and functionality. Contact*/
/*         us for professional support or visit our website for documentation*/
/*         and community support.*/
/* */
