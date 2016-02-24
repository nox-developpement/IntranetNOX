<?php

/* support/include/client/pwreset.login.php */
class __TwigTemplate_2bfd1446f95c73a1a73f7ea8196459a77edb912f8e3b8570bcbbdbbcd011cb4b extends Twig_Template
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
        $__internal_2ca6bd4e20242c0d0244b75a6a15083c4074e8b3cfa28bc624059ae597b19ff6 = $this->env->getExtension("native_profiler");
        $__internal_2ca6bd4e20242c0d0244b75a6a15083c4074e8b3cfa28bc624059ae597b19ff6->enter($__internal_2ca6bd4e20242c0d0244b75a6a15083c4074e8b3cfa28bc624059ae597b19ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/pwreset.login.php"));

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
        
        $__internal_2ca6bd4e20242c0d0244b75a6a15083c4074e8b3cfa28bc624059ae597b19ff6->leave($__internal_2ca6bd4e20242c0d0244b75a6a15083c4074e8b3cfa28bc624059ae597b19ff6_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/pwreset.login.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
