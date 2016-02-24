<?php

/* support/include/client/pwreset.request.php */
class __TwigTemplate_a52b9300e5ca0f898f6715574b2d86e135fcfb6633edee325efd2946dd504b28 extends Twig_Template
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
        $__internal_bfdaec0b6ff58920892c9ecf7b4fec6dc96f7981069698a95952a7b076fa1ac2 = $this->env->getExtension("native_profiler");
        $__internal_bfdaec0b6ff58920892c9ecf7b4fec6dc96f7981069698a95952a7b076fa1ac2->enter($__internal_bfdaec0b6ff58920892c9ecf7b4fec6dc96f7981069698a95952a7b076fa1ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/pwreset.request.php"));

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
        
        $__internal_bfdaec0b6ff58920892c9ecf7b4fec6dc96f7981069698a95952a7b076fa1ac2->leave($__internal_bfdaec0b6ff58920892c9ecf7b4fec6dc96f7981069698a95952a7b076fa1ac2_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/pwreset.request.php";
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
