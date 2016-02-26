<?php

/* support/include/upgrader/streams/core/435c62c3-2e7531a2.cleanup.sql */
class __TwigTemplate_62c30f309dcbcadcb2c74efb9593875b70d238f4b7b4f65a703c20e55e8c1a1b extends Twig_Template
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
        // line 1
        echo "ALTER TABLE `%TABLE_PREFIX%groups` DROP `dept_access`;
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/435c62c3-2e7531a2.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* ALTER TABLE `%TABLE_PREFIX%groups` DROP `dept_access`;*/
/* */
