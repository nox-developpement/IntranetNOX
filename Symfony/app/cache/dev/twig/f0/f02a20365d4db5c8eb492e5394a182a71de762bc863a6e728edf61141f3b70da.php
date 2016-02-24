<?php

/* NoxIntranetAdministrationBundle:AdministrationNews:administrationAjouterNews.html.twig */
class __TwigTemplate_644461849b96fd745bf9a403b94d95313235eb78781ffe7207736e25e9490be9 extends Twig_Template
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
        $__internal_fa4e1f82237f1cd5b5c96171e355756ea1e302c7ad71d7c38e81d558e34fcfda = $this->env->getExtension("native_profiler");
        $__internal_fa4e1f82237f1cd5b5c96171e355756ea1e302c7ad71d7c38e81d558e34fcfda->enter($__internal_fa4e1f82237f1cd5b5c96171e355756ea1e302c7ad71d7c38e81d558e34fcfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:administrationAjouterNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa4e1f82237f1cd5b5c96171e355756ea1e302c7ad71d7c38e81d558e34fcfda->leave($__internal_fa4e1f82237f1cd5b5c96171e355756ea1e302c7ad71d7c38e81d558e34fcfda_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_e5c3a306ea566c6450c53315a18176a6fad5bad9ea95f71ee3723b97a97ecdba = $this->env->getExtension("native_profiler");
        $__internal_e5c3a306ea566c6450c53315a18176a6fad5bad9ea95f71ee3723b97a97ecdba->enter($__internal_e5c3a306ea566c6450c53315a18176a6fad5bad9ea95f71ee3723b97a97ecdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration";
        
        $__internal_e5c3a306ea566c6450c53315a18176a6fad5bad9ea95f71ee3723b97a97ecdba->leave($__internal_e5c3a306ea566c6450c53315a18176a6fad5bad9ea95f71ee3723b97a97ecdba_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9211178de28109aa3a47b2ba25a0032c5acee9918ed6c5f7a7c57d79e62e10ff = $this->env->getExtension("native_profiler");
        $__internal_9211178de28109aa3a47b2ba25a0032c5acee9918ed6c5f7a7c57d79e62e10ff->enter($__internal_9211178de28109aa3a47b2ba25a0032c5acee9918ed6c5f7a7c57d79e62e10ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_9211178de28109aa3a47b2ba25a0032c5acee9918ed6c5f7a7c57d79e62e10ff->leave($__internal_9211178de28109aa3a47b2ba25a0032c5acee9918ed6c5f7a7c57d79e62e10ff_prof);

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
