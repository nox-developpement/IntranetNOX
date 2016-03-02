<?php

/* support/include/upgrader/streams/core/49478749-c2d2fabf.patch.sql */
class __TwigTemplate_b04f1e9ab10bbe69749ec8bd7fad3bf2f01e647abb15a37442c4f1628c3a0f6d extends Twig_Template
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
        echo "ALTER TABLE  `%TABLE_PREFIX%config` CHANGE  `show_answered_tickets`  `show_answered_tickets` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0';
ALTER TABLE  `%TABLE_PREFIX%config` ADD  `show_notes_inline` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `show_answered_tickets`;
-- update patch signature
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='c2d2fabfdf15e1632f00850ffb361558';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/49478749-c2d2fabf.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* ALTER TABLE  `%TABLE_PREFIX%config` CHANGE  `show_answered_tickets`  `show_answered_tickets` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0';*/
/* ALTER TABLE  `%TABLE_PREFIX%config` ADD  `show_notes_inline` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `show_answered_tickets`;*/
/* -- update patch signature*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='c2d2fabfdf15e1632f00850ffb361558';*/
/* */
