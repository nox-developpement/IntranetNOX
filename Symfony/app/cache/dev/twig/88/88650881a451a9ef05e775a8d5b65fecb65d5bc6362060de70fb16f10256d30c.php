<?php

/* @NoxIntranetAdministration/AdministrationNews/administrationAjouterNews.html.twig */
class __TwigTemplate_218a06155cef6197dd71ab7a01d72ab68ccd0e9aac235c057583c06e226fe971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationNews/administrationAjouterNews.html.twig", 1);
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
        $__internal_32921d8a7b8709457ba65d2d6c00e68512d01f34fe44a99bae15e681152d8c95 = $this->env->getExtension("native_profiler");
        $__internal_32921d8a7b8709457ba65d2d6c00e68512d01f34fe44a99bae15e681152d8c95->enter($__internal_32921d8a7b8709457ba65d2d6c00e68512d01f34fe44a99bae15e681152d8c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationNews/administrationAjouterNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32921d8a7b8709457ba65d2d6c00e68512d01f34fe44a99bae15e681152d8c95->leave($__internal_32921d8a7b8709457ba65d2d6c00e68512d01f34fe44a99bae15e681152d8c95_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_e40925ec8c4843006d6d6456e4bab141469bb2106a40d793ed43ea3c339fbc87 = $this->env->getExtension("native_profiler");
        $__internal_e40925ec8c4843006d6d6456e4bab141469bb2106a40d793ed43ea3c339fbc87->enter($__internal_e40925ec8c4843006d6d6456e4bab141469bb2106a40d793ed43ea3c339fbc87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration";
        
        $__internal_e40925ec8c4843006d6d6456e4bab141469bb2106a40d793ed43ea3c339fbc87->leave($__internal_e40925ec8c4843006d6d6456e4bab141469bb2106a40d793ed43ea3c339fbc87_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b8c1971c1abaf343033ae4c0d7d8f51c8693bcb9a1a6a0a8a7853f14e8945e55 = $this->env->getExtension("native_profiler");
        $__internal_b8c1971c1abaf343033ae4c0d7d8f51c8693bcb9a1a6a0a8a7853f14e8945e55->enter($__internal_b8c1971c1abaf343033ae4c0d7d8f51c8693bcb9a1a6a0a8a7853f14e8945e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "    
    <div class=\"messageAcceuil\"> 
        <h2>Ajout news</h2> <br>
    </div>

    <div id=\"divAdministrationNews\">

        <div id=\"divNews\">

            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireNews")));
        echo "

            <h2> Ajouter une news </h2>

            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "


            ";
        // line 23
        echo "            ";
        // line 24
        echo "
            <div>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "titre", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Titre de la news : "));
        echo "

                ";
        // line 29
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "titre", array()), 'errors');
        echo "

                ";
        // line 32
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "titre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "

            </div>

            <div id=\"contenuNews\">

                ";
        // line 39
        echo "                

                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "contenu", array()), 'widget', array("attr" => array("class" => "textArea")));
        echo "

                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "contenu", array()), 'errors');
        echo "

            </div>

            <div>

                ";
        // line 50
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "auteur", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Auteur de la news : "));
        echo "

                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "auteur", array()), 'widget', array("attr" => array("class" => "text")));
        echo "

                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "auteur", array()), 'errors');
        echo "

            </div>

            <p id=\"submitAdministrationUtilisateur\">

                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "

                ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

            </p>

        </div>

    </div>

";
        
        $__internal_b8c1971c1abaf343033ae4c0d7d8f51c8693bcb9a1a6a0a8a7853f14e8945e55->leave($__internal_b8c1971c1abaf343033ae4c0d7d8f51c8693bcb9a1a6a0a8a7853f14e8945e55_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationNews/administrationAjouterNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 62,  142 => 60,  133 => 54,  128 => 52,  122 => 50,  113 => 43,  108 => 41,  104 => 39,  94 => 32,  88 => 29,  83 => 26,  79 => 24,  77 => 23,  71 => 19,  64 => 15,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}Administration{% endblock %}*/
/* */
/* {% block contenu %}*/
/*     */
/*     <div class="messageAcceuil"> */
/*         <h2>Ajout news</h2> <br>*/
/*     </div>*/
/* */
/*     <div id="divAdministrationNews">*/
/* */
/*         <div id="divNews">*/
/* */
/*             {{ form_start(formulaire, {'attr': {'id': 'formulaireNews'}}) }}*/
/* */
/*             <h2> Ajouter une news </h2>*/
/* */
/*             {{ form_errors(formulaire) }}*/
/* */
/* */
/*             {# Label et champ titre. #}*/
/*             {# Génération du label. #}*/
/* */
/*             <div>*/
/*                 {{ form_label(formulaire.titre, "Titre de la news : ", {'label_attr': {'class': 'label'}}) }}*/
/* */
/*                 {# Affichage des erreurs pour ce champ précis. #}*/
/*                 {{ form_errors(formulaire.titre) }}*/
/* */
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(formulaire.titre, {'attr': {'class': 'text'}}) }}*/
/* */
/*             </div>*/
/* */
/*             <div id="contenuNews">*/
/* */
/*                 {# Label et champ contenu. #}*/
/*                 */
/* */
/*                 {{ form_widget(formulaire.contenu, {'attr': {'class': 'textArea'}}) }}*/
/* */
/*                 {{ form_errors(formulaire.contenu) }}*/
/* */
/*             </div>*/
/* */
/*             <div>*/
/* */
/*                 {# Label et champ auteur. #}*/
/*                 {{ form_label(formulaire.auteur, "Auteur de la news : ", {'label_attr': {'class': 'label'}}) }}*/
/* */
/*                 {{ form_widget(formulaire.auteur, {'attr': {'class': 'text'}}) }}*/
/* */
/*                 {{ form_errors(formulaire.auteur) }}*/
/* */
/*             </div>*/
/* */
/*             <p id="submitAdministrationUtilisateur">*/
/* */
/*                 {{ form_widget(formulaire.valider, {'attr': {'class': 'boutonFormulaire'}}) }}*/
/* */
/*                 {{ form_end(formulaire) }}*/
/* */
/*             </p>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
