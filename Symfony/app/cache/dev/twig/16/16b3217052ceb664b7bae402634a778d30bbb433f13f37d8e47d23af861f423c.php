<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b67e6af8f913e75f250cc00b25fd4c04a2470e93c919f4789f3fe6931ab95f30 extends Twig_Template
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
        $__internal_2add8753d844935809d6655a73e6517ebff7a6d6813b69385d7a4ffa0909aaee = $this->env->getExtension("native_profiler");
        $__internal_2add8753d844935809d6655a73e6517ebff7a6d6813b69385d7a4ffa0909aaee->enter($__internal_2add8753d844935809d6655a73e6517ebff7a6d6813b69385d7a4ffa0909aaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2add8753d844935809d6655a73e6517ebff7a6d6813b69385d7a4ffa0909aaee->leave($__internal_2add8753d844935809d6655a73e6517ebff7a6d6813b69385d7a4ffa0909aaee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
