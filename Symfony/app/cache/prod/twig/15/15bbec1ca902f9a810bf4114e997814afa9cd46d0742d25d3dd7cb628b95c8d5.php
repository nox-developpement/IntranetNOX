<?php

/* support/include/i18n/en_US/ticket_status.yaml */
class __TwigTemplate_ba077c63d5045d49b7fb60887cdd2a82425dd082ed444cbf54c815b29c2d7c87 extends Twig_Template
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
# Default system data for ticket statuses
#
# Fields:
#  id - (int:optional) id number in the database
#  name - (string) descriptive name of the status
#  state - (string) Main status of a ticket
#  (open, closed, archived, deleted)
#  mode - (bit) access mask (1 - enabled, 2 - internal)
#  flags - (bit) flags that can be set on a ticket
#  properties:
#   description - (string) Description of the status
#
---
- id: 1
  name: Open
  state: open
  mode: 3
  sort: 1
  flags: 0
  properties:
    description: >
        Open tickets.

- id: 2
  name: Resolved
  state: closed
  mode: 1
  sort: 2
  flags: 0
  properties:
    allowreopen: true
    reopenstatus: 0
    description: >
        Resolved tickets

- id: 3
  name: Closed
  state: closed
  mode: 3
  sort: 3
  flags: 0
  properties:
    allowreopen: true
    reopenstatus: 0
    description: >
        Closed tickets. Tickets will still be accessible on client and staff panels.

- id: 4
  name: Archived
  state:  archived
  mode: 3
  sort: 4
  flags: 0
  properties:
    description: >
        Tickets only adminstratively available but no longer accessible on
        ticket queues and client panel.

- id: 5
  name: Deleted
  state: deleted
  mode: 3
  sort: 5
  flags: 0
  properties:
    description: >
        Tickets queued for deletion. Not accessible on ticket queues.
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/ticket_status.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/ticket_status.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\ticket_status.yaml");
    }
}
