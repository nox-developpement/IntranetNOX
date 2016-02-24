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
        $__internal_ced0ea69c58654549ccd43d00bc73055baff7e968c5c12174d9673c7751d3cb8 = $this->env->getExtension("native_profiler");
        $__internal_ced0ea69c58654549ccd43d00bc73055baff7e968c5c12174d9673c7751d3cb8->enter($__internal_ced0ea69c58654549ccd43d00bc73055baff7e968c5c12174d9673c7751d3cb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ced0ea69c58654549ccd43d00bc73055baff7e968c5c12174d9673c7751d3cb8->leave($__internal_ced0ea69c58654549ccd43d00bc73055baff7e968c5c12174d9673c7751d3cb8_prof);

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
