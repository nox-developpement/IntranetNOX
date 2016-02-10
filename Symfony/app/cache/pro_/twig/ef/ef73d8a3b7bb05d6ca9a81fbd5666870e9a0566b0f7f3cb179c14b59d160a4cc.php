<?php

/* support/include/staff/pwreset.sent.php */
class __TwigTemplate_269041db133f10bb8f2a67c3d9f7cf9d4ecf49ded18cd4059d56769133fb7a54 extends Twig_Template
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
include_once(INCLUDE_DIR.'staff/login.header.php');
defined('OSTSCPINC') or die('Invalid path');
\$info = (\$_POST && \$errors)?Format::htmlchars(\$_POST):array();
?>

<div id=\"loginBox\">
    <h1 id=\"logo\"><a href=\"index.php\">
        <span class=\"valign-helper\"></span>
        <img src=\"logo.php?login\" alt=\"osTicket :: <?php echo __('Agent Password Reset');?>\" />
    </a></h1>
    <h3><?php echo __('A confirmation email has been sent'); ?></h3>
    <h3 style=\"color:black;\"><em><?php echo __(
    'A password reset email was sent to the email on file for your account.  Follow the link in the email to reset your password.'
    ); ?>
    </em></h3>

    <form action=\"index.php\" method=\"get\">
        <input class=\"submit\" type=\"submit\" name=\"submit\" value=\"Login\"/>
    </form>
</div>

<div id=\"copyRights\">Copyright &copy; <a href='http://www.osticket.com' target=\"_blank\">osTicket.com</a></div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/pwreset.sent.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* include_once(INCLUDE_DIR.'staff/login.header.php');*/
/* defined('OSTSCPINC') or die('Invalid path');*/
/* $info = ($_POST && $errors)?Format::htmlchars($_POST):array();*/
/* ?>*/
/* */
/* <div id="loginBox">*/
/*     <h1 id="logo"><a href="index.php">*/
/*         <span class="valign-helper"></span>*/
/*         <img src="logo.php?login" alt="osTicket :: <?php echo __('Agent Password Reset');?>" />*/
/*     </a></h1>*/
/*     <h3><?php echo __('A confirmation email has been sent'); ?></h3>*/
/*     <h3 style="color:black;"><em><?php echo __(*/
/*     'A password reset email was sent to the email on file for your account.  Follow the link in the email to reset your password.'*/
/*     ); ?>*/
/*     </em></h3>*/
/* */
/*     <form action="index.php" method="get">*/
/*         <input class="submit" type="submit" name="submit" value="Login"/>*/
/*     </form>*/
/* </div>*/
/* */
/* <div id="copyRights">Copyright &copy; <a href='http://www.osticket.com' target="_blank">osTicket.com</a></div>*/
/* </body>*/
/* </html>*/
/* */
