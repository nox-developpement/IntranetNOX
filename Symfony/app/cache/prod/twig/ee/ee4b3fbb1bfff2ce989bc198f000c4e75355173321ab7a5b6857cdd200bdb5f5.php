<?php

/* support/include/client/templates/dynamic-form.tmpl.php */
class __TwigTemplate_595d824a1acdcf7289620b681cda6d0100e269746e0f1e1c75c07fce7b5262c7 extends Twig_Template
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
    // Form headline and deck with a horizontal divider above and an extra
    // space below.
    // XXX: Would be nice to handle the decoration with a CSS class
    ?>
    <tr><td colspan=\"2\"><hr />
    <div class=\"form-header\" style=\"margin-bottom:0.5em\">
    <h3><?php echo Format::htmlchars(\$form->getTitle()); ?></h3>
    <em><?php echo Format::htmlchars(\$form->getInstructions()); ?></em>
    </div>
    </td></tr>
    <?php
    // Form fields, each with corresponding errors follows. Fields marked
    // 'private' are not included in the output for clients
    global \$thisclient;
    foreach (\$form->getFields() as \$field) {
        if (!\$field->isVisibleToUsers())
            continue;
        ?>
        <tr>
            <?php if (\$field->isBlockLevel()) { ?>
                <td colspan=\"2\">
            <?php
            }
            else { ?>
                <td><label for=\"<?php echo \$field->getFormName(); ?>\" class=\"<?php
                    if (\$field->get('required')) echo 'required'; ?>\">
                <?php echo Format::htmlchars(\$field->get('label')); ?>:</label></td><td>
            <?php
            }
            \$field->render('client'); ?>
            <?php if (\$field->get('required')) { ?>
                <font class=\"error\">*</font>
            <?php
            }
            if (\$field->get('hint') && !\$field->isBlockLevel()) { ?>
                <br /><em style=\"color:gray;display:inline-block\"><?php
                    echo Format::htmlchars(\$field->get('hint')); ?></em>
            <?php
            }
            foreach (\$field->errors() as \$e) { ?>
                <br />
                <font class=\"error\"><?php echo \$e; ?></font>
            <?php }
            \$field->renderExtras('client');
            ?>
            </td>
        </tr>
        <?php
    }
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/client/templates/dynamic-form.tmpl.php";
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
        return new Twig_Source("", "support/include/client/templates/dynamic-form.tmpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\client\\templates\\dynamic-form.tmpl.php");
    }
}
