<?php

/* support/include/upgrader/streams/core/8f99b8bf-03ff59bf.cleanup.sql */
class __TwigTemplate_83a3cfe43b470853398af89b7e26464445929224307b862eba7e56764d1af567 extends Twig_Template
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
        echo "DELETE FROM `%TABLE_PREFIX%config`
    WHERE `namespace`='core' AND `key` = 'random_ticket_ids';

ALTER TABLE `%TABLE_PREFIX%ticket`
    DROP COLUMN `status`;

-- Regenerate the CDATA table with the new format for 1.9.4
DROP TABLE `%TABLE_PREFIX%ticket__cdata`;

OPTIMIZE TABLE `%TABLE_PREFIX%ticket`;
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/8f99b8bf-03ff59bf.cleanup.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/8f99b8bf-03ff59bf.cleanup.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\8f99b8bf-03ff59bf.cleanup.sql");
    }
}
