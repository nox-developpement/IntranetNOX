<?php

/* support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql */
class __TwigTemplate_934bdfa7f40ece4f9ad8a1c6379df4a95072fd19212784bf23f23ffe99ac5fc3 extends Twig_Template
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
        $__internal_399d5d0822891c57f763755034f52aa831a09a7220ec597aa1b2772d34293d28 = $this->env->getExtension("native_profiler");
        $__internal_399d5d0822891c57f763755034f52aa831a09a7220ec597aa1b2772d34293d28->enter($__internal_399d5d0822891c57f763755034f52aa831a09a7220ec597aa1b2772d34293d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql"));

        // line 1
        echo "/*
 * @version=1.6RC1-4
 * 
 * Stage RC3 for 1.6RC5 upgrade
 */

UPDATE `%TABLE_PREFIX%config`
    SET `ostversion`='1.6 RC1-4';
";
        
        $__internal_399d5d0822891c57f763755034f52aa831a09a7220ec597aa1b2772d34293d28->leave($__internal_399d5d0822891c57f763755034f52aa831a09a7220ec597aa1b2772d34293d28_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/a67ba35e-98ae1ed2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /**/
/*  * @version=1.6RC1-4*/
/*  * */
/*  * Stage RC3 for 1.6RC5 upgrade*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `ostversion`='1.6 RC1-4';*/
/* */
