<?php

/* support/include/staff/templates/org.tmpl.php */
class __TwigTemplate_66835603a81b536311af1f0327fb27cfed5cb1b672ee3349de6ce6b24a502f12 extends Twig_Template
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
if (!\$info['title'])
    \$info['title'] = Format::htmlchars(\$org->getName());
?>
<h3><?php echo \$info['title']; ?></h3>
<b><a class=\"close\" href=\"#\"><i class=\"icon-remove-circle\"></i></a></b>
<hr/>
<?php
if (\$info['error']) {
    echo sprintf('<p id=\"msg_error\">%s</p>', \$info['error']);
} elseif (\$info['msg']) {
    echo sprintf('<p id=\"msg_notice\">%s</p>', \$info['msg']);
} ?>
<div id=\"org-profile\" style=\"display:<?php echo \$forms ? 'none' : 'block'; ?>;margin:5px;\">
    <i class=\"icon-group icon-4x pull-left icon-border\"></i>
    <?php
    if (\$user) { ?>
    <a class=\"action-button pull-right user-action\" style=\"overflow:inherit\"
        href=\"#users/<?php echo \$user->getId(); ?>/org/<?php echo \$org->getId(); ?>\" ><i class=\"icon-user\"></i>
        <?php echo __('Change'); ?></a>
    <a class=\"action-button pull-right\" href=\"orgs.php?id=<?php echo \$org->getId(); ?>\"><i class=\"icon-share\"></i>
        <?php echo __('Manage'); ?></a>
    <?php
    } ?>
    <div><b><a href=\"#\" id=\"editorg\"><i class=\"icon-edit\"></i>&nbsp;<?php
    echo Format::htmlchars(\$org->getName()); ?></a></b></div>
    <table style=\"margin-top: 1em;\">
<?php foreach (\$org->getDynamicData() as \$entry) {
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
    <div class=\"faded\">Last updated <b><?php echo Format::db_datetime(\$org->getUpdateDate()); ?> </b></div>
</div>
<div id=\"org-form\" style=\"display:<?php echo \$forms ? 'block' : 'none'; ?>;\">
<div><p id=\"msg_info\"><i class=\"icon-info-sign\"></i>&nbsp; <?php echo __(
'Please note that updates will be reflected system-wide.'); ?></p></div>
<?php
\$action = \$info['action'] ? \$info['action'] : ('#orgs/'.\$org->getId());
if (\$ticket && \$ticket->getOwnerId() == \$user->getId())
    \$action = '#tickets/'.\$ticket->getId().'/user';
?>
<form method=\"post\" class=\"org\" action=\"<?php echo \$action; ?>\">
    <input type=\"hidden\" name=\"id\" value=\"<?php echo \$org->getId(); ?>\" />
    <table width=\"100%\">
    <?php
        if (!\$forms) \$forms = \$org->getForms();
        foreach (\$forms as \$form)
            \$form->render();
    ?>
    </table>
    <hr>
    <p class=\"full-width\">
        <span class=\"buttons pull-left\">
            <input type=\"reset\" value=\"<?php echo __('Reset'); ?>\">
            <input type=\"button\" name=\"cancel\" class=\"<?php
            echo \$account ? 'cancel' : 'close'; ?>\"  value=\"<?php echo __('Cancel'); ?>\">
        </span>
        <span class=\"buttons pull-right\">
            <input type=\"submit\" value=\"<?php echo __('Update Organization'); ?>\">
        </span>
     </p>
</form>
</div>
<div class=\"clear\"></div>
<script type=\"text/javascript\">
\$(function() {
    \$('a#editorg').click( function(e) {
        e.preventDefault();
        \$('div#org-profile').hide();
        \$('div#org-form').fadeIn();
        return false;
     });

    \$(document).on('click', 'form.org input.cancel', function (e) {
        e.preventDefault();
        \$('div#org-form').hide();
        \$('div#org-profile').fadeIn();
        return false;
     });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/org.tmpl.php";
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
        return new Twig_Source("", "support/include/staff/templates/org.tmpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\templates\\org.tmpl.php");
    }
}
