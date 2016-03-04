<?php

/* @FMElfinder/Elfinder/elfinder_type.html.twig */
class __TwigTemplate_7f4e391edb76e21b7fc60fc2cdcd0489f138721bc1b6867d951dca315b3c9c0e extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : null)) {
            // line 5
            echo "        ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "@FMElfinder/Elfinder/elfinder_type.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        // line 7
        echo "</head>
<body>
";
        // line 9
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : null)) {
            // line 10
            echo "    ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "@FMElfinder/Elfinder/elfinder_type.html.twig", 10)->display($context);
        }
        // line 12
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    \$().ready(function() {
        var \$f = \$('.elfinder').elfinder({
            url : '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ef_connect", array("instance" => (isset($context["instance"]) ? $context["instance"] : null), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : null))), "html", null, true);
        echo "',
            lang : '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : null), "html", null, true);
        echo "',
            getFileCallback: function(file) {
                ";
        // line 18
        if ((isset($context["relative_path"]) ? $context["relative_path"] : null)) {
            // line 19
            echo "                    window.opener.setValue('";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) ? $context["pathPrefix"] : null), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\"), \"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\");
                ";
        } else {
            // line 21
            echo "                    window.opener.setValue(file.url, \"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\");
                ";
        }
        // line 23
        echo "                window.close();
            }
        });


    ";
        // line 28
        if ((isset($context["fullscreen"]) ? $context["fullscreen"] : null)) {
            // line 29
            echo "    var \$window = \$(window);
    \$window.resize(function(){
        var \$win_height = \$window.height();
        if( \$f.height() != \$win_height ){
            \$f.height(\$win_height).resize();
        }
    });
    ";
        }
        // line 37
        echo "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/elfinder_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  83 => 29,  81 => 28,  74 => 23,  68 => 21,  58 => 19,  56 => 18,  51 => 16,  47 => 15,  42 => 12,  38 => 10,  36 => 9,  32 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
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
/*             lang : '{{locale}}',*/
/*             getFileCallback: function(file) {*/
/*                 {% if relative_path %}*/
/*                     window.opener.setValue('{{ pathPrefix }}'+file.url.replace("{{ app.request.schemeAndHttpHost }}/", ""), "{{ id }}");*/
/*                 {% else %}*/
/*                     window.opener.setValue(file.url, "{{ id }}");*/
/*                 {% endif %}*/
/*                 window.close();*/
/*             }*/
/*         });*/
/* */
/* */
/*     {% if fullscreen %}*/
/*     var $window = $(window);*/
/*     $window.resize(function(){*/
/*         var $win_height = $window.height();*/
/*         if( $f.height() != $win_height ){*/
/*             $f.height($win_height).resize();*/
/*         }*/
/*     });*/
/*     {% endif %}*/
/*     });*/
/* </script>*/
/* <div class="elfinder"></div>*/
/* </body>*/
/* </html>*/
/* */
