<?php

/* support/include/staff/templates/sub-navigation.tmpl.php */
class __TwigTemplate_ccc595a6e3a673ca51c2bbfcbff5c718c8dd5060feafbfcaec501b8c73b45bcf extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/sub-navigation.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
