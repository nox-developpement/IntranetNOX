<?php

/* support/include/i18n/en_US/ticket_status.yaml */
class __TwigTemplate_3ae1870e2e180e2e715098a3cfeefcf691e1b88994dd8deebabb75b9ac4b56a1 extends Twig_Template
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
}
/* #*/
/* # Default system data for ticket statuses*/
/* #*/
/* # Fields:*/
/* #  id - (int:optional) id number in the database*/
/* #  name - (string) descriptive name of the status*/
/* #  state - (string) Main status of a ticket*/
/* #  (open, closed, archived, deleted)*/
/* #  mode - (bit) access mask (1 - enabled, 2 - internal)*/
/* #  flags - (bit) flags that can be set on a ticket*/
/* #  properties:*/
/* #   description - (string) Description of the status*/
/* #*/
/* ---*/
/* - id: 1*/
/*   name: Open*/
/*   state: open*/
/*   mode: 3*/
/*   sort: 1*/
/*   flags: 0*/
/*   properties:*/
/*     description: >*/
/*         Open tickets.*/
/* */
/* - id: 2*/
/*   name: Resolved*/
/*   state: closed*/
/*   mode: 1*/
/*   sort: 2*/
/*   flags: 0*/
/*   properties:*/
/*     allowreopen: true*/
/*     reopenstatus: 0*/
/*     description: >*/
/*         Resolved tickets*/
/* */
/* - id: 3*/
/*   name: Closed*/
/*   state: closed*/
/*   mode: 3*/
/*   sort: 3*/
/*   flags: 0*/
/*   properties:*/
/*     allowreopen: true*/
/*     reopenstatus: 0*/
/*     description: >*/
/*         Closed tickets. Tickets will still be accessible on client and staff panels.*/
/* */
/* - id: 4*/
/*   name: Archived*/
/*   state:  archived*/
/*   mode: 3*/
/*   sort: 4*/
/*   flags: 0*/
/*   properties:*/
/*     description: >*/
/*         Tickets only adminstratively available but no longer accessible on*/
/*         ticket queues and client panel.*/
/* */
/* - id: 5*/
/*   name: Deleted*/
/*   state: deleted*/
/*   mode: 3*/
/*   sort: 5*/
/*   flags: 0*/
/*   properties:*/
/*     description: >*/
/*         Tickets queued for deletion. Not accessible on ticket queues.*/
/* */
