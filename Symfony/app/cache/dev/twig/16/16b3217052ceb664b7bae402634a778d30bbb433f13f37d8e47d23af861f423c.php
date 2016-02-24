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
        $__internal_3f699606ef77a3d0d0058ec23bb7436f13f0971b242ab80a2a09dbbec8d0ea6b = $this->env->getExtension("native_profiler");
        $__internal_3f699606ef77a3d0d0058ec23bb7436f13f0971b242ab80a2a09dbbec8d0ea6b->enter($__internal_3f699606ef77a3d0d0058ec23bb7436f13f0971b242ab80a2a09dbbec8d0ea6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_3f699606ef77a3d0d0058ec23bb7436f13f0971b242ab80a2a09dbbec8d0ea6b->leave($__internal_3f699606ef77a3d0d0058ec23bb7436f13f0971b242ab80a2a09dbbec8d0ea6b_prof);

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
