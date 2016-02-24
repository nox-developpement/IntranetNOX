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
        $__internal_bd7ff9da08883f99780180e398558bc136c31b559875a648a62380d76888b115 = $this->env->getExtension("native_profiler");
        $__internal_bd7ff9da08883f99780180e398558bc136c31b559875a648a62380d76888b115->enter($__internal_bd7ff9da08883f99780180e398558bc136c31b559875a648a62380d76888b115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_bd7ff9da08883f99780180e398558bc136c31b559875a648a62380d76888b115->leave($__internal_bd7ff9da08883f99780180e398558bc136c31b559875a648a62380d76888b115_prof);

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
