<?php

/* support/include/upgrader/streams/core/49478749-c2d2fabf.patch.sql */
class __TwigTemplate_3bed87781854710b1034ea686817845e73ebaecc76d23b621da458a729704d73 extends Twig_Template
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
        echo "ALTER TABLE  `%TABLE_PREFIX%config` CHANGE  `show_answered_tickets`  `show_answered_tickets` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '0';
ALTER TABLE  `%TABLE_PREFIX%config` ADD  `show_notes_inline` TINYINT( 1 ) UNSIGNED NOT NULL DEFAULT  '1' AFTER  `show_answered_tickets`;
-- update patch signature
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='c2d2fabfdf15e1632f00850ffb361558';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/49478749-c2d2fabf.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/49478749-c2d2fabf.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\49478749-c2d2fabf.patch.sql");
    }
}
