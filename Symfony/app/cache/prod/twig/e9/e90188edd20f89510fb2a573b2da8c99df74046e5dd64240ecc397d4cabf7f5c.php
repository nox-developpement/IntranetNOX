<?php

/* support/include/staff/templates/org-lookup.tmpl.php */
class __TwigTemplate_8cc079f9082c4877e8fd547b609f595d9f1270fd76f930c6ed7d5db32dd9402f extends Twig_Template
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
    \$info['title'] = __('Organization Lookup');

\$msg_info = __('Search existing organizations or add a new one.');
if (\$info['search'] === false)
    \$msg_info = __('Complete the form below to add a new organization.');

?>
<div id=\"the-lookup-form\">
<h3><?php echo \$info['title']; ?></h3>
<b><a class=\"close\" href=\"#\"><i class=\"icon-remove-circle\"></i></a></b>
<hr/>
<div><p id=\"msg_info\"><i class=\"icon-info-sign\"></i>&nbsp; <?php echo \$msg_info; ?></p></div>
<?php
if (\$info['search'] !== false) { ?>
<div style=\"margin-bottom:10px;\">
    <input type=\"text\" class=\"search-input\" style=\"width:100%;\"
    placeholder=\"Search by name\" id=\"org-search\" autocorrect=\"off\" autocomplete=\"off\"/>
</div>
<?php
}

if (\$info['error']) {
    echo sprintf('<p id=\"msg_error\">%s</p>', \$info['error']);
} elseif (\$info['warning']) {
    echo sprintf('<p id=\"msg_warning\">%s</p>', \$info['warning']);
} elseif (\$info['msg']) {
    echo sprintf('<p id=\"msg_notice\">%s</p>', \$info['msg']);
} ?>
<div id=\"selected-org-info\" style=\"display:<?php echo \$org ? 'block' :'none'; ?>;margin:5px;\">
<form method=\"post\" class=\"org\" action=\"<?php echo \$info['action'] ?: '#orgs/lookup'; ?>\">
    <input type=\"hidden\" id=\"org-id\" name=\"orgid\" value=\"<?php echo \$org ? \$org->getId() : 0; ?>\"/>
    <i class=\"icon-group icon-4x pull-left icon-border\"></i>
    <a class=\"action-button pull-right\" style=\"overflow:inherit\"
        id=\"unselect-org\"  href=\"#\"><i class=\"icon-remove\"></i>
        <?php echo __('Add New Organization'); ?></a>
    <div><strong id=\"org-name\"><?php echo \$org ?  Format::htmlchars(\$org->getName()) : ''; ?></strong></div>
<?php if (\$org) { ?>
    <table style=\"margin-top: 1em;\">
<?php foreach (\$org->getDynamicData() as \$entry) { ?>
    <tr><td colspan=\"2\" style=\"border-bottom: 1px dotted black\"><strong><?php
         echo \$entry->getForm()->get('title'); ?></strong></td></tr>
<?php foreach (\$entry->getAnswers() as \$a) { ?>
    <tr style=\"vertical-align:top\"><td style=\"width:30%;border-bottom: 1px dotted #ccc\"><?php echo Format::htmlchars(\$a->getField()->get('label'));
         ?>:</td>
    <td style=\"border-bottom: 1px dotted #ccc\"><?php echo \$a->display(); ?></td>
    </tr>
<?php }
    } ?>
   </table>
 <?php
  } ?>
<div class=\"clear\"></div>
<hr>
<p class=\"full-width\">
    <span class=\"buttons pull-left\">
        <input type=\"button\" name=\"cancel\" class=\"close\"  value=\"<?php echo __('Cancel'); ?>\">
    </span>
    <span class=\"buttons pull-right\">
        <input type=\"submit\" value=\"<?php echo __('Continue'); ?>\">
    </span>
 </p>
</form>
</div>
<div id=\"new-org-form\" style=\"display:<?php echo \$org ? 'none' :'block'; ?>;\">
<form method=\"post\" class=\"org\" action=\"<?php echo \$info['action'] ?: '#orgs/add'; ?>\">
    <table width=\"100%\" class=\"fixed\">
    <?php
        if (!\$form) \$form = OrganizationForm::getInstance();
        \$form->render(true, __('Create New Organization')); ?>
    </table>
    <hr>
    <p class=\"full-width\">
        <span class=\"buttons pull-left\">
            <input type=\"reset\" value=\"<?php echo __('Reset'); ?>\">
            <input type=\"button\" name=\"cancel\" class=\"<?php echo \$org ? 'cancel' : 'close' ?>\"
                value=\"<?php echo __('Cancel'); ?>\">
        </span>
        <span class=\"buttons pull-right\">
            <input type=\"submit\" value=\"<?php echo __('Add Organization'); ?>\">
        </span>
     </p>
</form>
</div>
<div class=\"clear\"></div>
</div>
<script type=\"text/javascript\">
\$(function() {
    var last_req;
    \$('#org-search').typeahead({
        source: function (typeahead, query) {
            if (last_req) last_req.abort();
            last_req = \$.ajax({
                url: \"ajax.php/orgs/search?q=\"+query,
                dataType: 'json',
                success: function (data) {
                    typeahead.process(data);
                }
            });
        },
        onselect: function (obj) {
            \$('#the-lookup-form').load(
                '<?php echo \$info['onselect'] ?: 'ajax.php/orgs/select'; ?>/'+encodeURIComponent(obj.id)
            );
        },
        property: \"/bin/true\"
    });

    \$('a#unselect-org').click( function(e) {
        e.preventDefault();
        \$('div#selected-org-info').hide();
        \$('div#new-org-form').fadeIn({start: function(){ \$('#org-search').focus(); }});
        return false;
     });

    \$(document).on('click', 'form.org input.cancel', function (e) {
        e.preventDefault();
        \$('div#new-org-form').hide();
        \$('div#selected-org-info').fadeIn({start: function(){ \$('#org-search').focus(); }});
        return false;
     });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/org-lookup.tmpl.php";
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
        return new Twig_Source("", "support/include/staff/templates/org-lookup.tmpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\templates\\org-lookup.tmpl.php");
    }
}
