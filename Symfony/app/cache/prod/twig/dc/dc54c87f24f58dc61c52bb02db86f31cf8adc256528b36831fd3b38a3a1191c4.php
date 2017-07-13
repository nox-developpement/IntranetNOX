<?php

/* support/include/upgrader/streams/core/02decaa2-60fcbee1.patch.sql */
class __TwigTemplate_0365b5611a937877e5e4b6a8256e0e204c96c2f1afbffddc7439aebb09849c6a extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/upgrader/streams/core/02decaa2-60fcbee1.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\02decaa2-60fcbee1.patch.sql");
    }
}
