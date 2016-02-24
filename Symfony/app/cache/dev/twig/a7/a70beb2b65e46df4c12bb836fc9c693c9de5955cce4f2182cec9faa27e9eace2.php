<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_515d3715776948561afafc93620f0fb96ef0ee74b8a0f5692493ec601d8b16d6 extends Twig_Template
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
        $__internal_99bc3148fe65afd68b80df29d299143f9a7d8f4d34881184a08f54249f7d09a7 = $this->env->getExtension("native_profiler");
        $__internal_99bc3148fe65afd68b80df29d299143f9a7d8f4d34881184a08f54249f7d09a7->enter($__internal_99bc3148fe65afd68b80df29d299143f9a7d8f4d34881184a08f54249f7d09a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_99bc3148fe65afd68b80df29d299143f9a7d8f4d34881184a08f54249f7d09a7->leave($__internal_99bc3148fe65afd68b80df29d299143f9a7d8f4d34881184a08f54249f7d09a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
