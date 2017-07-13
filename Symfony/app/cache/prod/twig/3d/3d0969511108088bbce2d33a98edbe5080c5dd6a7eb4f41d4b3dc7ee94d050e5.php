<?php

/* support/include/upgrader/streams/core/f1ccd3bb-f5692e24.cleanup.sql */
class __TwigTemplate_0ae99872efeb80cb3e93f015876e8a22a8039d5618821f502544e026a0d96dab extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/f1ccd3bb-f5692e24.cleanup.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\f1ccd3bb-f5692e24.cleanup.sql");
    }
}
