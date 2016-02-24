<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ac90b65e51a4a84037ba0d139ca9a140c083404054a229399a472f6fb40ae1b1 extends Twig_Template
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
        $__internal_e0ac4f490aa41d3fd5b7f1156e97f3cae2d8515cb09fcb73a0775032a7e2711a = $this->env->getExtension("native_profiler");
        $__internal_e0ac4f490aa41d3fd5b7f1156e97f3cae2d8515cb09fcb73a0775032a7e2711a->enter($__internal_e0ac4f490aa41d3fd5b7f1156e97f3cae2d8515cb09fcb73a0775032a7e2711a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e0ac4f490aa41d3fd5b7f1156e97f3cae2d8515cb09fcb73a0775032a7e2711a->leave($__internal_e0ac4f490aa41d3fd5b7f1156e97f3cae2d8515cb09fcb73a0775032a7e2711a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
