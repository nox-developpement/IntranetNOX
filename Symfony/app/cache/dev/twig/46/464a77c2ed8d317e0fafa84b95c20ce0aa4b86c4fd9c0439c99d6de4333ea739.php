<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8497a8c0eca84869af43fe4b00f5f40f9431c4f5ec3f4bc580a9bc60344615af extends Twig_Template
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
        $__internal_d802de3f71b7a050d9329a3dabab7d51d34221109882c3a2c88c452f5300d610 = $this->env->getExtension("native_profiler");
        $__internal_d802de3f71b7a050d9329a3dabab7d51d34221109882c3a2c88c452f5300d610->enter($__internal_d802de3f71b7a050d9329a3dabab7d51d34221109882c3a2c88c452f5300d610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_d802de3f71b7a050d9329a3dabab7d51d34221109882c3a2c88c452f5300d610->leave($__internal_d802de3f71b7a050d9329a3dabab7d51d34221109882c3a2c88c452f5300d610_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
