<?php

/* support/include/upgrader/streams/core/2e20a0eb-98ae1ed2.patch.sql */
class __TwigTemplate_0bd03a0c1a4029fa5290e335b3278a67b102c0127477a9bb2b9a079ea4a32a6d extends Twig_Template
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
 * Stage RC4 for 1.6RC5 upgrade
 */

UPDATE `%TABLE_PREFIX%config`
    SET `ostversion`='1.6 RC1-4';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/2e20a0eb-98ae1ed2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /**/
/*  * @version=1.6RC1-4*/
/*  * */
/*  * Stage RC4 for 1.6RC5 upgrade*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `ostversion`='1.6 RC1-4';*/
/* */
