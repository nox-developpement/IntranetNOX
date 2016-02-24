<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_da2525e4b04c979be17fa30434f845da065dd4d72ca77a49d2f8c61447d694f8 extends Twig_Template
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
        $__internal_c3b99921ce3c687b593438bacf6c05304a5d991da0bc393370747df7f1017d86 = $this->env->getExtension("native_profiler");
        $__internal_c3b99921ce3c687b593438bacf6c05304a5d991da0bc393370747df7f1017d86->enter($__internal_c3b99921ce3c687b593438bacf6c05304a5d991da0bc393370747df7f1017d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c3b99921ce3c687b593438bacf6c05304a5d991da0bc393370747df7f1017d86->leave($__internal_c3b99921ce3c687b593438bacf6c05304a5d991da0bc393370747df7f1017d86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
