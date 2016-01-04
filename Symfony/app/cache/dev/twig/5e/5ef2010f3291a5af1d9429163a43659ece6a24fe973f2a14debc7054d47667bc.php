<?php

/* FMElfinderBundle:Elfinder/helper:_tinymce.html.twig */
class __TwigTemplate_4b702648ad2385bb77fc890d5c4a1b8a05fbf0db09abe21784c6161cad3c3b89 extends Twig_Template
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
        $__internal_c3bcacea763d56dab8eb95074b370947c8f36b790580ba94aafda287b423dac2 = $this->env->getExtension("native_profiler");
        $__internal_c3bcacea763d56dab8eb95074b370947c8f36b790580ba94aafda287b423dac2->enter($__internal_c3bcacea763d56dab8eb95074b370947c8f36b790580ba94aafda287b423dac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Elfinder/helper:_tinymce.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    //<![CDATA[
    function elFinderBrowser (field_name, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: \"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("elfinder", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")))), "html", null, true);
        echo "\",
            title: \"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\",
            width: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo ",
            height: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo ",
            resizable: 'yes',
            inline: 'yes',    // This parameter only has an effect if you use the inlinepopups plugin!
            popup_css: false, // Disable TinyMCE's default popup CSS
            close_previous: 'no'
        }, {
            window: win,
            input: field_name
        });
        return false;
    }
    //]]>
</script>
";
        
        $__internal_c3bcacea763d56dab8eb95074b370947c8f36b790580ba94aafda287b423dac2->leave($__internal_c3bcacea763d56dab8eb95074b370947c8f36b790580ba94aafda287b423dac2_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Elfinder/helper:_tinymce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  36 => 7,  32 => 6,  28 => 5,  22 => 1,);
    }
}
/* <script type="text/javascript">*/
/*     //<![CDATA[*/
/*     function elFinderBrowser (field_name, url, type, win) {*/
/*         tinyMCE.activeEditor.windowManager.open({*/
/*             file: "{{ url('elfinder', {'instance': instance}) }}",*/
/*             title: "{{ title }}",*/
/*             width: {{ width }},*/
/*             height: {{ height }},*/
/*             resizable: 'yes',*/
/*             inline: 'yes',    // This parameter only has an effect if you use the inlinepopups plugin!*/
/*             popup_css: false, // Disable TinyMCE's default popup CSS*/
/*             close_previous: 'no'*/
/*         }, {*/
/*             window: win,*/
/*             input: field_name*/
/*         });*/
/*         return false;*/
/*     }*/
/*     //]]>*/
/* </script>*/
/* */
