<?php

/* support/include/upgrader/streams/core/522e5b78-02decaa2.patch.sql */
class __TwigTemplate_12a1479eb03e831d8a809ce7ed03acc5368f0e0eb3a2d41b94653c8f820d71b9 extends Twig_Template
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
        $__internal_41228485e2d5e65c9fb23ae76034d4ac1635d874b43e2cc54e35a974985a34ff = $this->env->getExtension("native_profiler");
        $__internal_41228485e2d5e65c9fb23ae76034d4ac1635d874b43e2cc54e35a974985a34ff->enter($__internal_41228485e2d5e65c9fb23ae76034d4ac1635d874b43e2cc54e35a974985a34ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/522e5b78-02decaa2.patch.sql"));

        // line 1
        echo "/**
 * @version v1.7-DPR2-P2 
 */
UPDATE `%TABLE_PREFIX%sla`
    SET `created` = NOW(),
        `updated` = NOW()
    WHERE `created` IS NULL;

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='02decaa20c10c9615558762018e25507';
";
        
        $__internal_41228485e2d5e65c9fb23ae76034d4ac1635d874b43e2cc54e35a974985a34ff->leave($__internal_41228485e2d5e65c9fb23ae76034d4ac1635d874b43e2cc54e35a974985a34ff_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/522e5b78-02decaa2.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /***/
/*  * @version v1.7-DPR2-P2 */
/*  *//* */
/* UPDATE `%TABLE_PREFIX%sla`*/
/*     SET `created` = NOW(),*/
/*         `updated` = NOW()*/
/*     WHERE `created` IS NULL;*/
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='02decaa20c10c9615558762018e25507';*/
/* */
