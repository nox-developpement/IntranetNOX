<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0812f9d59a0695a3ae4032ebd9791b2f62042f4185724fbe574f037a29fb8416 extends Twig_Template
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
        $__internal_c6d5bf80e392211b0527a98f9d16a5c71afdc18df55bc4fae2bc71f6326575eb = $this->env->getExtension("native_profiler");
        $__internal_c6d5bf80e392211b0527a98f9d16a5c71afdc18df55bc4fae2bc71f6326575eb->enter($__internal_c6d5bf80e392211b0527a98f9d16a5c71afdc18df55bc4fae2bc71f6326575eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c6d5bf80e392211b0527a98f9d16a5c71afdc18df55bc4fae2bc71f6326575eb->leave($__internal_c6d5bf80e392211b0527a98f9d16a5c71afdc18df55bc4fae2bc71f6326575eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
