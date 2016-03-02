<?php

/* support/include/upgrader/streams/core/8f99b8bf-03ff59bf.cleanup.sql */
class __TwigTemplate_d6e27a0ad170d74e699488e53de04379f9697494470ff3ebec5e7d44ec376209 extends Twig_Template
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
}
/* DELETE FROM `%TABLE_PREFIX%config`*/
/*     WHERE `namespace`='core' AND `key` = 'random_ticket_ids';*/
/* */
/* ALTER TABLE `%TABLE_PREFIX%ticket`*/
/*     DROP COLUMN `status`;*/
/* */
/* -- Regenerate the CDATA table with the new format for 1.9.4*/
/* DROP TABLE `%TABLE_PREFIX%ticket__cdata`;*/
/* */
/* OPTIMIZE TABLE `%TABLE_PREFIX%ticket`;*/
/* */
