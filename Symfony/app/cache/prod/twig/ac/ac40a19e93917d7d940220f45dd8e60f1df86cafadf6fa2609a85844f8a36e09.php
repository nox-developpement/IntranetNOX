<?php

/* support/include/upgrader/streams/core/61c9d5d7-6de40a4d.patch.sql */
class __TwigTemplate_71b66d14f9fa782bc5946693d6a818bfc16b3ded54b0257e347ade67611554a7 extends Twig_Template
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
 * @version 1.8-stable
 * @signature 6de40a4d5bad7a2923e769a4db1ff3b9
 *
 * Cleanup old and no longer used config settings
 */

DELETE FROM `%TABLE_PREFIX%config` WHERE `namespace`='core' and `key` IN (
    'upload_dir',
    'clickable_urls',
    'allow_priority_change',
    'log_ticket_activity',
    'overdue_grace_period',
    'allow_email_spoofing',
    'show_notes_inline'
);

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = '6de40a4d5bad7a2923e769a4db1ff3b9'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/61c9d5d7-6de40a4d.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/61c9d5d7-6de40a4d.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\61c9d5d7-6de40a4d.patch.sql");
    }
}
