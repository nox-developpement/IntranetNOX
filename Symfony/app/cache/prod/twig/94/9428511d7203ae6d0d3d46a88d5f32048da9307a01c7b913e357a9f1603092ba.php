<?php

/* support/include/i18n/en_US/list.yaml */
class __TwigTemplate_9429e5fac8189670c255eaa6bde9039b70645005fe514e2b6bcf79b4c1a4fed8 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/list.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/list.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\list.yaml");
    }
}
