<?php

/* support/include/i18n/en_US/filter.yaml */
class __TwigTemplate_1ebbc975669a5579badef64d9a7fd72ec1dd00d4acbc10e670dc90ba216f0aa7 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/filter.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/filter.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\filter.yaml");
    }
}
