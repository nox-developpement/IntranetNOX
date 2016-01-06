<?php

/* NoxIntranetSupportSIBundle:Support:information.html.twig */
class __TwigTemplate_645f8754bbe03b72f28d31d05fada3d314ef29426feb50d37f1142bc0f02e29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:information.html.twig", 1);
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
        $__internal_f989e4fde0fd176c34440464ba2985d1ea5d7e5c511fc644ff22d5cdbaec43f1 = $this->env->getExtension("native_profiler");
        $__internal_f989e4fde0fd176c34440464ba2985d1ea5d7e5c511fc644ff22d5cdbaec43f1->enter($__internal_f989e4fde0fd176c34440464ba2985d1ea5d7e5c511fc644ff22d5cdbaec43f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f989e4fde0fd176c34440464ba2985d1ea5d7e5c511fc644ff22d5cdbaec43f1->leave($__internal_f989e4fde0fd176c34440464ba2985d1ea5d7e5c511fc644ff22d5cdbaec43f1_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9bd3691091371f01ae4040a6f2e6743015fad7d9284315006de1a07b98349af7 = $this->env->getExtension("native_profiler");
        $__internal_9bd3691091371f01ae4040a6f2e6743015fad7d9284315006de1a07b98349af7->enter($__internal_9bd3691091371f01ae4040a6f2e6743015fad7d9284315006de1a07b98349af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Information
";
        
        $__internal_9bd3691091371f01ae4040a6f2e6743015fad7d9284315006de1a07b98349af7->leave($__internal_9bd3691091371f01ae4040a6f2e6743015fad7d9284315006de1a07b98349af7_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_6e3a4478cde3008b1850ba4d9430ac60e4744f66b9f477a8cfcf8d5bd93858d3 = $this->env->getExtension("native_profiler");
        $__internal_6e3a4478cde3008b1850ba4d9430ac60e4744f66b9f477a8cfcf8d5bd93858d3->enter($__internal_6e3a4478cde3008b1850ba4d9430ac60e4744f66b9f477a8cfcf8d5bd93858d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Information";
        
        $__internal_6e3a4478cde3008b1850ba4d9430ac60e4744f66b9f477a8cfcf8d5bd93858d3->leave($__internal_6e3a4478cde3008b1850ba4d9430ac60e4744f66b9f477a8cfcf8d5bd93858d3_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b9d10435863de3e765c46b0e2a843d0a069fa254c3c2ba7c25457a499df8af58 = $this->env->getExtension("native_profiler");
        $__internal_b9d10435863de3e765c46b0e2a843d0a069fa254c3c2ba7c25457a499df8af58->enter($__internal_b9d10435863de3e765c46b0e2a843d0a069fa254c3c2ba7c25457a499df8af58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class='zoneEdition'>
        
        <button id='texteEditButton' class='boutonFormulaire'>Editer</button>
        
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "

        ";
        // line 20
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
        echo "

        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

    </div>

    <div class='zoneTexte'>
        ";
        // line 30
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_b9d10435863de3e765c46b0e2a843d0a069fa254c3c2ba7c25457a499df8af58->leave($__internal_b9d10435863de3e765c46b0e2a843d0a069fa254c3c2ba7c25457a499df8af58_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  97 => 25,  91 => 23,  85 => 20,  80 => 17,  75 => 15,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Information*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Information{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class='zoneEdition'>*/
/*         */
/*         <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/*         */
/*         {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}*/
/* */
/*         {{ form_errors(formulaire) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.text) }}*/
/* */
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}*/
/* */
/*         {{ form_end(formulaire) }}*/
/* */
/*     </div>*/
/* */
/*     <div class='zoneTexte'>*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
