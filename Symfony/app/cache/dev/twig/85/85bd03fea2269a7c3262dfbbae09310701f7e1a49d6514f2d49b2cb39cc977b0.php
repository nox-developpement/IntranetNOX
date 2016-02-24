<?php

/* support/include/i18n/en_US/priority.yaml */
class __TwigTemplate_28730dda7b923720f43bd458995e5adf3900236eaf6dc1ed285628b321a7d028 extends Twig_Template
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
        $__internal_b731f768dfc41667bbb8a473537e0c238d83925becee538667123453c882e2fd = $this->env->getExtension("native_profiler");
        $__internal_b731f768dfc41667bbb8a473537e0c238d83925becee538667123453c882e2fd->enter($__internal_b731f768dfc41667bbb8a473537e0c238d83925becee538667123453c882e2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/priority.yaml"));

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
        
        $__internal_b731f768dfc41667bbb8a473537e0c238d83925becee538667123453c882e2fd->leave($__internal_b731f768dfc41667bbb8a473537e0c238d83925becee538667123453c882e2fd_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/priority.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
