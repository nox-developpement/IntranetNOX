<?php

/* FMElfinderBundle:Form:elfinder_widget.html.twig */
class __TwigTemplate_f21fc781ca11fd807a29d434f76dd9314f2bc21c662c6999a43ef9eb8d788b6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'elfinder_widget' => array($this, 'block_elfinder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_466183a99f17770fa99224f7ad73c7665e0886459adc237d5340a7cdac10e178 = $this->env->getExtension("native_profiler");
        $__internal_466183a99f17770fa99224f7ad73c7665e0886459adc237d5340a7cdac10e178->enter($__internal_466183a99f17770fa99224f7ad73c7665e0886459adc237d5340a7cdac10e178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FMElfinderBundle:Form:elfinder_widget.html.twig"));

        // line 1
        $this->displayBlock('elfinder_widget', $context, $blocks);
        
        $__internal_466183a99f17770fa99224f7ad73c7665e0886459adc237d5340a7cdac10e178->leave($__internal_466183a99f17770fa99224f7ad73c7665e0886459adc237d5340a7cdac10e178_prof);

    }

    public function block_elfinder_widget($context, array $blocks = array())
    {
        $__internal_e5e5d51ef9330250a1ca73ebd4f7abb5f65a464cd48b4c511b885e0bef378b01 = $this->env->getExtension("native_profiler");
        $__internal_e5e5d51ef9330250a1ca73ebd4f7abb5f65a464cd48b4c511b885e0bef378b01->enter($__internal_e5e5d51ef9330250a1ca73ebd4f7abb5f65a464cd48b4c511b885e0bef378b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "elfinder_widget"));

        // line 2
        echo "    <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo " data-type=\"elfinder-input-field\" />
    ";
        // line 3
        if (((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable")) && array_key_exists("instance", $context))) {
            // line 4
            echo "        <script type=\"text/javascript\" charset=\"utf-8\">
            \$('[data-type=\"elfinder-input-field\"][id=\"";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"]').on(\"click\",function() {
                var childWin = window.open(\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("elfinder", array("instance" => (isset($context["instance"]) ? $context["instance"] : $this->getContext($context, "instance")), "homeFolder" => (isset($context["homeFolder"]) ? $context["homeFolder"] : $this->getContext($context, "homeFolder")))), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\", \"popupWindow\", \"height=450, width=900\");
            });
            function setValue(value, element_id) {
                \$('[data-type=\"elfinder-input-field\"]' + (element_id ? '[id=\"'+ element_id +'\"]': '')).val(value).change();
            }
        </script>
    ";
        }
        
        $__internal_e5e5d51ef9330250a1ca73ebd4f7abb5f65a464cd48b4c511b885e0bef378b01->leave($__internal_e5e5d51ef9330250a1ca73ebd4f7abb5f65a464cd48b4c511b885e0bef378b01_prof);

    }

    public function getTemplateName()
    {
        return "FMElfinderBundle:Form:elfinder_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 6,  51 => 5,  48 => 4,  46 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block elfinder_widget %}*/
/*     <input type="text" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %} data-type="elfinder-input-field" />*/
/*     {% if enable and instance is defined %}*/
/*         <script type="text/javascript" charset="utf-8">*/
/*             $('[data-type="elfinder-input-field"][id="{{ id }}"]').on("click",function() {*/
/*                 var childWin = window.open("{{path('elfinder', {'instance': instance, 'homeFolder': homeFolder })}}?id={{ id }}", "popupWindow", "height=450, width=900");*/
/*             });*/
/*             function setValue(value, element_id) {*/
/*                 $('[data-type="elfinder-input-field"]' + (element_id ? '[id="'+ element_id +'"]': '')).val(value).change();*/
/*             }*/
/*         </script>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
