<?php

/* support/include/upgrader/streams/core/c2d2fabf-aa4664af.patch.sql */
class __TwigTemplate_1361a9eb005541e5cae40e6001eabf4745c213246aed873bcfa279b3d0fa6f73 extends Twig_Template
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
 * Add column for default paper size when printing tickets from the system
 * 
 * @version 1.7-rc1 default-paper-size
 */

ALTER TABLE %TABLE_PREFIX%staff ADD
    `default_paper_size` ENUM( 'Letter', 'Legal', 'Ledger', 'A4', 'A3' ) NOT NULL DEFAULT 'Letter'
    AFTER `default_signature_type`;

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='aa4664afc3b43d4068eb2e82684fc28e';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/c2d2fabf-aa4664af.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/c2d2fabf-aa4664af.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\c2d2fabf-aa4664af.patch.sql");
    }
}
