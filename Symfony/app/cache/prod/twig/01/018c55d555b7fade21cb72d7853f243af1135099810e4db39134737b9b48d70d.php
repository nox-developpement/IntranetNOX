<?php

/* support/include/upgrader/streams/core/7be60a84-522e5b78.patch.sql */
class __TwigTemplate_93060b0499acceaab0ec25100fe57201bb1e0225a2bc664ae0042014d9310e92 extends Twig_Template
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
 * No longer necessary -- don't clobber email templates for previous
 * osTicket administrators
 *
 * @version v1.7-DPR1 (P1)
 */

UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='522e5b783c2824c67222260ee22baa93';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/7be60a84-522e5b78.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/7be60a84-522e5b78.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\7be60a84-522e5b78.patch.sql");
    }
}
