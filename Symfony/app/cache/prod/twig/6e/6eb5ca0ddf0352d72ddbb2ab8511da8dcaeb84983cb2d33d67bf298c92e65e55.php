<?php

/* support/include/upgrader/streams/core/f4da0c9b-00ff231f.patch.sql */
class __TwigTemplate_b4c2a92ed1640eff2182ba7e1c764c4b15dd7a1c94a2acb2e6261b68a2092a13 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/f4da0c9b-00ff231f.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/f4da0c9b-00ff231f.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\f4da0c9b-00ff231f.patch.sql");
    }
}
