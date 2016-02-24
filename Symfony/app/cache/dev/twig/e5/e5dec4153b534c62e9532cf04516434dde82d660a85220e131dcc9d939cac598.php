<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2364ed857fe44d5073cf3f0e915b005d40d9c2c03d35b269fd16f97371110e9f extends Twig_Template
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
        $__internal_8df368d00e4c23bf5232b97822a9e767072dfa358df02c60a29f9191933eec0e = $this->env->getExtension("native_profiler");
        $__internal_8df368d00e4c23bf5232b97822a9e767072dfa358df02c60a29f9191933eec0e->enter($__internal_8df368d00e4c23bf5232b97822a9e767072dfa358df02c60a29f9191933eec0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8df368d00e4c23bf5232b97822a9e767072dfa358df02c60a29f9191933eec0e->leave($__internal_8df368d00e4c23bf5232b97822a9e767072dfa358df02c60a29f9191933eec0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
