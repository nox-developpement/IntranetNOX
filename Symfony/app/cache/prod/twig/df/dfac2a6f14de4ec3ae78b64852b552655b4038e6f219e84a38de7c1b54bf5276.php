<?php

/* support/include/staff/plugin-add.inc.php */
class __TwigTemplate_2724a363d734bf8071b22fbc96154d989dd12d4559719f36f4ca7bf6b5163efa extends Twig_Template
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
        echo "
<h2><?php echo __('Install a new plugin'); ?></h2>
<p><?php echo __(
'To add a plugin into the system, download and place the plugin into the <code>include/plugins</code> folder. Once in the plugin is in the <code>plugins/</code> folder, it will be shown in the list below.'
); ?>
</p>

<form method=\"post\" action=\"?\">
    <?php echo csrf_token(); ?>
    <input type=\"hidden\" name=\"do\" value=\"install\"/>
<table class=\"list\" width=\"100%\"><tbody>
<?php

\$installed = \$ost->plugins->allInstalled();
foreach (\$ost->plugins->allInfos() as \$info) {
    // Ignore installed plugins
    if (isset(\$installed[\$info['install_path']]))
        continue;
    ?>
        <tr><td><button type=\"submit\" name=\"install_path\"
            value=\"<?php echo \$info['install_path'];
            ?>\"><?php echo __('Install'); ?></button></td>
        <td>
    <div><strong><?php echo \$info['name']; ?></strong><br/>
        <div><?php echo \$info['description']; ?></div>
        <div class=\"faded\"><em><?php echo __('Version'); ?>: <?php echo \$info['version']; ?></em></div>
        <div class=\"faded\"><em><?php echo __('Author'); ?>: <?php echo \$info['author']; ?></em></div>
    </div>
    </td></tr>
    <?php
}
?>
</tbody></table>
</form>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/plugin-add.inc.php";
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
        return new Twig_Source("", "support/include/staff/plugin-add.inc.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\plugin-add.inc.php");
    }
}
