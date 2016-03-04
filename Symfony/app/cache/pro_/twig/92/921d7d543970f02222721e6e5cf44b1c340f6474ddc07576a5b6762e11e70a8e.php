<?php

/* support/include/upgrader/streams/core/16fcef4a-d51f303a.patch.sql */
class __TwigTemplate_91c6c377a3ce718a9656082eaee503a0db04e68c566218d3d9f44e751147a584 extends Twig_Template
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
 * @version v1.8.0
 * @signature d51f303a2c9ee04f9906fc1b6047459f
 *
 * Make default data translatable. This patch also adds columns to database
 * tables to introduce the concept of a language.
 *
 */

ALTER TABLE `%TABLE_PREFIX%email_template_group`
    ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `name`;

ALTER TABLE `%TABLE_PREFIX%email_template`
    ADD `notes` text AFTER `body`;

ALTER TABLE `%TABLE_PREFIX%canned_response`
    ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `response`;

ALTER TABLE `%TABLE_PREFIX%page`
    ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `body`;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = 'd51f303a2c9ee04f9906fc1b6047459f'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/16fcef4a-d51f303a.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * @version v1.8.0*/
/*  * @signature d51f303a2c9ee04f9906fc1b6047459f*/
/*  **/
/*  * Make default data translatable. This patch also adds columns to database*/
/*  * tables to introduce the concept of a language.*/
/*  **/
/*  *//* */
/* */
/* ALTER TABLE `%TABLE_PREFIX%email_template_group`*/
/*     ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `name`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%email_template`*/
/*     ADD `notes` text AFTER `body`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%canned_response`*/
/*     ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `response`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%page`*/
/*     ADD `lang` varchar(16) NOT NULL default 'en_US' AFTER `body`;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = 'd51f303a2c9ee04f9906fc1b6047459f'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
