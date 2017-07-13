<?php

/* support/include/upgrader/streams/core/15b30765-dd0022fb.cleanup.sql */
class __TwigTemplate_c33ee7e193c5cacf0b88b4ffff4e6af460553681907b7a381069cec3fa8a2939 extends Twig_Template
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
        echo "
-- Drop fields we no longer need in the reference table.
-- NOTE: This was moved from the 1.6* major upgrade script because the
--       handling of attachments changed with dd0022fb
ALTER TABLE `%TABLE_PREFIX%ticket_attachment`
    DROP `file_size`,
    DROP `file_name`,
    DROP `file_key`,
    DROP `updated`,
    DROP `deleted`;
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/15b30765-dd0022fb.cleanup.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/15b30765-dd0022fb.cleanup.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\15b30765-dd0022fb.cleanup.sql");
    }
}
