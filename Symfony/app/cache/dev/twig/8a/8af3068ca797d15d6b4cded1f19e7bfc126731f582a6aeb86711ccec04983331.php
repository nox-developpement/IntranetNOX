<?php

/* support/include/staff/templates/user-delete.tmpl.php */
class __TwigTemplate_1ff5357a73386db91cbc8a8abcd0bcb07c6ea8b8778be5fca36ffb58a835e200 extends Twig_Template
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
        $__internal_e4d2bd62473e5c34b26a4aa0363ac4657e0075b4208ed8c54080c9f780fce997 = $this->env->getExtension("native_profiler");
        $__internal_e4d2bd62473e5c34b26a4aa0363ac4657e0075b4208ed8c54080c9f780fce997->enter($__internal_e4d2bd62473e5c34b26a4aa0363ac4657e0075b4208ed8c54080c9f780fce997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/user-delete.tmpl.php"));

        // line 1
        echo "<?php

if (!\$info['title'])
    \$info['title'] = sprintf(__('Delete User: %s'), Format::htmlchars(\$user->getName()));

\$info['warn'] = __('Deleted users and tickets CANNOT be recovered');

?>
<h3><?php echo \$info['title']; ?></h3>
<b><a class=\"close\" href=\"#\"><i class=\"icon-remove-circle\"></i></a></b>
<hr/>
<?php

if (\$info['error']) {
    echo sprintf('<p id=\"msg_error\">%s</p>', \$info['error']);
} elseif (\$info['warn']) {
    echo sprintf('<p id=\"msg_warning\">%s</p>', \$info['warn']);
} elseif (\$info['msg']) {
    echo sprintf('<p id=\"msg_notice\">%s</p>', \$info['msg']);
} ?>

<div id=\"user-profile\" style=\"margin:5px;\">
    <i class=\"icon-user icon-4x pull-left icon-border\"></i>
    <?php
    // TODO: Implement change of ownership
    if (0 && \$user->getNumTickets()) { ?>
    <a class=\"action-button pull-right change-user\" style=\"overflow:inherit\"
        href=\"#users/<?php echo \$user->getId(); ?>/replace\" ><i
        class=\"icon-user\"></i> <?php echo __('Change Tickets Ownership'); ?></a>
    <?php
    } ?>
    <div><b> <?php echo Format::htmlchars(\$user->getName()->getOriginal()); ?></b></div>
    <div>&lt;<?php echo \$user->getEmail(); ?>&gt;</div>
    <table style=\"margin-top: 1em;\">
<?php foreach (\$user->getDynamicData() as \$entry) {
?>
    <tr><td colspan=\"2\" style=\"border-bottom: 1px dotted black\"><strong><?php
         echo \$entry->getForm()->get('title'); ?></strong></td></tr>
<?php foreach (\$entry->getAnswers() as \$a) { ?>
    <tr style=\"vertical-align:top\"><td style=\"width:30%;border-bottom: 1px dotted #ccc\"><?php echo Format::htmlchars(\$a->getField()->get('label'));
         ?>:</td>
    <td style=\"border-bottom: 1px dotted #ccc\"><?php echo \$a->display(); ?></td>
    </tr>
<?php }
}
?>
    </table>
    <div class=\"clear\"></div>
    <hr>
    <form method=\"post\" class=\"user\"
        action=\"#users/<?php echo \$user->getId(); ?>/delete\">
        <input type=\"hidden\" name=\"id\" value=\"<?php echo \$user->getId(); ?>\" />

    <?php
    if ((\$num=\$user->tickets->count())) {
        echo '<div><input type=\"checkbox\" name=\"deletetickets\" value=\"1\" > <strong>'
            .sprintf(__('Delete %1\$s %2\$s %3\$s and any associated attachments and data.'),
                sprintf('<a href=\"tickets.php?a=search&uid=%d\" target=\"_blank\">',
                    \$user->getId()),
                sprintf(_N('one ticket', '%d tickets', \$num), \$num),
                '</a>'
            )
            .'</strong></div><hr>';
    }
    ?>
        <p class=\"full-width\">
        <span class=\"buttons pull-left\">
            <input type=\"reset\" value=\"<?php echo __('Reset'); ?>\">
            <input type=\"button\" name=\"cancel\" class=\"close\"
                value=\"<?php echo __('No, Cancel'); ?>\">
        </span>
        <span class=\"buttons pull-right\">
            <input type=\"submit\" value=\"<?php echo __('Yes, Delete User'); ?>\">
        </span>
        </p>
    </form>
</div>
<div class=\"clear\"></div>
<script type=\"text/javascript\">
\$(function() {
    \$('a#edituser').click( function(e) {
        e.preventDefault();
        \$('div#user-profile').hide();
        \$('div#user-form').fadeIn();
        return false;
     });

    \$(document).on('click', 'form.user input.cancel', function (e) {
        e.preventDefault();
        \$('div#user-form').hide();
        \$('div#user-profile').fadeIn();
        return false;
     });
});
</script>
";
        
        $__internal_e4d2bd62473e5c34b26a4aa0363ac4657e0075b4208ed8c54080c9f780fce997->leave($__internal_e4d2bd62473e5c34b26a4aa0363ac4657e0075b4208ed8c54080c9f780fce997_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/user-delete.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* if (!$info['title'])*/
/*     $info['title'] = sprintf(__('Delete User: %s'), Format::htmlchars($user->getName()));*/
/* */
/* $info['warn'] = __('Deleted users and tickets CANNOT be recovered');*/
/* */
/* ?>*/
/* <h3><?php echo $info['title']; ?></h3>*/
/* <b><a class="close" href="#"><i class="icon-remove-circle"></i></a></b>*/
/* <hr/>*/
/* <?php*/
/* */
/* if ($info['error']) {*/
/*     echo sprintf('<p id="msg_error">%s</p>', $info['error']);*/
/* } elseif ($info['warn']) {*/
/*     echo sprintf('<p id="msg_warning">%s</p>', $info['warn']);*/
/* } elseif ($info['msg']) {*/
/*     echo sprintf('<p id="msg_notice">%s</p>', $info['msg']);*/
/* } ?>*/
/* */
/* <div id="user-profile" style="margin:5px;">*/
/*     <i class="icon-user icon-4x pull-left icon-border"></i>*/
/*     <?php*/
/*     // TODO: Implement change of ownership*/
/*     if (0 && $user->getNumTickets()) { ?>*/
/*     <a class="action-button pull-right change-user" style="overflow:inherit"*/
/*         href="#users/<?php echo $user->getId(); ?>/replace" ><i*/
/*         class="icon-user"></i> <?php echo __('Change Tickets Ownership'); ?></a>*/
/*     <?php*/
/*     } ?>*/
/*     <div><b> <?php echo Format::htmlchars($user->getName()->getOriginal()); ?></b></div>*/
/*     <div>&lt;<?php echo $user->getEmail(); ?>&gt;</div>*/
/*     <table style="margin-top: 1em;">*/
/* <?php foreach ($user->getDynamicData() as $entry) {*/
/* ?>*/
/*     <tr><td colspan="2" style="border-bottom: 1px dotted black"><strong><?php*/
/*          echo $entry->getForm()->get('title'); ?></strong></td></tr>*/
/* <?php foreach ($entry->getAnswers() as $a) { ?>*/
/*     <tr style="vertical-align:top"><td style="width:30%;border-bottom: 1px dotted #ccc"><?php echo Format::htmlchars($a->getField()->get('label'));*/
/*          ?>:</td>*/
/*     <td style="border-bottom: 1px dotted #ccc"><?php echo $a->display(); ?></td>*/
/*     </tr>*/
/* <?php }*/
/* }*/
/* ?>*/
/*     </table>*/
/*     <div class="clear"></div>*/
/*     <hr>*/
/*     <form method="post" class="user"*/
/*         action="#users/<?php echo $user->getId(); ?>/delete">*/
/*         <input type="hidden" name="id" value="<?php echo $user->getId(); ?>" />*/
/* */
/*     <?php*/
/*     if (($num=$user->tickets->count())) {*/
/*         echo '<div><input type="checkbox" name="deletetickets" value="1" > <strong>'*/
/*             .sprintf(__('Delete %1$s %2$s %3$s and any associated attachments and data.'),*/
/*                 sprintf('<a href="tickets.php?a=search&uid=%d" target="_blank">',*/
/*                     $user->getId()),*/
/*                 sprintf(_N('one ticket', '%d tickets', $num), $num),*/
/*                 '</a>'*/
/*             )*/
/*             .'</strong></div><hr>';*/
/*     }*/
/*     ?>*/
/*         <p class="full-width">*/
/*         <span class="buttons pull-left">*/
/*             <input type="reset" value="<?php echo __('Reset'); ?>">*/
/*             <input type="button" name="cancel" class="close"*/
/*                 value="<?php echo __('No, Cancel'); ?>">*/
/*         </span>*/
/*         <span class="buttons pull-right">*/
/*             <input type="submit" value="<?php echo __('Yes, Delete User'); ?>">*/
/*         </span>*/
/*         </p>*/
/*     </form>*/
/* </div>*/
/* <div class="clear"></div>*/
/* <script type="text/javascript">*/
/* $(function() {*/
/*     $('a#edituser').click( function(e) {*/
/*         e.preventDefault();*/
/*         $('div#user-profile').hide();*/
/*         $('div#user-form').fadeIn();*/
/*         return false;*/
/*      });*/
/* */
/*     $(document).on('click', 'form.user input.cancel', function (e) {*/
/*         e.preventDefault();*/
/*         $('div#user-form').hide();*/
/*         $('div#user-profile').fadeIn();*/
/*         return false;*/
/*      });*/
/* });*/
/* </script>*/
/* */
