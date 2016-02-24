<?php

/* support/include/upgrader/streams/core/15b30765-dd0022fb.cleanup.sql */
class __TwigTemplate_0bba7c9323b9c9d2ff3c772c08ce12fab97dc0961769a56aa3b49f36e2930c7f extends Twig_Template
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
        $__internal_c97499771ea6dedfa3f75087900ca7b26d051bb254e3255de6409ef5cba3c2e1 = $this->env->getExtension("native_profiler");
        $__internal_c97499771ea6dedfa3f75087900ca7b26d051bb254e3255de6409ef5cba3c2e1->enter($__internal_c97499771ea6dedfa3f75087900ca7b26d051bb254e3255de6409ef5cba3c2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/15b30765-dd0022fb.cleanup.sql"));

        // line 1
        echo "
-- Drop fields we no longer need in the reference table.
-- NOTE: This was moved from the 1.6* major upgrade script because the
--       handling of attachments changed with dd0022fb
ALTER TABLE `%TABLE_PREFIX%ticket_attachment`
    DROP `file_size`,
    DROP `file_name`,
    DROP `file_key`,
    DROP `updated`,
    DROP `deleted`;
";
        
        $__internal_c97499771ea6dedfa3f75087900ca7b26d051bb254e3255de6409ef5cba3c2e1->leave($__internal_c97499771ea6dedfa3f75087900ca7b26d051bb254e3255de6409ef5cba3c2e1_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/15b30765-dd0022fb.cleanup.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* */
/* -- Drop fields we no longer need in the reference table.*/
/* -- NOTE: This was moved from the 1.6* major upgrade script because the*/
/* --       handling of attachments changed with dd0022fb*/
/* ALTER TABLE `%TABLE_PREFIX%ticket_attachment`*/
/*     DROP `file_size`,*/
/*     DROP `file_name`,*/
/*     DROP `file_key`,*/
/*     DROP `updated`,*/
/*     DROP `deleted`;*/
/* */
