<?php

/* support/include/upgrader/streams/core/7be60a84-522e5b78.patch.sql */
class __TwigTemplate_b1a027cc030a8bdf63eecc44011260dfbdaaa31a50869a3701eda91a366cd832 extends Twig_Template
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
        echo "/**
 * No longer necessary -- don't clobber email templates for previous
 * osTicket administrators
 *
 * @version v1.7-DPR1 (P1)
 */

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='522e5b783c2824c67222260ee22baa93';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/7be60a84-522e5b78.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * No longer necessary -- don't clobber email templates for previous*/
/*  * osTicket administrators*/
/*  **/
/*  * @version v1.7-DPR1 (P1)*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='522e5b783c2824c67222260ee22baa93';*/
/* */
