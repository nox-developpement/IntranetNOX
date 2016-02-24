<?php

/* support/include/staff/banrule.inc.php */
class __TwigTemplate_62fb7a47a8dd00de5f59402f4e877a4bd6deab6ed23d63933c473b80ea109ab5 extends Twig_Template
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
        $__internal_33d43a29793b75c6ac5800231cbfc76dbe5d913dd4c1a24a1144938fb626eef1 = $this->env->getExtension("native_profiler");
        $__internal_33d43a29793b75c6ac5800231cbfc76dbe5d913dd4c1a24a1144938fb626eef1->enter($__internal_33d43a29793b75c6ac5800231cbfc76dbe5d913dd4c1a24a1144938fb626eef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/banrule.inc.php"));

        // line 1
        echo "<?php
if(!defined('OSTADMININC') || !\$thisstaff || !\$thisstaff->isAdmin()) die('Access Denied');

\$info=\$qs= array();
if(\$rule && \$_REQUEST['a']!='add'){
    \$title=__('Update Ban Rule');
    \$action='update';
    \$submit_text=__('Update');
    \$info=\$rule->getInfo();
    \$info['id']=\$rule->getId();
    \$qs += array('id' => \$rule->getId());
}else {
    \$title=__('Add New Email Address to Ban List');
    \$action='add';
    \$submit_text=__('Add');
    \$info['isactive']=isset(\$info['isactive'])?\$info['isactive']:1;
    \$qs += array('a' => \$_REQUEST['a']);
}

\$info=Format::htmlchars((\$errors && \$_POST)?\$_POST:\$info);
?>
<form action=\"banlist.php?<?php echo Http::build_query(\$qs); ?>\" method=\"post\" id=\"save\">
 <?php csrf_token(); ?>
 <input type=\"hidden\" name=\"do\" value=\"<?php echo \$action; ?>\">
 <input type=\"hidden\" name=\"a\" value=\"<?php echo Format::htmlchars(\$_REQUEST['a']); ?>\">
 <input type=\"hidden\" name=\"id\" value=\"<?php echo \$info['id']; ?>\">
 <h2><?php echo __('Manage Email Ban Rule');?>
    <i class=\"help-tip icon-question-sign\" href=\"#ban_list\"></i>
    </h2>
 <table class=\"form_table\" width=\"940\" border=\"0\" cellspacing=\"0\" cellpadding=\"2\">
    <thead>
        <tr>
            <th colspan=\"2\">
                <h4><?php echo \$title; ?></h4>
                <em><?php echo __('Valid email address required');?></em>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td width=\"180\" class=\"required\">
                <?php echo __('Ban Status'); ?>:
            </td>
            <td>
                <input type=\"radio\" name=\"isactive\" value=\"1\" <?php echo \$info['isactive']?'checked=\"checked\"':''; ?>><strong><?php echo __('Active');?></strong>
                <input type=\"radio\" name=\"isactive\" value=\"0\" <?php echo !\$info['isactive']?'checked=\"checked\"':''; ?>><?php echo __('Disabled');?>
                &nbsp;<span class=\"error\">*&nbsp;</span>
            </td>
        </tr>
        <tr>
            <td width=\"180\" class=\"required\">
                <?php echo __('Email Address');?>:
            </td>
            <td>
                <input name=\"val\" type=\"text\" size=\"24\" value=\"<?php echo \$info['val']; ?>\">
                 &nbsp;<span class=\"error\">*&nbsp;<?php echo \$errors['val']; ?></span>
            </td>
        </tr>
        <tr>
            <th colspan=\"2\">
                <em><strong><?php echo __('Internal notes');?></strong>: <?php echo __('Admin notes');?>&nbsp;</em>
            </th>
        </tr>
        <tr>
            <td colspan=2>
                <textarea class=\"richtext no-bar\" name=\"notes\" cols=\"21\"
                    rows=\"8\" style=\"width: 80%;\"><?php echo \$info['notes']; ?></textarea>
            </td>
        </tr>
    </tbody>
</table>
<p style=\"text-align:center;\">
    <input type=\"submit\" name=\"submit\" value=\"<?php echo \$submit_text; ?>\">
    <input type=\"reset\"  name=\"reset\"  value=\"<?php echo __('Reset');?>\">
    <input type=\"button\" name=\"cancel\" value=\"<?php echo __('Cancel');?>\" onclick='window.location.href=\"banlist.php\"'>
</p>
</form>
";
        
        $__internal_33d43a29793b75c6ac5800231cbfc76dbe5d913dd4c1a24a1144938fb626eef1->leave($__internal_33d43a29793b75c6ac5800231cbfc76dbe5d913dd4c1a24a1144938fb626eef1_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/banrule.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(!defined('OSTADMININC') || !$thisstaff || !$thisstaff->isAdmin()) die('Access Denied');*/
/* */
/* $info=$qs= array();*/
/* if($rule && $_REQUEST['a']!='add'){*/
/*     $title=__('Update Ban Rule');*/
/*     $action='update';*/
/*     $submit_text=__('Update');*/
/*     $info=$rule->getInfo();*/
/*     $info['id']=$rule->getId();*/
/*     $qs += array('id' => $rule->getId());*/
/* }else {*/
/*     $title=__('Add New Email Address to Ban List');*/
/*     $action='add';*/
/*     $submit_text=__('Add');*/
/*     $info['isactive']=isset($info['isactive'])?$info['isactive']:1;*/
/*     $qs += array('a' => $_REQUEST['a']);*/
/* }*/
/* */
/* $info=Format::htmlchars(($errors && $_POST)?$_POST:$info);*/
/* ?>*/
/* <form action="banlist.php?<?php echo Http::build_query($qs); ?>" method="post" id="save">*/
/*  <?php csrf_token(); ?>*/
/*  <input type="hidden" name="do" value="<?php echo $action; ?>">*/
/*  <input type="hidden" name="a" value="<?php echo Format::htmlchars($_REQUEST['a']); ?>">*/
/*  <input type="hidden" name="id" value="<?php echo $info['id']; ?>">*/
/*  <h2><?php echo __('Manage Email Ban Rule');?>*/
/*     <i class="help-tip icon-question-sign" href="#ban_list"></i>*/
/*     </h2>*/
/*  <table class="form_table" width="940" border="0" cellspacing="0" cellpadding="2">*/
/*     <thead>*/
/*         <tr>*/
/*             <th colspan="2">*/
/*                 <h4><?php echo $title; ?></h4>*/
/*                 <em><?php echo __('Valid email address required');?></em>*/
/*             </th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*         <tr>*/
/*             <td width="180" class="required">*/
/*                 <?php echo __('Ban Status'); ?>:*/
/*             </td>*/
/*             <td>*/
/*                 <input type="radio" name="isactive" value="1" <?php echo $info['isactive']?'checked="checked"':''; ?>><strong><?php echo __('Active');?></strong>*/
/*                 <input type="radio" name="isactive" value="0" <?php echo !$info['isactive']?'checked="checked"':''; ?>><?php echo __('Disabled');?>*/
/*                 &nbsp;<span class="error">*&nbsp;</span>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td width="180" class="required">*/
/*                 <?php echo __('Email Address');?>:*/
/*             </td>*/
/*             <td>*/
/*                 <input name="val" type="text" size="24" value="<?php echo $info['val']; ?>">*/
/*                  &nbsp;<span class="error">*&nbsp;<?php echo $errors['val']; ?></span>*/
/*             </td>*/
/*         </tr>*/
/*         <tr>*/
/*             <th colspan="2">*/
/*                 <em><strong><?php echo __('Internal notes');?></strong>: <?php echo __('Admin notes');?>&nbsp;</em>*/
/*             </th>*/
/*         </tr>*/
/*         <tr>*/
/*             <td colspan=2>*/
/*                 <textarea class="richtext no-bar" name="notes" cols="21"*/
/*                     rows="8" style="width: 80%;"><?php echo $info['notes']; ?></textarea>*/
/*             </td>*/
/*         </tr>*/
/*     </tbody>*/
/* </table>*/
/* <p style="text-align:center;">*/
/*     <input type="submit" name="submit" value="<?php echo $submit_text; ?>">*/
/*     <input type="reset"  name="reset"  value="<?php echo __('Reset');?>">*/
/*     <input type="button" name="cancel" value="<?php echo __('Cancel');?>" onclick='window.location.href="banlist.php"'>*/
/* </p>*/
/* </form>*/
/* */
