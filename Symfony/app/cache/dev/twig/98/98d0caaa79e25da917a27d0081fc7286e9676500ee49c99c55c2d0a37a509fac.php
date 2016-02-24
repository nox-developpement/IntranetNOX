<?php

/* @NoxIntranetRessources/Liens/liens.html.twig */
class __TwigTemplate_8c853a02aef5a18e25325b2f458cb6e39d9faa080d9277705ce44bb6be9b38e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/Liens/liens.html.twig", 1);
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
        $__internal_715688fd4a58aab9ffd08b56234d6e784d3c2a51d519dd52c24a7002e349dd13 = $this->env->getExtension("native_profiler");
        $__internal_715688fd4a58aab9ffd08b56234d6e784d3c2a51d519dd52c24a7002e349dd13->enter($__internal_715688fd4a58aab9ffd08b56234d6e784d3c2a51d519dd52c24a7002e349dd13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/Liens/liens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715688fd4a58aab9ffd08b56234d6e784d3c2a51d519dd52c24a7002e349dd13->leave($__internal_715688fd4a58aab9ffd08b56234d6e784d3c2a51d519dd52c24a7002e349dd13_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ed91b1c5a15508b111f7bb5ae231fafb92c6f605141cd4fba41c9792e103e92b = $this->env->getExtension("native_profiler");
        $__internal_ed91b1c5a15508b111f7bb5ae231fafb92c6f605141cd4fba41c9792e103e92b->enter($__internal_ed91b1c5a15508b111f7bb5ae231fafb92c6f605141cd4fba41c9792e103e92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Liens
";
        
        $__internal_ed91b1c5a15508b111f7bb5ae231fafb92c6f605141cd4fba41c9792e103e92b->leave($__internal_ed91b1c5a15508b111f7bb5ae231fafb92c6f605141cd4fba41c9792e103e92b_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_242a91d585b4d94f99bb841dac15a37f282e2c45f416542ac48dea776e299723 = $this->env->getExtension("native_profiler");
        $__internal_242a91d585b4d94f99bb841dac15a37f282e2c45f416542ac48dea776e299723->enter($__internal_242a91d585b4d94f99bb841dac15a37f282e2c45f416542ac48dea776e299723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Liens";
        
        $__internal_242a91d585b4d94f99bb841dac15a37f282e2c45f416542ac48dea776e299723->leave($__internal_242a91d585b4d94f99bb841dac15a37f282e2c45f416542ac48dea776e299723_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_826e62d0c47b0145baea72fdf0b0c5b76f9688125c474d48fc256897d0b37e9b = $this->env->getExtension("native_profiler");
        $__internal_826e62d0c47b0145baea72fdf0b0c5b76f9688125c474d48fc256897d0b37e9b->enter($__internal_826e62d0c47b0145baea72fdf0b0c5b76f9688125c474d48fc256897d0b37e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_LIENS")) {
            echo " 

        <div class='zoneEdition' id=\"zoneEditionLiens\">

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
    <div class='zoneTexte' id=\"zoneTexteLiens\">
        ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_826e62d0c47b0145baea72fdf0b0c5b76f9688125c474d48fc256897d0b37e9b->leave($__internal_826e62d0c47b0145baea72fdf0b0c5b76f9688125c474d48fc256897d0b37e9b_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/Liens/liens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 32,  102 => 27,  96 => 25,  90 => 22,  85 => 19,  80 => 17,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Liens*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Liens{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_LIENS') %} */
/* */
/*         <div class='zoneEdition' id="zoneEditionLiens">*/
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
/*     <div class='zoneTexte' id="zoneTexteLiens">*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* */
