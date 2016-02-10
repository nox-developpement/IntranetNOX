<?php

/* support/include/upgrader/streams/core/bbb021fb-49478749.patch.sql */
class __TwigTemplate_1a17126371f527812a4644584f2548810c1f99381e5282d36c4e36dfe1165b16 extends Twig_Template
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
 * Transitional patch - FIX on the INSTALLER schema
 * 
 * @version 1.7-dpr3 installerfix
 */

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='49478749dc680eef08b7954bd568cfd1';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/bbb021fb-49478749.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * Transitional patch - FIX on the INSTALLER schema*/
/*  * */
/*  * @version 1.7-dpr3 installerfix*/
/*  *//* */
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='49478749dc680eef08b7954bd568cfd1';*/
/* */
