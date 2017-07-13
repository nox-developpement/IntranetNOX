<?php

/* support/include/i18n/en_US/templates/page/banner-staff.yaml */
class __TwigTemplate_41fad165af34e62b15c9e94b531926f0da6508e94918ea49c884b1756b4af092 extends Twig_Template
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
# banner-staff.yaml
#
# This is the initial message and banner shown on the staff login page
---
notes: >
    This is the initial message and banner shown on the Staff Log In page.
    The first input field refers to the red-formatted text that appears at the top.
    The latter textarea is for the banner content which should serve as a disclaimer.
name: \"Authentication Required\"
body: \"\"
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/banner-staff.yaml";
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
        return new Twig_Source("", "support/include/i18n/en_US/templates/page/banner-staff.yaml", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\i18n\\en_US\\templates\\page\\banner-staff.yaml");
    }
}
