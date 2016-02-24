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
        $__internal_65cbfd5f2aa397d5ebeddc132f4f508ba160f2a5d0dcf26d8532c0a3fd3cc9a2 = $this->env->getExtension("native_profiler");
        $__internal_65cbfd5f2aa397d5ebeddc132f4f508ba160f2a5d0dcf26d8532c0a3fd3cc9a2->enter($__internal_65cbfd5f2aa397d5ebeddc132f4f508ba160f2a5d0dcf26d8532c0a3fd3cc9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_65cbfd5f2aa397d5ebeddc132f4f508ba160f2a5d0dcf26d8532c0a3fd3cc9a2->leave($__internal_65cbfd5f2aa397d5ebeddc132f4f508ba160f2a5d0dcf26d8532c0a3fd3cc9a2_prof);

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
