<?php

/* support/include/upgrader/streams/core/abe9c0cb-bbb021fb.patch.sql */
class __TwigTemplate_6b2008a497d4d740d4178bd716c94b4bd7cfe5b71783fb850752caa37912e7e1 extends Twig_Template
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
        $__internal_d1afa3d3135c48e372a8265af05445bcc335d9b335931e7d8c1a57bc0399455d = $this->env->getExtension("native_profiler");
        $__internal_d1afa3d3135c48e372a8265af05445bcc335d9b335931e7d8c1a57bc0399455d->enter($__internal_d1afa3d3135c48e372a8265af05445bcc335d9b335931e7d8c1a57bc0399455d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/abe9c0cb-bbb021fb.patch.sql"));

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
        
        $__internal_d1afa3d3135c48e372a8265af05445bcc335d9b335931e7d8c1a57bc0399455d->leave($__internal_d1afa3d3135c48e372a8265af05445bcc335d9b335931e7d8c1a57bc0399455d_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/abe9c0cb-bbb021fb.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
