<?php

/* support/include/upgrader/streams/core/8aeda901-16fcef4a.patch.sql */
class __TwigTemplate_18c7a380629c9c49b80f395ac34b50c680e324cf515210311ff2fe9350b02bda extends Twig_Template
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
 * @version v1.7.1
 * @signature 16fcef4a13d6475a5f8bfef462b548e2
 *
 *  Change email password field to varchar 255  ASCII
 *
 *
 */

ALTER TABLE  `%TABLE_PREFIX%email`
    CHANGE  `userpass`  `userpass` VARCHAR( 255 ) CHARACTER SET ASCII COLLATE ascii_general_ci NOT NULL;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = '16fcef4a13d6475a5f8bfef462b548e2'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/8aeda901-16fcef4a.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* */
/* */
/* /***/
/*  * @version v1.7.1*/
/*  * @signature 16fcef4a13d6475a5f8bfef462b548e2*/
/*  **/
/*  *  Change email password field to varchar 255  ASCII*/
/*  **/
/*  **/
/*  *//* */
/* */
/* ALTER TABLE  `%TABLE_PREFIX%email`*/
/*     CHANGE  `userpass`  `userpass` VARCHAR( 255 ) CHARACTER SET ASCII COLLATE ascii_general_ci NOT NULL;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = '16fcef4a13d6475a5f8bfef462b548e2'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
