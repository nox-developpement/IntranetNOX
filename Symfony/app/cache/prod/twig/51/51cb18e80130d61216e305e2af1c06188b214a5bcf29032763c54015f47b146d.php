<?php

/* support/include/staff/templates/content-manage.tmpl.php */
class __TwigTemplate_1e9ead18be56d558a04450efc529283d60ab4dc53161f4eec9b836a6eee9b38e extends Twig_Template
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
        echo "<h3><?php echo __('Manage Content'); ?> &mdash; <?php echo Format::htmlchars(\$content->getName()); ?></h3>
<a class=\"close\" href=\"\"><i class=\"icon-remove-circle\"></i></a>
<hr/>
<?php if (\$errors['err']) { ?>
<div class=\"error-banner\">
    <?php echo \$errors['err']; ?>
</div>
<?php } ?>
<form method=\"post\" action=\"#content/<?php echo \$info['id']; ?>\">
    <div class=\"error\"><?php echo \$errors['name']; ?></div>
    <input type=\"text\" style=\"width: 100%; font-size: 14pt\" name=\"name\" value=\"<?php
        echo Format::htmlchars(\$info['name']); ?>\" />
    <div style=\"margin-top: 5px\">
    <div class=\"error\"><?php echo \$errors['body']; ?></div>
    <textarea class=\"richtext no-bar\" name=\"body\"><?php
    echo Format::viewableImages(\$info['body']);
?></textarea>
    </div>
    <div id=\"msg_info\" style=\"margin-top:7px\"><?php
echo \$content->getNotes(); ?></div>
    <hr/>
    <p class=\"full-width\">
        <span class=\"buttons pull-left\">
            <input type=\"reset\" value=\"<?php echo __('Reset'); ?>\">
            <input type=\"button\" name=\"cancel\" class=\"<?php
                echo \$user ? 'cancel' : 'close'; ?>\" value=\"<?php echo __('Cancel'); ?>\">
        </span>
        <span class=\"buttons pull-right\">
            <input type=\"submit\" value=\"<?php echo __('Save Changes'); ?>\">
        </span>
     </p>
</form>
</div>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/content-manage.tmpl.php";
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
        return new Twig_Source("", "support/include/staff/templates/content-manage.tmpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\templates\\content-manage.tmpl.php");
    }
}
