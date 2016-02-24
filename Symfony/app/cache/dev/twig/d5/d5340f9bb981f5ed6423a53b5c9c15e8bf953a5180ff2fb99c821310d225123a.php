<?php

/* @IvoryCKEditor/Form/ckeditor_widget.html.php */
class __TwigTemplate_e17d0bd48d674e545e5e73ddc69fb4b7cb7213b255db64477e20d3143d7e9cbe extends Twig_Template
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
        $__internal_bf7e7f4ebe5897bfe174fcd5a1d76dd082f518cffa66d86c39409fda94324f38 = $this->env->getExtension("native_profiler");
        $__internal_bf7e7f4ebe5897bfe174fcd5a1d76dd082f518cffa66d86c39409fda94324f38->enter($__internal_bf7e7f4ebe5897bfe174fcd5a1d76dd082f518cffa66d86c39409fda94324f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@IvoryCKEditor/Form/ckeditor_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'attributes') ?>><?php echo htmlspecialchars(\$value) ?></textarea>

<?php if (\$enable) : ?>
    <?php if (\$autoload) : ?>
        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = \"<?php echo \$view['ivory_ckeditor']->renderBasePath(\$base_path); ?>\";
        </script>
        <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$js_path); ?>\"></script>
        <?php if (\$jquery) : ?>
            <script type=\"text/javascript\" src=\"<?php echo \$view['ivory_ckeditor']->renderJsPath(\$jquery_path); ?>\"></script>
        <?php endif; ?>
    <?php endif; ?>
    <script type=\"text/javascript\">
        <?php echo \$view['ivory_ckeditor']->renderDestroy(\$id); ?>

        <?php foreach (\$plugins as \$pluginName => \$plugin): ?>
            <?php echo \$view['ivory_ckeditor']->renderPlugin(\$pluginName, \$plugin); ?>
        <?php endforeach; ?>

        <?php foreach (\$styles as \$styleName => \$style): ?>
            <?php echo \$view['ivory_ckeditor']->renderStylesSet(\$styleName, \$style); ?>
        <?php endforeach; ?>

        <?php foreach (\$templates as \$templateName => \$template): ?>
            <?php echo \$view['ivory_ckeditor']->renderTemplate(\$templateName, \$template); ?>
        <?php endforeach; ?>

        <?php echo \$view['ivory_ckeditor']->renderWidget(\$id, \$config, \$inline, \$input_sync); ?>
    </script>
<?php endif; ?>
";
        
        $__internal_bf7e7f4ebe5897bfe174fcd5a1d76dd082f518cffa66d86c39409fda94324f38->leave($__internal_bf7e7f4ebe5897bfe174fcd5a1d76dd082f518cffa66d86c39409fda94324f38_prof);

    }

    public function getTemplateName()
    {
        return "@IvoryCKEditor/Form/ckeditor_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'attributes') ?>><?php echo htmlspecialchars($value) ?></textarea>*/
/* */
/* <?php if ($enable) : ?>*/
/*     <?php if ($autoload) : ?>*/
/*         <script type="text/javascript">*/
/*             var CKEDITOR_BASEPATH = "<?php echo $view['ivory_ckeditor']->renderBasePath($base_path); ?>";*/
/*         </script>*/
/*         <script type="text/javascript" src="<?php echo $view['ivory_ckeditor']->renderJsPath($js_path); ?>"></script>*/
/*         <?php if ($jquery) : ?>*/
/*             <script type="text/javascript" src="<?php echo $view['ivory_ckeditor']->renderJsPath($jquery_path); ?>"></script>*/
/*         <?php endif; ?>*/
/*     <?php endif; ?>*/
/*     <script type="text/javascript">*/
/*         <?php echo $view['ivory_ckeditor']->renderDestroy($id); ?>*/
/* */
/*         <?php foreach ($plugins as $pluginName => $plugin): ?>*/
/*             <?php echo $view['ivory_ckeditor']->renderPlugin($pluginName, $plugin); ?>*/
/*         <?php endforeach; ?>*/
/* */
/*         <?php foreach ($styles as $styleName => $style): ?>*/
/*             <?php echo $view['ivory_ckeditor']->renderStylesSet($styleName, $style); ?>*/
/*         <?php endforeach; ?>*/
/* */
/*         <?php foreach ($templates as $templateName => $template): ?>*/
/*             <?php echo $view['ivory_ckeditor']->renderTemplate($templateName, $template); ?>*/
/*         <?php endforeach; ?>*/
/* */
/*         <?php echo $view['ivory_ckeditor']->renderWidget($id, $config, $inline, $input_sync); ?>*/
/*     </script>*/
/* <?php endif; ?>*/
/* */
