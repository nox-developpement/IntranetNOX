<?php

/* support/include/i18n/en_US/team.yaml */
class __TwigTemplate_8f8716d98f7f8eaad26dc6eefc026eb904c73c56fffc5ba11998875c0322f166 extends Twig_Template
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
# Initial teams defined for the system.
#
# Fields:
# isenabled - (bool:1|0) true or false if the team should be initially
#       enabled
# noalerts - (bool:1|0)
# name - Descriptive name for the team
# notes - Administrative notes (viewable internal only)
#
---
- isenabled: 1
  noalerts: 0
  name: Level I Support
  notes: |
    Tier 1 support, responsible for the initial iteraction with customers
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/team.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # Initial teams defined for the system.*/
/* #*/
/* # Fields:*/
/* # isenabled - (bool:1|0) true or false if the team should be initially*/
/* #       enabled*/
/* # noalerts - (bool:1|0)*/
/* # name - Descriptive name for the team*/
/* # notes - Administrative notes (viewable internal only)*/
/* #*/
/* ---*/
/* - isenabled: 1*/
/*   noalerts: 0*/
/*   name: Level I Support*/
/*   notes: |*/
/*     Tier 1 support, responsible for the initial iteraction with customers*/
/* */
