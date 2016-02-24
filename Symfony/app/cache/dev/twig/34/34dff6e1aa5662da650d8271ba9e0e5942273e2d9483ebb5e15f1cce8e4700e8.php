<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_54e0d45ecade2e024abebdd5e5c3d5138bb8e2787c032930871fa05e36828746 extends Twig_Template
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
        $__internal_853083085bd5270fe7d2a20668237cc6c9efe8143062548c485a1f2f9ff21d32 = $this->env->getExtension("native_profiler");
        $__internal_853083085bd5270fe7d2a20668237cc6c9efe8143062548c485a1f2f9ff21d32->enter($__internal_853083085bd5270fe7d2a20668237cc6c9efe8143062548c485a1f2f9ff21d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_853083085bd5270fe7d2a20668237cc6c9efe8143062548c485a1f2f9ff21d32->leave($__internal_853083085bd5270fe7d2a20668237cc6c9efe8143062548c485a1f2f9ff21d32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
