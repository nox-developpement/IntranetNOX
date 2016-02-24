<?php

/* support/include/client/templates/dynamic-form.tmpl.php */
class __TwigTemplate_b15078af8c24d028d01ed33e3b5c4e760f68bc97fc779593d7ba2c4c103021cf extends Twig_Template
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
        $__internal_8e4014a1f70e158e674a058b163c27399587abd6a9a1c34a8fc29514902f5d83 = $this->env->getExtension("native_profiler");
        $__internal_8e4014a1f70e158e674a058b163c27399587abd6a9a1c34a8fc29514902f5d83->enter($__internal_8e4014a1f70e158e674a058b163c27399587abd6a9a1c34a8fc29514902f5d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/client/templates/dynamic-form.tmpl.php"));

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
        
        $__internal_8e4014a1f70e158e674a058b163c27399587abd6a9a1c34a8fc29514902f5d83->leave($__internal_8e4014a1f70e158e674a058b163c27399587abd6a9a1c34a8fc29514902f5d83_prof);

    }

    public function getTemplateName()
    {
        return "support/include/client/templates/dynamic-form.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/*     // Form headline and deck with a horizontal divider above and an extra*/
/*     // space below.*/
/*     // XXX: Would be nice to handle the decoration with a CSS class*/
/*     ?>*/
/*     <tr><td colspan="2"><hr />*/
/*     <div class="form-header" style="margin-bottom:0.5em">*/
/*     <h3><?php echo Format::htmlchars($form->getTitle()); ?></h3>*/
/*     <em><?php echo Format::htmlchars($form->getInstructions()); ?></em>*/
/*     </div>*/
/*     </td></tr>*/
/*     <?php*/
/*     // Form fields, each with corresponding errors follows. Fields marked*/
/*     // 'private' are not included in the output for clients*/
/*     global $thisclient;*/
/*     foreach ($form->getFields() as $field) {*/
/*         if (!$field->isVisibleToUsers())*/
/*             continue;*/
/*         ?>*/
/*         <tr>*/
/*             <?php if ($field->isBlockLevel()) { ?>*/
/*                 <td colspan="2">*/
/*             <?php*/
/*             }*/
/*             else { ?>*/
/*                 <td><label for="<?php echo $field->getFormName(); ?>" class="<?php*/
/*                     if ($field->get('required')) echo 'required'; ?>">*/
/*                 <?php echo Format::htmlchars($field->get('label')); ?>:</label></td><td>*/
/*             <?php*/
/*             }*/
/*             $field->render('client'); ?>*/
/*             <?php if ($field->get('required')) { ?>*/
/*                 <font class="error">*</font>*/
/*             <?php*/
/*             }*/
/*             if ($field->get('hint') && !$field->isBlockLevel()) { ?>*/
/*                 <br /><em style="color:gray;display:inline-block"><?php*/
/*                     echo Format::htmlchars($field->get('hint')); ?></em>*/
/*             <?php*/
/*             }*/
/*             foreach ($field->errors() as $e) { ?>*/
/*                 <br />*/
/*                 <font class="error"><?php echo $e; ?></font>*/
/*             <?php }*/
/*             $field->renderExtras('client');*/
/*             ?>*/
/*             </td>*/
/*         </tr>*/
/*         <?php*/
/*     }*/
/* ?>*/
/* */
