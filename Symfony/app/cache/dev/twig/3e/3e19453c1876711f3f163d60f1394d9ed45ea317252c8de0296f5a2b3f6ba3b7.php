<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_7b2700e91ac061123e6da25b1dfdfa63d573a796d037882475e011118d91d6cd extends Twig_Template
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
        $__internal_4e6b82778dbaa8d8368f48146e186ba60e33bfedf0915d66b904b02950d1f052 = $this->env->getExtension("native_profiler");
        $__internal_4e6b82778dbaa8d8368f48146e186ba60e33bfedf0915d66b904b02950d1f052->enter($__internal_4e6b82778dbaa8d8368f48146e186ba60e33bfedf0915d66b904b02950d1f052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4e6b82778dbaa8d8368f48146e186ba60e33bfedf0915d66b904b02950d1f052->leave($__internal_4e6b82778dbaa8d8368f48146e186ba60e33bfedf0915d66b904b02950d1f052_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
