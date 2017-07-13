<?php

/* support/include/mpdf/font/ccourieri.php */
class __TwigTemplate_e9d14ea403976e3ce0f5034d750736015967b6df278d478c106763088c6018f7 extends Twig_Template
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
for(\$i=0;\$i<=255;\$i++)
\t\$cw[chr(\$i)]=600;
\$desc=array('Ascent'=>629,'Descent'=>-157,'CapHeight'=>562,'FontBBox'=>'[-27 -250 849 805]');
\$up=-100;
\$ut=50;


?>
";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/font/ccourieri.php";
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
        return new Twig_Source("", "support/include/mpdf/font/ccourieri.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\mpdf\\font\\ccourieri.php");
    }
}
