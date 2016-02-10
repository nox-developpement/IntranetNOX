<?php

/* support/include/i18n/en_US/templates/page/pwreset-staff.yaml */
class __TwigTemplate_b42cf614ca74a1192f088a658c51fcf64742da8c368886982ac2df3e43540d55 extends Twig_Template
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
# pwreset-staff.yaml
#
# Template of the email sent to staff members when using the Forgot My
# Password link
---
notes: >
    This template defines the email sent to Staff who select the <strong>Forgot My 
    Password</strong> link on the Staff Control Panel Log In page.
name: \"osTicket Staff Password Reset\"
body: >
    <h3><strong>Hi %{staff.name.first},</strong></h3>
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
    <em style=\"font-size: small\">Your friendly Customer Support System</em>
    <br />
    <img src=\"cid:b56944cb4722cc5cda9d1e23a3ea7fbc\" alt=\"Powered by
    osTicket\" width=\"126\" height=\"19\" style=\"width: 126px\" />
    </div>
";
    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/pwreset-staff.yaml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* #*/
/* # pwreset-staff.yaml*/
/* #*/
/* # Template of the email sent to staff members when using the Forgot My*/
/* # Password link*/
/* ---*/
/* notes: >*/
/*     This template defines the email sent to Staff who select the <strong>Forgot My */
/*     Password</strong> link on the Staff Control Panel Log In page.*/
/* name: "osTicket Staff Password Reset"*/
/* body: >*/
/*     <h3><strong>Hi %{staff.name.first},</strong></h3>*/
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
/*     <em style="font-size: small">Your friendly Customer Support System</em>*/
/*     <br />*/
/*     <img src="cid:b56944cb4722cc5cda9d1e23a3ea7fbc" alt="Powered by*/
/*     osTicket" width="126" height="19" style="width: 126px" />*/
/*     </div>*/
/* */
