<?php

/* support/include/pear/PEAR/FixPHP5PEARWarnings.php */
class __TwigTemplate_9cbfdbb2f2b2d62951c0813876804340ff2dfa7347ada5dff8825ef2bb542544 extends Twig_Template
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
}
/* <?php*/
/* if ($skipmsg) {*/
/*     $a = &new $ec($code, $mode, $options, $userinfo);*/
/* } else {*/
/*     $a = &new $ec($message, $code, $mode, $options, $userinfo);*/
/* }*/
/* ?>*/
