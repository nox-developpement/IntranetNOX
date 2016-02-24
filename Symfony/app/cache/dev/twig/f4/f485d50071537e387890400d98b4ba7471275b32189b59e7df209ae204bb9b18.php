<?php

/* support/include/upgrader/streams/core/9ef33a06-8f99b8bf.patch.sql */
class __TwigTemplate_7650e6feeca0d852ebf6184dbfeaaaaab633623d4e1d60da7ddf4995df9da8fe extends Twig_Template
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
        $__internal_a413390211d6a37ce6ea000b8b1c9d087d2653e05560120b449c641572ee9b59 = $this->env->getExtension("native_profiler");
        $__internal_a413390211d6a37ce6ea000b8b1c9d087d2653e05560120b449c641572ee9b59->enter($__internal_a413390211d6a37ce6ea000b8b1c9d087d2653e05560120b449c641572ee9b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/9ef33a06-8f99b8bf.patch.sql"));

        // line 1
        echo "/**
 * @version v1.9.0
 * @signature 8f99b8bf9bee63c8e4dc274ffbdda383
 * @title Move organization support from UserAccount to User model.
 *
 */

ALTER TABLE `%TABLE_PREFIX%user`
    ADD `org_id` int(11) unsigned NOT NULL AFTER  `id`,
    ADD `status` int(11) unsigned NOT NULL DEFAULT 0 AFTER `default_email_id`,
    ADD INDEX (`org_id`);

ALTER TABLE `%TABLE_PREFIX%user_account`
    DROP `org_id`,
    ADD INDEX (`user_id`);

ALTER TABLE `%TABLE_PREFIX%ticket`
    ADD INDEX (`user_id`);

ALTER TABLE `%TABLE_PREFIX%draft`
    ADD `extra` text AFTER `body`;

ALTER TABLE `%TABLE_PREFIX%organization`
    CHANGE `staff_id` `manager` varchar(16) NOT NULL DEFAULT '',
    CHANGE `domain` `domain` varchar(256) NOT NULL DEFAULT '';

UPDATE `%TABLE_PREFIX%config`
    SET `value` = '8f99b8bf9bee63c8e4dc274ffbdda383'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
        
        $__internal_a413390211d6a37ce6ea000b8b1c9d087d2653e05560120b449c641572ee9b59->leave($__internal_a413390211d6a37ce6ea000b8b1c9d087d2653e05560120b449c641572ee9b59_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/9ef33a06-8f99b8bf.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.9.0*/
/*  * @signature 8f99b8bf9bee63c8e4dc274ffbdda383*/
/*  * @title Move organization support from UserAccount to User model.*/
/*  **/
/*  *//* */
/* */
/* ALTER TABLE `%TABLE_PREFIX%user`*/
/*     ADD `org_id` int(11) unsigned NOT NULL AFTER  `id`,*/
/*     ADD `status` int(11) unsigned NOT NULL DEFAULT 0 AFTER `default_email_id`,*/
/*     ADD INDEX (`org_id`);*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%user_account`*/
/*     DROP `org_id`,*/
/*     ADD INDEX (`user_id`);*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%ticket`*/
/*     ADD INDEX (`user_id`);*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%draft`*/
/*     ADD `extra` text AFTER `body`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%organization`*/
/*     CHANGE `staff_id` `manager` varchar(16) NOT NULL DEFAULT '',*/
/*     CHANGE `domain` `domain` varchar(256) NOT NULL DEFAULT '';*/
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = '8f99b8bf9bee63c8e4dc274ffbdda383'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
