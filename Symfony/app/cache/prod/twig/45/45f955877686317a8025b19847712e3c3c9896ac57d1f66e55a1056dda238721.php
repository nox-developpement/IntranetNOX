<?php

/* support/include/upgrader/streams/core/522e5b78-02decaa2.patch.sql */
class __TwigTemplate_1dae0194891eb7fe34e57a803b1ec9e7e8f243d848bf3687f369a428590746ff extends Twig_Template
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
 * @version v1.7-DPR2-P2 
 */
UPDATE `%TABLE_PREFIX%sla`
    SET `created` = NOW(),
        `updated` = NOW()
    WHERE `created` IS NULL;

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='02decaa20c10c9615558762018e25507';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/522e5b78-02decaa2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * @version v1.7-DPR2-P2 */
/*  *//* */
/* UPDATE `%TABLE_PREFIX%sla`*/
/*     SET `created` = NOW(),*/
/*         `updated` = NOW()*/
/*     WHERE `created` IS NULL;*/
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='02decaa20c10c9615558762018e25507';*/
/* */
