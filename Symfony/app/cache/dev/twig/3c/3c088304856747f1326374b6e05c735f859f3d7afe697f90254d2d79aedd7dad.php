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
        $__internal_851fbbc9e0830c9da29f313e1c907fb3a67b6e383078e877c314cd1c9864e2cd = $this->env->getExtension("native_profiler");
        $__internal_851fbbc9e0830c9da29f313e1c907fb3a67b6e383078e877c314cd1c9864e2cd->enter($__internal_851fbbc9e0830c9da29f313e1c907fb3a67b6e383078e877c314cd1c9864e2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_851fbbc9e0830c9da29f313e1c907fb3a67b6e383078e877c314cd1c9864e2cd->leave($__internal_851fbbc9e0830c9da29f313e1c907fb3a67b6e383078e877c314cd1c9864e2cd_prof);

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
