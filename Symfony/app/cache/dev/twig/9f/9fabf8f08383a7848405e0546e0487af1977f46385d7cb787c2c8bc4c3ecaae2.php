<?php

/* support/include/upgrader/streams/core/c2d2fabf-aa4664af.patch.sql */
class __TwigTemplate_05e4136609e3148d1ba1873141a45c0fb0999cfab816105990b875609a1a2b2f extends Twig_Template
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
        $__internal_3a5be5191d78822a2eb5458476a417e7e405339113fb514d66691bf1d45375a2 = $this->env->getExtension("native_profiler");
        $__internal_3a5be5191d78822a2eb5458476a417e7e405339113fb514d66691bf1d45375a2->enter($__internal_3a5be5191d78822a2eb5458476a417e7e405339113fb514d66691bf1d45375a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/c2d2fabf-aa4664af.patch.sql"));

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
        
        $__internal_3a5be5191d78822a2eb5458476a417e7e405339113fb514d66691bf1d45375a2->leave($__internal_3a5be5191d78822a2eb5458476a417e7e405339113fb514d66691bf1d45375a2_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/c2d2fabf-aa4664af.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
