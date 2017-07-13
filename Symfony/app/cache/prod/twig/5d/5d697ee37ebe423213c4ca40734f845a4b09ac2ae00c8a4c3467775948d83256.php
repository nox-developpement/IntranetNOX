<?php

/* support/include/i18n/en_US/organization.yaml */
class __TwigTemplate_b4f99bb9736ebbb8f477ccffa04f407c949bc4a1083fb3220355acfc33c99d1e extends Twig_Template
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
# Initial organizations defined for the system.
#
# Fields:
# name - Descriptive name for the organization
# fields - custom fields
#
---
- name: osTicket
  fields:
    address:|
        420 Desoto Street
        Alexandria, LA 71301
    phone: (318) 290-3674
    website: http://osticket.com
    notes: >
        Not only do we develop the software, we also use it to manage
        support for osTicket. Let us help you quickly implement and leverage
        the full potential of osTicket's features and functionality. Contact
        us for professional support or visit our website for documentation
        and community support.
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/organization.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/organization.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\organization.yaml");
    }
}
