<?php

/* @FMElfinder/Elfinder/simple.html.twig */
class __TwigTemplate_b6ae3d82edd37977c3c2d5e5d63911b3128bda52059d4baf8193cc867981222f extends Twig_Template
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
        $__internal_b5d3ebdbd44a21eefc0c561e8117e21bf47e8815ceb8cf06ac0a760d7ce0cfbb = $this->env->getExtension("native_profiler");
        $__internal_b5d3ebdbd44a21eefc0c561e8117e21bf47e8815ceb8cf06ac0a760d7ce0cfbb->enter($__internal_b5d3ebdbd44a21eefc0c561e8117e21bf47e8815ceb8cf06ac0a760d7ce0cfbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/simple.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 5
            echo "        ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "@FMElfinder/Elfinder/simple.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 10
            echo "    ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "@FMElfinder/Elfinder/simple.html.twig", 10)->display($context);
        }
        // line 12
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    \$().ready(function() {
        var \$f = \$('.elfinder').elfinder({
            url : '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ef_connect", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : $this->getContext($context, "homeFolder")))), "html", null, true);
        echo "',
            lang : '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "'
        });

        ";
        // line 19
        if ((isset($context["fullscreen"]) ? $context["fullscreen"] : $this->getContext($context, "fullscreen"))) {
            // line 20
            echo "        var \$window = \$(window);
        \$window.resize(function(){
            var \$win_height = \$window.height();
            if( \$f.height() != \$win_height ){
                \$f.height(\$win_height).resize();
            }
        });
        ";
        }
        // line 28
        echo "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_b5d3ebdbd44a21eefc0c561e8117e21bf47e8815ceb8cf06ac0a760d7ce0cfbb->leave($__internal_b5d3ebdbd44a21eefc0c561e8117e21bf47e8815ceb8cf06ac0a760d7ce0cfbb_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/simple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 28,  62 => 20,  60 => 19,  54 => 16,  50 => 15,  45 => 12,  41 => 10,  39 => 9,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     {% if includeAssets %}*/
/*         {% include "FMElfinderBundle:Elfinder:helper/assets_css.html.twig" %}*/
/*     {% endif %}*/
/* </head>*/
/* <body>*/
/* {% if includeAssets %}*/
/*     {% include "FMElfinderBundle:Elfinder:helper/assets_js.html.twig" %}*/
/* {% endif %}*/
/* <script type="text/javascript" charset="utf-8">*/
/*     $().ready(function() {*/
/*         var $f = $('.elfinder').elfinder({*/
/*             url : '{{path('ef_connect', { 'instance': instance, 'homeFolder': homeFolder } )}}',*/
/*             lang : '{{locale}}'*/
/*         });*/
/* */
/*         {% if fullscreen %}*/
/*         var $window = $(window);*/
/*         $window.resize(function(){*/
/*             var $win_height = $window.height();*/
/*             if( $f.height() != $win_height ){*/
/*                 $f.height($win_height).resize();*/
/*             }*/
/*         });*/
/*         {% endif %}*/
/*     });*/
/* </script>*/
/* <div class="elfinder"></div>*/
/* </body>*/
/* </html>*/
/* */
