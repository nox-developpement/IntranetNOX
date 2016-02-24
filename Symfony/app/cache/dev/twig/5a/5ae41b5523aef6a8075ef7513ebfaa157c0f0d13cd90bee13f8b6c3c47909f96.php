<?php

/* support/include/upgrader/streams/core/7be60a84-522e5b78.patch.sql */
class __TwigTemplate_1d1b5f8499d7c041859e7ecb71641d6691e06930a6bf4baad7d73d1ce2b7cfd2 extends Twig_Template
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
        $__internal_f168cc757f0f7398fc170fd209934dcf2e02a9bc87c2c1921a6eeea8e5e2211f = $this->env->getExtension("native_profiler");
        $__internal_f168cc757f0f7398fc170fd209934dcf2e02a9bc87c2c1921a6eeea8e5e2211f->enter($__internal_f168cc757f0f7398fc170fd209934dcf2e02a9bc87c2c1921a6eeea8e5e2211f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/7be60a84-522e5b78.patch.sql"));

        // line 1
        echo "/**
 * No longer necessary -- don't clobber email templates for previous
 * osTicket administrators
 *
 * @version v1.7-DPR1 (P1)
 */

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='522e5b783c2824c67222260ee22baa93';
";
        
        $__internal_f168cc757f0f7398fc170fd209934dcf2e02a9bc87c2c1921a6eeea8e5e2211f->leave($__internal_f168cc757f0f7398fc170fd209934dcf2e02a9bc87c2c1921a6eeea8e5e2211f_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/7be60a84-522e5b78.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * No longer necessary -- don't clobber email templates for previous*/
/*  * osTicket administrators*/
/*  **/
/*  * @version v1.7-DPR1 (P1)*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='522e5b783c2824c67222260ee22baa93';*/
/* */
