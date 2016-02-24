<?php

/* support/include/upgrader/streams/core/435c62c3-2e7531a2.cleanup.sql */
class __TwigTemplate_cd8a7bce42823b6f7524b8fb8d1f9e29b43997873ff004b31623b96b81ba9010 extends Twig_Template
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
        $__internal_11ae16dcea5fea40429c6b16512cd210eaabcb72d64f299113176dbb437319fc = $this->env->getExtension("native_profiler");
        $__internal_11ae16dcea5fea40429c6b16512cd210eaabcb72d64f299113176dbb437319fc->enter($__internal_11ae16dcea5fea40429c6b16512cd210eaabcb72d64f299113176dbb437319fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/435c62c3-2e7531a2.cleanup.sql"));

        // line 1
        echo "ALTER TABLE `%TABLE_PREFIX%groups` DROP `dept_access`;
";
        
        $__internal_11ae16dcea5fea40429c6b16512cd210eaabcb72d64f299113176dbb437319fc->leave($__internal_11ae16dcea5fea40429c6b16512cd210eaabcb72d64f299113176dbb437319fc_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/435c62c3-2e7531a2.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* ALTER TABLE `%TABLE_PREFIX%groups` DROP `dept_access`;*/
/* */
