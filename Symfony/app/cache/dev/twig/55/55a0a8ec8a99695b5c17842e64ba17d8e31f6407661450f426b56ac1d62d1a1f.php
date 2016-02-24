<?php

/* support/include/upgrader/streams/core/bbb021fb-49478749.patch.sql */
class __TwigTemplate_473dfde46df94544d01142f04706e42f86e39c3bc35a5a88ca1cf86cf3f27a77 extends Twig_Template
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
        $__internal_25d10eddf0088c28792d87e5dd6e8c64b7ba0df374e948173fed459c27c5f620 = $this->env->getExtension("native_profiler");
        $__internal_25d10eddf0088c28792d87e5dd6e8c64b7ba0df374e948173fed459c27c5f620->enter($__internal_25d10eddf0088c28792d87e5dd6e8c64b7ba0df374e948173fed459c27c5f620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/bbb021fb-49478749.patch.sql"));

        // line 1
        echo "/**
 * Transitional patch - FIX on the INSTALLER schema
 * 
 * @version 1.7-dpr3 installerfix
 */

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='49478749dc680eef08b7954bd568cfd1';
";
        
        $__internal_25d10eddf0088c28792d87e5dd6e8c64b7ba0df374e948173fed459c27c5f620->leave($__internal_25d10eddf0088c28792d87e5dd6e8c64b7ba0df374e948173fed459c27c5f620_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/bbb021fb-49478749.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * Transitional patch - FIX on the INSTALLER schema*/
/*  * */
/*  * @version 1.7-dpr3 installerfix*/
/*  *//* */
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='49478749dc680eef08b7954bd568cfd1';*/
/* */
