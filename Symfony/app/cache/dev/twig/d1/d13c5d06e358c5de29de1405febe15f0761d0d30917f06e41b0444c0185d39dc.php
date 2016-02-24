<?php

/* support/include/upgrader/streams/core/f4da0c9b-00ff231f.patch.sql */
class __TwigTemplate_e1f625a81803432e7e52f93bce6eb12d534751a21d2c0b0479688efc9e3192a1 extends Twig_Template
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
        $__internal_c285c38fe2cb6313fef5dd673b53e5e44d849315fe6f05bde6b70b011144205a = $this->env->getExtension("native_profiler");
        $__internal_c285c38fe2cb6313fef5dd673b53e5e44d849315fe6f05bde6b70b011144205a->enter($__internal_c285c38fe2cb6313fef5dd673b53e5e44d849315fe6f05bde6b70b011144205a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/f4da0c9b-00ff231f.patch.sql"));

        // line 1
        echo "/*
 * @version=1.7RC2+
 * 
 * Add auto-reply template.
 */

ALTER TABLE  `%TABLE_PREFIX%email_template` 
    ADD  `ticket_autoreply_subj` VARCHAR( 255 ) NOT NULL AFTER  `ticket_autoresp_body` ,
    ADD  `ticket_autoreply_body` TEXT NOT NULL AFTER  `ticket_autoreply_subj`;

UPDATE `%TABLE_PREFIX%email_template` 
    SET `ticket_autoreply_subj`='Support Ticket Opened [#%{ticket.number}]',
        `ticket_autoreply_body`='%{ticket.name},\\r\\n\\r\\nA request for support has been created and assigned ticket #%{ticket.number} with the following auto-reply:\\r\\n\\r\\n%{response}\\r\\n\\r\\n\\r\\nWe hope this response has sufficiently answered your questions. If not, please do not open another ticket. If need be, representative will follow-up with you as soon as possible.\\r\\n\\r\\nYou can view this ticket''s progress online here: %{ticket.client_link}.';

 -- update schema signature
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='00ff231f2ade8797a0e7f2a7fccd52f4';
";
        
        $__internal_c285c38fe2cb6313fef5dd673b53e5e44d849315fe6f05bde6b70b011144205a->leave($__internal_c285c38fe2cb6313fef5dd673b53e5e44d849315fe6f05bde6b70b011144205a_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/f4da0c9b-00ff231f.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /**/
/*  * @version=1.7RC2+*/
/*  * */
/*  * Add auto-reply template.*/
/*  *//* */
/* */
/* ALTER TABLE  `%TABLE_PREFIX%email_template` */
/*     ADD  `ticket_autoreply_subj` VARCHAR( 255 ) NOT NULL AFTER  `ticket_autoresp_body` ,*/
/*     ADD  `ticket_autoreply_body` TEXT NOT NULL AFTER  `ticket_autoreply_subj`;*/
/* */
/* UPDATE `%TABLE_PREFIX%email_template` */
/*     SET `ticket_autoreply_subj`='Support Ticket Opened [#%{ticket.number}]',*/
/*         `ticket_autoreply_body`='%{ticket.name},\r\n\r\nA request for support has been created and assigned ticket #%{ticket.number} with the following auto-reply:\r\n\r\n%{response}\r\n\r\n\r\nWe hope this response has sufficiently answered your questions. If not, please do not open another ticket. If need be, representative will follow-up with you as soon as possible.\r\n\r\nYou can view this ticket''s progress online here: %{ticket.client_link}.';*/
/* */
/*  -- update schema signature*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='00ff231f2ade8797a0e7f2a7fccd52f4';*/
/* */
