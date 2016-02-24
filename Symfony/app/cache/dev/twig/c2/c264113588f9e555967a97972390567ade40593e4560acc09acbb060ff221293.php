<?php

/* support/include/staff/login.tpl.php */
class __TwigTemplate_5ea54005929c513045237183671b649d2c9e45e3fb4b9154fbbb1d688d6ca4da extends Twig_Template
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
        $__internal_d4892ac8347cdf3e5de3b51396c0af653228de22068c5a51d494ffa20b2d603e = $this->env->getExtension("native_profiler");
        $__internal_d4892ac8347cdf3e5de3b51396c0af653228de22068c5a51d494ffa20b2d603e->enter($__internal_d4892ac8347cdf3e5de3b51396c0af653228de22068c5a51d494ffa20b2d603e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/login.tpl.php"));

        // line 1
        echo "<?php
include_once(INCLUDE_DIR.'staff/login.header.php');
\$info = (\$_POST && \$errors)?Format::htmlchars(\$_POST):array();
?>
<div id=\"loginBox\">
    <h1 id=\"logo\"><a href=\"index.php\">
        <span class=\"valign-helper\"></span>
        <img src=\"logo.php?login\" alt=\"osTicket :: <?php echo __('Staff Control Panel');?>\" />
    </a></h1>
    <h3><?php echo Format::htmlchars(\$msg); ?></h3>
    <div class=\"banner\"><small><?php echo (\$content) ? Format::display(\$content->getBody()) : ''; ?></small></div>
    <form action=\"login.php\" method=\"post\">
        <?php csrf_token(); ?>
        <input type=\"hidden\" name=\"do\" value=\"scplogin\">
        <fieldset>
        <input type=\"text\" name=\"userid\" id=\"name\" value=\"<?php echo \$info['userid']; ?>\" placeholder=\"<?php echo __('Email or Username'); ?>\" autocorrect=\"off\" autocapitalize=\"off\">
        <input type=\"password\" name=\"passwd\" id=\"pass\" placeholder=\"<?php echo __('Password'); ?>\" autocorrect=\"off\" autocapitalize=\"off\">
            <?php if (\$show_reset && \$cfg->allowPasswordReset()) { ?>
            <h3 style=\"display:inline\"><a href=\"pwreset.php\"><?php echo __('Forgot my password'); ?></a></h3>
            <?php } ?>
            <input class=\"submit\" type=\"submit\" name=\"submit\" value=\"<?php echo __('Log In'); ?>\">
        </fieldset>
    </form>
<?php
\$ext_bks = array();
foreach (StaffAuthenticationBackend::allRegistered() as \$bk)
    if (\$bk instanceof ExternalAuthentication)
        \$ext_bks[] = \$bk;

if (count(\$ext_bks)) { ?>
<div class=\"or\">
    <hr/>
</div><?php
    foreach (\$ext_bks as \$bk) { ?>
<div class=\"external-auth\"><?php \$bk->renderExternalLink(); ?></div><?php
    }
} ?>
</div>
<div id=\"copyRights\"><?php echo __('Copyright'); ?> &copy;
<a href='http://www.osticket.com' target=\"_blank\">osTicket.com</a></div>
</body>
</html>
";
        
        $__internal_d4892ac8347cdf3e5de3b51396c0af653228de22068c5a51d494ffa20b2d603e->leave($__internal_d4892ac8347cdf3e5de3b51396c0af653228de22068c5a51d494ffa20b2d603e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/login.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* include_once(INCLUDE_DIR.'staff/login.header.php');*/
/* $info = ($_POST && $errors)?Format::htmlchars($_POST):array();*/
/* ?>*/
/* <div id="loginBox">*/
/*     <h1 id="logo"><a href="index.php">*/
/*         <span class="valign-helper"></span>*/
/*         <img src="logo.php?login" alt="osTicket :: <?php echo __('Staff Control Panel');?>" />*/
/*     </a></h1>*/
/*     <h3><?php echo Format::htmlchars($msg); ?></h3>*/
/*     <div class="banner"><small><?php echo ($content) ? Format::display($content->getBody()) : ''; ?></small></div>*/
/*     <form action="login.php" method="post">*/
/*         <?php csrf_token(); ?>*/
/*         <input type="hidden" name="do" value="scplogin">*/
/*         <fieldset>*/
/*         <input type="text" name="userid" id="name" value="<?php echo $info['userid']; ?>" placeholder="<?php echo __('Email or Username'); ?>" autocorrect="off" autocapitalize="off">*/
/*         <input type="password" name="passwd" id="pass" placeholder="<?php echo __('Password'); ?>" autocorrect="off" autocapitalize="off">*/
/*             <?php if ($show_reset && $cfg->allowPasswordReset()) { ?>*/
/*             <h3 style="display:inline"><a href="pwreset.php"><?php echo __('Forgot my password'); ?></a></h3>*/
/*             <?php } ?>*/
/*             <input class="submit" type="submit" name="submit" value="<?php echo __('Log In'); ?>">*/
/*         </fieldset>*/
/*     </form>*/
/* <?php*/
/* $ext_bks = array();*/
/* foreach (StaffAuthenticationBackend::allRegistered() as $bk)*/
/*     if ($bk instanceof ExternalAuthentication)*/
/*         $ext_bks[] = $bk;*/
/* */
/* if (count($ext_bks)) { ?>*/
/* <div class="or">*/
/*     <hr/>*/
/* </div><?php*/
/*     foreach ($ext_bks as $bk) { ?>*/
/* <div class="external-auth"><?php $bk->renderExternalLink(); ?></div><?php*/
/*     }*/
/* } ?>*/
/* </div>*/
/* <div id="copyRights"><?php echo __('Copyright'); ?> &copy;*/
/* <a href='http://www.osticket.com' target="_blank">osTicket.com</a></div>*/
/* </body>*/
/* </html>*/
/* */
