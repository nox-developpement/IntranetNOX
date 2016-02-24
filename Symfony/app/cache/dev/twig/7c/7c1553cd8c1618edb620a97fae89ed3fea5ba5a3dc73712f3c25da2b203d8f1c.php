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
        $__internal_8c7e2c1c526849518aed1c9e0502d725a4da4d60a4c755a31562f836a6acb353 = $this->env->getExtension("native_profiler");
        $__internal_8c7e2c1c526849518aed1c9e0502d725a4da4d60a4c755a31562f836a6acb353->enter($__internal_8c7e2c1c526849518aed1c9e0502d725a4da4d60a4c755a31562f836a6acb353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/740428f9-8aeda901.patch.sql"));

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
        
        $__internal_8c7e2c1c526849518aed1c9e0502d725a4da4d60a4c755a31562f836a6acb353->leave($__internal_8c7e2c1c526849518aed1c9e0502d725a4da4d60a4c755a31562f836a6acb353_prof);

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
