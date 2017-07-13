<?php

/* support/include/upgrader/streams/core/c0fd16f4-d959a00e.patch.sql */
class __TwigTemplate_833ff494fbdf7197994dbac3fa306cedaaa1144c9090fbf8f575366488e9c345 extends Twig_Template
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
 * @version v1.7
 *
 * @schema d959a00e55c75e0c903b9e37324fd25d
 */

-- Add cron exec service
ALTER TABLE  `%TABLE_PREFIX%api_key`
    ADD  `can_exec_cron` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `can_create_tickets`;

-- Drop email piping settings from config table.
ALTER TABLE  `%TABLE_PREFIX%config` 
    DROP  `enable_email_piping`;

-- update schema signature
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='d959a00e55c75e0c903b9e37324fd25d';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/c0fd16f4-d959a00e.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/c0fd16f4-d959a00e.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\c0fd16f4-d959a00e.patch.sql");
    }
}
