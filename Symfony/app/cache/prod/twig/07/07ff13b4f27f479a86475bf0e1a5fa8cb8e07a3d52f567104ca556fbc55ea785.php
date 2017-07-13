<?php

/* support/api/index.php */
class __TwigTemplate_851d7d1ec8b0997ba36ffb1a426c0d65eae2d2d1b8cca3a1de21d9afb3a3f165 extends Twig_Template
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
        return "support/api/index.php";
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
        return new Twig_Source("", "support/api/index.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\api\\index.php");
    }
}
