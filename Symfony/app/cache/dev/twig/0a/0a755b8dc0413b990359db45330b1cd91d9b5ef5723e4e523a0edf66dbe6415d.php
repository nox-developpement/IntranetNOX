<?php

/* support/include/staff/templates/form-manage.tmpl.php */
class __TwigTemplate_8aecfadeeee514c2e72ae64dc352456cd918e8741e1d3875732eced3eaa5bde7 extends Twig_Template
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
        $__internal_6636a670de85415f278ef5a4d9e854eafd7b8bdeb964e6f5b3ea02c3e60a618a = $this->env->getExtension("native_profiler");
        $__internal_6636a670de85415f278ef5a4d9e854eafd7b8bdeb964e6f5b3ea02c3e60a618a->enter($__internal_6636a670de85415f278ef5a4d9e854eafd7b8bdeb964e6f5b3ea02c3e60a618a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/form-manage.tmpl.php"));

        // line 1
        echo "<h3><i class=\"icon-paste\"></i> <?php echo __('Manage Forms'); ?></i></h3>
<b><a class=\"close\" href=\"#\"><i class=\"icon-remove-circle\"></i></a></b>
<hr/><?php echo __(
'Sort the forms on this ticket by click and dragging on them. Use the box below the forms list to add new forms to the ticket.'
); ?>
<br/>
<br/>
<form method=\"post\" action=\"<?php echo \$info['action']; ?>\">
<div id=\"ticket-entries\">
<?php
\$current_list = array();
foreach (\$forms as \$e) { ?>
<div class=\"sortable row-item\" data-id=\"<?php echo \$e->get('id'); ?>\">
    <input type=\"hidden\" name=\"forms[]\" value=\"<?php echo \$e->get('form_id'); ?>\" />
    <i class=\"icon-reorder\"></i> <?php echo \$e->getForm()->getTitle();
    \$current_list[] = \$e->get('form_id');
    if (\$e->getForm()->get('type') == 'G') { ?>
    <div class=\"button-group\">
    <div class=\"delete\"><a href=\"#\"><i class=\"icon-trash\"></i></a></div>
    </div>
    <?php } ?>
</div>
<?php } ?>
</div>
<hr/>
<i class=\"icon-plus\"></i>&nbsp;
<select name=\"new-form\" onchange=\"javascript:
    var \$sel = \$(this).find('option:selected');
    \$('#ticket-entries').append(\$('<div></div>').addClass('sortable row-item')
        .text(' '+\$sel.text())
        .data('id', \$sel.val())
        .prepend(\$('<i>').addClass('icon-reorder'))
        .append(\$('<input/>').attr({name:'forms[]', type:'hidden'}).val(\$sel.val()))
        .append(\$('<div></div>').addClass('button-group')
          .append(\$('<div></div>').addClass('delete')
            .append(\$('<a href=\\'#\\'>').append(\$('<i>').addClass('icon-trash')))
        ))
    );
    \$sel.prop('disabled',true);\">
<option selected=\"selected\" disabled=\"disabled\"><?php
    echo __('Add a form'); ?></option>
<?php foreach (DynamicForm::objects()->filter(array(
    'type'=>'G')) as \$f
) {
    if (in_array(\$f->get('id'), \$current_list))
        continue;
    ?><option value=\"<?php echo \$f->get('id'); ?>\"><?php
    echo \$f->getTitle(); ?></option><?php
} ?>
</select>
<div id=\"delete-warning\" style=\"display:none\">
<hr>
    <div id=\"msg_warning\"><?php echo __(
    'Clicking <strong>Save Changes</strong> will permanently delete data associated with the deleted forms'
    ); ?>
    </div>
</div>
    <hr>
    <p class=\"full-width\">
        <span class=\"buttons pull-left\">
            <input type=\"reset\" value=\"<?php echo __('Reset'); ?>\">
            <input type=\"button\" name=\"cancel\" class=\"<?php
                echo \$user ? 'cancel' : 'close' ?>\" value=\"<?php echo __('Cancel'); ?>\">
        </span>
        <span class=\"buttons pull-right\">
            <input type=\"submit\" value=\"<?php echo __('Save Changes'); ?>\">
        </span>
     </p>

<script type=\"text/javascript\">
\$(function() {
    \$('#ticket-entries').sortable({containment:'parent',tolerance:'pointer'});
    \$('#ticket-entries .delete a').live('click', function() {
        var \$div = \$(this).closest('.sortable.row-item');
        \$('select[name=new-form]').find('option[data-id='+\$div.data('id')+']')
            .prop('disabled',false);
        \$div.remove();
        \$('#delete-warning').show();
        return false;
    })
});
</script>
";
        
        $__internal_6636a670de85415f278ef5a4d9e854eafd7b8bdeb964e6f5b3ea02c3e60a618a->leave($__internal_6636a670de85415f278ef5a4d9e854eafd7b8bdeb964e6f5b3ea02c3e60a618a_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/form-manage.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <h3><i class="icon-paste"></i> <?php echo __('Manage Forms'); ?></i></h3>*/
/* <b><a class="close" href="#"><i class="icon-remove-circle"></i></a></b>*/
/* <hr/><?php echo __(*/
/* 'Sort the forms on this ticket by click and dragging on them. Use the box below the forms list to add new forms to the ticket.'*/
/* ); ?>*/
/* <br/>*/
/* <br/>*/
/* <form method="post" action="<?php echo $info['action']; ?>">*/
/* <div id="ticket-entries">*/
/* <?php*/
/* $current_list = array();*/
/* foreach ($forms as $e) { ?>*/
/* <div class="sortable row-item" data-id="<?php echo $e->get('id'); ?>">*/
/*     <input type="hidden" name="forms[]" value="<?php echo $e->get('form_id'); ?>" />*/
/*     <i class="icon-reorder"></i> <?php echo $e->getForm()->getTitle();*/
/*     $current_list[] = $e->get('form_id');*/
/*     if ($e->getForm()->get('type') == 'G') { ?>*/
/*     <div class="button-group">*/
/*     <div class="delete"><a href="#"><i class="icon-trash"></i></a></div>*/
/*     </div>*/
/*     <?php } ?>*/
/* </div>*/
/* <?php } ?>*/
/* </div>*/
/* <hr/>*/
/* <i class="icon-plus"></i>&nbsp;*/
/* <select name="new-form" onchange="javascript:*/
/*     var $sel = $(this).find('option:selected');*/
/*     $('#ticket-entries').append($('<div></div>').addClass('sortable row-item')*/
/*         .text(' '+$sel.text())*/
/*         .data('id', $sel.val())*/
/*         .prepend($('<i>').addClass('icon-reorder'))*/
/*         .append($('<input/>').attr({name:'forms[]', type:'hidden'}).val($sel.val()))*/
/*         .append($('<div></div>').addClass('button-group')*/
/*           .append($('<div></div>').addClass('delete')*/
/*             .append($('<a href=\'#\'>').append($('<i>').addClass('icon-trash')))*/
/*         ))*/
/*     );*/
/*     $sel.prop('disabled',true);">*/
/* <option selected="selected" disabled="disabled"><?php*/
/*     echo __('Add a form'); ?></option>*/
/* <?php foreach (DynamicForm::objects()->filter(array(*/
/*     'type'=>'G')) as $f*/
/* ) {*/
/*     if (in_array($f->get('id'), $current_list))*/
/*         continue;*/
/*     ?><option value="<?php echo $f->get('id'); ?>"><?php*/
/*     echo $f->getTitle(); ?></option><?php*/
/* } ?>*/
/* </select>*/
/* <div id="delete-warning" style="display:none">*/
/* <hr>*/
/*     <div id="msg_warning"><?php echo __(*/
/*     'Clicking <strong>Save Changes</strong> will permanently delete data associated with the deleted forms'*/
/*     ); ?>*/
/*     </div>*/
/* </div>*/
/*     <hr>*/
/*     <p class="full-width">*/
/*         <span class="buttons pull-left">*/
/*             <input type="reset" value="<?php echo __('Reset'); ?>">*/
/*             <input type="button" name="cancel" class="<?php*/
/*                 echo $user ? 'cancel' : 'close' ?>" value="<?php echo __('Cancel'); ?>">*/
/*         </span>*/
/*         <span class="buttons pull-right">*/
/*             <input type="submit" value="<?php echo __('Save Changes'); ?>">*/
/*         </span>*/
/*      </p>*/
/* */
/* <script type="text/javascript">*/
/* $(function() {*/
/*     $('#ticket-entries').sortable({containment:'parent',tolerance:'pointer'});*/
/*     $('#ticket-entries .delete a').live('click', function() {*/
/*         var $div = $(this).closest('.sortable.row-item');*/
/*         $('select[name=new-form]').find('option[data-id='+$div.data('id')+']')*/
/*             .prop('disabled',false);*/
/*         $div.remove();*/
/*         $('#delete-warning').show();*/
/*         return false;*/
/*     })*/
/* });*/
/* </script>*/
/* */
