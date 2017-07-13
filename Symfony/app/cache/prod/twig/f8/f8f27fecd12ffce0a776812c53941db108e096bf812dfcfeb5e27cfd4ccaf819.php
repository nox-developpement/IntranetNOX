<?php

/* support/include/upgrader/streams/core/1da1bcba-15b30765.patch.sql */
class __TwigTemplate_7389f6744cb90ad56e8cc99ce11947e1e3ea6f7e4b3add3a9867127f932dda6a extends Twig_Template
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
 * @version v1.7 RC2+
 * @signature 15b3076533123ff617801d89861136c8
 *
 * Transitional patch.
 *  
 */

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='15b3076533123ff617801d89861136c8';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/1da1bcba-15b30765.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/1da1bcba-15b30765.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\1da1bcba-15b30765.patch.sql");
    }
}
