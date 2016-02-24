<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_0812f9d59a0695a3ae4032ebd9791b2f62042f4185724fbe574f037a29fb8416 extends Twig_Template
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
        $__internal_b515e6832be5290f41a7da1ead05160588c0f009ecf412673b296ba28f293309 = $this->env->getExtension("native_profiler");
        $__internal_b515e6832be5290f41a7da1ead05160588c0f009ecf412673b296ba28f293309->enter($__internal_b515e6832be5290f41a7da1ead05160588c0f009ecf412673b296ba28f293309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b515e6832be5290f41a7da1ead05160588c0f009ecf412673b296ba28f293309->leave($__internal_b515e6832be5290f41a7da1ead05160588c0f009ecf412673b296ba28f293309_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
