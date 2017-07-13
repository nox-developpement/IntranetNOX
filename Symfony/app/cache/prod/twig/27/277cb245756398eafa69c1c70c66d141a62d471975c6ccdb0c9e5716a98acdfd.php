<?php

/* support/include/i18n/en_US/email_template_group.yaml */
class __TwigTemplate_e07e368cf428b796101e5c7affea8b02c25b17dfff0559ef438267c2702b255a extends Twig_Template
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
# Default email template group for the system
#
# NOTE: The language field is defined for the email tempate group model, but
#       is not considered by the installer. Whatever language the install
#       loads data for, the same language will be used to load the email
#       templates
#
# Fields:
# isactive - (bool:0|1) true or false if the templates should be initially
#       usable
# name - (string) descriptive name for the template group
# notes - Administrative notes (viewable internally only)
#
---
- id: 1
  isactive: 1
  name: osTicket Default Template (HTML)
  notes: |
    Default osTicket templates
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/email_template_group.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/email_template_group.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\email_template_group.yaml");
    }
}
