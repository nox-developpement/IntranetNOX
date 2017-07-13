<?php

/* support/include/staff/login.header.php */
class __TwigTemplate_e62e84c2f643a949eed05abe09c56feb8436e77d2897637d4a84e35a0a86c655 extends Twig_Template
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
defined('OSTSCPINC') or die('Invalid path');
?>
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"refresh\" content=\"7200\" />
    <title>osTicket :: <?php echo __('Agent Login'); ?></title>
    <link rel=\"stylesheet\" href=\"css/login.css\" type=\"text/css\" />
    <link type=\"text/css\" rel=\"stylesheet\" href=\"<?php echo ROOT_PATH; ?>css/font-awesome.min.css?19292ad\"/>
    <meta name=\"robots\" content=\"noindex\" />
    <meta http-equiv=\"cache-control\" content=\"no-cache\" />
    <meta http-equiv=\"pragma\" content=\"no-cache\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <script type=\"text/javascript\" src=\"<?php echo ROOT_PATH; ?>js/jquery-1.8.3.min.js?19292ad\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function() {
            \$(\"input:not(.dp):visible:enabled:first\").focus();
         });
    </script>
</head>
<body id=\"loginBody\">

";
    }

    public function getTemplateName()
    {
        return "support/include/staff/login.header.php";
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
        return new Twig_Source("", "support/include/staff/login.header.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\login.header.php");
    }
}
