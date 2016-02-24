<?php

/* @NoxIntranetSupportSI/Support/avancementProjet.html.twig */
class __TwigTemplate_342d46a3568ebc018213b976b6bf80b12cf3b2699187fe7e9cd7fbffb5ed3736 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupportSI/Support/avancementProjet.html.twig", 1);
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
        $__internal_4af46be9ea72070901850aff45c87657bc5fa1d8a811e0515b7d76a969b130eb = $this->env->getExtension("native_profiler");
        $__internal_4af46be9ea72070901850aff45c87657bc5fa1d8a811e0515b7d76a969b130eb->enter($__internal_4af46be9ea72070901850aff45c87657bc5fa1d8a811e0515b7d76a969b130eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetSupportSI/Support/avancementProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4af46be9ea72070901850aff45c87657bc5fa1d8a811e0515b7d76a969b130eb->leave($__internal_4af46be9ea72070901850aff45c87657bc5fa1d8a811e0515b7d76a969b130eb_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ab833fbb7568abb86960f98598f4e010c79dee3a46fe06add9d42d75c4d4960e = $this->env->getExtension("native_profiler");
        $__internal_ab833fbb7568abb86960f98598f4e010c79dee3a46fe06add9d42d75c4d4960e->enter($__internal_ab833fbb7568abb86960f98598f4e010c79dee3a46fe06add9d42d75c4d4960e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Avancement projet
";
        
        $__internal_ab833fbb7568abb86960f98598f4e010c79dee3a46fe06add9d42d75c4d4960e->leave($__internal_ab833fbb7568abb86960f98598f4e010c79dee3a46fe06add9d42d75c4d4960e_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_7dcc2ec283b7760744ae63a225cb918af984f6bed185e68beb4b0adafdb9a79a = $this->env->getExtension("native_profiler");
        $__internal_7dcc2ec283b7760744ae63a225cb918af984f6bed185e68beb4b0adafdb9a79a->enter($__internal_7dcc2ec283b7760744ae63a225cb918af984f6bed185e68beb4b0adafdb9a79a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Avancement projet";
        
        $__internal_7dcc2ec283b7760744ae63a225cb918af984f6bed185e68beb4b0adafdb9a79a->leave($__internal_7dcc2ec283b7760744ae63a225cb918af984f6bed185e68beb4b0adafdb9a79a_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8206d1a353f2e62a62b6c9a3b7e767a819342f904db429485dee1a5ccaa288d5 = $this->env->getExtension("native_profiler");
        $__internal_8206d1a353f2e62a62b6c9a3b7e767a819342f904db429485dee1a5ccaa288d5->enter($__internal_8206d1a353f2e62a62b6c9a3b7e767a819342f904db429485dee1a5ccaa288d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "
        <div class='zoneEdition'> 

            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>

            ";
            // line 17
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
            echo "

            ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
            echo "

            ";
            // line 22
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
            echo "

            ";
            // line 25
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
            echo "

            ";
            // line 27
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
            echo "

        </div>

    ";
        }
        // line 32
        echo "
    <div class='zoneTexte'>
        ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_8206d1a353f2e62a62b6c9a3b7e767a819342f904db429485dee1a5ccaa288d5->leave($__internal_8206d1a353f2e62a62b6c9a3b7e767a819342f904db429485dee1a5ccaa288d5_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupportSI/Support/avancementProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 32,  102 => 27,  96 => 25,  90 => 22,  85 => 19,  80 => 17,  73 => 12,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Avancement projet*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Avancement projet{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*         <div class='zoneEdition'> */
/* */
/*             <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/* */
/*             {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}*/
/* */
/*             {{ form_errors(formulaire) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(formulaire.text) }}*/
/* */
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}*/
/* */
/*             {{ form_end(formulaire) }}*/
/* */
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div class='zoneTexte'>*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* */
