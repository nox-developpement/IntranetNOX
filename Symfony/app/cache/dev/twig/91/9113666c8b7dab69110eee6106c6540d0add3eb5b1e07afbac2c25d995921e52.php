<?php

/* support/include/upgrader/streams/core/2e7531a2-d0e37dca.patch.sql */
class __TwigTemplate_fcacc488b544468b213b7a600ed6b528bbd38d40cb465e8f077cf95d944d3137 extends Twig_Template
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
        $__internal_2f03b99ce867328dd5f60e5b6bfd17c3103d933e69ce165c0e8bd07033cbf70f = $this->env->getExtension("native_profiler");
        $__internal_2f03b99ce867328dd5f60e5b6bfd17c3103d933e69ce165c0e8bd07033cbf70f->enter($__internal_2f03b99ce867328dd5f60e5b6bfd17c3103d933e69ce165c0e8bd07033cbf70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/2e7531a2-d0e37dca.patch.sql"));

        // line 1
        echo "/**
 *  Add help topic nesting support.
 *
 * @version 1.7-rc2 - nested help topics.
 */

-- Add help topic parent id.
ALTER TABLE  `%TABLE_PREFIX%help_topic` 
    ADD  `topic_pid` INT(10) UNSIGNED NOT NULL DEFAULT  '0' AFTER  `topic_id` ,
    ADD INDEX (  `topic_pid` );

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='d0e37dca324648f1ce2d10528a6026d4';
";
        
        $__internal_2f03b99ce867328dd5f60e5b6bfd17c3103d933e69ce165c0e8bd07033cbf70f->leave($__internal_2f03b99ce867328dd5f60e5b6bfd17c3103d933e69ce165c0e8bd07033cbf70f_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/2e7531a2-d0e37dca.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  *  Add help topic nesting support.*/
/*  **/
/*  * @version 1.7-rc2 - nested help topics.*/
/*  *//* */
/* */
/* -- Add help topic parent id.*/
/* ALTER TABLE  `%TABLE_PREFIX%help_topic` */
/*     ADD  `topic_pid` INT(10) UNSIGNED NOT NULL DEFAULT  '0' AFTER  `topic_id` ,*/
/*     ADD INDEX (  `topic_pid` );*/
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='d0e37dca324648f1ce2d10528a6026d4';*/
/* */
