<?php

/* support/include/i18n/en_US/sla.yaml */
class __TwigTemplate_b701e530ad155428004abdde1076652c9d1f2e734481fff359ff633784ea1f93 extends Twig_Template
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
        $__internal_5bcae83071899329f27b6e6e27b4d94b68595661fa06d783833e9a163ef4d49b = $this->env->getExtension("native_profiler");
        $__internal_5bcae83071899329f27b6e6e27b4d94b68595661fa06d783833e9a163ef4d49b->enter($__internal_5bcae83071899329f27b6e6e27b4d94b68595661fa06d783833e9a163ef4d49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/sla.yaml"));

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
        
        $__internal_5bcae83071899329f27b6e6e27b4d94b68595661fa06d783833e9a163ef4d49b->leave($__internal_5bcae83071899329f27b6e6e27b4d94b68595661fa06d783833e9a163ef4d49b_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/sla.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Initial Service-Level-Agreements (SLA) defined for the system*/
/* #*/
/* # Fields:*/
/* # id - (int:optional) id number in the database*/
/* # isactive - (bool:0|1) true of false if the SLA should initially be active*/
/* # enable_priority_escalation - (bool:0|1) true or false if the SLA should*/
/* #       cause the ticket priority to be escalated when it is marked overdue*/
/* # disable_overdue_alerts - (bool:0|1) - true or false if the overdue alert*/
/* #       emails should _not_ go out for tickets assigned to this SLA*/
/* # grace_period - (int) number or hours after the ticket is opened before it*/
/* #       is marked overdue*/
/* # name - (string) descriptive name of the SLA*/
/* # notes - (string) administrative notes (viewable internally only)*/
/* ---*/
/* - id: 1*/
/*   isactive: 1*/
/*   enable_priority_escalation: 1*/
/*   disable_overdue_alert: 0*/
/*   grace_period: 48*/
/*   name: Default SLA*/
/*   notes: |*/
/* */
