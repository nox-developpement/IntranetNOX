<?php

/* support/include/pear/BUNDLE */
class __TwigTemplate_9198c5109cb806d1e8963205124e8ef23f3b9287cc420181baf1b5c060501505 extends Twig_Template
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
        $__internal_6738df30d91bd7cb3555503c3947ebf65f27963eccfe1f634d1a3683833e44dc = $this->env->getExtension("native_profiler");
        $__internal_6738df30d91bd7cb3555503c3947ebf65f27963eccfe1f634d1a3683833e44dc->enter($__internal_6738df30d91bd7cb3555503c3947ebf65f27963eccfe1f634d1a3683833e44dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/BUNDLE"));

        // line 1
        echo "Log of pear packages bundled with osTicket

* osTicket v1.7.*
===========================================================
 PEAR-1.9.4 - core class
 Mail-1.2.0
 Mail_Mime-1.8.5 
 Net_SMTP-1.6.1
 Net_Socket-1.0.10
 Auth_SASL-1.0.6

-------- Changes ----------
* Add connect() function to Mail/smtp.php
";
        
        $__internal_6738df30d91bd7cb3555503c3947ebf65f27963eccfe1f634d1a3683833e44dc->leave($__internal_6738df30d91bd7cb3555503c3947ebf65f27963eccfe1f634d1a3683833e44dc_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/BUNDLE";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Log of pear packages bundled with osTicket*/
/* */
/* * osTicket v1.7.**/
/* ===========================================================*/
/*  PEAR-1.9.4 - core class*/
/*  Mail-1.2.0*/
/*  Mail_Mime-1.8.5 */
/*  Net_SMTP-1.6.1*/
/*  Net_Socket-1.0.10*/
/*  Auth_SASL-1.0.6*/
/* */
/* -------- Changes ----------*/
/* * Add connect() function to Mail/smtp.php*/
/* */
