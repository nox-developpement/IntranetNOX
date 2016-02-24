<?php

/* support/include/upgrader/rename.inc.php */
class __TwigTemplate_2136d9ac31e74e98353faa142ca6027366f8abe399d87b9e15d5658162700af8 extends Twig_Template
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
        $__internal_e0ea428ee087f906511276218eb5df9e3b0dd3576271eae9bfadba12422f210d = $this->env->getExtension("native_profiler");
        $__internal_e0ea428ee087f906511276218eb5df9e3b0dd3576271eae9bfadba12422f210d->enter($__internal_e0ea428ee087f906511276218eb5df9e3b0dd3576271eae9bfadba12422f210d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/rename.inc.php"));

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
        
        $__internal_e0ea428ee087f906511276218eb5df9e3b0dd3576271eae9bfadba12422f210d->leave($__internal_e0ea428ee087f906511276218eb5df9e3b0dd3576271eae9bfadba12422f210d_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/rename.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTSCPINC') || !$thisstaff || !$thisstaff->isAdmin()) die('Access Denied');*/
/* ?>*/
/* <div id="upgrader">*/
/*     <br>*/
/*     <h2 style="color:#FF7700;"><?php echo __('Configuration file rename required!');?></h2>*/
/*     <div id="main">*/
/*             <div id="intro">*/
/*              <p><?php echo __('To avoid possible conflicts, please take a minute to rename configuration file as shown below.');?></p>*/
/*             </div>*/
/*             <h3><?php echo __('Solution');?>:</h3>*/
/*             <?php echo __('Rename file <b>include/settings.php</b> to <b>include/ost-config.php</b> and click continue below.');?>*/
/*             <ul>*/
/*                 <li><b><?php echo __('CLI');?>:</b><br><i>mv include/settings.php include/ost-config.php</i></li>*/
/*                 <li><b><?php echo __('FTP');?>:</b><br> </li>*/
/*                 <li><b><?php echo __('Cpanel');?>:</b><br> </li>*/
/*             </ul>*/
/*             <p><?php echo sprintf(__('Please refer to the %1$s Upgrade Guide %2$s for more information.'), '<a target="_blank" href="http://osticket.com/wiki/Upgrade_and_Migration">', '</a>');?></p>*/
/*             <div id="bar">*/
/*                 <form method="post" action="upgrade.php">*/
/*                     <?php csrf_token(); ?>*/
/*                     <input type="hidden" name="s" value="prereq">*/
/*                     <input class="btn" type="submit" name="submit" value="<?php echo __('Continue');?> &raquo;">*/
/*                 </form>*/
/*             </div>*/
/*     </div>*/
/*     <div id="sidebar">*/
/*             <h3><?php echo __('Need Help?');?></h3>*/
/*             <p>*/
/*             <?php echo __('If you are looking for a greater level of support, we provide <u>professional upgrade</u> and commercial support with guaranteed response times and access to the core development team. We can also help customize osTicket or even add new features to the system to meet your unique needs. <a target="_blank" href="http://osticket.com/support">Learn More!</a>'); ?>*/
/*             </p>*/
/*     </div>*/
/*     <div class="clear"></div>*/
/* </div>*/
/* */
