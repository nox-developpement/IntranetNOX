<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_16407bdb57aad141697f76a526cc81de039620661bf52efe5c7e1b46414df44a extends Twig_Template
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
        $__internal_0115578a7343f17ce1f005080938bdd9bca83e2975a071004667bd4a527c0bd4 = $this->env->getExtension("native_profiler");
        $__internal_0115578a7343f17ce1f005080938bdd9bca83e2975a071004667bd4a527c0bd4->enter($__internal_0115578a7343f17ce1f005080938bdd9bca83e2975a071004667bd4a527c0bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0115578a7343f17ce1f005080938bdd9bca83e2975a071004667bd4a527c0bd4->leave($__internal_0115578a7343f17ce1f005080938bdd9bca83e2975a071004667bd4a527c0bd4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
