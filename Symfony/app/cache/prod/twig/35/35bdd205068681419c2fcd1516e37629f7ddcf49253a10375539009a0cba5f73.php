<?php

/* support/include/upgrader/streams/core/2e7531a2-d0e37dca.patch.sql */
class __TwigTemplate_12b9ecff99fbd22a99ad8ca62b80cc8d5e61f2340b663447f17ad5e7c1bee9ca extends Twig_Template
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
 *  Add help topic nesting support.
 *
 * @version 1.7-rc2 - nested help topics.
 */

-- Add help topic parent id.
ALTER TABLE  `%TABLE_PREFIX%help_topic` 
    ADD  `topic_pid` INT(10) UNSIGNED NOT NULL DEFAULT  '0' AFTER  `topic_id` ,
    ADD INDEX (  `topic_pid` );

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='d0e37dca324648f1ce2d10528a6026d4';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/2e7531a2-d0e37dca.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/2e7531a2-d0e37dca.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\2e7531a2-d0e37dca.patch.sql");
    }
}
