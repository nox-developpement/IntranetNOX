<?php

/* support/include/staff/templates/notes.tmpl.php */
class __TwigTemplate_51db0bc8fffc4da1890f6632353fdb136daa3c089c4baa6bf9cb4eb4074d0c47 extends Twig_Template
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
}
/* <div id="quick-notes">*/
/* <?php*/
/* $show_options = true;*/
/* foreach ($notes as $note) {*/
/*     include STAFFINC_DIR."templates/note.tmpl.php";*/
/* } ?>*/
/* </div>*/
/* <div id="new-note-box">*/
/* <div class="quicknote" id="new-note" data-url="<?php echo $create_note_url; ?>">*/
/* <div class="body">*/
/*     <a href="#"><i class="icon-plus icon-large"></i> &nbsp;*/
/*     <?php echo __('Click to create a new note'); ?></a>*/
/* </div>*/
/* </div>*/
/* </div>*/
/* */
