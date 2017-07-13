<?php

/* support/include/i18n/en_US/templates/page/offline.yaml */
class __TwigTemplate_c127427de9b0ec99b13ff23321b5bec4400ebf17467910e029d1a033a7bb02ac extends Twig_Template
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
# Page template: offline.yaml
#
# The offline page is served to the customer portal when the help desk is
# configured offline in the Admin Panel
#
---
notes: |
    The Offline Page appears in the Customer Portal when the Help Desk is offline.

name: Offline
body: |
    <div><h1>
    <span style=\"font-size: medium\">Support Ticket System Offline</span>
    </h1>
    <p>Thank you for your interest in contacting us.</p>
    <p>Our helpdesk is offline at the moment, please check back at a later
    time.</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/offline.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/page/offline.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\page\\offline.yaml");
    }
}
