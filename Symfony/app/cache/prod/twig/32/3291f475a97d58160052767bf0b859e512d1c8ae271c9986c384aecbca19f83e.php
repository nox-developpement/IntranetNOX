<?php

/* support/include/staff/templates/navigation.tmpl.php */
class __TwigTemplate_6f58861bffa8d5c53e72396c56ecbadd86f339e816cef74aa80609055e8d6d1c extends Twig_Template
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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/staff/templates/navigation.tmpl.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\staff\\templates\\navigation.tmpl.php");
    }
}
