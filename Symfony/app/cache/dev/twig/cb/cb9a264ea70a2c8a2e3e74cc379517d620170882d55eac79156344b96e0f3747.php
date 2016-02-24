<?php

/* support/include/upgrader/streams/core/15719536-dd0022fb.patch.sql */
class __TwigTemplate_c3788a0dbef9388a6602b5bf2bc5faa4d3b2bee4762e8680c5b9f7581e1f7970 extends Twig_Template
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
        $__internal_a9d7b61a3680930a6b72f77267cb708f3989508c66245005f37c0a0d316e8cd4 = $this->env->getExtension("native_profiler");
        $__internal_a9d7b61a3680930a6b72f77267cb708f3989508c66245005f37c0a0d316e8cd4->enter($__internal_a9d7b61a3680930a6b72f77267cb708f3989508c66245005f37c0a0d316e8cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/15719536-dd0022fb.patch.sql"));

        // line 1
        echo "
/**
 * @version v1.7 RC2+
 * @signature dd0022fb14892c0bb6a9700392df2de7
 *
 * Transitional patch - dev branch installations
 *  
 */

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='dd0022fb14892c0bb6a9700392df2de7';
";
        
        $__internal_a9d7b61a3680930a6b72f77267cb708f3989508c66245005f37c0a0d316e8cd4->leave($__internal_a9d7b61a3680930a6b72f77267cb708f3989508c66245005f37c0a0d316e8cd4_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/15719536-dd0022fb.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* */
/* /***/
/*  * @version v1.7 RC2+*/
/*  * @signature dd0022fb14892c0bb6a9700392df2de7*/
/*  **/
/*  * Transitional patch - dev branch installations*/
/*  *  */
/*  *//* */
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='dd0022fb14892c0bb6a9700392df2de7';*/
/* */
