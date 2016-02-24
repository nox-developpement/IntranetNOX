<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7b8c0599ec11ccda1ce82ba5fa13b2f4f129c5e13092954d33494fd4bc16462d extends Twig_Template
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
        $__internal_a3d963693a676da4664af9afecfeb92dfb3e21a99d119ec89bd0f4f1d72d7da6 = $this->env->getExtension("native_profiler");
        $__internal_a3d963693a676da4664af9afecfeb92dfb3e21a99d119ec89bd0f4f1d72d7da6->enter($__internal_a3d963693a676da4664af9afecfeb92dfb3e21a99d119ec89bd0f4f1d72d7da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a3d963693a676da4664af9afecfeb92dfb3e21a99d119ec89bd0f4f1d72d7da6->leave($__internal_a3d963693a676da4664af9afecfeb92dfb3e21a99d119ec89bd0f4f1d72d7da6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
