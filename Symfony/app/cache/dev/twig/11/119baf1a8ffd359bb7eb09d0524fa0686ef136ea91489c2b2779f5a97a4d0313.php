<?php

/* @NoxIntranetSupport/Ticket/newticket.html.twig */
class __TwigTemplate_119d1df0f0d316c05a502a533a128697e6121abf4cc476c27c330c1370d15177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupport/Ticket/newticket.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bb2149f6d873ede5b70e1949d9c61a34e79779d0197e43538e9fcb274f7b9e4 = $this->env->getExtension("native_profiler");
        $__internal_2bb2149f6d873ede5b70e1949d9c61a34e79779d0197e43538e9fcb274f7b9e4->enter($__internal_2bb2149f6d873ede5b70e1949d9c61a34e79779d0197e43538e9fcb274f7b9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetSupport/Ticket/newticket.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bb2149f6d873ede5b70e1949d9c61a34e79779d0197e43538e9fcb274f7b9e4->leave($__internal_2bb2149f6d873ede5b70e1949d9c61a34e79779d0197e43538e9fcb274f7b9e4_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_afd48a3a8fcffed3231f846ac79ff114c0f3341999c7ca760d8f4dd9f69d99a2 = $this->env->getExtension("native_profiler");
        $__internal_afd48a3a8fcffed3231f846ac79ff114c0f3341999c7ca760d8f4dd9f69d99a2->enter($__internal_afd48a3a8fcffed3231f846ac79ff114c0f3341999c7ca760d8f4dd9f69d99a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Nouveau ticket ";
        
        $__internal_afd48a3a8fcffed3231f846ac79ff114c0f3341999c7ca760d8f4dd9f69d99a2->leave($__internal_afd48a3a8fcffed3231f846ac79ff114c0f3341999c7ca760d8f4dd9f69d99a2_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_cde463ceaea8b812e630ef77c319f00d7d4a38e1b61784322ddd48691af38207 = $this->env->getExtension("native_profiler");
        $__internal_cde463ceaea8b812e630ef77c319f00d7d4a38e1b61784322ddd48691af38207->enter($__internal_cde463ceaea8b812e630ef77c319f00d7d4a38e1b61784322ddd48691af38207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "
    <div id=\"divFormulaireNews\" >

        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireNews")));
        echo "
        
        <h2> Ajouter un ticket </h2>

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "


        ";
        // line 17
        echo "        ";
        // line 18
        echo "
        <div>
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "objet", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Objet du ticket : "));
        echo "

            ";
        // line 23
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "objet", array()), 'errors');
        echo "

            ";
        // line 26
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "objet", array()), 'widget', array("attr" => array("class" => "text")));
        echo "

        </div>

        <div>

            ";
        // line 33
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "contenu", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Contenu du ticket : "));
        echo "

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "contenu", array()), 'widget', array("attr" => array("class" => "textArea")));
        echo "

            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "contenu", array()), 'errors');
        echo "

        </div>

        <p id=\"submitFormulaireNews\">

            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "

            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

        </p>

    </div>

";
        
        $__internal_cde463ceaea8b812e630ef77c319f00d7d4a38e1b61784322ddd48691af38207->leave($__internal_cde463ceaea8b812e630ef77c319f00d7d4a38e1b61784322ddd48691af38207_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupport/Ticket/newticket.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 45,  118 => 43,  109 => 37,  104 => 35,  98 => 33,  88 => 26,  82 => 23,  77 => 20,  73 => 18,  71 => 17,  65 => 13,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Nouveau ticket {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divFormulaireNews" >*/
/* */
/*         {{ form_start(formulaire, {'attr': {'id': 'formulaireNews'}}) }}*/
/*         */
/*         <h2> Ajouter un ticket </h2>*/
/* */
/*         {{ form_errors(formulaire) }}*/
/* */
/* */
/*         {# Label et champ titre. #}*/
/*         {# Génération du label. #}*/
/* */
/*         <div>*/
/*             {{ form_label(formulaire.objet, "Objet du ticket : ", {'label_attr': {'class': 'label'}}) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(formulaire.objet) }}*/
/* */
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.objet, {'attr': {'class': 'text'}}) }}*/
/* */
/*         </div>*/
/* */
/*         <div>*/
/* */
/*             {# Label et champ contenu. #}*/
/*             {{ form_label(formulaire.contenu, "Contenu du ticket : ", {'label_attr': {'class': 'label'}}) }}*/
/* */
/*             {{ form_widget(formulaire.contenu, {'attr': {'class': 'textArea'}}) }}*/
/* */
/*             {{ form_errors(formulaire.contenu) }}*/
/* */
/*         </div>*/
/* */
/*         <p id="submitFormulaireNews">*/
/* */
/*             {{ form_widget(formulaire.valider, {'attr': {'class': 'boutonFormulaire'}}) }}*/
/* */
/*             {{ form_end(formulaire) }}*/
/* */
/*         </p>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}{# empty Twig template #}*/
/* */
