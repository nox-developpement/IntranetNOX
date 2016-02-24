<?php

/* support/include/staff/pwreset.login.php */
class __TwigTemplate_4fdfedabced3ab7e89a18c17d7287b1e231d3782aed1b2b046ba9d2602c98cf8 extends Twig_Template
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
        $__internal_450a8dbdbbd7a9e72bada6b1c4d9b24a193301bd7766f605cf8aec6ef2230554 = $this->env->getExtension("native_profiler");
        $__internal_450a8dbdbbd7a9e72bada6b1c4d9b24a193301bd7766f605cf8aec6ef2230554->enter($__internal_450a8dbdbbd7a9e72bada6b1c4d9b24a193301bd7766f605cf8aec6ef2230554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/pwreset.login.php"));

        // line 1
        echo "<?php
include_once(INCLUDE_DIR.'staff/login.header.php');
defined('OSTSCPINC') or die('Invalid path');
\$info = (\$_POST)?Format::htmlchars(\$_POST):array();
?>

<div id=\"loginBox\">
    <h1 id=\"logo\"><a href=\"index.php\">
        <span class=\"valign-helper\"></span>
        <img src=\"logo.php?login\" alt=\"osTicket :: <?php echo __('Agent Password Reset');?>\" />
    </a></h1>
    <h3><?php echo Format::htmlchars(\$msg); ?></h3>

    <form action=\"pwreset.php\" method=\"post\">
        <?php csrf_token(); ?>
        <input type=\"hidden\" name=\"do\" value=\"newpasswd\"/>
        <input type=\"hidden\" name=\"token\" value=\"<?php echo Format::htmlchars(\$_REQUEST['token']); ?>\"/>
        <fieldset>
            <input type=\"text\" name=\"userid\" id=\"name\" value=\"<?php echo
                \$info['userid']; ?>\" placeholder=\"<?php echo __('Email or Username'); ?>\"
                autocorrect=\"off\" autocapitalize=\"off\"/>
        </fieldset>
        <input class=\"submit\" type=\"submit\" name=\"submit\" value=\"Login\"/>
    </form>
</div>

<div id=\"copyRights\">Copyright &copy; <a href='http://www.osticket.com' target=\"_blank\">osTicket.com</a></div>
</body>
</html>
";
        
        $__internal_450a8dbdbbd7a9e72bada6b1c4d9b24a193301bd7766f605cf8aec6ef2230554->leave($__internal_450a8dbdbbd7a9e72bada6b1c4d9b24a193301bd7766f605cf8aec6ef2230554_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/pwreset.login.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* include_once(INCLUDE_DIR.'staff/login.header.php');*/
/* defined('OSTSCPINC') or die('Invalid path');*/
/* $info = ($_POST)?Format::htmlchars($_POST):array();*/
/* ?>*/
/* */
/* <div id="loginBox">*/
/*     <h1 id="logo"><a href="index.php">*/
/*         <span class="valign-helper"></span>*/
/*         <img src="logo.php?login" alt="osTicket :: <?php echo __('Agent Password Reset');?>" />*/
/*     </a></h1>*/
/*     <h3><?php echo Format::htmlchars($msg); ?></h3>*/
/* */
/*     <form action="pwreset.php" method="post">*/
/*         <?php csrf_token(); ?>*/
/*         <input type="hidden" name="do" value="newpasswd"/>*/
/*         <input type="hidden" name="token" value="<?php echo Format::htmlchars($_REQUEST['token']); ?>"/>*/
/*         <fieldset>*/
/*             <input type="text" name="userid" id="name" value="<?php echo*/
/*                 $info['userid']; ?>" placeholder="<?php echo __('Email or Username'); ?>"*/
/*                 autocorrect="off" autocapitalize="off"/>*/
/*         </fieldset>*/
/*         <input class="submit" type="submit" name="submit" value="Login"/>*/
/*     </form>*/
/* </div>*/
/* */
/* <div id="copyRights">Copyright &copy; <a href='http://www.osticket.com' target="_blank">osTicket.com</a></div>*/
/* </body>*/
/* </html>*/
/* */
