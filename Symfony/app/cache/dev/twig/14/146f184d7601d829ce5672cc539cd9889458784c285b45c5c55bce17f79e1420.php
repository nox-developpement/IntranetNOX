<?php

/* @NoxIntranetRessources/AQ/citations.html.twig */
class __TwigTemplate_e7363c198cf14b83cbc6aaba0293407d40f2254f222b5ba84f0b5b21e283ca1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/AQ/citations.html.twig", 1);
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
        $__internal_55e3621def361b46b5ba766dbdbf6393515833da5e6e7833b1241a683abf8ff9 = $this->env->getExtension("native_profiler");
        $__internal_55e3621def361b46b5ba766dbdbf6393515833da5e6e7833b1241a683abf8ff9->enter($__internal_55e3621def361b46b5ba766dbdbf6393515833da5e6e7833b1241a683abf8ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/AQ/citations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55e3621def361b46b5ba766dbdbf6393515833da5e6e7833b1241a683abf8ff9->leave($__internal_55e3621def361b46b5ba766dbdbf6393515833da5e6e7833b1241a683abf8ff9_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7ad48a67120fbcad4a760c44ca90e0aaa088af87ed0d1d60b4c6cc0e7959c1c2 = $this->env->getExtension("native_profiler");
        $__internal_7ad48a67120fbcad4a760c44ca90e0aaa088af87ed0d1d60b4c6cc0e7959c1c2->enter($__internal_7ad48a67120fbcad4a760c44ca90e0aaa088af87ed0d1d60b4c6cc0e7959c1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Citations
";
        
        $__internal_7ad48a67120fbcad4a760c44ca90e0aaa088af87ed0d1d60b4c6cc0e7959c1c2->leave($__internal_7ad48a67120fbcad4a760c44ca90e0aaa088af87ed0d1d60b4c6cc0e7959c1c2_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c912db40cb03c21cb11957ac700d78905ec922e38d65f36bbddbcefab4e4daad = $this->env->getExtension("native_profiler");
        $__internal_c912db40cb03c21cb11957ac700d78905ec922e38d65f36bbddbcefab4e4daad->enter($__internal_c912db40cb03c21cb11957ac700d78905ec922e38d65f36bbddbcefab4e4daad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Citations";
        
        $__internal_c912db40cb03c21cb11957ac700d78905ec922e38d65f36bbddbcefab4e4daad->leave($__internal_c912db40cb03c21cb11957ac700d78905ec922e38d65f36bbddbcefab4e4daad_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b7ad6137d0542a92f7fb5f947e27de5ed996ea6e3cb5cbcabb530369a4aff47e = $this->env->getExtension("native_profiler");
        $__internal_b7ad6137d0542a92f7fb5f947e27de5ed996ea6e3cb5cbcabb530369a4aff47e->enter($__internal_b7ad6137d0542a92f7fb5f947e27de5ed996ea6e3cb5cbcabb530369a4aff47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_QUALITE")) {
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
        
        $__internal_b7ad6137d0542a92f7fb5f947e27de5ed996ea6e3cb5cbcabb530369a4aff47e->leave($__internal_b7ad6137d0542a92f7fb5f947e27de5ed996ea6e3cb5cbcabb530369a4aff47e_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/AQ/citations.html.twig";
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
/*     Citations*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Citations{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_QUALITE') %}*/
/* */
/*         <div class='zoneEdition'>*/
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
/* {# empty Twig template #}*/
/* */
/* */
