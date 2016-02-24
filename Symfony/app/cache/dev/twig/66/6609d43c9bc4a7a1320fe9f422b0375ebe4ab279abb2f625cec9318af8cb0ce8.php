<?php

/* support/include/i18n/en_US/templates/page/pwreset-staff.yaml */
class __TwigTemplate_693f1d8da7b316ed1f160a7c5a2eaad5820f6655c9fe3e2b82557b5b1a6c3c50 extends Twig_Template
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
        $__internal_43c8faebd448f5b4f34637cd297b985c43c6a2ada4652a0cdc250f9158cc7524 = $this->env->getExtension("native_profiler");
        $__internal_43c8faebd448f5b4f34637cd297b985c43c6a2ada4652a0cdc250f9158cc7524->enter($__internal_43c8faebd448f5b4f34637cd297b985c43c6a2ada4652a0cdc250f9158cc7524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/i18n/en_US/templates/page/pwreset-staff.yaml"));

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
        
        $__internal_43c8faebd448f5b4f34637cd297b985c43c6a2ada4652a0cdc250f9158cc7524->leave($__internal_43c8faebd448f5b4f34637cd297b985c43c6a2ada4652a0cdc250f9158cc7524_prof);

    }

    public function getTemplateName()
    {
        return "support/include/i18n/en_US/templates/page/pwreset-staff.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
