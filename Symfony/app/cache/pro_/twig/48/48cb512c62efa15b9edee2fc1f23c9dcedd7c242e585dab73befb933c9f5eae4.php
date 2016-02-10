<?php

/* support/include/upgrader/streams/core/02decaa2-60fcbee1.patch.sql */
class __TwigTemplate_d3e29b134af247371c1fd8c7535c47087ec59316b75a7bbb61d2c40bd2e78cb7 extends Twig_Template
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
        // line 1
        echo "-- Update all temlates with the new wording.
UPDATE `%TABLE_PREFIX%email_template`
    SET `ticket_overlimit_body` = '%name\\r\\n\\r\\nYou have reached the maximum number of open tickets allowed.\\r\\n\\r\\nTo be able to open another ticket, one of your pending tickets must be closed. To update or add comments to an open ticket simply login using the link below.\\r\\n\\r\\n%url/view.php?e=%email\\r\\n\\r\\nThank you.\\r\\n\\r\\nSupport Ticket System';

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='60fcbee1da3180d1b690187aa5006c88';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/02decaa2-60fcbee1.patch.sql";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* -- Update all temlates with the new wording.*/
/* UPDATE `%TABLE_PREFIX%email_template`*/
/*     SET `ticket_overlimit_body` = '%name\r\n\r\nYou have reached the maximum number of open tickets allowed.\r\n\r\nTo be able to open another ticket, one of your pending tickets must be closed. To update or add comments to an open ticket simply login using the link below.\r\n\r\n%url/view.php?e=%email\r\n\r\nThank you.\r\n\r\nSupport Ticket System';*/
/* */
/* UPDATE `%TABLE_PREFIX%config`*/
/*     SET `schema_signature`='60fcbee1da3180d1b690187aa5006c88';*/
/* */
