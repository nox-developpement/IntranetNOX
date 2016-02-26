<?php

/* support/include/client/pwreset.request.php */
class __TwigTemplate_1ebd657940a36d19c95b2f8f18af74d210b2b9e5df20f38b91d8c104641019a2 extends Twig_Template
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
'Enter your username or email address in the form below and press the <strong>Send Email</strong> button to have a password reset link sent to your email account on file.');
?>

<form action=\"pwreset.php\" method=\"post\" id=\"clientLogin\">
    <div style=\"width:50%;display:inline-block\">
    <?php csrf_token(); ?>
    <input type=\"hidden\" name=\"do\" value=\"sendmail\"/>
    <strong><?php echo Format::htmlchars(\$banner); ?></strong>
    <br>
    <div>
        <label for=\"username\"><?php echo __('Username'); ?>:</label>
        <input id=\"username\" type=\"text\" name=\"userid\" size=\"30\" value=\"<?php echo \$userid; ?>\">
    </div>
    <p>
        <input class=\"btn\" type=\"submit\" value=\"<?php echo __('Send Email'); ?>\">
    </p>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "support/include/client/pwreset.request.php";
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
/* 'Enter your username or email address in the form below and press the <strong>Send Email</strong> button to have a password reset link sent to your email account on file.');*/
/* ?>*/
/* */
/* <form action="pwreset.php" method="post" id="clientLogin">*/
/*     <div style="width:50%;display:inline-block">*/
/*     <?php csrf_token(); ?>*/
/*     <input type="hidden" name="do" value="sendmail"/>*/
/*     <strong><?php echo Format::htmlchars($banner); ?></strong>*/
/*     <br>*/
/*     <div>*/
/*         <label for="username"><?php echo __('Username'); ?>:</label>*/
/*         <input id="username" type="text" name="userid" size="30" value="<?php echo $userid; ?>">*/
/*     </div>*/
/*     <p>*/
/*         <input class="btn" type="submit" value="<?php echo __('Send Email'); ?>">*/
/*     </p>*/
/*     </div>*/
/* </form>*/
/* */
