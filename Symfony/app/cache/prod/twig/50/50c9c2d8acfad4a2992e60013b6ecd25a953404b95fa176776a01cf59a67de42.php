<?php

/* support/include/mpdf/font/ccourierbi.php */
class __TwigTemplate_a94727e0b511b0072f1c484a97a32ebec0a6e74270dedac7a079e2656e8e3316 extends Twig_Template
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
\$desc=array('Ascent'=>629,'Descent'=>-157,'CapHeight'=>562,'FontBBox'=>'[-57 -250 869 801]');
\$up=-100;
\$ut=50;


?>
";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/font/ccourierbi.php";
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
        return new Twig_Source("", "support/include/mpdf/font/ccourierbi.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\mpdf\\font\\ccourierbi.php");
    }
}
