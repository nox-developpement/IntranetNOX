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
        $__internal_522c37fa05a58a5eefefcabd2e8810e0eb8314b4c2b66cd1db697d4f7f4a3f32 = $this->env->getExtension("native_profiler");
        $__internal_522c37fa05a58a5eefefcabd2e8810e0eb8314b4c2b66cd1db697d4f7f4a3f32->enter($__internal_522c37fa05a58a5eefefcabd2e8810e0eb8314b4c2b66cd1db697d4f7f4a3f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_522c37fa05a58a5eefefcabd2e8810e0eb8314b4c2b66cd1db697d4f7f4a3f32->leave($__internal_522c37fa05a58a5eefefcabd2e8810e0eb8314b4c2b66cd1db697d4f7f4a3f32_prof);

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
