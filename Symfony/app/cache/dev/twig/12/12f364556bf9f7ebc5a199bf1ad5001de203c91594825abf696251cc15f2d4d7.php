<?php

/* support/include/staff/templates/note.tmpl.php */
class __TwigTemplate_ea0a5961353f34e17ca9977464215ce238a9355bbfe9c6563a32ab6686526e9e extends Twig_Template
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
        $__internal_abd2facbffabd086ef61a8375e261de9bbb7d1356473ee4c50c59043d21628ef = $this->env->getExtension("native_profiler");
        $__internal_abd2facbffabd086ef61a8375e261de9bbb7d1356473ee4c50c59043d21628ef->enter($__internal_abd2facbffabd086ef61a8375e261de9bbb7d1356473ee4c50c59043d21628ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/note.tmpl.php"));

        // line 1
        echo "<div class=\"quicknote\" data-id=\"<?php echo \$note->id; ?>\">
    <div class=\"header\">
        <div class=\"header-left\">
            <i class=\"note-type icon-<?php echo \$note->getExtIconClass(); ?>\"i
                title=\"<?php echo \$note->getIconTitle(); ?>\"></i>&nbsp;
            <?php echo \$note->getFormattedTime(); ?>
        </div>
        <div class=\"header-right\">
<?php
            echo \$note->getStaff()->getName();
if (isset(\$show_options) && \$show_options) { ?>
            <div class=\"options no-pjax\">
                <a href=\"#\" class=\"action edit-note\" title=\"edit\"><i class=\"icon-pencil\"></i></a>
                <a href=\"#\" class=\"action save-note\" style=\"display:none\" title=\"save\"><i class=\"icon-save\"></i></a>
                <a href=\"#\" class=\"action cancel-edit\" style=\"display:none\" title=\"undo\"><i class=\"icon-undo\"></i></a>
                <a href=\"#\" class=\"action delete\" title=\"delete\"><i class=\"icon-trash\"></i></a>
            </div>
<?php } ?>
        </div>
    </div>
    <div class=\"body editable\">
        <?php echo \$note->display(); ?>
    </div>
</div>
";
        
        $__internal_abd2facbffabd086ef61a8375e261de9bbb7d1356473ee4c50c59043d21628ef->leave($__internal_abd2facbffabd086ef61a8375e261de9bbb7d1356473ee4c50c59043d21628ef_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/note.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div class="quicknote" data-id="<?php echo $note->id; ?>">*/
/*     <div class="header">*/
/*         <div class="header-left">*/
/*             <i class="note-type icon-<?php echo $note->getExtIconClass(); ?>"i*/
/*                 title="<?php echo $note->getIconTitle(); ?>"></i>&nbsp;*/
/*             <?php echo $note->getFormattedTime(); ?>*/
/*         </div>*/
/*         <div class="header-right">*/
/* <?php*/
/*             echo $note->getStaff()->getName();*/
/* if (isset($show_options) && $show_options) { ?>*/
/*             <div class="options no-pjax">*/
/*                 <a href="#" class="action edit-note" title="edit"><i class="icon-pencil"></i></a>*/
/*                 <a href="#" class="action save-note" style="display:none" title="save"><i class="icon-save"></i></a>*/
/*                 <a href="#" class="action cancel-edit" style="display:none" title="undo"><i class="icon-undo"></i></a>*/
/*                 <a href="#" class="action delete" title="delete"><i class="icon-trash"></i></a>*/
/*             </div>*/
/* <?php } ?>*/
/*         </div>*/
/*     </div>*/
/*     <div class="body editable">*/
/*         <?php echo $note->display(); ?>*/
/*     </div>*/
/* </div>*/
/* */
