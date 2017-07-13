<?php

/* support/include/upgrader/streams/core/03ff59bf-b26f29a6.cleanup.sql */
class __TwigTemplate_c065915611ef931b5648aa46885a513a86922d49c7d0ed5055673c4670201223 extends Twig_Template
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
        echo "DELETE FROM  `%TABLE_PREFIX%config`
    WHERE  `key` = 'properties' AND  `namespace` LIKE  'TS.%';

DELETE FROM `%TABLE_PREFIX%ticket_status`
    WHERE `state` = 'resolved';

ALTER TABLE  `%TABLE_PREFIX%ticket_status`
    DROP  `notes`;

OPTIMIZE TABLE `%TABLE_PREFIX%ticket_status`;
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/03ff59bf-b26f29a6.cleanup.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/03ff59bf-b26f29a6.cleanup.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\03ff59bf-b26f29a6.cleanup.sql");
    }
}
