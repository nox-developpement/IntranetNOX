<?php

/* support/include/upgrader/streams/core/98ae1ed2-e342f869.cleanup.sql */
class __TwigTemplate_5a99aea6ba8cad2fa9438373d3e30749e1828f0e824f8f06cd30db6eba9ad301 extends Twig_Template
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
        echo "ALTER TABLE `%TABLE_PREFIX%department` DROP `noreply_autoresp`;

ALTER TABLE `%TABLE_PREFIX%config`
    DROP `noreply_email`,
    DROP `alert_email`,
    DROP `api_whitelist`;

-- %email_pop3 migrated to %email table
TRUNCATE TABLE `%TABLE_PREFIX%email_pop3`;
DROP TABLE `%TABLE_PREFIX%email_pop3`;
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/98ae1ed2-e342f869.cleanup.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/98ae1ed2-e342f869.cleanup.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\98ae1ed2-e342f869.cleanup.sql");
    }
}
