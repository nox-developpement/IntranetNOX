<?php

/* support/include/i18n/en_US/templates/page/registration-confirm.yaml */
class __TwigTemplate_85d5619b95fff1250a4938bccc7b99d097f4176389b530ad42034af910fc8130 extends Twig_Template
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
        $__internal_79edbf4e3452313125807e4d4507b46c750fd8204da3feefbbf301fb279badca = $this->env->getExtension("native_profiler");
        $__internal_79edbf4e3452313125807e4d4507b46c750fd8204da3feefbbf301fb279badca->enter($__internal_79edbf4e3452313125807e4d4507b46c750fd8204da3feefbbf301fb279badca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/page/registration-confirm.yaml"));

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
        
        $__internal_79edbf4e3452313125807e4d4507b46c750fd8204da3feefbbf301fb279badca->leave($__internal_79edbf4e3452313125807e4d4507b46c750fd8204da3feefbbf301fb279badca_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/registration-confirm.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
