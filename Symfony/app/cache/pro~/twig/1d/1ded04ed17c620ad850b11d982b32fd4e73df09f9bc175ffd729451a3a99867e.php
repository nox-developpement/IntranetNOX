<?php

/* support/include/i18n/en_US/priority.yaml */
class __TwigTemplate_087bc512d2555669109fe49a9b1803b802e23c66070362c20c4f5df715486f9a extends Twig_Template
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
}
/* #*/
/* # Default system data for ticket priorities*/
/* #*/
/* ---*/
/* low:*/
/*     priority_id: 1*/
/*     priority_desc: Low*/
/*     priority_color: "#DDFFDD"*/
/*     priority_urgency: 4*/
/* normal:*/
/*     priority_id: 2*/
/*     priority_desc: Normal*/
/*     priority_color: "#FFFFF0A"*/
/*     priority_urgency: 3*/
/* high:*/
/*     priority_id: 3*/
/*     priority_desc: High*/
/*     priority_color: "#FEE7E7"*/
/*     priority_urgency: 2*/
/* emergency:*/
/*     priority_id: 4*/
/*     priority_desc: Emergency*/
/*     priority_color: "#FEE7E7"*/
/*     priority_urgency: 1*/
/* */
