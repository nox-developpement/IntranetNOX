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
        $__internal_6fea7e55d84347709cb4e28398b4782a2f8cb2da5dd2b4eb5915cbf64b75d792 = $this->env->getExtension("native_profiler");
        $__internal_6fea7e55d84347709cb4e28398b4782a2f8cb2da5dd2b4eb5915cbf64b75d792->enter($__internal_6fea7e55d84347709cb4e28398b4782a2f8cb2da5dd2b4eb5915cbf64b75d792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6fea7e55d84347709cb4e28398b4782a2f8cb2da5dd2b4eb5915cbf64b75d792->leave($__internal_6fea7e55d84347709cb4e28398b4782a2f8cb2da5dd2b4eb5915cbf64b75d792_prof);

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
