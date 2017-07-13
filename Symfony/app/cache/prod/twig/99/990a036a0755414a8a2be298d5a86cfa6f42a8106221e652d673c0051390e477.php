<?php

/* support/include/upgrader/streams/core/8aeda901-16fcef4a.patch.sql */
class __TwigTemplate_3cadcdb4fc595c0ec9a9c617796ef661cd7a5877b6172c276e3f9a5f28e1ca14 extends Twig_Template
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
        echo "

/**
 * @version v1.7.1
 * @signature 16fcef4a13d6475a5f8bfef462b548e2
 *
 *  Change email password field to varchar 255  ASCII
 *
 *
 */

ALTER TABLE  `%TABLE_PREFIX%email`
    CHANGE  `userpass`  `userpass` VARCHAR( 255 ) CHARACTER SET ASCII COLLATE ascii_general_ci NOT NULL;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `value` = '16fcef4a13d6475a5f8bfef462b548e2'
    WHERE `key` = 'schema_signature' AND `namespace` = 'core';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/8aeda901-16fcef4a.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/8aeda901-16fcef4a.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\8aeda901-16fcef4a.patch.sql");
    }
}
