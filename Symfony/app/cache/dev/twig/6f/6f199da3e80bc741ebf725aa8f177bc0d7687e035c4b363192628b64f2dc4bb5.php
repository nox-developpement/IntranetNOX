<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0c98e2053c8e3f6f32b2ed90cc7afb50c8cb97448f29b3251e44b2974546fa9c extends Twig_Template
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
        $__internal_b5fc34ae31b7abaadd847be2cf9b2e01ca2aa512598a05ea50e7d59fdf598fc1 = $this->env->getExtension("native_profiler");
        $__internal_b5fc34ae31b7abaadd847be2cf9b2e01ca2aa512598a05ea50e7d59fdf598fc1->enter($__internal_b5fc34ae31b7abaadd847be2cf9b2e01ca2aa512598a05ea50e7d59fdf598fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_b5fc34ae31b7abaadd847be2cf9b2e01ca2aa512598a05ea50e7d59fdf598fc1->leave($__internal_b5fc34ae31b7abaadd847be2cf9b2e01ca2aa512598a05ea50e7d59fdf598fc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
