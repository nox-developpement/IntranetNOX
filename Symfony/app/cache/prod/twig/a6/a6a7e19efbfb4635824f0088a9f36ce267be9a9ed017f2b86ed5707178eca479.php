<?php

/* support/include/client/pwreset.request.php */
class __TwigTemplate_65e33f90d9836ee1a72ee5fc56e52536bca4fd2bc079bd038709ae3d1e994c9d extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/client/pwreset.request.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\client\\pwreset.request.php");
    }
}
