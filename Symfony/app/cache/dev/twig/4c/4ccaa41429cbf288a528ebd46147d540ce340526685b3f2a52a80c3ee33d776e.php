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
        $__internal_a4ad23df099bbfd24fd314b0a7542efc2a8ae2dc6c626ebfa2bb919d2693c621 = $this->env->getExtension("native_profiler");
        $__internal_a4ad23df099bbfd24fd314b0a7542efc2a8ae2dc6c626ebfa2bb919d2693c621->enter($__internal_a4ad23df099bbfd24fd314b0a7542efc2a8ae2dc6c626ebfa2bb919d2693c621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_a4ad23df099bbfd24fd314b0a7542efc2a8ae2dc6c626ebfa2bb919d2693c621->leave($__internal_a4ad23df099bbfd24fd314b0a7542efc2a8ae2dc6c626ebfa2bb919d2693c621_prof);

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
