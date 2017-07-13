<?php

/* support/include/upgrader/streams/core/abe9c0cb-bbb021fb.patch.sql */
class __TwigTemplate_47ae059aa58f9977840a72e506c884b5100d824deebc8885348e182fe2251828 extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/abe9c0cb-bbb021fb.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\abe9c0cb-bbb021fb.patch.sql");
    }
}
