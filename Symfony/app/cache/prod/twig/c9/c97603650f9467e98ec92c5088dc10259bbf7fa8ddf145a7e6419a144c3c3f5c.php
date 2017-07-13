<?php

/* support/include/i18n/en_US/department.yaml */
class __TwigTemplate_cbd7cde2f12e4f22c0fc7a65b040a3c56acbbd8612b905b2b570183f5f6bfab9 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/department.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/department.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\department.yaml");
    }
}
