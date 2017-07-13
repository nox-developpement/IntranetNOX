<?php

/* support/include/upgrader/rename.inc.php */
class __TwigTemplate_9a951caa1c62e6e96e24edbdb033b255332d301f5fcc476114449f5a273fffde extends Twig_Template
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
if(!defined('OSTSCPINC') || !\$thisstaff || !\$thisstaff->isAdmin()) die('Access Denied');
?>
<div id=\"upgrader\">
    <br>
    <h2 style=\"color:#FF7700;\"><?php echo __('Configuration file rename required!');?></h2>
    <div id=\"main\">
            <div id=\"intro\">
             <p><?php echo __('To avoid possible conflicts, please take a minute to rename configuration file as shown below.');?></p>
            </div>
            <h3><?php echo __('Solution');?>:</h3>
            <?php echo __('Rename file <b>include/settings.php</b> to <b>include/ost-config.php</b> and click continue below.');?>
            <ul>
                <li><b><?php echo __('CLI');?>:</b><br><i>mv include/settings.php include/ost-config.php</i></li>
                <li><b><?php echo __('FTP');?>:</b><br> </li>
                <li><b><?php echo __('Cpanel');?>:</b><br> </li>
            </ul>
            <p><?php echo sprintf(__('Please refer to the %1\$s Upgrade Guide %2\$s for more information.'), '<a target=\"_blank\" href=\"http://osticket.com/wiki/Upgrade_and_Migration\">', '</a>');?></p>
            <div id=\"bar\">
                <form method=\"post\" action=\"upgrade.php\">
                    <?php csrf_token(); ?>
                    <input type=\"hidden\" name=\"s\" value=\"prereq\">
                    <input class=\"btn\" type=\"submit\" name=\"submit\" value=\"<?php echo __('Continue');?> &raquo;\">
                </form>
            </div>
    </div>
    <div id=\"sidebar\">
            <h3><?php echo __('Need Help?');?></h3>
            <p>
            <?php echo __('If you are looking for a greater level of support, we provide <u>professional upgrade</u> and commercial support with guaranteed response times and access to the core development team. We can also help customize osTicket or even add new features to the system to meet your unique needs. <a target=\"_blank\" href=\"http://osticket.com/support\">Learn More!</a>'); ?>
            </p>
    </div>
    <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/rename.inc.php";
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
        return new Twig_Source("", "support/include/upgrader/rename.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\rename.inc.php");
    }
}
