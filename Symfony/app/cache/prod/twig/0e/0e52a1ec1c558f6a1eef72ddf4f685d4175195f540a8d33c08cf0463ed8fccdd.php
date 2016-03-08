<?php

/* support/include/upgrader/streams/core/2e7531a2-d0e37dca.patch.sql */
class __TwigTemplate_8750c9854ea362fac72939c2bba610720911eded79ffa3df39cac6e37c64a406 extends Twig_Template
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
 *  Add help topic nesting support.
 *
 * @version 1.7-rc2 - nested help topics.
 */

-- Add help topic parent id.
ALTER TABLE  `%TABLE_PREFIX%help_topic` 
    ADD  `topic_pid` INT(10) UNSIGNED NOT NULL DEFAULT  '0' AFTER  `topic_id` ,
    ADD INDEX (  `topic_pid` );

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='d0e37dca324648f1ce2d10528a6026d4';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/2e7531a2-d0e37dca.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  *  Add help topic nesting support.*/
/*  **/
/*  * @version 1.7-rc2 - nested help topics.*/
/*  *//* */
/* */
/* -- Add help topic parent id.*/
/* ALTER TABLE  `%TABLE_PREFIX%help_topic` */
/*     ADD  `topic_pid` INT(10) UNSIGNED NOT NULL DEFAULT  '0' AFTER  `topic_id` ,*/
/*     ADD INDEX (  `topic_pid` );*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='d0e37dca324648f1ce2d10528a6026d4';*/
/* */
