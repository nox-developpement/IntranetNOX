<?php

/* support/include/i18n/en_US/list.yaml */
class __TwigTemplate_d0d65c59079709c0e541f903409a2618e35e51ebe32ee8327fd900bc00c6b368 extends Twig_Template
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
        $__internal_64e700fd8d6adba0753f485d650a0ce8b6525a0c37c704d63de8e6610e73fefd = $this->env->getExtension("native_profiler");
        $__internal_64e700fd8d6adba0753f485d650a0ce8b6525a0c37c704d63de8e6610e73fefd->enter($__internal_64e700fd8d6adba0753f485d650a0ce8b6525a0c37c704d63de8e6610e73fefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/list.yaml"));

        // line 1
        echo "#
# Custom (dynamic) lists. This data is used as the initial,
# minimal data for dynamic list that ships with the system.
#
# Fields:
# id:           Primary id (not recommended)
# name:         Name of the list
# name_plural:  Name in plural (optional)
# sort_mode:    Sorting order (Alpha, -Alpha, SortCol)
# masks:        Edit masks to indicate various statuses of the list
#                (e.g  if editable or deletable..etc)
# notes:        Notes for the list
# items:        List of items for the list
#   id:         Primary id
#   value:      Value (name) of the list item
#   extra:      Abbreviated version of the value
#   status:     If enabled (1 - enabled, 0 - disabled)
#   sort:       Sort order  (optional)
#   properties: Item-specific config based on Ticket Flags form fields
#     (key):  (value)
# properties:   List properties form (see form.yaml for details)
#
---
# Ticket statuses
- type: ticket-status #notrans
  name: Ticket Status
  name_plural: Ticket Statuses
  sort_mode: SortCol  # notrans
  masks: 13
  notes: |
    Ticket statuses
  properties:
    title: Ticket Status Properties
    instructions: Properties that can be set on a ticket status.
    deletable: false
    fields:
      - type: state # notrans
        name: state # notrans
        label: State
        required: true
        sort: 1
        edit_mask: 63
        configuration:
            prompt: State of a ticket
      - type: memo # notrans
        name: description # notrans
        label: Description
        required: false
        sort: 3
        edit_mask: 15
        configuration:
            rows: 2
            cols: 40
            html: false
            length: 100
  configuration:
    handler: TicketStatusList
";
        
        $__internal_64e700fd8d6adba0753f485d650a0ce8b6525a0c37c704d63de8e6610e73fefd->leave($__internal_64e700fd8d6adba0753f485d650a0ce8b6525a0c37c704d63de8e6610e73fefd_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/list.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Custom (dynamic) lists. This data is used as the initial,*/
/* # minimal data for dynamic list that ships with the system.*/
/* #*/
/* # Fields:*/
/* # id:           Primary id (not recommended)*/
/* # name:         Name of the list*/
/* # name_plural:  Name in plural (optional)*/
/* # sort_mode:    Sorting order (Alpha, -Alpha, SortCol)*/
/* # masks:        Edit masks to indicate various statuses of the list*/
/* #                (e.g  if editable or deletable..etc)*/
/* # notes:        Notes for the list*/
/* # items:        List of items for the list*/
/* #   id:         Primary id*/
/* #   value:      Value (name) of the list item*/
/* #   extra:      Abbreviated version of the value*/
/* #   status:     If enabled (1 - enabled, 0 - disabled)*/
/* #   sort:       Sort order  (optional)*/
/* #   properties: Item-specific config based on Ticket Flags form fields*/
/* #     (key):  (value)*/
/* # properties:   List properties form (see form.yaml for details)*/
/* #*/
/* ---*/
/* # Ticket statuses*/
/* - type: ticket-status #notrans*/
/*   name: Ticket Status*/
/*   name_plural: Ticket Statuses*/
/*   sort_mode: SortCol  # notrans*/
/*   masks: 13*/
/*   notes: |*/
/*     Ticket statuses*/
/*   properties:*/
/*     title: Ticket Status Properties*/
/*     instructions: Properties that can be set on a ticket status.*/
/*     deletable: false*/
/*     fields:*/
/*       - type: state # notrans*/
/*         name: state # notrans*/
/*         label: State*/
/*         required: true*/
/*         sort: 1*/
/*         edit_mask: 63*/
/*         configuration:*/
/*             prompt: State of a ticket*/
/*       - type: memo # notrans*/
/*         name: description # notrans*/
/*         label: Description*/
/*         required: false*/
/*         sort: 3*/
/*         edit_mask: 15*/
/*         configuration:*/
/*             rows: 2*/
/*             cols: 40*/
/*             html: false*/
/*             length: 100*/
/*   configuration:*/
/*     handler: TicketStatusList*/
/* */
