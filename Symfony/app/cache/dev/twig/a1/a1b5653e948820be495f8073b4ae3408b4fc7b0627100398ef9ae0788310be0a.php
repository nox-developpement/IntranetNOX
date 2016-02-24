<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_b16c99bde042abeea188c5c20a0b55bf096f662e115e3ca1adc5f9a1be0e02d8 extends Twig_Template
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
        $__internal_d007637936509c6441f8a294a222fde5352a9a642964c30b00714adf0342f4e5 = $this->env->getExtension("native_profiler");
        $__internal_d007637936509c6441f8a294a222fde5352a9a642964c30b00714adf0342f4e5->enter($__internal_d007637936509c6441f8a294a222fde5352a9a642964c30b00714adf0342f4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d007637936509c6441f8a294a222fde5352a9a642964c30b00714adf0342f4e5->leave($__internal_d007637936509c6441f8a294a222fde5352a9a642964c30b00714adf0342f4e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
