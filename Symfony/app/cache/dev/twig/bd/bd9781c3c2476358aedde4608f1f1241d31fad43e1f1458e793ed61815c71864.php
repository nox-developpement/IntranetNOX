<?php

/* support/include/staff/templates/sub-navigation.tmpl.php */
class __TwigTemplate_2d186876e55f1082513029e8c48aa38d79d8353ac41dc6a82a11abc2d943a9d9 extends Twig_Template
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
        $__internal_6a293279225581941ed4c0f0ebde0f492859e7709c5468b207d18256d0d6db69 = $this->env->getExtension("native_profiler");
        $__internal_6a293279225581941ed4c0f0ebde0f492859e7709c5468b207d18256d0d6db69->enter($__internal_6a293279225581941ed4c0f0ebde0f492859e7709c5468b207d18256d0d6db69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/staff/templates/sub-navigation.tmpl.php"));

        // line 1
        echo "<?php
if((\$subnav=\$nav->getSubMenu()) && is_array(\$subnav)){
    \$activeMenu=\$nav->getActiveMenu();
    if(\$activeMenu>0 && !isset(\$subnav[\$activeMenu-1]))
        \$activeMenu=0;
    foreach(\$subnav as \$k=> \$item) {
        if(\$item['droponly']) continue;
        \$class=\$item['iconclass'];
        if (\$activeMenu && \$k+1==\$activeMenu
                or (!\$activeMenu
                    && (strpos(strtoupper(\$item['href']),strtoupper(basename(\$_SERVER['SCRIPT_NAME']))) !== false
                        or (\$item['urls']
                            && in_array(basename(\$_SERVER['SCRIPT_NAME']),\$item['urls'])
                            )
                        )))
            \$class=\"\$class active\";
        if (!(\$id=\$item['id']))
            \$id=\"subnav\$k\";

        echo sprintf('<li><a class=\"%s\" href=\"%s\" title=\"%s\" id=\"%s\">%s</a></li>',
                \$class, \$item['href'], \$item['title'], \$id, \$item['desc']);
    }
}
";
        
        $__internal_6a293279225581941ed4c0f0ebde0f492859e7709c5468b207d18256d0d6db69->leave($__internal_6a293279225581941ed4c0f0ebde0f492859e7709c5468b207d18256d0d6db69_prof);

    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/sub-navigation.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* if(($subnav=$nav->getSubMenu()) && is_array($subnav)){*/
/*     $activeMenu=$nav->getActiveMenu();*/
/*     if($activeMenu>0 && !isset($subnav[$activeMenu-1]))*/
/*         $activeMenu=0;*/
/*     foreach($subnav as $k=> $item) {*/
/*         if($item['droponly']) continue;*/
/*         $class=$item['iconclass'];*/
/*         if ($activeMenu && $k+1==$activeMenu*/
/*                 or (!$activeMenu*/
/*                     && (strpos(strtoupper($item['href']),strtoupper(basename($_SERVER['SCRIPT_NAME']))) !== false*/
/*                         or ($item['urls']*/
/*                             && in_array(basename($_SERVER['SCRIPT_NAME']),$item['urls'])*/
/*                             )*/
/*                         )))*/
/*             $class="$class active";*/
/*         if (!($id=$item['id']))*/
/*             $id="subnav$k";*/
/* */
/*         echo sprintf('<li><a class="%s" href="%s" title="%s" id="%s">%s</a></li>',*/
/*                 $class, $item['href'], $item['title'], $id, $item['desc']);*/
/*     }*/
/* }*/
/* */
