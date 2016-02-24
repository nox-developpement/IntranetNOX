<?php

/* support/include/upgrader/streams/core/02decaa2-60fcbee1.patch.sql */
class __TwigTemplate_c921b1629b9ee01f921e66121a779423c35c4144e722dc1a9a1075857e75b63a extends Twig_Template
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
        $__internal_6d49a66e392c7c3285e926e8cccb9916f70358a9a12b18bbe6ed73c3942d51db = $this->env->getExtension("native_profiler");
        $__internal_6d49a66e392c7c3285e926e8cccb9916f70358a9a12b18bbe6ed73c3942d51db->enter($__internal_6d49a66e392c7c3285e926e8cccb9916f70358a9a12b18bbe6ed73c3942d51db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/upgrader/streams/core/02decaa2-60fcbee1.patch.sql"));

        // line 1
        echo "-- Update all temlates with the new wording.
UPDATE `%TABLE_PREFIX%email_template`
    SET `ticket_overlimit_body` = '%name\\r\\n\\r\\nYou have reached the maximum number of open tickets allowed.\\r\\n\\r\\nTo be able to open another ticket, one of your pending tickets must be closed. To update or add comments to an open ticket simply login using the link below.\\r\\n\\r\\n%url/view.php?e=%email\\r\\n\\r\\nThank you.\\r\\n\\r\\nSupport Ticket System';

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='60fcbee1da3180d1b690187aa5006c88';
";
        
        $__internal_6d49a66e392c7c3285e926e8cccb9916f70358a9a12b18bbe6ed73c3942d51db->leave($__internal_6d49a66e392c7c3285e926e8cccb9916f70358a9a12b18bbe6ed73c3942d51db_prof);

    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/02decaa2-60fcbee1.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* -- Update all temlates with the new wording.*/
/* UPDATE `%TABLE_PREFIX%email_template`*/
/*     SET `ticket_overlimit_body` = '%name\r\n\r\nYou have reached the maximum number of open tickets allowed.\r\n\r\nTo be able to open another ticket, one of your pending tickets must be closed. To update or add comments to an open ticket simply login using the link below.\r\n\r\n%url/view.php?e=%email\r\n\r\nThank you.\r\n\r\nSupport Ticket System';*/
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='60fcbee1da3180d1b690187aa5006c88';*/
/* */
