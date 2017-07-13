<?php

/* support/include/client/pwreset.sent.php */
class __TwigTemplate_c86bbc8bb3c30e3ed73862b5f8f3fc567fee425e35fa8400109398d4036798a7 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/client/pwreset.sent.php";
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
        return new Twig_Source("", "support/include/client/pwreset.sent.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\client\\pwreset.sent.php");
    }
}
