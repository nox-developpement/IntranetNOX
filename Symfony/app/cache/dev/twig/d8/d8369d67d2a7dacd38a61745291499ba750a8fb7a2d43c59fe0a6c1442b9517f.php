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
        $__internal_f2073e2071c304b93e29c086d89e11ee3c49626cc3e87735c7496a3ed957b3ef = $this->env->getExtension("native_profiler");
        $__internal_f2073e2071c304b93e29c086d89e11ee3c49626cc3e87735c7496a3ed957b3ef->enter($__internal_f2073e2071c304b93e29c086d89e11ee3c49626cc3e87735c7496a3ed957b3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/team.yaml"));

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
        
        $__internal_f2073e2071c304b93e29c086d89e11ee3c49626cc3e87735c7496a3ed957b3ef->leave($__internal_f2073e2071c304b93e29c086d89e11ee3c49626cc3e87735c7496a3ed957b3ef_prof);

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
