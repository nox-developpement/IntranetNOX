<?php

/* support/include/upgrader/streams/core/d959a00e-32de1766.patch.sql */
class __TwigTemplate_e8d86356d3cc86bf2310a68407fed081a62fb1e78e0497205ab877bc4d7c84df extends Twig_Template
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
        echo "/**
 * The database install script changed to support installation on cluster
 * servers. No significant changes need to be rolled for continuous updaters
 *
 * @version v1.7.1
 * @signature 32de1766d56e43215041fa982dcb465e
 */

ALTER TABLE `%TABLE_PREFIX%session`
   CHANGE `session_id` `session_id` VARCHAR(255) collate ascii_general_ci,
   CHANGE `session_data` `session_data` BLOB;

-- update schema signature
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='32de1766d56e43215041fa982dcb465e';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/d959a00e-32de1766.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/d959a00e-32de1766.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\d959a00e-32de1766.patch.sql");
    }
}
