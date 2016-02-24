<?php

/* @FMElfinder/Elfinder/tinymce.html.twig */
class __TwigTemplate_652426695ef6051e4669ba8616f8245653e3f6f074b15b0c52c1bad80454e235 extends Twig_Template
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
        $__internal_537ce71696b5cade2eaec35e2d461c9ef6520a2ecc48e34cf9aed1934ce93510 = $this->env->getExtension("native_profiler");
        $__internal_537ce71696b5cade2eaec35e2d461c9ef6520a2ecc48e34cf9aed1934ce93510->enter($__internal_537ce71696b5cade2eaec35e2d461c9ef6520a2ecc48e34cf9aed1934ce93510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/tinymce.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    ";
        // line 4
        if ((isset($context["includeAssets"]) ? $context["includeAssets"] : $this->getContext($context, "includeAssets"))) {
            // line 5
            echo "        ";
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_css.html.twig", "@FMElfinder/Elfinder/tinymce.html.twig", 5)->display($context);
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
            $this->loadTemplate("FMElfinderBundle:Elfinder:helper/assets_js.html.twig", "@FMElfinder/Elfinder/tinymce.html.twig", 10)->display($context);
        }
        // line 12
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["tinymce_popup_path"]) ? $context["tinymce_popup_path"] : $this->getContext($context, "tinymce_popup_path")), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" charset=\"utf-8\">

    var FileBrowserDialogue = {
        init: function () {},
        mySubmit: function (URL) {

            var win = tinyMCEPopup.getWindowArg('window');

            // pass selected file path to TinyMCE
            win.document.getElementById(tinyMCEPopup.getWindowArg('input')).value = URL;

            // are we an image browser?
            if (typeof(win.ImageDialog) != 'undefined') {
                // update image dimensions
                if (win.ImageDialog.getImageData) {
                    win.ImageDialog.getImageData();
                }
                // update preview if necessary
                if (win.ImageDialog.showPreviewImage) {
                    win.ImageDialog.showPreviewImage(URL);
                }
            }

            // close popup window
            tinyMCEPopup.close();
        }
    };

    tinyMCEPopup.onInit.add(FileBrowserDialogue.init, FileBrowserDialogue);

    \$().ready(function() {

        var f = \$('.elfinder').elfinder({
            url : '";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ef_connect", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : $this->getContext($context, "homeFolder")))), "html", null, true);
        echo "',
            lang : '";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
        echo "',
            getfile : {
                onlyURL : true,
                multiple : false,
                folders : false
            },
            getFileCallback : function(url) {
                path = '/' + url.replace(\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "schemeAndHttpHost", array()), "html", null, true);
        echo "/\", \"\");
                FileBrowserDialogue.mySubmit(path);
            }
        }).elfinder('instance');
    });
</script>
<div class=\"elfinder\"></div>
</body>
</html>
";
        
        $__internal_537ce71696b5cade2eaec35e2d461c9ef6520a2ecc48e34cf9aed1934ce93510->leave($__internal_537ce71696b5cade2eaec35e2d461c9ef6520a2ecc48e34cf9aed1934ce93510_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/tinymce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 54,  87 => 47,  83 => 46,  45 => 12,  41 => 10,  39 => 9,  35 => 7,  32 => 6,  29 => 5,  27 => 4,  22 => 1,);
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
/* <script type="text/javascript" src="{{ tinymce_popup_path }}"></script>*/
/* <script type="text/javascript" charset="utf-8">*/
/* */
/*     var FileBrowserDialogue = {*/
/*         init: function () {},*/
/*         mySubmit: function (URL) {*/
/* */
/*             var win = tinyMCEPopup.getWindowArg('window');*/
/* */
/*             // pass selected file path to TinyMCE*/
/*             win.document.getElementById(tinyMCEPopup.getWindowArg('input')).value = URL;*/
/* */
/*             // are we an image browser?*/
/*             if (typeof(win.ImageDialog) != 'undefined') {*/
/*                 // update image dimensions*/
/*                 if (win.ImageDialog.getImageData) {*/
/*                     win.ImageDialog.getImageData();*/
/*                 }*/
/*                 // update preview if necessary*/
/*                 if (win.ImageDialog.showPreviewImage) {*/
/*                     win.ImageDialog.showPreviewImage(URL);*/
/*                 }*/
/*             }*/
/* */
/*             // close popup window*/
/*             tinyMCEPopup.close();*/
/*         }*/
/*     };*/
/* */
/*     tinyMCEPopup.onInit.add(FileBrowserDialogue.init, FileBrowserDialogue);*/
/* */
/*     $().ready(function() {*/
/* */
/*         var f = $('.elfinder').elfinder({*/
/*             url : '{{ path('ef_connect', {'instance': instance, 'homeFolder': homeFolder }) }}',*/
/*             lang : '{{ locale }}',*/
/*             getfile : {*/
/*                 onlyURL : true,*/
/*                 multiple : false,*/
/*                 folders : false*/
/*             },*/
/*             getFileCallback : function(url) {*/
/*                 path = '/' + url.replace("{{ app.request.schemeAndHttpHost }}/", "");*/
/*                 FileBrowserDialogue.mySubmit(path);*/
/*             }*/
/*         }).elfinder('instance');*/
/*     });*/
/* </script>*/
/* <div class="elfinder"></div>*/
/* </body>*/
/* </html>*/
/* */
