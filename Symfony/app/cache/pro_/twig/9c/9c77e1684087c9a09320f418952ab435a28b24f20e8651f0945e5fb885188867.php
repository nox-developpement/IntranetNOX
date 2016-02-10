<?php

/* support/include/upgrader/streams/core/abe9c0cb-bbb021fb.patch.sql */
class __TwigTemplate_53ba534e1144163b7090f2062c35945cda9d2d389260b685e70dc5af4ea5952e extends Twig_Template
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
 * Add an 'annulled' column to the %ticket_event table to assist in tracking
 * real statistics for reopened and closed tickets -- the events should not
 * count more than one time.
 *
 * @version 1.7-dpr3 ticket-event-annul
 */

ALTER TABLE `%TABLE_PREFIX%ticket_event`
    ADD `annulled` tinyint(1) NOT NULL DEFAULT '0' AFTER `staff`;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='bbb021fbeb377ca66b6997b77e0167cc';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/abe9c0cb-bbb021fb.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * Add an 'annulled' column to the %ticket_event table to assist in tracking*/
/*  * real statistics for reopened and closed tickets -- the events should not*/
/*  * count more than one time.*/
/*  **/
/*  * @version 1.7-dpr3 ticket-event-annul*/
/*  *//* */
/* */
/* ALTER TABLE `%TABLE_PREFIX%ticket_event`*/
/*     ADD `annulled` tinyint(1) NOT NULL DEFAULT '0' AFTER `staff`;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='bbb021fbeb377ca66b6997b77e0167cc';*/
/* */
