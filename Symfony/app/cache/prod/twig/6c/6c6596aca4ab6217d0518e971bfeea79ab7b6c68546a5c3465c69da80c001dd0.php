<?php

/* support/include/upgrader/streams/core/b19dc97d-435c62c3.patch.sql */
class __TwigTemplate_33ed504e36e63cb48dae192cbff89445552c4affa4559d5fa6aa949c11fb2f41 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/b19dc97d-435c62c3.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\b19dc97d-435c62c3.patch.sql");
    }
}
