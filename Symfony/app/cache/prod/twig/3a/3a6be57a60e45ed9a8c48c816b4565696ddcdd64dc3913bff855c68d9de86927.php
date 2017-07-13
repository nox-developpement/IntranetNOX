<?php

/* support/scp/admin.php */
class __TwigTemplate_8e3eade058df4221b00a9c07ba9b5690484a6b34d19744e62117ccca140a600a extends Twig_Template
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
header('Location: settings.php');
require('./settings.php');
?>
";
    }

    public function getTemplateName()
    {
        return "support/scp/admin.php";
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
        return new Twig_Source("", "support/scp/admin.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\admin.php");
    }
}
