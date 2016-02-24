<?php

/* support/include/i18n/en_US/templates/page/registration-staff.yaml */
class __TwigTemplate_ee225737dba22487325ee6c01770b673c996af6dd855fdce0f3544d39777d9b1 extends Twig_Template
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
        $__internal_fb25fb349d1c918030c760980f01eb6a3b5f99a5e9e3d6aac23e73c32efcb9b4 = $this->env->getExtension("native_profiler");
        $__internal_fb25fb349d1c918030c760980f01eb6a3b5f99a5e9e3d6aac23e73c32efcb9b4->enter($__internal_fb25fb349d1c918030c760980f01eb6a3b5f99a5e9e3d6aac23e73c32efcb9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/page/registration-staff.yaml"));

        // line 1
        echo "#
# registration-staff.yaml
#
# Initial (optional) email sent to staff members when accounts are created
# for them in the staff control panel
#
---
notes: >
    This template defines the initial email (optional) sent to Agents when an account
    is created on their behalf.
name: \"Welcome to osTicket\"
body: >
    <h3><strong>Hi %{recipient.name.first},</strong></h3>
    <div>
    We've created an account for you at our help desk at %{url}.<br />
    <br />
    Please follow the link below to confirm your account and gain access to
    your tickets.<br />
    <br />
    <a href=\"%{link}\">%{link}</a><br />
    <br />
    <em style=\"font-size: small\">Your friendly Customer Support System<br />
    %{company.name}</em>
    </div>
";
        
        $__internal_fb25fb349d1c918030c760980f01eb6a3b5f99a5e9e3d6aac23e73c32efcb9b4->leave($__internal_fb25fb349d1c918030c760980f01eb6a3b5f99a5e9e3d6aac23e73c32efcb9b4_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/registration-staff.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # registration-staff.yaml*/
/* #*/
/* # Initial (optional) email sent to staff members when accounts are created*/
/* # for them in the staff control panel*/
/* #*/
/* ---*/
/* notes: >*/
/*     This template defines the initial email (optional) sent to Agents when an account*/
/*     is created on their behalf.*/
/* name: "Welcome to osTicket"*/
/* body: >*/
/*     <h3><strong>Hi %{recipient.name.first},</strong></h3>*/
/*     <div>*/
/*     We've created an account for you at our help desk at %{url}.<br />*/
/*     <br />*/
/*     Please follow the link below to confirm your account and gain access to*/
/*     your tickets.<br />*/
/*     <br />*/
/*     <a href="%{link}">%{link}</a><br />*/
/*     <br />*/
/*     <em style="font-size: small">Your friendly Customer Support System<br />*/
/*     %{company.name}</em>*/
/*     </div>*/
/* */
