<?php

/* support/include/staff/templates/dynamic-field-config.tmpl.php */
class __TwigTemplate_3b307b5b49afc1cca60affde3725e5e1edb518729967ae1c90d5be52dbe15a37 extends Twig_Template
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
        echo "    <h3><?php echo __('Field Configuration'); ?> &mdash; <?php echo \$field->get('label') ?></h3>
    <a class=\"close\" href=\"\"><i class=\"icon-remove-circle\"></i></a>
    <hr/>
    <form method=\"post\" action=\"#form/field-config/<?php
            echo \$field->get('id'); ?>\">
        <?php
        echo csrf_token();
        \$form = \$field->getConfigurationForm();
        echo \$form->getMedia();
        foreach (\$form->getFields() as \$name=>\$f) { ?>
            <div class=\"flush-left custom-field\" id=\"field<?php echo \$f->getWidget()->id;
                ?>\" <?php if (!\$f->isVisible()) echo 'style=\"display:none;\"'; ?>>
            <div class=\"field-label <?php if (\$f->get('required')) echo 'required'; ?>\">
            <label for=\"<?php echo \$f->getWidget()->name; ?>\">
                <?php echo Format::htmlchars(\$f->get('label')); ?>:
      <?php if (\$f->get('required')) { ?>
                <span class=\"error\">*</span>
      <?php } ?>
            </label>
            <?php
            if (\$f->get('hint')) { ?>
                <br/><em style=\"color:gray;display:inline-block\"><?php
                    echo Format::htmlchars(\$f->get('hint')); ?></em>
            <?php
            } ?>
            </div><div>
            <?php
            \$f->render();
            ?>
            </div>
            <?php
            foreach (\$f->errors() as \$e) { ?>
                <div class=\"error\"><?php echo \$e; ?></div>
            <?php } ?>
            </div>
        <?php }
        ?>
        <hr/>
        <div class=\"flush-left custom-field\">
        <div class=\"field-label\">
        <label for=\"hint\"
            style=\"vertical-align:top;padding-top:0.2em\"><?php echo __('Help Text') ?>:</label>
            <br />
            <em style=\"color:gray;display:inline-block\">
                <?php echo __('Help text shown with the field'); ?></em>
        </div>
        <div>
        <textarea style=\"width:100%\" name=\"hint\" rows=\"2\" cols=\"40\"><?php
            echo Format::htmlchars(\$field->get('hint')); ?></textarea>
        </div>
        </div>
        <hr>
        <p class=\"full-width\">
            <span class=\"buttons pull-left\">
                <input type=\"reset\" value=\"<?php echo __('Reset'); ?>\">
                <input type=\"button\" value=\"<?php echo __('Cancel'); ?>\" class=\"close\">
            </span>
            <span class=\"buttons pull-right\">
                <input type=\"submit\" value=\"<?php echo __('Save'); ?>\">
            </span>
         </p>
    </form>
    <div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/dynamic-field-config.tmpl.php";
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
        return new Twig_Source("", "support/include/staff/templates/dynamic-field-config.tmpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\templates\\dynamic-field-config.tmpl.php");
    }
}
