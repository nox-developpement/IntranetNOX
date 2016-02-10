<?php

/* support/include/upgrader/streams/core/c2d2fabf-aa4664af.patch.sql */
class __TwigTemplate_8c71042b50615a6028cd498c637e4cf8bc15534a9e9e951154a17b9a2def224c extends Twig_Template
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
 * Add column for default paper size when printing tickets from the system
 * 
 * @version 1.7-rc1 default-paper-size
 */

ALTER TABLE %TABLE_PREFIX%staff ADD
    `default_paper_size` ENUM( 'Letter', 'Legal', 'Ledger', 'A4', 'A3' ) NOT NULL DEFAULT 'Letter'
    AFTER `default_signature_type`;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='aa4664afc3b43d4068eb2e82684fc28e';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/c2d2fabf-aa4664af.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /***/
/*  * Add column for default paper size when printing tickets from the system*/
/*  * */
/*  * @version 1.7-rc1 default-paper-size*/
/*  *//* */
/* */
/* ALTER TABLE %TABLE_PREFIX%staff ADD*/
/*     `default_paper_size` ENUM( 'Letter', 'Legal', 'Ledger', 'A4', 'A3' ) NOT NULL DEFAULT 'Letter'*/
/*     AFTER `default_signature_type`;*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='aa4664afc3b43d4068eb2e82684fc28e';*/
/* */
