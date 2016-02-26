<?php

/* support/include/upgrader/streams/core/f1ccd3bb-f5692e24.cleanup.sql */
class __TwigTemplate_c0d3d9244b338d6b5173482fab13cb8eb89cdb0c80dcb12dbd9edb838634b88c extends Twig_Template
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
 * @version v1.8.1
 * @signature f5692e24c7afba7ab6168dde0b3bb3c8
 * @title Add regex field to ticket filters
 *
 * This fixes a glitch introduced @934954de8914d9bd2bb8343e805340ae where
 * a primary key was added to the %ticket_email_info table so that deleting
 * can be supported in a clustered environment. The patch added the
 * `thread_id` column as the primary key, which was incorrect, because the
 * `thread_id` may be null when rejected emails are recorded so they are
 * never considered again if found in the inbox.
 */

-- Add the primary key. The PK on `thread_id` would have been removed in the
-- task if it existed
ALTER TABLE `%TABLE_PREFIX%ticket_email_info`
    ADD `id` int(11) unsigned not null auto_increment FIRST,
    ADD PRIMARY KEY (`id`);

-- Drop the CDATA table, if any
DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket__cdata`;
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * @version v1.8.1*/
/*  * @signature f5692e24c7afba7ab6168dde0b3bb3c8*/
/*  * @title Add regex field to ticket filters*/
/*  **/
/*  * This fixes a glitch introduced @934954de8914d9bd2bb8343e805340ae where*/
/*  * a primary key was added to the %ticket_email_info table so that deleting*/
/*  * can be supported in a clustered environment. The patch added the*/
/*  * `thread_id` column as the primary key, which was incorrect, because the*/
/*  * `thread_id` may be null when rejected emails are recorded so they are*/
/*  * never considered again if found in the inbox.*/
/*  *//* */
/* */
/* -- Add the primary key. The PK on `thread_id` would have been removed in the*/
/* -- task if it existed*/
/* ALTER TABLE `%TABLE_PREFIX%ticket_email_info`*/
/*     ADD `id` int(11) unsigned not null auto_increment FIRST,*/
/*     ADD PRIMARY KEY (`id`);*/
/* */
/* -- Drop the CDATA table, if any*/
/* DROP TABLE IF EXISTS `%TABLE_PREFIX%ticket__cdata`;*/
/* */
