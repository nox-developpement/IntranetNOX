<?php

/* support/include/pear/PEAR/FixPHP5PEARWarnings.php */
class __TwigTemplate_152e937d4f527a0e1013c6af6077a687ab43e0875e8b12622b2e14bd4897ce1b extends Twig_Template
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
        $__internal_3a6dda0a235f81b691a1abebf6d7385dcd9a81326dfa070658f5a99dada4628e = $this->env->getExtension("native_profiler");
        $__internal_3a6dda0a235f81b691a1abebf6d7385dcd9a81326dfa070658f5a99dada4628e->enter($__internal_3a6dda0a235f81b691a1abebf6d7385dcd9a81326dfa070658f5a99dada4628e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/pear/PEAR/FixPHP5PEARWarnings.php"));

        // line 1
        echo "<?php
if (\$skipmsg) {
    \$a = &new \$ec(\$code, \$mode, \$options, \$userinfo);
} else {
    \$a = &new \$ec(\$message, \$code, \$mode, \$options, \$userinfo);
}
?>";
        
        $__internal_3a6dda0a235f81b691a1abebf6d7385dcd9a81326dfa070658f5a99dada4628e->leave($__internal_3a6dda0a235f81b691a1abebf6d7385dcd9a81326dfa070658f5a99dada4628e_prof);

    }

    public function getTemplateName()
    {
        return "support/include/pear/PEAR/FixPHP5PEARWarnings.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if ($skipmsg) {*/
/*     $a = &new $ec($code, $mode, $options, $userinfo);*/
/* } else {*/
/*     $a = &new $ec($message, $code, $mode, $options, $userinfo);*/
/* }*/
/* ?>*/
