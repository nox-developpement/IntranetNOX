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
        $__internal_f8f47de0ce78b79249a1c8610d331ecf9e9d1aba59733609c68daebeec70f1dc = $this->env->getExtension("native_profiler");
        $__internal_f8f47de0ce78b79249a1c8610d331ecf9e9d1aba59733609c68daebeec70f1dc->enter($__internal_f8f47de0ce78b79249a1c8610d331ecf9e9d1aba59733609c68daebeec70f1dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f8f47de0ce78b79249a1c8610d331ecf9e9d1aba59733609c68daebeec70f1dc->leave($__internal_f8f47de0ce78b79249a1c8610d331ecf9e9d1aba59733609c68daebeec70f1dc_prof);

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
