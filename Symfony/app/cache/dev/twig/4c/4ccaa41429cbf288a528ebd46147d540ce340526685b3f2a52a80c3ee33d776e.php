<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_fafb35d7097f81e4b2f069a8d86e7c123608e2f99d89b4d523be72f9d0aab9e1 extends Twig_Template
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
        $__internal_a7bc92162919d9945dffc184ae8a2505e850c222412e95e6455fc17909193e8b = $this->env->getExtension("native_profiler");
        $__internal_a7bc92162919d9945dffc184ae8a2505e850c222412e95e6455fc17909193e8b->enter($__internal_a7bc92162919d9945dffc184ae8a2505e850c222412e95e6455fc17909193e8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a7bc92162919d9945dffc184ae8a2505e850c222412e95e6455fc17909193e8b->leave($__internal_a7bc92162919d9945dffc184ae8a2505e850c222412e95e6455fc17909193e8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
