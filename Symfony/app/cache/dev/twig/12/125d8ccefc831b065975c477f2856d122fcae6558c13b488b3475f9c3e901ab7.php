<?php

/* support/include/upgrader/streams/core/49478749-c2d2fabf.patch.sql */
class __TwigTemplate_6280c6db40d4cc68571d17b7524bb26135bf10fcd526ffbfb8469ad75f7d8774 extends Twig_Template
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
        $__internal_19d0d8df5b49010b26b7aff5bf3aa782ae126c745bb82bbcbd4a1eed16ffbc78 = $this->env->getExtension("native_profiler");
        $__internal_19d0d8df5b49010b26b7aff5bf3aa782ae126c745bb82bbcbd4a1eed16ffbc78->enter($__internal_19d0d8df5b49010b26b7aff5bf3aa782ae126c745bb82bbcbd4a1eed16ffbc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/49478749-c2d2fabf.patch.sql"));

        // line 1
        echo "ALTER TABLE  `%TABLE_PREFIX%config` CHANGE  `show_answered_tickets`  `show_answered_tickets` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0';
ALTER TABLE  `%TABLE_PREFIX%config` ADD  `show_notes_inline` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `show_answered_tickets`;
-- update patch signature
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='c2d2fabfdf15e1632f00850ffb361558';
";
        
        $__internal_19d0d8df5b49010b26b7aff5bf3aa782ae126c745bb82bbcbd4a1eed16ffbc78->leave($__internal_19d0d8df5b49010b26b7aff5bf3aa782ae126c745bb82bbcbd4a1eed16ffbc78_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/49478749-c2d2fabf.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* ALTER TABLE  `%TABLE_PREFIX%config` CHANGE  `show_answered_tickets`  `show_answered_tickets` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0';*/
/* ALTER TABLE  `%TABLE_PREFIX%config` ADD  `show_notes_inline` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `show_answered_tickets`;*/
/* -- update patch signature*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='c2d2fabfdf15e1632f00850ffb361558';*/
/* */
