<?php

/* support/include/i18n/en_US/team.yaml */
class __TwigTemplate_7db69f422215c923a165d2b646a389d8ea7fa9027250716709b06f1aaa34fb9c extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/i18n/en_US/team.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\team.yaml");
    }
}
