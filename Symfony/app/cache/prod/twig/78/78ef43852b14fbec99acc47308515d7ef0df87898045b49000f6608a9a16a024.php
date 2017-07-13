<?php

/* support/include/staff/login.tpl.php */
class __TwigTemplate_a7479b297ea4cb2f9d01318bd9749d8542549dc386dbd2db9288f208df08ef6e extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/staff/login.tpl.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/staff/login.tpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\login.tpl.php");
    }
}
