<?php

/* support/include/upgrader/streams/core/15af7cd3-98ae1ed2.patch.sql */
class __TwigTemplate_1e93bc866a6536ab6770a2d12e4f3ae05ac15a67468cd2cc15678ac48242849c extends Twig_Template
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
 * Stage RC2 for 1.6RC5 upgrade
 */

UPDATE `%TABLE_PREFIX%config`
    SET `ostversion`='1.6 RC1-4';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/15af7cd3-98ae1ed2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /**/
/*  * @version=1.6RC1-4*/
/*  * */
/*  * Stage RC2 for 1.6RC5 upgrade*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `ostversion`='1.6 RC1-4';*/
/* */
