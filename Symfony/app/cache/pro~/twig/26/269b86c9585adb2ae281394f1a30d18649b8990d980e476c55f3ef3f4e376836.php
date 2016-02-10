<?php

/* support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql */
class __TwigTemplate_2d586cc5ca2f2de3ac13f695032c66baa207307bac315dd9fdd7667cecc42722 extends Twig_Template
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
 * Stage RC3 for 1.6RC5 upgrade
 */

UPDATE `%TABLE_PREFIX%config`
    SET `ostversion`='1.6 RC1-4';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /**/
/*  * @version=1.6RC1-4*/
/*  * */
/*  * Stage RC3 for 1.6RC5 upgrade*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `ostversion`='1.6 RC1-4';*/
/* */
