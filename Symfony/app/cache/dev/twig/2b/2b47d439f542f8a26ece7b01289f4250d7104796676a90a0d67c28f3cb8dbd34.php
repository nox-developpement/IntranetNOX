<?php

/* support/include/client/pwreset.sent.php */
class __TwigTemplate_21f67ce7f64ac45e30ce1cc7d4b05fb87d8cc019bd207f4d617870391483328f extends Twig_Template
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
        $__internal_6c31cfcc51499065957f50d6acb5036d22ba4f4c9e39f056fd4594bacf104fad = $this->env->getExtension("native_profiler");
        $__internal_6c31cfcc51499065957f50d6acb5036d22ba4f4c9e39f056fd4594bacf104fad->enter($__internal_6c31cfcc51499065957f50d6acb5036d22ba4f4c9e39f056fd4594bacf104fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/pwreset.sent.php"));

        // line 1
        echo "<h1><?php echo __('Forgot My Password'); ?></h1>
<p><?php echo __(
'Enter your username or email address in the form below and press the <strong>Send Email</strong> button to have a password reset link sent to your email account on file.');
?>

<form action=\"pwreset.php\" method=\"post\" id=\"clientLogin\">
<div style=\"width:50%;display:inline-block\"><?php echo __(
    'We have sent you a reset email to the email address you have on file for your account. If you do not receive the email or cannot reset your password, please submit a ticket to have your account unlocked.'
); ?>
    </div>
</form>
";
        
        $__internal_6c31cfcc51499065957f50d6acb5036d22ba4f4c9e39f056fd4594bacf104fad->leave($__internal_6c31cfcc51499065957f50d6acb5036d22ba4f4c9e39f056fd4594bacf104fad_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/pwreset.sent.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <h1><?php echo __('Forgot My Password'); ?></h1>*/
/* <p><?php echo __(*/
/* 'Enter your username or email address in the form below and press the <strong>Send Email</strong> button to have a password reset link sent to your email account on file.');*/
/* ?>*/
/* */
/* <form action="pwreset.php" method="post" id="clientLogin">*/
/* <div style="width:50%;display:inline-block"><?php echo __(*/
/*     'We have sent you a reset email to the email address you have on file for your account. If you do not receive the email or cannot reset your password, please submit a ticket to have your account unlocked.'*/
/* ); ?>*/
/*     </div>*/
/* </form>*/
/* */
