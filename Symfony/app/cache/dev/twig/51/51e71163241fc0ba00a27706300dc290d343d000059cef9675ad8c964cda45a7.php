<?php

/* support/include/i18n/en_US/email_template_group.yaml */
class __TwigTemplate_e91ebb66f6f9749968dccac23076dad9a6a5e496751b74251f8552109736fce8 extends Twig_Template
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
        $__internal_fabf94f7ef61ad5511b4bf8b994fcaa641b759ec1369713389050465ea5f1654 = $this->env->getExtension("native_profiler");
        $__internal_fabf94f7ef61ad5511b4bf8b994fcaa641b759ec1369713389050465ea5f1654->enter($__internal_fabf94f7ef61ad5511b4bf8b994fcaa641b759ec1369713389050465ea5f1654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/email_template_group.yaml"));

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
        
        $__internal_fabf94f7ef61ad5511b4bf8b994fcaa641b759ec1369713389050465ea5f1654->leave($__internal_fabf94f7ef61ad5511b4bf8b994fcaa641b759ec1369713389050465ea5f1654_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/email_template_group.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
