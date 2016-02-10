<?php

/* support/scp/admin.php */
class __TwigTemplate_54958b45e381cb68fb7c4900a79df269f3d100289898d92364981a2f5309f12f extends Twig_Template
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
}
/* <?php*/
/* header('Location: settings.php');*/
/* require('./settings.php');*/
/* ?>*/
/* */
