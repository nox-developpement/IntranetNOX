<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e79b3c80bcb2bac76e65639c04d7d00e75ed1c612c5d210ec4d1bf676336b423 extends Twig_Template
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
        $__internal_0410836395adad6000cedee0e7f450484c08dcb7bffb75f583b7981b5b6df688 = $this->env->getExtension("native_profiler");
        $__internal_0410836395adad6000cedee0e7f450484c08dcb7bffb75f583b7981b5b6df688->enter($__internal_0410836395adad6000cedee0e7f450484c08dcb7bffb75f583b7981b5b6df688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0410836395adad6000cedee0e7f450484c08dcb7bffb75f583b7981b5b6df688->leave($__internal_0410836395adad6000cedee0e7f450484c08dcb7bffb75f583b7981b5b6df688_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
