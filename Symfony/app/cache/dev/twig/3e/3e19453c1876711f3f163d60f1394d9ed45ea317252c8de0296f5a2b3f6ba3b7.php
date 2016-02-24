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
        $__internal_bc267f1eade59ea7f267a4c99a66b6329c8bcfe5bf32f8f0e65d237518163422 = $this->env->getExtension("native_profiler");
        $__internal_bc267f1eade59ea7f267a4c99a66b6329c8bcfe5bf32f8f0e65d237518163422->enter($__internal_bc267f1eade59ea7f267a4c99a66b6329c8bcfe5bf32f8f0e65d237518163422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_bc267f1eade59ea7f267a4c99a66b6329c8bcfe5bf32f8f0e65d237518163422->leave($__internal_bc267f1eade59ea7f267a4c99a66b6329c8bcfe5bf32f8f0e65d237518163422_prof);

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
