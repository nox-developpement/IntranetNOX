<?php

/* support/include/i18n/en_US/templates/page/registration-client.yaml */
class __TwigTemplate_be85012fe398eebbb86b3063b7627aa2b0d404ef9b43d408700dd7296418b92d extends Twig_Template
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
        $__internal_39fe99640dd2b6f1b0d7e155bcd41c0654d0f679b1992fe0ce5ba71aaea61ba3 = $this->env->getExtension("native_profiler");
        $__internal_39fe99640dd2b6f1b0d7e155bcd41c0654d0f679b1992fe0ce5ba71aaea61ba3->enter($__internal_39fe99640dd2b6f1b0d7e155bcd41c0654d0f679b1992fe0ce5ba71aaea61ba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/page/registration-client.yaml"));

        // line 1
        echo "#
# registration-staff.yaml
#
# Confirmation email sent to clients when accounts are created for them by
# staff or via the client portal. This email serves as an email address
# verification.
#
---
notes: >
    This template defines the email sent to Clients when their account has been
    created in the Client Portal or by an Agent on their behalf. This email serves as
    an email address verification. Please use %{link} somewhere in the body.
name: \"Welcome to %{company.name}\"
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
    <em style=\"font-size: small\">Your friendly Customer Support System
    <br />
    %{company.name}</em>
    </div>
";
        
        $__internal_39fe99640dd2b6f1b0d7e155bcd41c0654d0f679b1992fe0ce5ba71aaea61ba3->leave($__internal_39fe99640dd2b6f1b0d7e155bcd41c0654d0f679b1992fe0ce5ba71aaea61ba3_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/registration-client.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* #*/
/* # registration-staff.yaml*/
/* #*/
/* # Confirmation email sent to clients when accounts are created for them by*/
/* # staff or via the client portal. This email serves as an email address*/
/* # verification.*/
/* #*/
/* ---*/
/* notes: >*/
/*     This template defines the email sent to Clients when their account has been*/
/*     created in the Client Portal or by an Agent on their behalf. This email serves as*/
/*     an email address verification. Please use %{link} somewhere in the body.*/
/* name: "Welcome to %{company.name}"*/
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
/*     <em style="font-size: small">Your friendly Customer Support System*/
/*     <br />*/
/*     %{company.name}</em>*/
/*     </div>*/
/* */
