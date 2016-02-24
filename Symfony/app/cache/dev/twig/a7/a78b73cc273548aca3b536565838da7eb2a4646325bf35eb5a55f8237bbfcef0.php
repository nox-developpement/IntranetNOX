<?php

/* support/include/i18n/en_US/help_topic.yaml */
class __TwigTemplate_22828754901cd65f69d6057367e54f20c00a0de71a00e8f02f885f79c274d3dc extends Twig_Template
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
        $__internal_7b21228b4951e132b5ee0481ecef7d2da59afac0e5ec5d214458cc1c2d9645b3 = $this->env->getExtension("native_profiler");
        $__internal_7b21228b4951e132b5ee0481ecef7d2da59afac0e5ec5d214458cc1c2d9645b3->enter($__internal_7b21228b4951e132b5ee0481ecef7d2da59afac0e5ec5d214458cc1c2d9645b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/help_topic.yaml"));

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
        
        $__internal_7b21228b4951e132b5ee0481ecef7d2da59afac0e5ec5d214458cc1c2d9645b3->leave($__internal_7b21228b4951e132b5ee0481ecef7d2da59afac0e5ec5d214458cc1c2d9645b3_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/help_topic.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Default help topics installed for the system*/
/* #*/
/* # Fields:*/
/* # id - (int:optional) id number in the database*/
/* # topic - (string) descriptive name of the help topic*/
/* # isactive - (bool:0|1) if the help topic should be initially usable*/
/* # ispublic - (bool:0|1) true or false if end users should be able to see the*/
/* #       help topic. In other words, true or false if the help topic is _not_*/
/* #       for internal use only*/
/* # noautoresp - (bool:1) true to disable the auto-responder for tickets*/
/* #       assigned to this help topic. NOTE that this field must be completely*/
/* #       omitted to ENABLE the auto-response by default*/
/* # dept_id - (int) id number of the department with which this help topic is*/
/* #       associated*/
/* # sla_id - (int:optional) id number of the sla with which this help topic is*/
/* #       associated*/
/* # notes - (string) administrative notes (internally viewable only)*/
/* #*/
/* ---*/
/* - topic_id: 1*/
/*   isactive: 1*/
/*   ispublic: 1*/
/*   dept_id: 1*/
/*   priority_id: 2*/
/*   topic: General Inquiry*/
/*   notes: |*/
/*     Questions about products or services*/
/* */
/* - isactive: 1*/
/*   ispublic: 1*/
/*   dept_id: 1*/
/*   priority_id: 1*/
/*   topic: Feedback*/
/*   notes: |*/
/*     Tickets that primarily concern the sales and billing departments*/
/* */
/* - topic_id: 10*/
/*   isactive: 1*/
/*   ispublic: 1*/
/*   dept_id: 1*/
/*   priority_id: 2*/
/*   topic: Report a Problem*/
/*   notes: |*/
/*     Product, service, or equipment related issues*/
/* */
/* - topic_pid: 10*/
/*   isactive: 1*/
/*   ispublic: 1*/
/*   dept_id: 1*/
/*   sla_id: 1*/
/*   priority_id: 3*/
/*   topic: Access Issue*/
/*   notes: |*/
/*     Report an inability access a physical or virtual asset*/
/* */
