<?php

/* support/include/i18n/en_US/templates/page/pwreset-client.yaml */
class __TwigTemplate_4e13441d10f796bdebadd695e8a62fd72cfd975ba05ffec0b2f3a71ecacb71cc extends Twig_Template
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
# pwreset-client.yaml
#
# Template of the email sent to clients when using the Forgot My Password
# link on the login page
---
notes: >
    This template defines the email sent to Clients who select the <strong>Forgot My
    Password</strong> link on the Client Log In page.
name: \"%{company.name} Help Desk Access\"
body: >
    <h3><strong>Hi %{user.name.first},</strong></h3>
    <div>
    A password reset request has been submitted on your behalf for the
    helpdesk at %{url}.<br />
    <br />
    If you feel that this has been done in error, delete and disregard this
    email. Your account is still secure and no one has been given access to
    it. It is not locked and your password has not been reset. Someone could
    have mistakenly entered your email address.<br />
    <br />
    Follow the link below to login to the help desk and change your
    password.<br />
    <br />
    <a href=\"%{link}\">%{link}</a><br />
    <br />
    <em style=\"font-size: small\">Your friendly Customer Support System
    <br />
    %{company.name}</em>
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/pwreset-client.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # pwreset-client.yaml*/
/* #*/
/* # Template of the email sent to clients when using the Forgot My Password*/
/* # link on the login page*/
/* ---*/
/* notes: >*/
/*     This template defines the email sent to Clients who select the <strong>Forgot My*/
/*     Password</strong> link on the Client Log In page.*/
/* name: "%{company.name} Help Desk Access"*/
/* body: >*/
/*     <h3><strong>Hi %{user.name.first},</strong></h3>*/
/*     <div>*/
/*     A password reset request has been submitted on your behalf for the*/
/*     helpdesk at %{url}.<br />*/
/*     <br />*/
/*     If you feel that this has been done in error, delete and disregard this*/
/*     email. Your account is still secure and no one has been given access to*/
/*     it. It is not locked and your password has not been reset. Someone could*/
/*     have mistakenly entered your email address.<br />*/
/*     <br />*/
/*     Follow the link below to login to the help desk and change your*/
/*     password.<br />*/
/*     <br />*/
/*     <a href="%{link}">%{link}</a><br />*/
/*     <br />*/
/*     <em style="font-size: small">Your friendly Customer Support System*/
/*     <br />*/
/*     %{company.name}</em>*/
/*     </div>*/
/* */
