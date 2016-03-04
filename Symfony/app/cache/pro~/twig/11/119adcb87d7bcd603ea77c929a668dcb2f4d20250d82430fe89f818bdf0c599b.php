<?php

/* support/include/upgrader/streams/core/15719536-dd0022fb.patch.sql */
class __TwigTemplate_590b81746adc656f2c3d29ee850e5f2b04fa8f5000ea72cfa768fa9985ae7aec extends Twig_Template
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
        echo "
/**
 * @version v1.7 RC2+
 * @signature dd0022fb14892c0bb6a9700392df2de7
 *
 * Transitional patch - dev branch installations
 *  
 */

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='dd0022fb14892c0bb6a9700392df2de7';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/15719536-dd0022fb.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/* /***/
/*  * @version v1.7 RC2+*/
/*  * @signature dd0022fb14892c0bb6a9700392df2de7*/
/*  **/
/*  * Transitional patch - dev branch installations*/
/*  *  */
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='dd0022fb14892c0bb6a9700392df2de7';*/
/* */
