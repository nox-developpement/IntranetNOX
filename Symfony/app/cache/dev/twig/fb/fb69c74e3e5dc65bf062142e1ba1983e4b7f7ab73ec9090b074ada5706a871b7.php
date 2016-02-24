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
        $__internal_3c962e459be032821f527ed5526499fc81ecd10ce38954e451de6bc8ac1bb29f = $this->env->getExtension("native_profiler");
        $__internal_3c962e459be032821f527ed5526499fc81ecd10ce38954e451de6bc8ac1bb29f->enter($__internal_3c962e459be032821f527ed5526499fc81ecd10ce38954e451de6bc8ac1bb29f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3c962e459be032821f527ed5526499fc81ecd10ce38954e451de6bc8ac1bb29f->leave($__internal_3c962e459be032821f527ed5526499fc81ecd10ce38954e451de6bc8ac1bb29f_prof);

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
