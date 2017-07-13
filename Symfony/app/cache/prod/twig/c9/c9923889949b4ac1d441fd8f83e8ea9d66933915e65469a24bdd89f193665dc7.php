<?php

/* support/include/upgrader/streams/core/bbb021fb-49478749.patch.sql */
class __TwigTemplate_3a053665d19a27502f2105aec938a6e5bc6c8650617a267023814061d1fcdb56 extends Twig_Template
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
 * Transitional patch - FIX on the INSTALLER schema
 * 
 * @version 1.7-dpr3 installerfix
 */

-- Finished with patch
UPDATE `%TABLE_PREFIX%config`
    SET `schema_signature`='49478749dc680eef08b7954bd568cfd1';
";
    }

    public function getTemplateName()
    {
        return "support/include/upgrader/streams/core/bbb021fb-49478749.patch.sql";
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
        return new Twig_Source("", "support/include/upgrader/streams/core/bbb021fb-49478749.patch.sql", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\upgrader\\streams\\core\\bbb021fb-49478749.patch.sql");
    }
}
