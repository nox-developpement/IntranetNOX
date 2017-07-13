<?php

/* support/include/staff/pwreset.sent.php */
class __TwigTemplate_053fda4aae1cd63251ee3efe4aa57c32a4e1a49c88e47bf58c6fc6fb8adc3792 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/staff/pwreset.sent.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\pwreset.sent.php");
    }
}
