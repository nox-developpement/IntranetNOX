<?php

/* support/include/staff/login.header.php */
class __TwigTemplate_a4ea0f4fff1c7389c37042c9a4caa3679a40b1aeb6e3ffe13558313951d63f98 extends Twig_Template
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
}
/* <?php*/
/* defined('OSTSCPINC') or die('Invalid path');*/
/* ?>*/
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8" />*/
/*     <meta http-equiv="refresh" content="7200" />*/
/*     <title>osTicket :: <?php echo __('Agent Login'); ?></title>*/
/*     <link rel="stylesheet" href="css/login.css" type="text/css" />*/
/*     <link type="text/css" rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/font-awesome.min.css?19292ad"/>*/
/*     <meta name="robots" content="noindex" />*/
/*     <meta http-equiv="cache-control" content="no-cache" />*/
/*     <meta http-equiv="pragma" content="no-cache" />*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">*/
/*     <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/jquery-1.8.3.min.js?19292ad"></script>*/
/*     <script type="text/javascript">*/
/*         $(document).ready(function() {*/
/*             $("input:not(.dp):visible:enabled:first").focus();*/
/*          });*/
/*     </script>*/
/* </head>*/
/* <body id="loginBody">*/
/* */
/* */
