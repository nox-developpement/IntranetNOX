<?php

/* support/include/upgrader/streams/core/03ff59bf-b26f29a6.cleanup.sql */
class __TwigTemplate_a5e036d7e29094b55272ebd84e42366e7cecc9a5b3d250d277c58cd7c5b1673c extends Twig_Template
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
}
/* DELETE FROM  `%TABLE_PREFIX%config`*/
/*     WHERE  `key` = 'properties' AND  `namespace` LIKE  'TS.%';*/
/* */
/* DELETE FROM `%TABLE_PREFIX%ticket_status`*/
/*     WHERE `state` = 'resolved';*/
/* */
/* ALTER TABLE  `%TABLE_PREFIX%ticket_status`*/
/*     DROP  `notes`;*/
/* */
/* OPTIMIZE TABLE `%TABLE_PREFIX%ticket_status`;*/
/* */
