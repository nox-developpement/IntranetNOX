<?php

/* support/include/staff/templates/ticket-status.tmpl.php */
class __TwigTemplate_3a68e4c88f4ab9ea52a2657152f503f9568410d757d96b9c4839815b716e4696 extends Twig_Template
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
global \$cfg;

if (!\$info['title'])
    \$info['title'] = 'Change Tickets Status';

?>
<h3><?php echo \$info['title']; ?></h3>
<b><a class=\"close\" href=\"#\"><i class=\"icon-remove-circle\"></i></a></b>
<div class=\"clear\"></div>
<hr/>
<?php
if (\$info['error']) {
    echo sprintf('<p id=\"msg_error\">%s</p>', \$info['error']);
} elseif (\$info['warn']) {
    echo sprintf('<p id=\"msg_warning\">%s</p>', \$info['warn']);
} elseif (\$info['msg']) {
    echo sprintf('<p id=\"msg_notice\">%s</p>', \$info['msg']);
} elseif (\$info['notice']) {
   echo sprintf('<p id=\"msg_info\"><i class=\"icon-info-sign\"></i> %s</p>',
           \$info['notice']);
}


\$action = \$info['action'] ?: ('#tickets/status/'. \$state);
?>
<div id=\"ticket-status\" style=\"display:block; margin:5px;\">
    <form method=\"post\" name=\"status\" id=\"status\"
        action=\"<?php echo \$action; ?>\">
        <table width=\"100%\">
            <?php
            if (\$info['extra']) {
                ?>
            <tbody>
                <tr><td colspan=\"2\"><strong><?php echo \$info['extra'];
                ?></strong></td> </tr>
            </tbody>
            <?php
            }

            \$verb = '';
            if (\$state) {
                \$statuses = TicketStatusList::getStatuses(array('states'=>array(\$state)))->all();
                \$verb = TicketStateField::getVerb(\$state);
            }

            if (\$statuses) {
            ?>
            <tbody>
                <tr>
                    <td colspan=2>
                        <span>
                        <?php
                        if (count(\$statuses) > 1) { ?>
                            <strong><?php echo __('Status') ?>:&nbsp;</strong>
                            <select name=\"status_id\">
                            <?php
                            foreach (\$statuses as \$s) {
                                echo sprintf('<option value=\"%d\" %s>%s</option>',
                                        \$s->getId(),
                                        (\$info['status_id'] == \$s->getId())
                                         ? 'selected=\"selected\"' : '',
                                        \$s->getName()
                                        );
                            }
                            ?>
                            </select>
                            <font class=\"error\">*&nbsp;<?php echo \$errors['status_id']; ?></font>
                        <?php
                        } elseif (\$statuses[0]) {
                            echo  \"<input type='hidden' name='status_id' value={\$statuses[0]->getId()} />\";
                        } ?>
                        </span>
                    </td>
                </tr>
            </tbody>
            <?php
            } ?>
            <tbody>
                <tr>
                    <td colspan=\"2\">
                        <?php
                        \$placeholder = \$info['placeholder'] ?: __('Optional reason for status change (internal note)');
                        ?>
                        <textarea name=\"comments\" id=\"comments\"
                            cols=\"50\" rows=\"3\" wrap=\"soft\" style=\"width:100%\"
                            class=\"richtext ifhtml no-bar\"
                            placeholder=\"<?php echo \$placeholder; ?>\"><?php
                            echo \$info['comments']; ?></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <p class=\"full-width\">
            <span class=\"buttons pull-left\">
                <input type=\"reset\" value=\"<?php echo __('Reset'); ?>\">
                <input type=\"button\" name=\"cancel\" class=\"close\"
                value=\"<?php echo __('Cancel'); ?>\">
            </span>
            <span class=\"buttons pull-right\">
                <input type=\"submit\" value=\"<?php
                echo \$verb ?: __('Submit'); ?>\">
            </span>
         </p>
    </form>
</div>
<div class=\"clear\"></div>
<script type=\"text/javascript\">
\$(function() {
    // Copy checked tickets to status form.
    \$('form#tickets input[name=\"tids[]\"]:checkbox:checked')
    .each(function() {
        \$('<input>')
        .prop('type', 'hidden')
        .attr('name', 'tids[]')
        .val(\$(this).val())
        .appendTo('form#status');
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/ticket-status.tmpl.php";
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
        return new Twig_Source("", "support/include/staff/templates/ticket-status.tmpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\templates\\ticket-status.tmpl.php");
    }
}
