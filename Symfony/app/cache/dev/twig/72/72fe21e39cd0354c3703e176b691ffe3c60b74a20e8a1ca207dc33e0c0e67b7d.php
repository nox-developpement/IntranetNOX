<?php

/* support/include/staff/dynamic-lists.inc.php */
class __TwigTemplate_0ee91471251b1c8f44f8c6b5f055a16d7883a693a7f94b9c9b256acaaf4c37e5 extends Twig_Template
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
        $__internal_20701f24c45796ec23dd520f21b4c52693e2b97f76a669ce30dca0bf2a3f64c9 = $this->env->getExtension("native_profiler");
        $__internal_20701f24c45796ec23dd520f21b4c52693e2b97f76a669ce30dca0bf2a3f64c9->enter($__internal_20701f24c45796ec23dd520f21b4c52693e2b97f76a669ce30dca0bf2a3f64c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/dynamic-lists.inc.php"));

        // line 1
        echo "<div class=\"pull-left\" style=\"width:700;padding-top:5px;\">
 <h2><?php echo __('Custom Lists'); ?></h2>
</div>
<div class=\"pull-right flush-right\" style=\"padding-top:5px;padding-right:5px;\">
 <b><a href=\"lists.php?a=add\" class=\"Icon list-add\"><?php
 echo __('Add New Custom List'); ?></a></b></div>
<div class=\"clear\"></div>

<?php
\$page = (\$_GET['p'] && is_numeric(\$_GET['p'])) ? \$_GET['p'] : 1;
\$count = DynamicList::objects()->count();
\$pageNav = new Pagenate(\$count, \$page, PAGE_LIMIT);
\$pageNav->setURL('lists.php');
\$showing=\$pageNav->showing().' '._N('custom list', 'custom lists', \$count);

?>
<form action=\"lists.php\" method=\"POST\" name=\"lists\">
<?php csrf_token(); ?>
<input type=\"hidden\" name=\"do\" value=\"mass_process\" >
<input type=\"hidden\" id=\"action\" name=\"a\" value=\"\" >
<table class=\"list\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\" width=\"940\">
    <caption>Custom Lists</caption>
    <thead>
        <tr>
            <th width=\"7\">&nbsp;</th>
            <th><?php echo __('List Name'); ?></th>
            <th><?php echo __('Created') ?></th>
            <th><?php echo __('Last Updated'); ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach (DynamicList::objects()->order_by('-type', 'name')
                ->limit(\$pageNav->getLimit())
                ->offset(\$pageNav->getStart()) as \$list) {
            \$sel = false;
            if (\$ids && in_array(\$form->get('id'),\$ids))
                \$sel = true; ?>
        <tr>
            <td>
                <?php
                if (\$list->isDeleteable()) { ?>
                <input width=\"7\" type=\"checkbox\" class=\"ckb\" name=\"ids[]\"
                value=\"<?php echo \$list->getId(); ?>\"
                    <?php echo \$sel?'checked=\"checked\"':''; ?>>
                <?php
                } else {
                    echo '&nbsp;';
                }
                ?>
            </td>
            <td><a href=\"?id=<?php echo \$list->getId(); ?>\"><?php echo
            \$list->getPluralName() ?: \$list->getName(); ?></a></td>
            <td><?php echo \$list->get('created'); ?></td>
            <td><?php echo \$list->get('updated'); ?></td>
        </tr>
    <?php }
    ?>
    </tbody>
    <tfoot>
     <tr>
        <td colspan=\"4\">
            <?php if(\$count){ ?>
            <?php echo __('Select'); ?>:&nbsp;
            <a id=\"selectAll\" href=\"#ckb\"><?php echo __('All'); ?></a>&nbsp;&nbsp;
            <a id=\"selectNone\" href=\"#ckb\"><?php echo __('None'); ?></a>&nbsp;&nbsp;
            <a id=\"selectToggle\" href=\"#ckb\"><?php echo __('Toggle'); ?></a>&nbsp;&nbsp;
            <?php } else {
                echo sprintf(__('No custom lists defined yet &mdash; %s add one %s!'),
                    '<a href=\"lists.php?a=add\">','</a>');
            } ?>
        </td>
     </tr>
    </tfoot>
</table>
<?php
if (\$count) //Show options..
    echo '<div>&nbsp;'.__('Page').':'.\$pageNav->getPageLinks().'&nbsp;</div>';
?>

<p class=\"centered\" id=\"actions\">
    <input class=\"button\" type=\"submit\" name=\"delete\" value=\"<?php echo __('Delete'); ?>\">
</p>
</form>

<div style=\"display:none;\" class=\"dialog\" id=\"confirm-action\">
    <h3><?php echo __('Please Confirm'); ?></h3>
    <a class=\"close\" href=\"\"><i class=\"icon-remove-circle\"></i></a>
    <hr/>
    <p class=\"confirm-action\" style=\"display:none;\" id=\"delete-confirm\">
        <font color=\"red\"><strong><?php echo sprintf(
        __('Are you sure you want to DELETE %s?'),
        _N('selected custom list', 'selected custom lists', 2)); ?></strong></font>
        <br><br><?php echo __('Deleted data CANNOT be recovered.'); ?>
    </p>
    <div><?php echo __('Please confirm to continue.'); ?></div>
    <hr style=\"margin-top:1em\"/>
    <p class=\"full-width\">
        <span class=\"buttons pull-left\">
            <input type=\"button\" value=\"No, Cancel\" class=\"close\">
        </span>
        <span class=\"buttons pull-right\">
            <input type=\"button\" value=\"Yes, Do it!\" class=\"confirm\">
        </span>
    </p>
    <div class=\"clear\"></div>
</div>
";
        
        $__internal_20701f24c45796ec23dd520f21b4c52693e2b97f76a669ce30dca0bf2a3f64c9->leave($__internal_20701f24c45796ec23dd520f21b4c52693e2b97f76a669ce30dca0bf2a3f64c9_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/dynamic-lists.inc.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="pull-left" style="width:700;padding-top:5px;">*/
/*  <h2><?php echo __('Custom Lists'); ?></h2>*/
/* </div>*/
/* <div class="pull-right flush-right" style="padding-top:5px;padding-right:5px;">*/
/*  <b><a href="lists.php?a=add" class="Icon list-add"><?php*/
/*  echo __('Add New Custom List'); ?></a></b></div>*/
/* <div class="clear"></div>*/
/* */
/* <?php*/
/* $page = ($_GET['p'] && is_numeric($_GET['p'])) ? $_GET['p'] : 1;*/
/* $count = DynamicList::objects()->count();*/
/* $pageNav = new Pagenate($count, $page, PAGE_LIMIT);*/
/* $pageNav->setURL('lists.php');*/
/* $showing=$pageNav->showing().' '._N('custom list', 'custom lists', $count);*/
/* */
/* ?>*/
/* <form action="lists.php" method="POST" name="lists">*/
/* <?php csrf_token(); ?>*/
/* <input type="hidden" name="do" value="mass_process" >*/
/* <input type="hidden" id="action" name="a" value="" >*/
/* <table class="list" border="0" cellspacing="1" cellpadding="0" width="940">*/
/*     <caption>Custom Lists</caption>*/
/*     <thead>*/
/*         <tr>*/
/*             <th width="7">&nbsp;</th>*/
/*             <th><?php echo __('List Name'); ?></th>*/
/*             <th><?php echo __('Created') ?></th>*/
/*             <th><?php echo __('Last Updated'); ?></th>*/
/*         </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     <?php foreach (DynamicList::objects()->order_by('-type', 'name')*/
/*                 ->limit($pageNav->getLimit())*/
/*                 ->offset($pageNav->getStart()) as $list) {*/
/*             $sel = false;*/
/*             if ($ids && in_array($form->get('id'),$ids))*/
/*                 $sel = true; ?>*/
/*         <tr>*/
/*             <td>*/
/*                 <?php*/
/*                 if ($list->isDeleteable()) { ?>*/
/*                 <input width="7" type="checkbox" class="ckb" name="ids[]"*/
/*                 value="<?php echo $list->getId(); ?>"*/
/*                     <?php echo $sel?'checked="checked"':''; ?>>*/
/*                 <?php*/
/*                 } else {*/
/*                     echo '&nbsp;';*/
/*                 }*/
/*                 ?>*/
/*             </td>*/
/*             <td><a href="?id=<?php echo $list->getId(); ?>"><?php echo*/
/*             $list->getPluralName() ?: $list->getName(); ?></a></td>*/
/*             <td><?php echo $list->get('created'); ?></td>*/
/*             <td><?php echo $list->get('updated'); ?></td>*/
/*         </tr>*/
/*     <?php }*/
/*     ?>*/
/*     </tbody>*/
/*     <tfoot>*/
/*      <tr>*/
/*         <td colspan="4">*/
/*             <?php if($count){ ?>*/
/*             <?php echo __('Select'); ?>:&nbsp;*/
/*             <a id="selectAll" href="#ckb"><?php echo __('All'); ?></a>&nbsp;&nbsp;*/
/*             <a id="selectNone" href="#ckb"><?php echo __('None'); ?></a>&nbsp;&nbsp;*/
/*             <a id="selectToggle" href="#ckb"><?php echo __('Toggle'); ?></a>&nbsp;&nbsp;*/
/*             <?php } else {*/
/*                 echo sprintf(__('No custom lists defined yet &mdash; %s add one %s!'),*/
/*                     '<a href="lists.php?a=add">','</a>');*/
/*             } ?>*/
/*         </td>*/
/*      </tr>*/
/*     </tfoot>*/
/* </table>*/
/* <?php*/
/* if ($count) //Show options..*/
/*     echo '<div>&nbsp;'.__('Page').':'.$pageNav->getPageLinks().'&nbsp;</div>';*/
/* ?>*/
/* */
/* <p class="centered" id="actions">*/
/*     <input class="button" type="submit" name="delete" value="<?php echo __('Delete'); ?>">*/
/* </p>*/
/* </form>*/
/* */
/* <div style="display:none;" class="dialog" id="confirm-action">*/
/*     <h3><?php echo __('Please Confirm'); ?></h3>*/
/*     <a class="close" href=""><i class="icon-remove-circle"></i></a>*/
/*     <hr/>*/
/*     <p class="confirm-action" style="display:none;" id="delete-confirm">*/
/*         <font color="red"><strong><?php echo sprintf(*/
/*         __('Are you sure you want to DELETE %s?'),*/
/*         _N('selected custom list', 'selected custom lists', 2)); ?></strong></font>*/
/*         <br><br><?php echo __('Deleted data CANNOT be recovered.'); ?>*/
/*     </p>*/
/*     <div><?php echo __('Please confirm to continue.'); ?></div>*/
/*     <hr style="margin-top:1em"/>*/
/*     <p class="full-width">*/
/*         <span class="buttons pull-left">*/
/*             <input type="button" value="No, Cancel" class="close">*/
/*         </span>*/
/*         <span class="buttons pull-right">*/
/*             <input type="button" value="Yes, Do it!" class="confirm">*/
/*         </span>*/
/*     </p>*/
/*     <div class="clear"></div>*/
/* </div>*/
/* */
