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
        $__internal_bb1d7658c35ea3ae81b01033445698454e6862495cb61103b766d7a973c1d131 = $this->env->getExtension("native_profiler");
        $__internal_bb1d7658c35ea3ae81b01033445698454e6862495cb61103b766d7a973c1d131->enter($__internal_bb1d7658c35ea3ae81b01033445698454e6862495cb61103b766d7a973c1d131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bb1d7658c35ea3ae81b01033445698454e6862495cb61103b766d7a973c1d131->leave($__internal_bb1d7658c35ea3ae81b01033445698454e6862495cb61103b766d7a973c1d131_prof);

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
