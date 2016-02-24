<?php

/* support/include/upgrader/upgrade.inc.php */
class __TwigTemplate_2c871ab12fb4faf5b564897df315a41baeaacad59a4cee6f770f60a45d9ac00d extends Twig_Template
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
        $__internal_f21fd307ffd3551cb6113a195834d8bfafbfedf02e353321a1d343f9cb6be74e = $this->env->getExtension("native_profiler");
        $__internal_f21fd307ffd3551cb6113a195834d8bfafbfedf02e353321a1d343f9cb6be74e->enter($__internal_f21fd307ffd3551cb6113a195834d8bfafbfedf02e353321a1d343f9cb6be74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/upgrade.inc.php"));

        // line 1
        echo "<?php
if(!defined('OSTSCPINC') || !\$thisstaff || !\$thisstaff->isAdmin()) die('Access Denied');

//See if we need to switch the mode of upgrade...e.g from ajax (default) to manual
if((\$mode = \$ost->get_var('m', \$_GET)) &&  \$mode!=\$upgrader->getMode()) {
    //Set Persistent mode/
    \$upgrader->setMode(\$mode);
    //Log warning about ajax calls - most likely culprit is AcceptPathInfo directive.
    if(\$mode=='manual')
        \$ost->logWarning('Ajax calls are failing',
                'Make sure your server has AcceptPathInfo directive set to \"ON\" or get technical help');
}

\$action=\$upgrader->getNextAction();
?>
    <h2><?php echo sprintf(__('Migrate to osTicket %s'), THIS_VERSION); ?></h2>
<div id=\"upgrader\">
    <div id=\"main\">
            <div id=\"intro\">
             <p><?php echo __('Thank you for taking the time to upgrade your osTicket intallation!');?></p>
             <p><strong><?php echo __(\"Please don't cancel or close the browser. Any errors at this stage will be fatal.\");?></strong></p>
            </div>
            <h2 id=\"task\"><?php echo sprintf(__('Applying updates to database stream: %s'),
                \$upgrader->getCurrentStream()->name); ?></h2>
            <p><?php echo __('In order to upgrade to this version of osTicket, a database migration is required. This upgrader will automatically apply the database patches shipped with osTicket since your last upgrade.'); ?></p>
            <p><?php echo __('The upgrade wizard will now attempt to upgrade your database and core settings!'); ?>
            <?php echo __('Below is a summary of the database patches to be applied.'); ?>
            </p>
            <?php echo \$upgrader->getUpgradeSummary(); ?>
            <div id=\"bar\">
                <form method=\"post\" action=\"upgrade.php\" id=\"upgrade\">
                    <?php csrf_token(); ?>
                    <input type=\"hidden\" name=\"s\" value=\"upgrade\">
                    <input type=\"hidden\" id=\"mode\" name=\"m\" value=\"<?php echo \$upgrader->getMode(); ?>\">
                    <input type=\"hidden\" name=\"sh\" value=\"<?php echo \$upgrader->getSchemaSignature(); ?>\">
                    <input class=\"btn\"  type=\"submit\" name=\"submit\" value=\"<?php echo __('Upgrade Now!');?>\">
                </form>
            </div>
    </div>
    <div id=\"sidebar\">
            <h3><?php echo __('Upgrade Tips');?></h3>
            <p>1. <?php echo __('Be patient the process will take a couple of minutes.');?></p>
            <p>2. <?php echo __('If you experience any problems, you can always restore your files/database backup.');?></p>
            <p>3. <?php echo sprintf(__('We can help. Feel free to %1\$s contact us %2\$s for professional help.'), '<a href=\"http://osticket.com/support\" target=\"_blank\">', '</a>');?></p>
    </div>
    <div class=\"clear\"></div>
    <div id=\"upgrading\">
        <i class=\"icon-spinner icon-spin icon-3x pull-left icon-light\"></i>
        <div style=\"display: inline-block; width: 220px\">
        <h4 id=\"action\"><?php echo \$action; ?></h4>
        <?php echo __('Please wait... while we upgrade your osTicket installation!');?>
        <div id=\"msg\" style=\"font-weight: bold;padding-top:10px;\">
            <?php echo sprintf(__('%s - Relax!'), \$thisstaff->getFirstName()); ?>
        </div>
        </div>
    </div>
</div>
<div class=\"clear\"></div>
";
        
        $__internal_f21fd307ffd3551cb6113a195834d8bfafbfedf02e353321a1d343f9cb6be74e->leave($__internal_f21fd307ffd3551cb6113a195834d8bfafbfedf02e353321a1d343f9cb6be74e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/upgrade.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTSCPINC') || !$thisstaff || !$thisstaff->isAdmin()) die('Access Denied');*/
/* */
/* //See if we need to switch the mode of upgrade...e.g from ajax (default) to manual*/
/* if(($mode = $ost->get_var('m', $_GET)) &&  $mode!=$upgrader->getMode()) {*/
/*     //Set Persistent mode/*/
/*     $upgrader->setMode($mode);*/
/*     //Log warning about ajax calls - most likely culprit is AcceptPathInfo directive.*/
/*     if($mode=='manual')*/
/*         $ost->logWarning('Ajax calls are failing',*/
/*                 'Make sure your server has AcceptPathInfo directive set to "ON" or get technical help');*/
/* }*/
/* */
/* $action=$upgrader->getNextAction();*/
/* ?>*/
/*     <h2><?php echo sprintf(__('Migrate to osTicket %s'), THIS_VERSION); ?></h2>*/
/* <div id="upgrader">*/
/*     <div id="main">*/
/*             <div id="intro">*/
/*              <p><?php echo __('Thank you for taking the time to upgrade your osTicket intallation!');?></p>*/
/*              <p><strong><?php echo __("Please don't cancel or close the browser. Any errors at this stage will be fatal.");?></strong></p>*/
/*             </div>*/
/*             <h2 id="task"><?php echo sprintf(__('Applying updates to database stream: %s'),*/
/*                 $upgrader->getCurrentStream()->name); ?></h2>*/
/*             <p><?php echo __('In order to upgrade to this version of osTicket, a database migration is required. This upgrader will automatically apply the database patches shipped with osTicket since your last upgrade.'); ?></p>*/
/*             <p><?php echo __('The upgrade wizard will now attempt to upgrade your database and core settings!'); ?>*/
/*             <?php echo __('Below is a summary of the database patches to be applied.'); ?>*/
/*             </p>*/
/*             <?php echo $upgrader->getUpgradeSummary(); ?>*/
/*             <div id="bar">*/
/*                 <form method="post" action="upgrade.php" id="upgrade">*/
/*                     <?php csrf_token(); ?>*/
/*                     <input type="hidden" name="s" value="upgrade">*/
/*                     <input type="hidden" id="mode" name="m" value="<?php echo $upgrader->getMode(); ?>">*/
/*                     <input type="hidden" name="sh" value="<?php echo $upgrader->getSchemaSignature(); ?>">*/
/*                     <input class="btn"  type="submit" name="submit" value="<?php echo __('Upgrade Now!');?>">*/
/*                 </form>*/
/*             </div>*/
/*     </div>*/
/*     <div id="sidebar">*/
/*             <h3><?php echo __('Upgrade Tips');?></h3>*/
/*             <p>1. <?php echo __('Be patient the process will take a couple of minutes.');?></p>*/
/*             <p>2. <?php echo __('If you experience any problems, you can always restore your files/database backup.');?></p>*/
/*             <p>3. <?php echo sprintf(__('We can help. Feel free to %1$s contact us %2$s for professional help.'), '<a href="http://osticket.com/support" target="_blank">', '</a>');?></p>*/
/*     </div>*/
/*     <div class="clear"></div>*/
/*     <div id="upgrading">*/
/*         <i class="icon-spinner icon-spin icon-3x pull-left icon-light"></i>*/
/*         <div style="display: inline-block; width: 220px">*/
/*         <h4 id="action"><?php echo $action; ?></h4>*/
/*         <?php echo __('Please wait... while we upgrade your osTicket installation!');?>*/
/*         <div id="msg" style="font-weight: bold;padding-top:10px;">*/
/*             <?php echo sprintf(__('%s - Relax!'), $thisstaff->getFirstName()); ?>*/
/*         </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="clear"></div>*/
/* */
