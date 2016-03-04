<?php

/* support/include/i18n/en_US/templates/page/registration-staff.yaml */
class __TwigTemplate_ba1b0918f4bced38dce53c58c2d6e8ed9b3b375d4050091f1c976d138922fec9 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/registration-staff.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
