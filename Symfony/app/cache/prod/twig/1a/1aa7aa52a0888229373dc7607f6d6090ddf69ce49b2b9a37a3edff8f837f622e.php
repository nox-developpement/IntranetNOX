<?php

/* support/include/i18n/en_US/help_topic.yaml */
class __TwigTemplate_64550e018f2f8c9d5fa548972a56c77ed327d1fd82dd86fc6716ae55fa9d428a extends Twig_Template
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
# Default help topics installed for the system
#
# Fields:
# id - (int:optional) id number in the database
# topic - (string) descriptive name of the help topic
# isactive - (bool:0|1) if the help topic should be initially usable
# ispublic - (bool:0|1) true or false if end users should be able to see the
#       help topic. In other words, true or false if the help topic is _not_
#       for internal use only
# noautoresp - (bool:1) true to disable the auto-responder for tickets
#       assigned to this help topic. NOTE that this field must be completely
#       omitted to ENABLE the auto-response by default
# dept_id - (int) id number of the department with which this help topic is
#       associated
# sla_id - (int:optional) id number of the sla with which this help topic is
#       associated
# notes - (string) administrative notes (internally viewable only)
#
---
- topic_id: 1
  isactive: 1
  ispublic: 1
  dept_id: 1
  priority_id: 2
  topic: General Inquiry
  notes: |
    Questions about products or services

- isactive: 1
  ispublic: 1
  dept_id: 1
  priority_id: 1
  topic: Feedback
  notes: |
    Tickets that primarily concern the sales and billing departments

- topic_id: 10
  isactive: 1
  ispublic: 1
  dept_id: 1
  priority_id: 2
  topic: Report a Problem
  notes: |
    Product, service, or equipment related issues

- topic_pid: 10
  isactive: 1
  ispublic: 1
  dept_id: 1
  sla_id: 1
  priority_id: 3
  topic: Access Issue
  notes: |
    Report an inability access a physical or virtual asset
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help_topic.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/help_topic.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\help_topic.yaml");
    }
}
