<?php

/* support/include/staff/templates/notes.tmpl.php */
class __TwigTemplate_e03ee634422a92f97d11507a697cd0bb73f79e1827dbfae64dd78a844ba924ed extends Twig_Template
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
        $__internal_efb0ac2e42cfee4dff5492bbea895a464e99164eea4a633f704ccccdf056a141 = $this->env->getExtension("native_profiler");
        $__internal_efb0ac2e42cfee4dff5492bbea895a464e99164eea4a633f704ccccdf056a141->enter($__internal_efb0ac2e42cfee4dff5492bbea895a464e99164eea4a633f704ccccdf056a141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/notes.tmpl.php"));

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
        
        $__internal_efb0ac2e42cfee4dff5492bbea895a464e99164eea4a633f704ccccdf056a141->leave($__internal_efb0ac2e42cfee4dff5492bbea895a464e99164eea4a633f704ccccdf056a141_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/notes.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
