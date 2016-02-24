<?php

/* support/include/staff/settings-kb.inc.php */
class __TwigTemplate_ae9e262b0e06fa33e8a305f068da0ee300a1cb4bcfb42bc5ddf1fdf671015dc4 extends Twig_Template
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
        $__internal_34c28bf67b59b77dff2727208ee7ea267922d642c0874aae7488c8393b36421d = $this->env->getExtension("native_profiler");
        $__internal_34c28bf67b59b77dff2727208ee7ea267922d642c0874aae7488c8393b36421d->enter($__internal_34c28bf67b59b77dff2727208ee7ea267922d642c0874aae7488c8393b36421d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/settings-kb.inc.php"));

        // line 1
        echo "<?php
if(!defined('OSTADMININC') || !\$thisstaff || !\$thisstaff->isAdmin() || !\$config) die('Access Denied');
?>
<h2><?php echo __('Knowledge Base Settings and Options');?></h2>
<form action=\"settings.php?t=kb\" method=\"post\" id=\"save\">
<?php csrf_token(); ?>
<input type=\"hidden\" name=\"t\" value=\"kb\" >
<table class=\"form_table settings_table\" width=\"940\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
    <thead>
        <tr>
            <th colspan=\"2\">
                <h4><?php echo __('Knowledge Base Settings');?></h4>
                <em><?php echo __(\"Disabling knowledge base disables clients' interface.\");?></em>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td width=\"180\" valign=\"top\"><?php echo __('Knowledge Base Status'); ?>:</td>
            <td>
                <input type=\"checkbox\" name=\"enable_kb\" value=\"1\" <?php echo \$config['enable_kb']?'checked=\"checked\"':''; ?>>
                <?php echo __('Enable Knowledge Base'); ?>
                <i class=\"help-tip icon-question-sign\" href=\"#knowledge_base_status\"></i>
                <div class=\"error\"><?php echo \$errors['enable_kb']; ?></div>
                <input type=\"checkbox\" name=\"restrict_kb\" value=\"1\" <?php echo \$config['restrict_kb']?'checked=\"checked\"':''; ?> >
                <?php echo __('Require Client Login'); ?>
                <i class=\"help-tip icon-question-sign\" href=\"#restrict_kb\"></i>
                <div class=\"error\"><?php echo \$errors['restrict_kb']; ?></div>
            </td>
        </tr>
        <tr>
            <td width=\"180\"><?php echo __('Canned Responses');?>:</td>
            <td>
                <input type=\"checkbox\" name=\"enable_premade\" value=\"1\" <?php echo \$config['enable_premade']?'checked=\"checked\"':''; ?> >
                <?php echo __('Enable Canned Responses'); ?>
                &nbsp;<font class=\"error\">&nbsp;<?php echo \$errors['enable_premade']; ?></font>
                <i class=\"help-tip icon-question-sign\" href=\"#canned_responses\"></i>
            </td>
        </tr>
    </tbody>
</table>
<p style=\"padding-left:210px;\">
    <input class=\"button\" type=\"submit\" name=\"submit\" value=\"<?php echo __('Save Changes'); ?>\">
    <input class=\"button\" type=\"reset\" name=\"reset\" value=\"<?php echo __('Reset Changes'); ?>\">
</p>
</form>
";
        
        $__internal_34c28bf67b59b77dff2727208ee7ea267922d642c0874aae7488c8393b36421d->leave($__internal_34c28bf67b59b77dff2727208ee7ea267922d642c0874aae7488c8393b36421d_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/settings-kb.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTADMININC') || !$thisstaff || !$thisstaff->isAdmin() || !$config) die('Access Denied');*/
/* ?>*/
/* <h2><?php echo __('Knowledge Base Settings and Options');?></h2>*/
/* <form action="settings.php?t=kb" method="post" id="save">*/
/* <?php csrf_token(); ?>*/
/* <input type="hidden" name="t" value="kb" >*/
/* <table class="form_table settings_table" width="940" border="0" cellspacing="0" cellpadding="2">*/
/*     <thead>*/
/*         <tr>*/
/*             <th colspan="2">*/
/*                 <h4><?php echo __('Knowledge Base Settings');?></h4>*/
/*                 <em><?php echo __("Disabling knowledge base disables clients' interface.");?></em>*/
/*             </th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         <tr>*/
/*             <td width="180" valign="top"><?php echo __('Knowledge Base Status'); ?>:</td>*/
/*             <td>*/
/*                 <input type="checkbox" name="enable_kb" value="1" <?php echo $config['enable_kb']?'checked="checked"':''; ?>>*/
/*                 <?php echo __('Enable Knowledge Base'); ?>*/
/*                 <i class="help-tip icon-question-sign" href="#knowledge_base_status"></i>*/
/*                 <div class="error"><?php echo $errors['enable_kb']; ?></div>*/
/*                 <input type="checkbox" name="restrict_kb" value="1" <?php echo $config['restrict_kb']?'checked="checked"':''; ?> >*/
/*                 <?php echo __('Require Client Login'); ?>*/
/*                 <i class="help-tip icon-question-sign" href="#restrict_kb"></i>*/
/*                 <div class="error"><?php echo $errors['restrict_kb']; ?></div>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td width="180"><?php echo __('Canned Responses');?>:</td>*/
/*             <td>*/
/*                 <input type="checkbox" name="enable_premade" value="1" <?php echo $config['enable_premade']?'checked="checked"':''; ?> >*/
/*                 <?php echo __('Enable Canned Responses'); ?>*/
/*                 &nbsp;<font class="error">&nbsp;<?php echo $errors['enable_premade']; ?></font>*/
/*                 <i class="help-tip icon-question-sign" href="#canned_responses"></i>*/
/*             </td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* <p style="padding-left:210px;">*/
/*     <input class="button" type="submit" name="submit" value="<?php echo __('Save Changes'); ?>">*/
/*     <input class="button" type="reset" name="reset" value="<?php echo __('Reset Changes'); ?>">*/
/* </p>*/
/* </form>*/
/* */
