<?php

/* support/include/upgrader/streams/core/435c62c3-2e7531a2.patch.sql */
class __TwigTemplate_3dbfc08ccfe00a0128097619d56ecd1e2be00a96230a79d0252244bfccf033ac extends Twig_Template
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
 *  Move dept_access from group table to group_dept_access table.
 *
 * @version 1.7-rc1 Dept_Access
 */

-- Group department access table
DROP TABLE IF EXISTS `%TABLE_PREFIX%group_dept_access`;
CREATE TABLE `%TABLE_PREFIX%group_dept_access` (
  `group_id` int(10) unsigned NOT NULL default '0',
  `dept_id` int(10) unsigned NOT NULL default '0',
  UNIQUE KEY `group_dept`  (`group_id`,`dept_id`),
  KEY `dept_id` (`dept_id`)
) DEFAULT CHARSET=utf8;

-- Extend membership to groups
ALTER TABLE `%TABLE_PREFIX%department`
    ADD `group_membership` tinyint( 1 ) unsigned NOT NULL DEFAULT '0' AFTER `ispublic`;

-- Fix teams dates...
UPDATE `%TABLE_PREFIX%team`
    SET `created`=IF(TO_DAYS(`created`), `created`, IF(TO_DAYS(`updated`), `updated`, NOW())),
        `updated`=IF(TO_DAYS(`updated`), `updated`, NOW());

-- Fix groups dates...
UPDATE `%TABLE_PREFIX%groups`
    SET `created`=IF(TO_DAYS(`created`), `created`, IF(TO_DAYS(`updated`), `updated`, NOW())),
        `updated`=IF(TO_DAYS(`updated`), `updated`, NOW());

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='2e7531a201b5b8650dcd43681a832ebd';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/435c62c3-2e7531a2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  *  Move dept_access from group table to group_dept_access table.*/
/*  **/
/*  * @version 1.7-rc1 Dept_Access*/
/*  *//* */
/* */
/* -- Group department access table*/
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%group_dept_access`;*/
/* CREATE TABLE `%TABLE_PREFIX%group_dept_access` (*/
/*   `group_id` int(10) unsigned NOT NULL default '0',*/
/*   `dept_id` int(10) unsigned NOT NULL default '0',*/
/*   UNIQUE KEY `group_dept`  (`group_id`,`dept_id`),*/
/*   KEY `dept_id` (`dept_id`)*/
/* ) DEFAULT CHARSET=utf8;*/
/* */
/* -- Extend membership to groups*/
/* ALTER TABLE `%TABLE_PREFIX%department`*/
/*     ADD `group_membership` tinyint( 1 ) unsigned NOT NULL DEFAULT '0' AFTER `ispublic`;*/
/* */
/* -- Fix teams dates...*/
/* UPDATE `%TABLE_PREFIX%team`*/
/*     SET `created`=IF(TO_DAYS(`created`), `created`, IF(TO_DAYS(`updated`), `updated`, NOW())),*/
/*         `updated`=IF(TO_DAYS(`updated`), `updated`, NOW());*/
/* */
/* -- Fix groups dates...*/
/* UPDATE `%TABLE_PREFIX%groups`*/
/*     SET `created`=IF(TO_DAYS(`created`), `created`, IF(TO_DAYS(`updated`), `updated`, NOW())),*/
/*         `updated`=IF(TO_DAYS(`updated`), `updated`, NOW());*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='2e7531a201b5b8650dcd43681a832ebd';*/
/* */
