<?php

/* support/include/upgrader/streams/core/740428f9-8aeda901.patch.sql */
class __TwigTemplate_1d757eb757c9856e08dc256cdc7d68e79fd2d8ee74c8adf244f0f581d6e2b587 extends Twig_Template
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
        $__internal_025354fd49fcd16af017775627e1d6d3014ee4550f0e1a10ca20a66d4a40a7b8 = $this->env->getExtension("native_profiler");
        $__internal_025354fd49fcd16af017775627e1d6d3014ee4550f0e1a10ca20a66d4a40a7b8->enter($__internal_025354fd49fcd16af017775627e1d6d3014ee4550f0e1a10ca20a66d4a40a7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/740428f9-8aeda901.patch.sql"));

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
        
        $__internal_025354fd49fcd16af017775627e1d6d3014ee4550f0e1a10ca20a66d4a40a7b8->leave($__internal_025354fd49fcd16af017775627e1d6d3014ee4550f0e1a10ca20a66d4a40a7b8_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/740428f9-8aeda901.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
