<?php

/* support/include/i18n/en_US/ticket_status.yaml */
class __TwigTemplate_f4c24d92524bfe9788154b32cd3a9d572212a8842f433f935809131a8cec8a84 extends Twig_Template
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
        $__internal_a2fee07a7898d5c21aaca10ae9bc0cbd5664399e1406bba068c94e363cc18acb = $this->env->getExtension("native_profiler");
        $__internal_a2fee07a7898d5c21aaca10ae9bc0cbd5664399e1406bba068c94e363cc18acb->enter($__internal_a2fee07a7898d5c21aaca10ae9bc0cbd5664399e1406bba068c94e363cc18acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/ticket_status.yaml"));

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
        
        $__internal_a2fee07a7898d5c21aaca10ae9bc0cbd5664399e1406bba068c94e363cc18acb->leave($__internal_a2fee07a7898d5c21aaca10ae9bc0cbd5664399e1406bba068c94e363cc18acb_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/ticket_status.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
