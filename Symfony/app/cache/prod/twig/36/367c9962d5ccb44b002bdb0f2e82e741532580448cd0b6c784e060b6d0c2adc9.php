<?php

/* @NoxIntranetSupportSI/Support/ticketing.html.php */
class __TwigTemplate_e5dfadf22f65f6e653a6dd51bf587fc2dd3a7716b84db9b8c62e539b676ef497 extends Twig_Template
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
<?php 
\$view->extend('::layout.html.twig') ;

    include('/support/index.php');

?>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupportSI/Support/ticketing.html.php";
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
        return new Twig_Source("", "@NoxIntranetSupportSI/Support/ticketing.html.php", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\SupportSIBundle\\Resources\\views\\Support\\ticketing.html.php");
    }
}
