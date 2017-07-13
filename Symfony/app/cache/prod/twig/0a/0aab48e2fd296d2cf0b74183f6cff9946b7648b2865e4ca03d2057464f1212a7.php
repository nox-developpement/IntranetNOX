<?php

/* support/include/staff/templates/notes.tmpl.php */
class __TwigTemplate_3f05183f56bbf04aca31eb38eb30089000d1659cc9753429089d51c70720380c extends Twig_Template
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
        echo "<div id=\"quick-notes\">
<?php
\$show_options = true;
foreach (\$notes as \$note) {
    include STAFFINC_DIR.\"templates/note.tmpl.php\";
} ?>
</div>
<div id=\"new-note-box\">
<div class=\"quicknote\" id=\"new-note\" data-url=\"<?php echo \$create_note_url; ?>\">
<div class=\"body\">
    <a href=\"#\"><i class=\"icon-plus icon-large\"></i> &nbsp;
    <?php echo __('Click to create a new note'); ?></a>
</div>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/notes.tmpl.php";
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
        return new Twig_Source("", "support/include/staff/templates/notes.tmpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\templates\\notes.tmpl.php");
    }
}
