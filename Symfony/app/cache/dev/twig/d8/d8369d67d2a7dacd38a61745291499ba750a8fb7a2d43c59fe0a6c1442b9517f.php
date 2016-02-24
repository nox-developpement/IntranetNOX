<?php

/* support/include/i18n/en_US/team.yaml */
class __TwigTemplate_dd785dfe9d1a97090d6e2e8521a5e9cb2bb0f243187434cffe8b21a769261fcb extends Twig_Template
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
        $__internal_d91ed6cf3f54306f91ba9eb1c17e2248b0f582d6e1dee7850bf103067f80a9dc = $this->env->getExtension("native_profiler");
        $__internal_d91ed6cf3f54306f91ba9eb1c17e2248b0f582d6e1dee7850bf103067f80a9dc->enter($__internal_d91ed6cf3f54306f91ba9eb1c17e2248b0f582d6e1dee7850bf103067f80a9dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/team.yaml"));

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
        
        $__internal_d91ed6cf3f54306f91ba9eb1c17e2248b0f582d6e1dee7850bf103067f80a9dc->leave($__internal_d91ed6cf3f54306f91ba9eb1c17e2248b0f582d6e1dee7850bf103067f80a9dc_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/team.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
