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
        $__internal_373b26757e05008916e3b37e754f5f9b8e2910a9aa356743718cacf838de440a = $this->env->getExtension("native_profiler");
        $__internal_373b26757e05008916e3b37e754f5f9b8e2910a9aa356743718cacf838de440a->enter($__internal_373b26757e05008916e3b37e754f5f9b8e2910a9aa356743718cacf838de440a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_373b26757e05008916e3b37e754f5f9b8e2910a9aa356743718cacf838de440a->leave($__internal_373b26757e05008916e3b37e754f5f9b8e2910a9aa356743718cacf838de440a_prof);

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
