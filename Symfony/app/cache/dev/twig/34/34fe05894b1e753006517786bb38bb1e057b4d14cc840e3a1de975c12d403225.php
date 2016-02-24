<?php

/* support/include/upgrader/streams/core/1b0fce99-ed60ba20.patch.sql */
class __TwigTemplate_8d4e83243a66495282fc1363d43dac37e76483be95dfd495fc5828b88e8c7524 extends Twig_Template
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
        $__internal_7e122d1ed3fd9bd77d2e63e96d8c366b97cdaf83284326bbe1fc80a6b8009704 = $this->env->getExtension("native_profiler");
        $__internal_7e122d1ed3fd9bd77d2e63e96d8c366b97cdaf83284326bbe1fc80a6b8009704->enter($__internal_7e122d1ed3fd9bd77d2e63e96d8c366b97cdaf83284326bbe1fc80a6b8009704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/1b0fce99-ed60ba20.patch.sql"));

        // line 1
        echo "/**
 * @version v1.8 - Collaboration
 * @signature ed60ba203a473f4f32ac49eb45db16c7
 * @title Add support for ticket collaborators
 *
 * Adds the database structure for collaboration table
 *
 */

DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket_collaborator`;
CREATE TABLE `%TABLE_PREFIX%ticket_collaborator` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `ticket_id` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  -- M => (message) clients, N => (note) 3rd-Party, R => (reply) external authority
  `role` char(1) NOT NULL DEFAULT 'M',
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `collab` (`ticket_id`,`user_id`)
) DEFAULT CHARSET=utf8;


--  Finish
UPDATE `%TABLE_PREFIX%config`
    SET `value` = 'ed60ba203a473f4f32ac49eb45db16c7'
        WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
        
        $__internal_7e122d1ed3fd9bd77d2e63e96d8c366b97cdaf83284326bbe1fc80a6b8009704->leave($__internal_7e122d1ed3fd9bd77d2e63e96d8c366b97cdaf83284326bbe1fc80a6b8009704_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/1b0fce99-ed60ba20.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.8 - Collaboration*/
/*  * @signature ed60ba203a473f4f32ac49eb45db16c7*/
/*  * @title Add support for ticket collaborators*/
/*  **/
/*  * Adds the database structure for collaboration table*/
/*  **/
/*  *//* */
/* */
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket_collaborator`;*/
/* CREATE TABLE `%TABLE_PREFIX%ticket_collaborator` (*/
/*   `id` int(11) unsigned NOT NULL AUTO_INCREMENT,*/
/*   `isactive` tinyint(1) unsigned NOT NULL DEFAULT '1',*/
/*   `ticket_id` int(11) unsigned NOT NULL DEFAULT '0',*/
/*   `user_id` int(11) unsigned NOT NULL DEFAULT '0',*/
/*   -- M => (message) clients, N => (note) 3rd-Party, R => (reply) external authority*/
/*   `role` char(1) NOT NULL DEFAULT 'M',*/
/*   `updated` datetime NOT NULL,*/
/*   PRIMARY KEY (`id`),*/
/*   UNIQUE KEY `collab` (`ticket_id`,`user_id`)*/
/* ) DEFAULT CHARSET=utf8;*/
/* */
/* */
/* --  Finish*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = 'ed60ba203a473f4f32ac49eb45db16c7'*/
/*         WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
