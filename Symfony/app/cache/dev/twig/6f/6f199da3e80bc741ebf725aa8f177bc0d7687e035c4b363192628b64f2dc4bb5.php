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
        $__internal_2bb444167f957f113756c84a726b43f4516a347487d34a02df12ed6508eb90d1 = $this->env->getExtension("native_profiler");
        $__internal_2bb444167f957f113756c84a726b43f4516a347487d34a02df12ed6508eb90d1->enter($__internal_2bb444167f957f113756c84a726b43f4516a347487d34a02df12ed6508eb90d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_2bb444167f957f113756c84a726b43f4516a347487d34a02df12ed6508eb90d1->leave($__internal_2bb444167f957f113756c84a726b43f4516a347487d34a02df12ed6508eb90d1_prof);

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
