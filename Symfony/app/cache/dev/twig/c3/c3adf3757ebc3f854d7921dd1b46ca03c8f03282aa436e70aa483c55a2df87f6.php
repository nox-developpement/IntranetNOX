<?php

/* @FMElfinder/Elfinder/helper/_tinymce.html.twig */
class __TwigTemplate_0baa433df2b31c107581d8cdc7a8e67da1c5413ee0713cf9eefe91898b092088 extends Twig_Template
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
        $__internal_feab8c640881c324b6e751765ab236f63727b893f35f2f456ca67cbb0359aab7 = $this->env->getExtension("native_profiler");
        $__internal_feab8c640881c324b6e751765ab236f63727b893f35f2f456ca67cbb0359aab7->enter($__internal_feab8c640881c324b6e751765ab236f63727b893f35f2f456ca67cbb0359aab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FMElfinder/Elfinder/helper/_tinymce.html.twig"));

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
        
        $__internal_feab8c640881c324b6e751765ab236f63727b893f35f2f456ca67cbb0359aab7->leave($__internal_feab8c640881c324b6e751765ab236f63727b893f35f2f456ca67cbb0359aab7_prof);

    }

    public function getTemplateName()
    {
        return "@FMElfinder/Elfinder/helper/_tinymce.html.twig";
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
