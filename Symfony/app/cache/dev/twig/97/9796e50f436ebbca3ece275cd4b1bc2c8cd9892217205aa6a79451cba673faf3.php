<?php

/* support/include/upgrader/streams/core/15af7cd3-98ae1ed2.patch.sql */
class __TwigTemplate_c56a1c4c97c5241aa2dcfd4bd97d60b85ef8986d86b19c928c768d43bd70f260 extends Twig_Template
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
        $__internal_67fa2b2754ba18d05034cb6a3ad448169b0cd99f1e37e7cb6a3c71c68bbfdabd = $this->env->getExtension("native_profiler");
        $__internal_67fa2b2754ba18d05034cb6a3ad448169b0cd99f1e37e7cb6a3c71c68bbfdabd->enter($__internal_67fa2b2754ba18d05034cb6a3ad448169b0cd99f1e37e7cb6a3c71c68bbfdabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/15af7cd3-98ae1ed2.patch.sql"));

        // line 1
        echo "/*
 * @version=1.6RC1-4
 * 
 * Stage RC2 for 1.6RC5 upgrade
 */

UPDATE `%TABLE_PREFIX%config`
    SET `ostversion`='1.6 RC1-4';
";
        
        $__internal_67fa2b2754ba18d05034cb6a3ad448169b0cd99f1e37e7cb6a3c71c68bbfdabd->leave($__internal_67fa2b2754ba18d05034cb6a3ad448169b0cd99f1e37e7cb6a3c71c68bbfdabd_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/15af7cd3-98ae1ed2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /**/
/*  * @version=1.6RC1-4*/
/*  * */
/*  * Stage RC2 for 1.6RC5 upgrade*/
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `ostversion`='1.6 RC1-4';*/
/* */
