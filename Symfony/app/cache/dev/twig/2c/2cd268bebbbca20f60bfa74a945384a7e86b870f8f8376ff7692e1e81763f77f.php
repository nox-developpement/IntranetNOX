<?php

/* @NoxIntranetRessources/Procedures/procedures.html.twig */
class __TwigTemplate_2cbde1bf19bc599b6ee94ca7dafe82bb392a51668ddae68879e0c3b871b7d77e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/Procedures/procedures.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7215e8dd7503cc58ecc1188ac7d5ef971b4508aeca6a93b8eef7351e0f1091f4 = $this->env->getExtension("native_profiler");
        $__internal_7215e8dd7503cc58ecc1188ac7d5ef971b4508aeca6a93b8eef7351e0f1091f4->enter($__internal_7215e8dd7503cc58ecc1188ac7d5ef971b4508aeca6a93b8eef7351e0f1091f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/Procedures/procedures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7215e8dd7503cc58ecc1188ac7d5ef971b4508aeca6a93b8eef7351e0f1091f4->leave($__internal_7215e8dd7503cc58ecc1188ac7d5ef971b4508aeca6a93b8eef7351e0f1091f4_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_45e1aeef913d4919baa9d71ade83799c42862b71c08d46df21dfcb20ba1cb384 = $this->env->getExtension("native_profiler");
        $__internal_45e1aeef913d4919baa9d71ade83799c42862b71c08d46df21dfcb20ba1cb384->enter($__internal_45e1aeef913d4919baa9d71ade83799c42862b71c08d46df21dfcb20ba1cb384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Procédures
";
        
        $__internal_45e1aeef913d4919baa9d71ade83799c42862b71c08d46df21dfcb20ba1cb384->leave($__internal_45e1aeef913d4919baa9d71ade83799c42862b71c08d46df21dfcb20ba1cb384_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_8a0fc2af6809068f1ddb67d511e75449073adb179253786707df3f4099df30ca = $this->env->getExtension("native_profiler");
        $__internal_8a0fc2af6809068f1ddb67d511e75449073adb179253786707df3f4099df30ca->enter($__internal_8a0fc2af6809068f1ddb67d511e75449073adb179253786707df3f4099df30ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Procédures";
        
        $__internal_8a0fc2af6809068f1ddb67d511e75449073adb179253786707df3f4099df30ca->leave($__internal_8a0fc2af6809068f1ddb67d511e75449073adb179253786707df3f4099df30ca_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_36a42bbef46698876e48347e324d5f2cfad6c5d18cc287332024a5cd7525550f = $this->env->getExtension("native_profiler");
        $__internal_36a42bbef46698876e48347e324d5f2cfad6c5d18cc287332024a5cd7525550f->enter($__internal_36a42bbef46698876e48347e324d5f2cfad6c5d18cc287332024a5cd7525550f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    

";
        
        $__internal_36a42bbef46698876e48347e324d5f2cfad6c5d18cc287332024a5cd7525550f->leave($__internal_36a42bbef46698876e48347e324d5f2cfad6c5d18cc287332024a5cd7525550f_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/Procedures/procedures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Procédures*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Procédures{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     */
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
/* */
