<?php

/* support/include/upgrader/streams/core/522e5b78-02decaa2.patch.sql */
class __TwigTemplate_d81a73fadab67841559a076aab0119a56d7843daeb5865cbcab0175f98a41c6d extends Twig_Template
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
 * @version v1.7-DPR2-P2 
 */
UPDATE `%TABLE_PREFIX%sla`
    SET `created` = NOW(),
        `updated` = NOW()
    WHERE `created` IS NULL;

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='02decaa20c10c9615558762018e25507';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/522e5b78-02decaa2.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/522e5b78-02decaa2.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\522e5b78-02decaa2.patch.sql");
    }
}
