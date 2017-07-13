<?php

/* support/include/upgrader/streams/core/740428f9-8aeda901.patch.sql */
class __TwigTemplate_89dfb6c31c50cff691159f90805f6373b068d18095b5b10898aa98ef22173f44 extends Twig_Template
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
 * @version v1.7.1
 * @signature 8aeda901a16e08c3229f1ac6da568e02
 *
 *  - Transitional patch to fix DB ENGINE
 *
 *
 *
 */

UPDATE `%TABLE_PREFIX%config`
    SET `value` = '8aeda901a16e08c3229f1ac6da568e02'
\tWHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/740428f9-8aeda901.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/740428f9-8aeda901.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\740428f9-8aeda901.patch.sql");
    }
}
