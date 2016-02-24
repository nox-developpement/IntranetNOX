<?php

/* support/include/upgrader/streams/core/435c62c3-2e7531a2.patch.sql */
class __TwigTemplate_48f7afdfbe251ef5cfe6a2dd3447b186f0ad8f2a9028156b70ccb6eaeb30eba3 extends Twig_Template
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
        $__internal_08eef348b2950337323740c6b800fa817e3f9a89b253eddeb889d5366897af7c = $this->env->getExtension("native_profiler");
        $__internal_08eef348b2950337323740c6b800fa817e3f9a89b253eddeb889d5366897af7c->enter($__internal_08eef348b2950337323740c6b800fa817e3f9a89b253eddeb889d5366897af7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/435c62c3-2e7531a2.patch.sql"));

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
        
        $__internal_08eef348b2950337323740c6b800fa817e3f9a89b253eddeb889d5366897af7c->leave($__internal_08eef348b2950337323740c6b800fa817e3f9a89b253eddeb889d5366897af7c_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/435c62c3-2e7531a2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
