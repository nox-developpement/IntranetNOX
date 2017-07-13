<?php

/* support/include/staff/pwreset.login.php */
class __TwigTemplate_7d527e68efad897daa19b40c5b864d2e8951e25c1ebfa59979b7d56856dcb7dd extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/staff/pwreset.login.php";
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
        return new Twig_Source("", "support/include/staff/pwreset.login.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\pwreset.login.php");
    }
}
