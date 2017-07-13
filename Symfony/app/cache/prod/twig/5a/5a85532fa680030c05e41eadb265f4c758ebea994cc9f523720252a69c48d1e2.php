<?php

/* support/include/i18n/en_US/sla.yaml */
class __TwigTemplate_a47cde3bbe47c3fd2502b8792bce2c4d657ee48baab00f723872a45b64fa06ce extends Twig_Template
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
# Initial Service-Level-Agreements (SLA) defined for the system
#
# Fields:
# id - (int:optional) id number in the database
# isactive - (bool:0|1) true of false if the SLA should initially be active
# enable_priority_escalation - (bool:0|1) true or false if the SLA should
#       cause the ticket priority to be escalated when it is marked overdue
# disable_overdue_alerts - (bool:0|1) - true or false if the overdue alert
#       emails should _not_ go out for tickets assigned to this SLA
# grace_period - (int) number or hours after the ticket is opened before it
#       is marked overdue
# name - (string) descriptive name of the SLA
# notes - (string) administrative notes (viewable internally only)
---
- id: 1
  isactive: 1
  enable_priority_escalation: 1
  disable_overdue_alert: 0
  grace_period: 48
  name: Default SLA
  notes: |
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/sla.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/sla.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\sla.yaml");
    }
}
