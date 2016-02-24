<?php

/* support/include/upgrader/streams/core/6de40a4d-1b0fce99.patch.sql */
class __TwigTemplate_1b79bd4cbc78446d53b6735537ed058fa263ba51c3831e8df902812c53d1fb5d extends Twig_Template
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
        $__internal_2ee467c3437840beb747eb43ff676900cab3f88f755922761613a235fc85fd99 = $this->env->getExtension("native_profiler");
        $__internal_2ee467c3437840beb747eb43ff676900cab3f88f755922761613a235fc85fd99->enter($__internal_2ee467c3437840beb747eb43ff676900cab3f88f755922761613a235fc85fd99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/6de40a4d-1b0fce99.patch.sql"));

        // line 1
        echo "/**
 * @version v1.8.1 - Plugins
 * @schema 1b0fce992f6c7ed37a9b2914f86775d4
 * @title Add plugin management system
 *
 * Add table for plugin manager
 */

ALTER TABLE `%TABLE_PREFIX%staff`
  ADD `backend` varchar(32) default NULL AFTER `passwd`;

-- Plugins
DROP TABLE IF EXISTS `%TABLE_PREFIX%plugin`;
CREATE TABLE `%TABLE_PREFIX%plugin` (
  `id` int(11) unsigned not null auto_increment,
  `name` varchar(30) not null,
  `install_path` varchar(60) not null,
  `isphar` tinyint(1) not null default 0,
  `isactive` tinyint(1) not null default 0,
  `installed` datetime not null,
  primary key (`id`)
) DEFAULT CHARSET=utf8;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = '1b0fce992f6c7ed37a9b2914f86775d4'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
        
        $__internal_2ee467c3437840beb747eb43ff676900cab3f88f755922761613a235fc85fd99->leave($__internal_2ee467c3437840beb747eb43ff676900cab3f88f755922761613a235fc85fd99_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/6de40a4d-1b0fce99.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.8.1 - Plugins*/
/*  * @schema 1b0fce992f6c7ed37a9b2914f86775d4*/
/*  * @title Add plugin management system*/
/*  **/
/*  * Add table for plugin manager*/
/*  *//* */
/* */
/* ALTER TABLE `%TABLE_PREFIX%staff`*/
/*   ADD `backend` varchar(32) default NULL AFTER `passwd`;*/
/* */
/* -- Plugins*/
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%plugin`;*/
/* CREATE TABLE `%TABLE_PREFIX%plugin` (*/
/*   `id` int(11) unsigned not null auto_increment,*/
/*   `name` varchar(30) not null,*/
/*   `install_path` varchar(60) not null,*/
/*   `isphar` tinyint(1) not null default 0,*/
/*   `isactive` tinyint(1) not null default 0,*/
/*   `installed` datetime not null,*/
/*   primary key (`id`)*/
/* ) DEFAULT CHARSET=utf8;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = '1b0fce992f6c7ed37a9b2914f86775d4'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
