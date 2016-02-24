<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_fcbf30f9631901399e29fa1fd5bd6b3bf919a08ae35f02c70f99703ff93c93eb extends Twig_Template
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
        $__internal_ff3b25a03c44d04ce4e228c8315ef2184a9ab66cf226e6d7cce7be03ab8375f8 = $this->env->getExtension("native_profiler");
        $__internal_ff3b25a03c44d04ce4e228c8315ef2184a9ab66cf226e6d7cce7be03ab8375f8->enter($__internal_ff3b25a03c44d04ce4e228c8315ef2184a9ab66cf226e6d7cce7be03ab8375f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ff3b25a03c44d04ce4e228c8315ef2184a9ab66cf226e6d7cce7be03ab8375f8->leave($__internal_ff3b25a03c44d04ce4e228c8315ef2184a9ab66cf226e6d7cce7be03ab8375f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
