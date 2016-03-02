<?php

/* support/include/upgrader/streams/core/740428f9-8aeda901.patch.sql */
class __TwigTemplate_77e28cc8d30fcc5f21f0b71d379ca03bf6375f0b8cf559b77640c837c0ee8493 extends Twig_Template
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
 * @version v1.7.1
 * @signature 8aeda901a16e08c3229f1ac6da568e02
 *
 *  - Transitional patch to fix DB ENGINE
 *
 *
 *
 */

UPDATE `%TABLE_PREFIX%config`
    SET `value` = '8aeda901a16e08c3229f1ac6da568e02'
\tWHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/740428f9-8aeda901.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * @version v1.7.1*/
/*  * @signature 8aeda901a16e08c3229f1ac6da568e02*/
/*  **/
/*  *  - Transitional patch to fix DB ENGINE*/
/*  **/
/*  **/
/*  **/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = '8aeda901a16e08c3229f1ac6da568e02'*/
/* 	WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
