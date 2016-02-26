<?php

/* support/include/upgrader/streams/core/b19dc97d-435c62c3.patch.sql */
class __TwigTemplate_3af2b36c428f91a51f2ca39d235a5bb39e709d46f55f2efc964c1ce448b6cc64 extends Twig_Template
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
 * Support canned response definition for email filters
 *
 * @version 1.7-rc1 canned-response-in-filter
 */

ALTER TABLE `%TABLE_PREFIX%email_filter`
    ADD `canned_response_id` int(11) unsigned NOT NULL default '0'
        AFTER `disable_autoresponder`;

-- Add index for linking responses to messages quickly
ALTER TABLE `%TABLE_PREFIX%ticket_thread` ADD KEY `pid` (`pid`);

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='435c62c3b23795529bcfae7e7371d82e';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/b19dc97d-435c62c3.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * Support canned response definition for email filters*/
/*  **/
/*  * @version 1.7-rc1 canned-response-in-filter*/
/*  *//* */
/* */
/* ALTER TABLE `%TABLE_PREFIX%email_filter`*/
/*     ADD `canned_response_id` int(11) unsigned NOT NULL default '0'*/
/*         AFTER `disable_autoresponder`;*/
/* */
/* -- Add index for linking responses to messages quickly*/
/* ALTER TABLE `%TABLE_PREFIX%ticket_thread` ADD KEY `pid` (`pid`);*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='435c62c3b23795529bcfae7e7371d82e';*/
/* */
