<?php

/* support/include/upgrader/streams/core/1da1bcba-15b30765.patch.sql */
class __TwigTemplate_a3843810613d92bc6851fe98d5152cd4ebe557b0026504066b3e7e1869cc7760 extends Twig_Template
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
        $__internal_9c9917c74afb3bc3c0e6efacc8dbf0bf1c41abd26fdae0f261033d2daea1209d = $this->env->getExtension("native_profiler");
        $__internal_9c9917c74afb3bc3c0e6efacc8dbf0bf1c41abd26fdae0f261033d2daea1209d->enter($__internal_9c9917c74afb3bc3c0e6efacc8dbf0bf1c41abd26fdae0f261033d2daea1209d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/1da1bcba-15b30765.patch.sql"));

        // line 1
        echo "/**
 * @version v1.7 RC2+
 * @signature 15b3076533123ff617801d89861136c8
 *
 * Transitional patch.
 *  
 */

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='15b3076533123ff617801d89861136c8';
";
        
        $__internal_9c9917c74afb3bc3c0e6efacc8dbf0bf1c41abd26fdae0f261033d2daea1209d->leave($__internal_9c9917c74afb3bc3c0e6efacc8dbf0bf1c41abd26fdae0f261033d2daea1209d_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/1da1bcba-15b30765.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.7 RC2+*/
/*  * @signature 15b3076533123ff617801d89861136c8*/
/*  **/
/*  * Transitional patch.*/
/*  *  */
/*  *//* */
/* */
/* -- Finished with patch*/
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='15b3076533123ff617801d89861136c8';*/
/* */
