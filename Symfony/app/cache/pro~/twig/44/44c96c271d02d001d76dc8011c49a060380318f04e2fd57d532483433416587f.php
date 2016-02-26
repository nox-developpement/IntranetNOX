<?php

/* support/include/i18n/en_US/email_template_group.yaml */
class __TwigTemplate_377b5e687e014c2aeaa43726c387dd43d5c9de8a0d1239fe9991c9380cead55b extends Twig_Template
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
# Default email template group for the system
#
# NOTE: The language field is defined for the email tempate group model, but
#       is not considered by the installer. Whatever language the install
#       loads data for, the same language will be used to load the email
#       templates
#
# Fields:
# isactive - (bool:0|1) true or false if the templates should be initially
#       usable
# name - (string) descriptive name for the template group
# notes - Administrative notes (viewable internally only)
#
---
- id: 1
  isactive: 1
  name: osTicket Default Template (HTML)
  notes: |
    Default osTicket templates
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/email_template_group.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # Default email template group for the system*/
/* #*/
/* # NOTE: The language field is defined for the email tempate group model, but*/
/* #       is not considered by the installer. Whatever language the install*/
/* #       loads data for, the same language will be used to load the email*/
/* #       templates*/
/* #*/
/* # Fields:*/
/* # isactive - (bool:0|1) true or false if the templates should be initially*/
/* #       usable*/
/* # name - (string) descriptive name for the template group*/
/* # notes - Administrative notes (viewable internally only)*/
/* #*/
/* ---*/
/* - id: 1*/
/*   isactive: 1*/
/*   name: osTicket Default Template (HTML)*/
/*   notes: |*/
/*     Default osTicket templates*/
/* */
