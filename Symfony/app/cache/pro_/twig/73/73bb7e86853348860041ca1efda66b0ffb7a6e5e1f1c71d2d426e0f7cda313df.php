<?php

/* NoxIntranetAdministrationBundle:AdministrationNews:administrationAjouterNews.html.twig */
class __TwigTemplate_763c75bd387eed4dac64581fc616f34ee51450e0be8fb92f4eee25cbe107bb0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationNews:administrationAjouterNews.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo "Administration";
    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        // line 6
        echo "    
    <div class=\"messageAcceuil\"> 
        <h2>Ajout news</h2> <br>
    </div>

    <div id=\"divAdministrationNews\">

        <div id=\"divNews\">

            ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("id" => "formulaireNews")));
        echo "

            <h2> Ajouter une news </h2>

            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
        echo "


            ";
        // line 23
        echo "            ";
        // line 24
        echo "
            <div>
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "titre", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Titre de la news : "));
        echo "

                ";
        // line 29
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "titre", array()), 'errors');
        echo "

                ";
        // line 32
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "titre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "

            </div>

            <div id=\"contenuNews\">

                ";
        // line 39
        echo "                

                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "contenu", array()), 'widget', array("attr" => array("class" => "textArea")));
        echo "

                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "contenu", array()), 'errors');
        echo "

            </div>

            <div>

                ";
        // line 50
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "auteur", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "Auteur de la news : "));
        echo "

                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "auteur", array()), 'widget', array("attr" => array("class" => "text")));
        echo "

                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "auteur", array()), 'errors');
        echo "

            </div>

            <p id=\"submitAdministrationUtilisateur\">

                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "

                ";
        // line 62
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
        echo "

            </p>

        </div>

    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationNews:administrationAjouterNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 62,  127 => 60,  118 => 54,  113 => 52,  107 => 50,  98 => 43,  93 => 41,  89 => 39,  79 => 32,  73 => 29,  68 => 26,  64 => 24,  62 => 23,  56 => 19,  49 => 15,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
