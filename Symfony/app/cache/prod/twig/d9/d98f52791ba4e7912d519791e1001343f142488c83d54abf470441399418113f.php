<?php

/* support/include/staff/index.php */
class __TwigTemplate_83fc67936e11beb23b8dc5275479328c34db84e748ad8fda9507aad489d8bc94 extends Twig_Template
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
        echo "<?php
header('Location: ../');
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/index.php";
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
        return new Twig_Source("", "support/include/staff/index.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\index.php");
    }
}
