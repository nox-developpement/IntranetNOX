<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ccb0fca23530c33f63f0449616b010ef9fcf85490679d691b0bc5e9e073b64bb extends Twig_Template
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
        $__internal_cdff3552d5d50d4cae1a80b8c10eab66b86f6f5c6277d113648627baa74fccbe = $this->env->getExtension("native_profiler");
        $__internal_cdff3552d5d50d4cae1a80b8c10eab66b86f6f5c6277d113648627baa74fccbe->enter($__internal_cdff3552d5d50d4cae1a80b8c10eab66b86f6f5c6277d113648627baa74fccbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cdff3552d5d50d4cae1a80b8c10eab66b86f6f5c6277d113648627baa74fccbe->leave($__internal_cdff3552d5d50d4cae1a80b8c10eab66b86f6f5c6277d113648627baa74fccbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
