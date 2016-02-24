<?php

/* support/include/i18n/en_US/department.yaml */
class __TwigTemplate_562f550063b5baa4a3e89c7265ac75ab107d70f21d2870802513a9775f95d493 extends Twig_Template
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
        $__internal_520d4ce033c971db096b4d92b5ec89943220ee645646def207837eb27454c9a7 = $this->env->getExtension("native_profiler");
        $__internal_520d4ce033c971db096b4d92b5ec89943220ee645646def207837eb27454c9a7->enter($__internal_520d4ce033c971db096b4d92b5ec89943220ee645646def207837eb27454c9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/department.yaml"));

        // line 1
        echo "#
# Departments defined initially for the system
#
# Fields:
# id - (int:optional) id number in the database
# name - (string) Short name of the department
# signature - (string) Descriptive name of the department
#
# NOTE: The department listed first by ID# will be the default department
#
# NOTE: ------------------------------------
# The very first group listed in this document will be the primary
# department of the initial staff member -- the administrator.
---
- id: 1
  name: Support
  signature: |
    Support Department
  ispublic: 1
  group_membership: 1

- id: 2
  name: Sales
  signature: |
    Sales and Customer Retention
  ispublic: 1
  sla_id: 1
  group_membership: 1

- id: 3
  name: Maintenance
  signature: |
    Maintenance Department
  ispublic: 0
  group_membership: 0
";
        
        $__internal_520d4ce033c971db096b4d92b5ec89943220ee645646def207837eb27454c9a7->leave($__internal_520d4ce033c971db096b4d92b5ec89943220ee645646def207837eb27454c9a7_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/department.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # Departments defined initially for the system*/
/* #*/
/* # Fields:*/
/* # id - (int:optional) id number in the database*/
/* # name - (string) Short name of the department*/
/* # signature - (string) Descriptive name of the department*/
/* #*/
/* # NOTE: The department listed first by ID# will be the default department*/
/* #*/
/* # NOTE: ------------------------------------*/
/* # The very first group listed in this document will be the primary*/
/* # department of the initial staff member -- the administrator.*/
/* ---*/
/* - id: 1*/
/*   name: Support*/
/*   signature: |*/
/*     Support Department*/
/*   ispublic: 1*/
/*   group_membership: 1*/
/* */
/* - id: 2*/
/*   name: Sales*/
/*   signature: |*/
/*     Sales and Customer Retention*/
/*   ispublic: 1*/
/*   sla_id: 1*/
/*   group_membership: 1*/
/* */
/* - id: 3*/
/*   name: Maintenance*/
/*   signature: |*/
/*     Maintenance Department*/
/*   ispublic: 0*/
/*   group_membership: 0*/
/* */
