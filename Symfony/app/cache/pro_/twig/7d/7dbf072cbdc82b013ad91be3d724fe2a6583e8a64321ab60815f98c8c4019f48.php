<?php

/* support/include/staff/templates/navigation.tmpl.php */
class __TwigTemplate_1c1797d3990ad629a2d318157b5af97f4a844ed4d389d3d7f43349e19c808036 extends Twig_Template
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
if((\$tabs=\$nav->getTabs()) && is_array(\$tabs)){
    foreach(\$tabs as \$name =>\$tab) {
        echo sprintf('<li class=\"%s %s\"><a href=\"%s\">%s</a>',
            \$tab['active'] ? 'active':'inactive',
            @\$tab['class'] ?: '',
            \$tab['href'],\$tab['desc']);
        if(!\$tab['active'] && (\$subnav=\$nav->getSubMenu(\$name))){
            echo \"<ul>\\n\";
            foreach(\$subnav as \$k => \$item) {
                if (!(\$id=\$item['id']))
                    \$id=\"nav\$k\";

                echo sprintf(
                    '<li><a class=\"%s\" href=\"%s\" title=\"%s\" id=\"%s\">%s</a></li>',
                    \$item['iconclass'],
                    \$item['href'], \$item['title'],
                    \$id, \$item['desc']);
            }
            echo \"\\n</ul>\\n\";
        }
        echo \"\\n</li>\\n\";
    }
} ?>
";
    }

    public function getTemplateName()
    {
        return "support/include/staff/templates/navigation.tmpl.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* if(($tabs=$nav->getTabs()) && is_array($tabs)){*/
/*     foreach($tabs as $name =>$tab) {*/
/*         echo sprintf('<li class="%s %s"><a href="%s">%s</a>',*/
/*             $tab['active'] ? 'active':'inactive',*/
/*             @$tab['class'] ?: '',*/
/*             $tab['href'],$tab['desc']);*/
/*         if(!$tab['active'] && ($subnav=$nav->getSubMenu($name))){*/
/*             echo "<ul>\n";*/
/*             foreach($subnav as $k => $item) {*/
/*                 if (!($id=$item['id']))*/
/*                     $id="nav$k";*/
/* */
/*                 echo sprintf(*/
/*                     '<li><a class="%s" href="%s" title="%s" id="%s">%s</a></li>',*/
/*                     $item['iconclass'],*/
/*                     $item['href'], $item['title'],*/
/*                     $id, $item['desc']);*/
/*             }*/
/*             echo "\n</ul>\n";*/
/*         }*/
/*         echo "\n</li>\n";*/
/*     }*/
/* } ?>*/
/* */
