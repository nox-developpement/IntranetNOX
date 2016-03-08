<?php

/* support/include/upgrader/streams/core/1da1bcba-15b30765.patch.sql */
class __TwigTemplate_60b31c63e8110282a1c0a31eca1dfb2163d95ae8f3bedebf222070cdc5e3d50e extends Twig_Template
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
 * @version v1.7 RC2+
 * @signature 15b3076533123ff617801d89861136c8
 *
 * Transitional patch.
 *  
 */

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='15b3076533123ff617801d89861136c8';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/1da1bcba-15b30765.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * @version v1.7 RC2+*/
/*  * @signature 15b3076533123ff617801d89861136c8*/
/*  **/
/*  * Transitional patch.*/
/*  *  */
/*  *//* */
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='15b3076533123ff617801d89861136c8';*/
/* */
