<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_846ae9f02c0575f0dc0362f2ccb4e56e37813a5019f067fac4d96e8cc7cec648 extends Twig_Template
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
        $__internal_e0461fb255a651db345db2480e37dce2a9884784cd587495d51adc1800b8a9f7 = $this->env->getExtension("native_profiler");
        $__internal_e0461fb255a651db345db2480e37dce2a9884784cd587495d51adc1800b8a9f7->enter($__internal_e0461fb255a651db345db2480e37dce2a9884784cd587495d51adc1800b8a9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_e0461fb255a651db345db2480e37dce2a9884784cd587495d51adc1800b8a9f7->leave($__internal_e0461fb255a651db345db2480e37dce2a9884784cd587495d51adc1800b8a9f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
