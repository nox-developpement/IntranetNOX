<?php

/* support/include/i18n/en_US/priority.yaml */
class __TwigTemplate_a7068faa1ea12c953beddab5f19b72dd7d32126c4ef0578f8d3cf87d650c54dd extends Twig_Template
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
# Default system data for ticket priorities
#
---
low:
    priority_id: 1
    priority_desc: Low
    priority_color: \"#DDFFDD\"
    priority_urgency: 4
normal:
    priority_id: 2
    priority_desc: Normal
    priority_color: \"#FFFFF0A\"
    priority_urgency: 3
high:
    priority_id: 3
    priority_desc: High
    priority_color: \"#FEE7E7\"
    priority_urgency: 2
emergency:
    priority_id: 4
    priority_desc: Emergency
    priority_color: \"#FEE7E7\"
    priority_urgency: 1
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/priority.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/priority.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\priority.yaml");
    }
}
