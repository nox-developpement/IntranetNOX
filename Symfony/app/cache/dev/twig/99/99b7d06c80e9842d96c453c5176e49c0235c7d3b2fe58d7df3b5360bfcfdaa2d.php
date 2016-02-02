<?php

/* FMElfinderBundle:Elfinder:elfinder_type.html.twig */
class __TwigTemplate_8ed98f24e2cfdad5b0d0ea587cdb210295964c3a1344976b729490bd4facb6bd extends Twig_Template
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
        $__internal_36f241b0a09b36fc1b1d92c841f73fff58aabddd1ce2a67e642c5909b8bdfbb6 = $this->env->getExtension("native_profiler");
        $__internal_36f241b0a09b36fc1b1d92c841f73fff58aabddd1ce2a67e642c5909b8bdfbb6->enter($__internal_36f241b0a09b36fc1b1d92c841f73fff58aabddd1ce2a67e642c5909b8bdfbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:elfinder_type.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 5
            echo "        ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "FMElfinderBundle:Elfinder:elfinder_type.html.twig", 5)->display($context);
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
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "FMElfinderBundle:Elfinder:elfinder_type.html.twig", 10)->display($context);
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
        echo "',
            getFileCallback: function(file) {
                ";
        // line 18
        if ((isset($context["relative_path"]) ? $context["relative_path"] : $this->getContext($context, "relative_path"))) {
            // line 19
            echo "                    window.opener.setValue('";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) ? $context["pathPrefix"] : $this->getContext($context, "pathPrefix")), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\"), \"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\");
                ";
        } else {
            // line 21
            echo "                    window.opener.setValue(file.url, \"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\");
                ";
        }
        // line 23
        echo "                window.close();
            }
        });


    ";
        // line 28
        if ((isset($context["fullscreen"]) ? $context["fullscreen"] : $this->getContext($context, "fullscreen"))) {
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
        
        $__internal_36f241b0a09b36fc1b1d92c841f73fff58aabddd1ce2a67e642c5909b8bdfbb6->leave($__internal_36f241b0a09b36fc1b1d92c841f73fff58aabddd1ce2a67e642c5909b8bdfbb6_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:elfinder_type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  86 => 29,  84 => 28,  77 => 23,  71 => 21,  61 => 19,  59 => 18,  54 => 16,  50 => 15,  45 => 12,  41 => 10,  39 => 9,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  22 => 1,);
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
