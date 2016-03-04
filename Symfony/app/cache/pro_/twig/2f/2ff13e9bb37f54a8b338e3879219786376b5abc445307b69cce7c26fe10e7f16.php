<?php

/* support/include/upgrader/streams/core/c0fd16f4-d959a00e.patch.sql */
class __TwigTemplate_0391a3cbbc808dc486d63c7f3d1d571f1f9739d92d467272670dc56d26c295ca extends Twig_Template
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
 * @version v1.7
 *
 * @schema d959a00e55c75e0c903b9e37324fd25d
 */

-- Add cron exec service
ALTER TABLE  `%TABLE_PREFIX%api_key`
    ADD  `can_exec_cron` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `can_create_tickets`;

-- Drop email piping settings from config table.
ALTER TABLE  `%TABLE_PREFIX%config` 
    DROP  `enable_email_piping`;

-- update schema signature
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='d959a00e55c75e0c903b9e37324fd25d';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/c0fd16f4-d959a00e.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * @version v1.7*/
/*  **/
/*  * @schema d959a00e55c75e0c903b9e37324fd25d*/
/*  *//* */
/* */
/* -- Add cron exec service*/
/* ALTER TABLE  `%TABLE_PREFIX%api_key`*/
/*     ADD  `can_exec_cron` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `can_create_tickets`;*/
/* */
/* -- Drop email piping settings from config table.*/
/* ALTER TABLE  `%TABLE_PREFIX%config` */
/*     DROP  `enable_email_piping`;*/
/* */
/* -- update schema signature*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='d959a00e55c75e0c903b9e37324fd25d';*/
/* */
