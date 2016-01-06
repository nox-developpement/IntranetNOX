<?php

/* FMElfinderBundle:Elfinder:ckeditor.html.twig */
class __TwigTemplate_d9a7cf809273fbd2e709916d443bbac9694309a4974737e5bf670772b195c8b6 extends Twig_Template
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
        $__internal_7e3010ab529e7899f972c7893e3d04b72b779834e7d4d18e7a0b1be690cfd0d1 = $this->env->getExtension("native_profiler");
        $__internal_7e3010ab529e7899f972c7893e3d04b72b779834e7d4d18e7a0b1be690cfd0d1->enter($__internal_7e3010ab529e7899f972c7893e3d04b72b779834e7d4d18e7a0b1be690cfd0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder:ckeditor.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    ";
        // line 5
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 6
            echo "        ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "FMElfinderBundle:Elfinder:ckeditor.html.twig", 6)->display($context);
            // line 7
            echo "    ";
        }
        // line 8
        echo "</head>
<body>
";
        // line 10
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 11
            echo "    ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "FMElfinderBundle:Elfinder:ckeditor.html.twig", 11)->display($context);
        }
        // line 13
        echo "<script type=\"text/javascript\" charset=\"utf-8\">
    function getUrlParam(paramName) {
        var reParam = new RegExp('(?:[\\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;
        var match = window.location.search.match(reParam) ;

        return (match && match.length > 1) ? match[1] : '' ;
    }
    \$().ready(function() {
        var funcNum = getUrlParam('CKEditorFuncNum');
        var mode = getUrlParam('mode');

        var f = \$('.elfinder').elfinder({
            url : '";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ef_connect", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : $this->getContext($context, "homeFolder")))), "html", null, true);
        echo "'+'?mode='+mode,
            lang : '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "',
            getFileCallback : function(file) {
                if (funcNum) {
                    ";
        // line 29
        if ((isset($context["relative_path"]) ? $context["relative_path"] : $this->getContext($context, "relative_path"))) {
            // line 30
            echo "                        window.opener.CKEDITOR.tools.callFunction(funcNum, '";
            echo twig_escape_filter($this->env, (isset($context["pathPrefix"]) ? $context["pathPrefix"] : $this->getContext($context, "pathPrefix")), "html", null, true);
            echo "'+file.url.replace(\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
            echo "/\", \"\"));
                    ";
        } else {
            // line 32
            echo "                        window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);
                    ";
        }
        // line 34
        echo "                    window.close();
                }
            }
        });

        ";
        // line 39
        if ((isset($context["fullscreen"]) ? $context["fullscreen"] : $this->getContext($context, "fullscreen"))) {
            // line 40
            echo "        \$(window).resize(function(){
            var h = \$(window).height();
            var \$ef = \$('.elfinder');
            if(\$ef.height() != h - 20){
                \$ef.height(h -20).resize();
            }
        });
        ";
        }
        // line 48
        echo "    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_7e3010ab529e7899f972c7893e3d04b72b779834e7d4d18e7a0b1be690cfd0d1->leave($__internal_7e3010ab529e7899f972c7893e3d04b72b779834e7d4d18e7a0b1be690cfd0d1_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder:ckeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 48,  93 => 40,  91 => 39,  84 => 34,  80 => 32,  72 => 30,  70 => 29,  64 => 26,  60 => 25,  46 => 13,  42 => 11,  40 => 10,  36 => 8,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     {% if includeAssets %}*/
/*         {% include "FMElfinderBundle:Elfinder:helper/assets_css.html.twig" %}*/
/*     {% endif %}*/
/* </head>*/
/* <body>*/
/* {% if includeAssets %}*/
/*     {% include "FMElfinderBundle:Elfinder:helper/assets_js.html.twig" %}*/
/* {% endif %}*/
/* <script type="text/javascript" charset="utf-8">*/
/*     function getUrlParam(paramName) {*/
/*         var reParam = new RegExp('(?:[\?&]|&amp;)' + paramName + '=([^&]+)', 'i') ;*/
/*         var match = window.location.search.match(reParam) ;*/
/* */
/*         return (match && match.length > 1) ? match[1] : '' ;*/
/*     }*/
/*     $().ready(function() {*/
/*         var funcNum = getUrlParam('CKEditorFuncNum');*/
/*         var mode = getUrlParam('mode');*/
/* */
/*         var f = $('.elfinder').elfinder({*/
/*             url : '{{path('ef_connect', {'instance': instance, 'homeFolder': homeFolder })}}'+'?mode='+mode,*/
/*             lang : '{{locale}}',*/
/*             getFileCallback : function(file) {*/
/*                 if (funcNum) {*/
/*                     {% if relative_path %}*/
/*                         window.opener.CKEDITOR.tools.callFunction(funcNum, '{{ pathPrefix }}'+file.url.replace("{{ app.request.schemeAndHttpHost }}/", ""));*/
/*                     {% else %}*/
/*                         window.opener.CKEDITOR.tools.callFunction(funcNum, file.url);*/
/*                     {% endif %}*/
/*                     window.close();*/
/*                 }*/
/*             }*/
/*         });*/
/* */
/*         {% if fullscreen %}*/
/*         $(window).resize(function(){*/
/*             var h = $(window).height();*/
/*             var $ef = $('.elfinder');*/
/*             if($ef.height() != h - 20){*/
/*                 $ef.height(h -20).resize();*/
/*             }*/
/*         });*/
/*         {% endif %}*/
/*     });*/
/* </script>*/
/* <div class="elfinder"></div>*/
/* </body>*/
/* </html>*/
/* */
