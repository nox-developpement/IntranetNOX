<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_853111ab7177a20c9950a02320b87bfd1a1f587dc9ba0250e98d3101f980f481 extends Twig_Template
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
        $__internal_0cd113ae81cf7c2775950f2e1f55660549219545adeaf672effef9ef4d526e47 = $this->env->getExtension("native_profiler");
        $__internal_0cd113ae81cf7c2775950f2e1f55660549219545adeaf672effef9ef4d526e47->enter($__internal_0cd113ae81cf7c2775950f2e1f55660549219545adeaf672effef9ef4d526e47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_0cd113ae81cf7c2775950f2e1f55660549219545adeaf672effef9ef4d526e47->leave($__internal_0cd113ae81cf7c2775950f2e1f55660549219545adeaf672effef9ef4d526e47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
