<?php

/* support/include/upgrader/streams/core/f1ccd3bb-f5692e24.patch.sql */
class __TwigTemplate_c8c222c4255562155684fee0256d10fb234c336bec286d2b2670d2bc59a1b853 extends Twig_Template
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
        $__internal_724f4747a1b72807202ab0b7181e105a7acb3c0e22f4afbc77c5c1054ff13073 = $this->env->getExtension("native_profiler");
        $__internal_724f4747a1b72807202ab0b7181e105a7acb3c0e22f4afbc77c5c1054ff13073->enter($__internal_724f4747a1b72807202ab0b7181e105a7acb3c0e22f4afbc77c5c1054ff13073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.patch.sql"));

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

-- [#479](https://github.com/osTicket/osTicket-1.8/issues/479)
-- Add (not)_match to the filter_rule `how`
ALTER TABLE `%TABLE_PREFIX%filter_rule`
    CHANGE `how` `how` enum('equal','not_equal','contains','dn_contain','starts','ends','match','not_match')
    NOT NULL;

-- Allow `isactive` to be `-1` for collaborators, which might indicate
-- something like 'unsubscribed'
ALTER TABLE `%TABLE_PREFIX%ticket_collaborator`
    CHANGE `isactive` `isactive` tinyint(1) NOT NULL DEFAULT '1';

-- There is no `subject` available in the filter::apply method for anything but email
UPDATE `%TABLE_PREFIX%filter_rule`
    SET `what` = CONCAT('field.', (
        SELECT field.`id` FROM `%TABLE_PREFIX%form_field` field
        JOIN `%TABLE_PREFIX%form` form ON (field.form_id = form.id)
        WHERE field.`name` = 'subject' AND form.`type` = 'T'
        ))
    WHERE `what` = 'subject';

-- There is no `body` available in the filter::apply method for anything but emails
UPDATE `%TABLE_PREFIX%filter_rule`
    SET `what` = CONCAT('field.', (
        SELECT field.`id` FROM `%TABLE_PREFIX%form_field` field
        JOIN `%TABLE_PREFIX%form` form ON (field.form_id = form.id)
        WHERE field.`name` = 'message' AND form.`type` = 'T'
        ))
    WHERE `what` = 'body';

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = 'f5692e24c7afba7ab6168dde0b3bb3c8'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
        
        $__internal_724f4747a1b72807202ab0b7181e105a7acb3c0e22f4afbc77c5c1054ff13073->leave($__internal_724f4747a1b72807202ab0b7181e105a7acb3c0e22f4afbc77c5c1054ff13073_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
/* -- [#479](https://github.com/osTicket/osTicket-1.8/issues/479)*/
/* -- Add (not)_match to the filter_rule `how`*/
/* ALTER TABLE `%TABLE_PREFIX%filter_rule`*/
/*     CHANGE `how` `how` enum('equal','not_equal','contains','dn_contain','starts','ends','match','not_match')*/
/*     NOT NULL;*/
/* */
/* -- Allow `isactive` to be `-1` for collaborators, which might indicate*/
/* -- something like 'unsubscribed'*/
/* ALTER TABLE `%TABLE_PREFIX%ticket_collaborator`*/
/*     CHANGE `isactive` `isactive` tinyint(1) NOT NULL DEFAULT '1';*/
/* */
/* -- There is no `subject` available in the filter::apply method for anything but email*/
/* UPDATE `%TABLE_PREFIX%filter_rule`*/
/*     SET `what` = CONCAT('field.', (*/
/*         SELECT field.`id` FROM `%TABLE_PREFIX%form_field` field*/
/*         JOIN `%TABLE_PREFIX%form` form ON (field.form_id = form.id)*/
/*         WHERE field.`name` = 'subject' AND form.`type` = 'T'*/
/*         ))*/
/*     WHERE `what` = 'subject';*/
/* */
/* -- There is no `body` available in the filter::apply method for anything but emails*/
/* UPDATE `%TABLE_PREFIX%filter_rule`*/
/*     SET `what` = CONCAT('field.', (*/
/*         SELECT field.`id` FROM `%TABLE_PREFIX%form_field` field*/
/*         JOIN `%TABLE_PREFIX%form` form ON (field.form_id = form.id)*/
/*         WHERE field.`name` = 'message' AND form.`type` = 'T'*/
/*         ))*/
/*     WHERE `what` = 'body';*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `value` = 'f5692e24c7afba7ab6168dde0b3bb3c8'*/
/*     WHERE `key` = 'schema_signature' AND `namespace` = 'core';*/
/* */
