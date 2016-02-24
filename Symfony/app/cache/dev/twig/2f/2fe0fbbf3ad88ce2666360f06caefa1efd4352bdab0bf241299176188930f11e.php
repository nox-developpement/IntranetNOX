<?php

/* support/include/i18n/en_US/filter.yaml */
class __TwigTemplate_500abdaab7d9449089bb79473a5b8b9177d624c85b34e9839a165d42a46da554 extends Twig_Template
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
        $__internal_02254c5090c5c91bd221d3b4de52e00cadf4e26b34f271b36eadf9f6a2b76aa4 = $this->env->getExtension("native_profiler");
        $__internal_02254c5090c5c91bd221d3b4de52e00cadf4e26b34f271b36eadf9f6a2b76aa4->enter($__internal_02254c5090c5c91bd221d3b4de52e00cadf4e26b34f271b36eadf9f6a2b76aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/filter.yaml"));

        // line 1
        echo "#
# Default ticket filters installed for the system
#
# NOTE: The SYSTEM BAN LIST is critically important and should _never_ be
#       removed from this file. The name 'SYSTEM BAN LIST' is also important
#       and should not be translated -- it is not displayed on the interface
#
# Fields:
# isactive - (bool:0|1) true or false if the filter is initially enabled
# execorder - (int) order the filters should be executed in (lowest first)
# reject_ticket - (bool:0|1) if a ticket matches the filter it should be
#       rejected (ie. not be created).
# name - (string) Descriptive name for the filter
# notes - (string) Administrative notes (viewable internally only)
# rules - (list<FilterRule>) List of rules for the filter
#
# Fields for FilterRule:
# isactive - (bool:0|1) true if the rule should be considered
# what - (enum<email|>) field to check
# how - (enum<equals|contains|dncontain>) how to check for <val>
# val - (string) search value
---
- isactive: 1
  execorder: 99
  reject_ticket: 1
  # NOTE: Don't translate 'Email'
  target: Email
  # NOTE: Don't translate 'SYSTEM BAN LIST'
  name: SYSTEM BAN LIST
  notes: |
    Internal list for email banning. Do not remove

  rules:
    - isactive: 1
      what: email
      how: equal
      val: test@example.com
";
        
        $__internal_02254c5090c5c91bd221d3b4de52e00cadf4e26b34f271b36eadf9f6a2b76aa4->leave($__internal_02254c5090c5c91bd221d3b4de52e00cadf4e26b34f271b36eadf9f6a2b76aa4_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/filter.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Default ticket filters installed for the system*/
/* #*/
/* # NOTE: The SYSTEM BAN LIST is critically important and should _never_ be*/
/* #       removed from this file. The name 'SYSTEM BAN LIST' is also important*/
/* #       and should not be translated -- it is not displayed on the interface*/
/* #*/
/* # Fields:*/
/* # isactive - (bool:0|1) true or false if the filter is initially enabled*/
/* # execorder - (int) order the filters should be executed in (lowest first)*/
/* # reject_ticket - (bool:0|1) if a ticket matches the filter it should be*/
/* #       rejected (ie. not be created).*/
/* # name - (string) Descriptive name for the filter*/
/* # notes - (string) Administrative notes (viewable internally only)*/
/* # rules - (list<FilterRule>) List of rules for the filter*/
/* #*/
/* # Fields for FilterRule:*/
/* # isactive - (bool:0|1) true if the rule should be considered*/
/* # what - (enum<email|>) field to check*/
/* # how - (enum<equals|contains|dncontain>) how to check for <val>*/
/* # val - (string) search value*/
/* ---*/
/* - isactive: 1*/
/*   execorder: 99*/
/*   reject_ticket: 1*/
/*   # NOTE: Don't translate 'Email'*/
/*   target: Email*/
/*   # NOTE: Don't translate 'SYSTEM BAN LIST'*/
/*   name: SYSTEM BAN LIST*/
/*   notes: |*/
/*     Internal list for email banning. Do not remove*/
/* */
/*   rules:*/
/*     - isactive: 1*/
/*       what: email*/
/*       how: equal*/
/*       val: test@example.com*/
/* */
