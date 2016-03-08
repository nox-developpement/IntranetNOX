<?php

/* support/include/i18n/en_US/templates/page/banner-staff.yaml */
class __TwigTemplate_7fcec4d03c525762243289e1bdbe502730ad7aa5a6fb64eb125024382ea71234 extends Twig_Template
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
}
/* #*/
/* # banner-staff.yaml*/
/* #*/
/* # This is the initial message and banner shown on the staff login page*/
/* ---*/
/* notes: >*/
/*     This is the initial message and banner shown on the Staff Log In page.*/
/*     The first input field refers to the red-formatted text that appears at the top.*/
/*     The latter textarea is for the banner content which should serve as a disclaimer.*/
/* name: "Authentication Required"*/
/* body: ""*/
/* */
