<?php

/* support/include/upgrader/aborted.inc.php */
class __TwigTemplate_f3e2d382fe72ecc82e2c383878e79ea325acc72d1985438b4e82bf192efca725 extends Twig_Template
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
        $__internal_33c1345dce2dc5ac0e69b7e8b5473fa878f977b7e4ba1078a082c6178612b854 = $this->env->getExtension("native_profiler");
        $__internal_33c1345dce2dc5ac0e69b7e8b5473fa878f977b7e4ba1078a082c6178612b854->enter($__internal_33c1345dce2dc5ac0e69b7e8b5473fa878f977b7e4ba1078a082c6178612b854_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/aborted.inc.php"));

        // line 1
        echo "<?php
if(!defined('OSTSCPINC') || !\$thisstaff || !\$thisstaff->isAdmin()) die('Access Denied');
?>
<div id=\"upgrader\">
   <div id=\"main\">
    <h1 style=\"color:#FF7700;\"><?php echo __('Upgrade Aborted!');?></h1>
    <div id=\"intro\">
        <p><strong><?php echo __('Upgrade aborted due to errors. Any errors at this stage are fatal.');?></strong></p>
        <p><?php echo sprintf(__('Please note the error(s), if any, when %1\$s seeking help %2\$s.'),'<a target=\"_blank\" href=\"http://osticket.com/support/\">','</a>');?><p>
        <?php
        if(\$upgrader && (\$errors=\$upgrader->getErrors())) {
            if(\$errors['err'])
                echo sprintf('<b><font color=\"red\">%s</font></b>',\$errors['err']);
            echo '<ul class=\"error\">';
            unset(\$errors['err']);
            foreach(\$errors as \$k => \$error)
                echo sprintf('<li>%s</li>',\$error);
            echo '</ul>';
        } else {
            echo '<b><font color=\"red\">'.__('Internal error occurred - get technical help.').'</font></b>';
        }
        ?>
        <p><b><?php echo sprintf(__('For details - please view %s or check your email.'),
            sprintf('<a href=\"logs.php\">%s</a>', __('System Logs')));?></b></p>
        <br>
        <p><?php echo sprintf(__('Please refer to the %1\$s Upgrade Guide %2\$s for more information.'), '<a target=\"_blank\" href=\"http://osticket.com/wiki/Upgrade_and_Migration\">', '</a>');?></p>
    </div>
    <p><strong><?php echo __('Need Help?');?></strong> <?php echo sprintf(__('We provide %1\$s professional upgrade services %2\$s and commercial support.'), '<a target=\"_blank\" href=\"http://osticket.com/support/professional_services.php\"><u>','</u></a>'); echo sprintf(__('%1\$s Contact us %2\$s today for <u>expedited</u> help.'), '<a target=\"_blank\" href=\"http://osticket.com/support/\">','</a>');?></p>
  </div>
  <div id=\"sidebar\">
    <h3><?php echo __('What to do?');?></h3>
    <p><?php echo sprintf(__('Restore your previous version from backup and try again or %1\$s seek help %2\$s.'), '<a target=\"_blank\" href=\"http://osticket.com/support/\">','</a>');?></p>
  </div>
  <div class=\"clear\"></div>
</div>
";
        
        $__internal_33c1345dce2dc5ac0e69b7e8b5473fa878f977b7e4ba1078a082c6178612b854->leave($__internal_33c1345dce2dc5ac0e69b7e8b5473fa878f977b7e4ba1078a082c6178612b854_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/aborted.inc.php";
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
/*    <div id="main">*/
/*     <h1 style="color:#FF7700;"><?php echo __('Upgrade Aborted!');?></h1>*/
/*     <div id="intro">*/
/*         <p><strong><?php echo __('Upgrade aborted due to errors. Any errors at this stage are fatal.');?></strong></p>*/
/*         <p><?php echo sprintf(__('Please note the error(s), if any, when %1$s seeking help %2$s.'),'<a target="_blank" href="http://osticket.com/support/">','</a>');?><p>*/
/*         <?php*/
/*         if($upgrader && ($errors=$upgrader->getErrors())) {*/
/*             if($errors['err'])*/
/*                 echo sprintf('<b><font color="red">%s</font></b>',$errors['err']);*/
/*             echo '<ul class="error">';*/
/*             unset($errors['err']);*/
/*             foreach($errors as $k => $error)*/
/*                 echo sprintf('<li>%s</li>',$error);*/
/*             echo '</ul>';*/
/*         } else {*/
/*             echo '<b><font color="red">'.__('Internal error occurred - get technical help.').'</font></b>';*/
/*         }*/
/*         ?>*/
/*         <p><b><?php echo sprintf(__('For details - please view %s or check your email.'),*/
/*             sprintf('<a href="logs.php">%s</a>', __('System Logs')));?></b></p>*/
/*         <br>*/
/*         <p><?php echo sprintf(__('Please refer to the %1$s Upgrade Guide %2$s for more information.'), '<a target="_blank" href="http://osticket.com/wiki/Upgrade_and_Migration">', '</a>');?></p>*/
/*     </div>*/
/*     <p><strong><?php echo __('Need Help?');?></strong> <?php echo sprintf(__('We provide %1$s professional upgrade services %2$s and commercial support.'), '<a target="_blank" href="http://osticket.com/support/professional_services.php"><u>','</u></a>'); echo sprintf(__('%1$s Contact us %2$s today for <u>expedited</u> help.'), '<a target="_blank" href="http://osticket.com/support/">','</a>');?></p>*/
/*   </div>*/
/*   <div id="sidebar">*/
/*     <h3><?php echo __('What to do?');?></h3>*/
/*     <p><?php echo sprintf(__('Restore your previous version from backup and try again or %1$s seek help %2$s.'), '<a target="_blank" href="http://osticket.com/support/">','</a>');?></p>*/
/*   </div>*/
/*   <div class="clear"></div>*/
/* </div>*/
/* */
