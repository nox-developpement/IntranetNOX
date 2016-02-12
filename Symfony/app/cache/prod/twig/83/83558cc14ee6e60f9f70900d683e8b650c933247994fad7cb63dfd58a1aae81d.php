<?php

/* NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig */
class __TwigTemplate_9f75fb3e2e5cebc68deecb60bfb6b5f282301b11c47db4f7f4643119f1d473f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Administration assistant d'affaires ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration assistant d'affaires";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"sousMessageAcceuil\">
        <h4> Profils : </h4>
    </div>

    <div id='DivFormulaireAjoutProfil'>

        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), 'form_start', array("attr" => array("class" => "formulaireAdministrationAjoutProfil")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), 'errors');
        echo "

        <fieldset>

            <legend><span>Ajouter un profil</span></legend>

            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutProfil"), "label" => "Nom :"));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), "Nom", array()), 'errors');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutProfil")));
        echo "

            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), "_token", array()), 'widget');
        echo "

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationAjoutProfil", "class" => "boutonFormulaire")));
        echo "

        </fieldset>

        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSuppressionProfil'>

        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), 'form_start', array("attr" => array("class" => "formulaireAdministrationSuppressionProfil")));
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), 'errors');
        echo "

        <fieldset>

            <legend><span>Supprimer un profil</span></legend>

            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationSuppressionProfil"), "label" => "Nom :"));
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), "Nom", array()), 'errors');
        echo "
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationSuppressionProfil")));
        echo "

            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), "_token", array()), 'widget');
        echo "

            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationSuppressionProfil", "class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), 'form_end');
        echo "

    </div>


    <div class=\"sousMessageAcceuil\">
        <h4> Feuilles de suivis : </h4>
    </div>

    <div class='DivAjoutFeuilleSuivi'>
        <form class='formulaireAjoutFeuilleSuivi'>
            <fieldset>
                <legend><span> Gestionnaire de feuilles de suivis </span></legend>
                <p> <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/feuillesSuivis', 'Gestionnaire de fichiers - Feuilles de suivis');\"> Ajout/Supression de feuilles de suivis </a> </p>
            </fieldset>
        </form>
    </div>


    <div class=\"sousMessageAcceuil\">
        <h4> Champs : </h4>
    </div>

    <div class='DivFormulaireAjoutFormulaire'>

        ";
        // line 80
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), 'form_start', array("attr" => array("class" => "formulaireAjoutFormulaire")));
        echo "
        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), 'errors');
        echo "

        <fieldset>

            <legend><span>Ajouter un champ</span></legend>

            <p>
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutFormulaire"), "label" => "Nom :"));
        echo "
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), "Nom", array()), 'errors');
        echo "
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutFormulaire")));
        echo "

                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), "Type", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutFormulaire"), "label" => "Type de champ :"));
        echo "
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), "Type", array()), 'errors');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), "Type", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutFormulaire")));
        echo "

                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), "_token", array()), 'widget');
        echo "

                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : null), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionFormulaire'>

        ";
        // line 109
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : null), 'form_start', array("attr" => array("class" => "formulaireAdministrationSuppressionFormulaire")));
        echo "
        ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : null), 'errors');
        echo "

        <fieldset>

            <legend><span>Supprimer un Champ</span></legend>

            ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : null), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationSuppressionFormulaire"), "label" => "Nom :"));
        echo "
            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : null), "Nom", array()), 'errors');
        echo "
            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : null), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationSuppressionFormulaire")));
        echo "

            ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : null), "_token", array()), 'widget');
        echo "

            ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : null), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationSuppressionFormulaire", "class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 126
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : null), 'form_end');
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 126,  260 => 122,  255 => 120,  250 => 118,  246 => 117,  242 => 116,  233 => 110,  229 => 109,  220 => 103,  212 => 98,  207 => 96,  202 => 94,  198 => 93,  194 => 92,  189 => 90,  185 => 89,  181 => 88,  171 => 81,  167 => 80,  139 => 55,  132 => 51,  127 => 49,  122 => 47,  118 => 46,  114 => 45,  105 => 39,  101 => 38,  92 => 32,  85 => 28,  80 => 26,  75 => 24,  71 => 23,  67 => 22,  58 => 16,  54 => 15,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Administration assistant d'affaires {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration assistant d'affaires{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="sousMessageAcceuil">*/
/*         <h4> Profils : </h4>*/
/*     </div>*/
/* */
/*     <div id='DivFormulaireAjoutProfil'>*/
/* */
/*         {{ form_start(formAjoutProfil, {'attr': {'class': 'formulaireAdministrationAjoutProfil'}}) }}*/
/*         {{ form_errors(formAjoutProfil) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Ajouter un profil</span></legend>*/
/* */
/*             {{ form_label(formAjoutProfil.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAdministrationAjoutProfil'}}) }}*/
/*             {{ form_errors(formAjoutProfil.Nom) }}*/
/*             {{ form_widget(formAjoutProfil.Nom, {'attr': {'class': 'textFormulaireAdministrationAjoutProfil'}}) }}*/
/* */
/*             {{ form_widget(formAjoutProfil._token) }}*/
/* */
/*             {{ form_widget(formAjoutProfil.Ajouter, {'attr': {'class': 'submitFormulaireAdministrationAjoutProfil', 'class': 'boutonFormulaire' }}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formAjoutProfil) }}*/
/* */
/*     </div>*/
/* */
/*     <div id='DivFormulaireSuppressionProfil'>*/
/* */
/*         {{ form_start(formSuppresionProfil, {'attr': {'class': 'formulaireAdministrationSuppressionProfil'}}) }}*/
/*         {{ form_errors(formSuppresionProfil) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Supprimer un profil</span></legend>*/
/* */
/*             {{ form_label(formSuppresionProfil.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAdministrationSuppressionProfil'}}) }}*/
/*             {{ form_errors(formSuppresionProfil.Nom) }}*/
/*             {{ form_widget(formSuppresionProfil.Nom, {'attr': {'class': 'selectFormulaireAdministrationSuppressionProfil'}}) }}*/
/* */
/*             {{ form_widget(formSuppresionProfil._token) }}*/
/* */
/*             {{ form_widget(formSuppresionProfil.Supprimer, {'attr': {'class': 'submitFormulaireAdministrationSuppressionProfil', 'class': 'boutonFormulaire' }}) }}*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formSuppresionProfil) }}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div class="sousMessageAcceuil">*/
/*         <h4> Feuilles de suivis : </h4>*/
/*     </div>*/
/* */
/*     <div class='DivAjoutFeuilleSuivi'>*/
/*         <form class='formulaireAjoutFeuilleSuivi'>*/
/*             <fieldset>*/
/*                 <legend><span> Gestionnaire de feuilles de suivis </span></legend>*/
/*                 <p> <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/feuillesSuivis', 'Gestionnaire de fichiers - Feuilles de suivis');"> Ajout/Supression de feuilles de suivis </a> </p>*/
/*             </fieldset>*/
/*         </form>*/
/*     </div>*/
/* */
/* */
/*     <div class="sousMessageAcceuil">*/
/*         <h4> Champs : </h4>*/
/*     </div>*/
/* */
/*     <div class='DivFormulaireAjoutFormulaire'>*/
/* */
/*         {{ form_start(formAjoutFormulaire, {'attr': {'class': 'formulaireAjoutFormulaire'}}) }}*/
/*         {{ form_errors(formAjoutFormulaire) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Ajouter un champ</span></legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutFormulaire.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAjoutFormulaire'}}) }}*/
/*                 {{ form_errors(formAjoutFormulaire.Nom) }}*/
/*                 {{ form_widget(formAjoutFormulaire.Nom, {'attr': {'class': 'textFormulaireAjoutFormulaire'}}) }}*/
/* */
/*                 {{ form_label(formAjoutFormulaire.Type, "Type de champ :", {'label_attr': {'class': 'labelFormulaireAjoutFormulaire'}}) }}*/
/*                 {{ form_errors(formAjoutFormulaire.Type) }}*/
/*                 {{ form_widget(formAjoutFormulaire.Type, {'attr': {'class': 'selectFormulaireAjoutFormulaire'}}) }}*/
/* */
/*                 {{ form_widget(formAjoutFormulaire._token) }}*/
/* */
/*                 {{ form_widget(formAjoutFormulaire.Ajouter, {'attr': {'class': 'submitFormulaireAjoutFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formAjoutFormulaire) }}*/
/* */
/*     </div>*/
/* */
/*     <div class='DivFormulaireSuppressionFormulaire'>*/
/* */
/*         {{ form_start(formSuppressionFormulaire, {'attr': {'class': 'formulaireAdministrationSuppressionFormulaire'}}) }}*/
/*         {{ form_errors(formSuppressionFormulaire) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><span>Supprimer un Champ</span></legend>*/
/* */
/*             {{ form_label(formSuppressionFormulaire.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAdministrationSuppressionFormulaire'}}) }}*/
/*             {{ form_errors(formSuppressionFormulaire.Nom) }}*/
/*             {{ form_widget(formSuppressionFormulaire.Nom, {'attr': {'class': 'selectFormulaireAdministrationSuppressionFormulaire'}}) }}*/
/* */
/*             {{ form_widget(formSuppressionFormulaire._token) }}*/
/* */
/*             {{ form_widget(formSuppressionFormulaire.Supprimer, {'attr': {'class': 'submitFormulaireAdministrationSuppressionFormulaire', 'class': 'boutonFormulaire' }}) }}*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formSuppressionFormulaire) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
