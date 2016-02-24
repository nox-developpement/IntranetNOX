<?php

/* support/include/upgrader/streams/core/b19dc97d-435c62c3.patch.sql */
class __TwigTemplate_d1f9bb1152d67992d4317aa6cc29eb7d329549024d780868d5b3d66ccac2e47a extends Twig_Template
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
        $__internal_dc7666e0da1822b6e6f4f3d68e3a6d1aa532e6bce91b7f8f4747847cad7e5ada = $this->env->getExtension("native_profiler");
        $__internal_dc7666e0da1822b6e6f4f3d68e3a6d1aa532e6bce91b7f8f4747847cad7e5ada->enter($__internal_dc7666e0da1822b6e6f4f3d68e3a6d1aa532e6bce91b7f8f4747847cad7e5ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/b19dc97d-435c62c3.patch.sql"));

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
        
        $__internal_dc7666e0da1822b6e6f4f3d68e3a6d1aa532e6bce91b7f8f4747847cad7e5ada->leave($__internal_dc7666e0da1822b6e6f4f3d68e3a6d1aa532e6bce91b7f8f4747847cad7e5ada_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/b19dc97d-435c62c3.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
