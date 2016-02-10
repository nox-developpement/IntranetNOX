<?php

/* support/include/client/pwreset.login.php */
class __TwigTemplate_a3f26c0d6b5e3cb36fe708820b03cc7c61c135cf3ed18e35be26d12146f343da extends Twig_Template
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
        echo "<?php
if(!defined('OSTCLIENTINC')) die('Access Denied');

\$userid=Format::input(\$_POST['userid']);
?>
<h1><?php echo __('Forgot My Password'); ?></h1>
<p><?php echo __(
'Enter your username or email address again in the form below and press the <strong>Login</strong> to access your account and reset your password.');
?>
<form action=\"pwreset.php\" method=\"post\" id=\"clientLogin\">
    <div style=\"width:50%;display:inline-block\">
    <?php csrf_token(); ?>
    <input type=\"hidden\" name=\"do\" value=\"reset\"/>
    <input type=\"hidden\" name=\"token\" value=\"<?php echo Format::htmlchars(\$_REQUEST['token']); ?>\"/>
    <strong><?php echo Format::htmlchars(\$banner); ?></strong>
    <br>
    <div>
        <label for=\"username\"><?php echo __('Username'); ?>:</label>
        <input id=\"username\" type=\"text\" name=\"userid\" size=\"30\" value=\"<?php echo \$userid; ?>\">
    </div>
    <p>
        <input class=\"btn\" type=\"submit\" value=\"Login\">
    </p>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "support/include/client/pwreset.login.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTCLIENTINC')) die('Access Denied');*/
/* */
/* $userid=Format::input($_POST['userid']);*/
/* ?>*/
/* <h1><?php echo __('Forgot My Password'); ?></h1>*/
/* <p><?php echo __(*/
/* 'Enter your username or email address again in the form below and press the <strong>Login</strong> to access your account and reset your password.');*/
/* ?>*/
/* <form action="pwreset.php" method="post" id="clientLogin">*/
/*     <div style="width:50%;display:inline-block">*/
/*     <?php csrf_token(); ?>*/
/*     <input type="hidden" name="do" value="reset"/>*/
/*     <input type="hidden" name="token" value="<?php echo Format::htmlchars($_REQUEST['token']); ?>"/>*/
/*     <strong><?php echo Format::htmlchars($banner); ?></strong>*/
/*     <br>*/
/*     <div>*/
/*         <label for="username"><?php echo __('Username'); ?>:</label>*/
/*         <input id="username" type="text" name="userid" size="30" value="<?php echo $userid; ?>">*/
/*     </div>*/
/*     <p>*/
/*         <input class="btn" type="submit" value="Login">*/
/*     </p>*/
/*     </div>*/
/* </form>*/
/* */
