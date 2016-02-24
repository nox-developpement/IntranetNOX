<?php

/* support/include/upgrader/streams/core/4323a6a8-9ef33a06.patch.sql */
class __TwigTemplate_cf81456f98ce381cf8aa7891d2ebe00e6181426b1fb7c12507965bf35a8cde40 extends Twig_Template
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
        $__internal_bbb0ffef3662a1bc2a502be2010a21d3e83daadd3843142cf63d64829bd5a351 = $this->env->getExtension("native_profiler");
        $__internal_bbb0ffef3662a1bc2a502be2010a21d3e83daadd3843142cf63d64829bd5a351->enter($__internal_bbb0ffef3662a1bc2a502be2010a21d3e83daadd3843142cf63d64829bd5a351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/4323a6a8-9ef33a06.patch.sql"));

        // line 1
        echo "/**
 * @version v1.9.0
 * @signature 9ef33a062ca3a20190dfad594d594a69
 * @title Add organization features
 *
 */

ALTER TABLE `%TABLE_PREFIX%form`
    CHANGE `type` `type` varchar(8) NOT NULL DEFAULT 'G';

ALTER TABLE `%TABLE_PREFIX%list_items`
    ADD `status` int(11) unsigned NOT NULL DEFAULT 1 AFTER `list_id`,
    ADD `properties` text AFTER `sort`;

ALTER TABLE `%TABLE_PREFIX%organization`
    ADD `status` int(11) unsigned NOT NULL DEFAULT 0 AFTER `staff_id`,
    ADD `domain` varchar(128) NOT NULL DEFAULT '' AFTER `status`,
    ADD `extra` text AFTER `domain`;

ALTER TABLE `%TABLE_PREFIX%filter`
    ADD `status` int(11) unsigned NOT NULL DEFAULT '0' AFTER `isactive`,
    ADD `ext_id` varchar(11) AFTER `topic_id`;

DROP TABLE IF EXISTS `%TABLE_PREFIX%note`;
CREATE TABLE `%TABLE_PREFIX%note` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) unsigned,
  `staff_id` int(11) unsigned NOT NULL DEFAULT 0,
  `ext_id` varchar(10),
  `body` text,
  `status` int(11) unsigned NOT NULL DEFAULT 0,
  `sort` int(11) unsigned NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = '9ef33a062ca3a20190dfad594d594a69'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
        
        $__internal_bbb0ffef3662a1bc2a502be2010a21d3e83daadd3843142cf63d64829bd5a351->leave($__internal_bbb0ffef3662a1bc2a502be2010a21d3e83daadd3843142cf63d64829bd5a351_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/4323a6a8-9ef33a06.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.9.0*/
/*  * @signature 9ef33a062ca3a20190dfad594d594a69*/
/*  * @title Add organization features*/
/*  **/
/*  *//* */
/* */
/* ALTER TABLE `%TABLE_PREFIX%form`*/
/*     CHANGE `type` `type` varchar(8) NOT NULL DEFAULT 'G';*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%list_items`*/
/*     ADD `status` int(11) unsigned NOT NULL DEFAULT 1 AFTER `list_id`,*/
/*     ADD `properties` text AFTER `sort`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%organization`*/
/*     ADD `status` int(11) unsigned NOT NULL DEFAULT 0 AFTER `staff_id`,*/
/*     ADD `domain` varchar(128) NOT NULL DEFAULT '' AFTER `status`,*/
/*     ADD `extra` text AFTER `domain`;*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%filter`*/
/*     ADD `status` int(11) unsigned NOT NULL DEFAULT '0' AFTER `isactive`,*/
/*     ADD `ext_id` varchar(11) AFTER `topic_id`;*/
/* */
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%note`;*/
/* CREATE TABLE `%TABLE_PREFIX%note` (*/
/*   `id` int(11) unsigned NOT NULL AUTO_INCREMENT,*/
/*   `pid` int(11) unsigned,*/
/*   `staff_id` int(11) unsigned NOT NULL DEFAULT 0,*/
/*   `ext_id` varchar(10),*/
/*   `body` text,*/
/*   `status` int(11) unsigned NOT NULL DEFAULT 0,*/
/*   `sort` int(11) unsigned NOT NULL DEFAULT 0,*/
/*   `created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',*/
/*   `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,*/
/*   PRIMARY KEY (`id`)*/
/* ) DEFAULT CHARSET=utf8;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = '9ef33a062ca3a20190dfad594d594a69'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
