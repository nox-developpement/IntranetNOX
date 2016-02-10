<?php

/* support/include/upgrader/streams/core/aee589ab-98ae1ed2.patch.sql */
class __TwigTemplate_3c06fb33a090608099137c9118f65b3f7578d4ee6726d3a5e39c722954a67b25 extends Twig_Template
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
        echo "/*
 * @version=1.6RC1-4
 * 
 * Stage RC1 for 1.6RC5 upgrade
 */

UPDATE `%TABLE_PREFIX%config`
    SET `ostversion`='1.6 RC1-4';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/aee589ab-98ae1ed2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /**/
/*  * @version=1.6RC1-4*/
/*  * */
/*  * Stage RC1 for 1.6RC5 upgrade*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `ostversion`='1.6 RC1-4';*/
/* */
