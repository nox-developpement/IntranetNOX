<?php

/* support/include/pear/PEAR/FixPHP5PEARWarnings.php */
class __TwigTemplate_c4a9c07221c317ce6690f5bb89858bd7cac55cfe9834a0f75bf6bf31511d24fc extends Twig_Template
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
if (\$skipmsg) {
    \$a = &new \$ec(\$code, \$mode, \$options, \$userinfo);
} else {
    \$a = &new \$ec(\$message, \$code, \$mode, \$options, \$userinfo);
}
?>";
    }

    public function getTemplateName()
    {
        return "support/include/pear/PEAR/FixPHP5PEARWarnings.php";
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
        return new Twig_Source("", "support/include/pear/PEAR/FixPHP5PEARWarnings.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\pear\\PEAR\\FixPHP5PEARWarnings.php");
    }
}
