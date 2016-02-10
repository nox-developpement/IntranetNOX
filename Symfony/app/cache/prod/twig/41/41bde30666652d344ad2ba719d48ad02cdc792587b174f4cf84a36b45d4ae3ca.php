<?php

/* support/include/i18n/en_US/templates/page/registration-confirm.yaml */
class __TwigTemplate_8d42b5e65b7882bc055c15ba4d7b0cac7a6ad2c45ac3eae7b0f88cf904f80746 extends Twig_Template
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
# registration-confirm.yaml
#
# Template of the page shown to the user after registering for an account.
# The system will send the user an email with a link they should follow to
# confirm the account. This page should inform them of the next step in
# the process.
#
---
notes: >
    This templates defines the page shown to Clients after completing the registration
    form. The template should mention that the system is sending 
    them an email confirmation link and what is the next step in the registration
    process.
name: \"Account registration\"
body: >
    <div><strong>Thanks for registering for an account.</strong><br/>
    <br />
    We've just sent you an email to the address you entered. Please follow
    the link in the email to confirm your account and gain access to your
    tickets.
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/registration-confirm.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # registration-confirm.yaml*/
/* #*/
/* # Template of the page shown to the user after registering for an account.*/
/* # The system will send the user an email with a link they should follow to*/
/* # confirm the account. This page should inform them of the next step in*/
/* # the process.*/
/* #*/
/* ---*/
/* notes: >*/
/*     This templates defines the page shown to Clients after completing the registration*/
/*     form. The template should mention that the system is sending */
/*     them an email confirmation link and what is the next step in the registration*/
/*     process.*/
/* name: "Account registration"*/
/* body: >*/
/*     <div><strong>Thanks for registering for an account.</strong><br/>*/
/*     <br />*/
/*     We've just sent you an email to the address you entered. Please follow*/
/*     the link in the email to confirm your account and gain access to your*/
/*     tickets.*/
/*     </div>*/
/* */
