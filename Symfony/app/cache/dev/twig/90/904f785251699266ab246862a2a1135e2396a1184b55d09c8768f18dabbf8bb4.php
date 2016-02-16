<?php

/* NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig */
class __TwigTemplate_2d450b1fc2a22438d0d7eed63504cbe0ebf43345682f2162848a250dc9d46309 extends Twig_Template
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
        $__internal_2b10b63b21cc3d159717790be4b19e094d04771d23995806c67d608503cfb4f9 = $this->env->getExtension("native_profiler");
        $__internal_2b10b63b21cc3d159717790be4b19e094d04771d23995806c67d608503cfb4f9->enter($__internal_2b10b63b21cc3d159717790be4b19e094d04771d23995806c67d608503cfb4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b10b63b21cc3d159717790be4b19e094d04771d23995806c67d608503cfb4f9->leave($__internal_2b10b63b21cc3d159717790be4b19e094d04771d23995806c67d608503cfb4f9_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_6a230a940ddccfd8a6b8d22127df04efa6beb29b00eaa9e72e87de9587509898 = $this->env->getExtension("native_profiler");
        $__internal_6a230a940ddccfd8a6b8d22127df04efa6beb29b00eaa9e72e87de9587509898->enter($__internal_6a230a940ddccfd8a6b8d22127df04efa6beb29b00eaa9e72e87de9587509898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Administration assistant d'affaires ";
        
        $__internal_6a230a940ddccfd8a6b8d22127df04efa6beb29b00eaa9e72e87de9587509898->leave($__internal_6a230a940ddccfd8a6b8d22127df04efa6beb29b00eaa9e72e87de9587509898_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_5d2687a23645acbeab7973a9e9472079044450d47ae8eca409d091833448ffde = $this->env->getExtension("native_profiler");
        $__internal_5d2687a23645acbeab7973a9e9472079044450d47ae8eca409d091833448ffde->enter($__internal_5d2687a23645acbeab7973a9e9472079044450d47ae8eca409d091833448ffde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_5d2687a23645acbeab7973a9e9472079044450d47ae8eca409d091833448ffde->leave($__internal_5d2687a23645acbeab7973a9e9472079044450d47ae8eca409d091833448ffde_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5119bf3f6a38975ea48a140e5931c50c370fe7ed214b1525a592962d0c0c5de5 = $this->env->getExtension("native_profiler");
        $__internal_5119bf3f6a38975ea48a140e5931c50c370fe7ed214b1525a592962d0c0c5de5->enter($__internal_5119bf3f6a38975ea48a140e5931c50c370fe7ed214b1525a592962d0c0c5de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div class=\"sousMessageAcceuil\">
        <h4> Profils : </h4>
    </div>

    <div id='DivFormulaireAjoutProfil'>

        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), 'form_start', array("attr" => array("class" => "formulaireAdministrationAjoutProfil")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), 'errors');
        echo "

        <fieldset>

            <legend><span>Ajouter un profil</span></legend>

            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutProfil"), "label" => "Nom :"));
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Nom", array()), 'errors');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutProfil")));
        echo "

            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "_token", array()), 'widget');
        echo "

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationAjoutProfil", "class" => "boutonFormulaire")));
        echo "

        </fieldset>

        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSuppressionProfil'>

        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), 'form_start', array("attr" => array("class" => "formulaireAdministrationSuppressionProfil")));
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), 'errors');
        echo "

        <fieldset>

            <legend><span>Supprimer un profil</span></legend>

            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationSuppressionProfil"), "label" => "Nom :"));
        echo "
            ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Nom", array()), 'errors');
        echo "
            ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationSuppressionProfil")));
        echo "

            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "_token", array()), 'widget');
        echo "

            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationSuppressionProfil", "class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), 'form_end');
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), 'form_start', array("attr" => array("class" => "formulaireAjoutFormulaire")));
        echo "
        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), 'errors');
        echo "

        <fieldset>

            <legend><span>Editer un fichier</span></legend>

            <p>
                ";
        // line 88
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Type", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutFormulaire"), "label" => "Fichier :"));
        echo "
                ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Type", array()), 'errors');
        echo "
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Type", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutFormulaire")));
        echo "

                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "_token", array()), 'widget');
        echo "

                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), "Editer", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 99
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFormulaire"]) ? $context["formAjoutFormulaire"] : $this->getContext($context, "formAjoutFormulaire")), 'form_end');
        echo "

    </div>

    <!--
    <div class='DivFormulaireSuppressionFormulaire'>

    ";
        // line 106
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), 'form_start', array("attr" => array("class" => "formulaireAdministrationSuppressionFormulaire")));
        echo "
    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), 'errors');
        echo "

    <fieldset>

        <legend><span>Supprimer un Champ</span></legend>

    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationSuppressionFormulaire"), "label" => "Nom :"));
        echo "
    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), "Nom", array()), 'errors');
        echo "
    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationSuppressionFormulaire")));
        echo "

    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), "_token", array()), 'widget');
        echo "

    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationSuppressionFormulaire", "class" => "boutonFormulaire")));
        echo "

</fieldset> 

    ";
        // line 123
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionFormulaire"]) ? $context["formSuppressionFormulaire"] : $this->getContext($context, "formSuppressionFormulaire")), 'form_end');
        echo "

</div>
    -->

";
        
        $__internal_5119bf3f6a38975ea48a140e5931c50c370fe7ed214b1525a592962d0c0c5de5->leave($__internal_5119bf3f6a38975ea48a140e5931c50c370fe7ed214b1525a592962d0c0c5de5_prof);

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
        return array (  276 => 123,  269 => 119,  264 => 117,  259 => 115,  255 => 114,  251 => 113,  242 => 107,  238 => 106,  228 => 99,  220 => 94,  215 => 92,  210 => 90,  206 => 89,  202 => 88,  192 => 81,  188 => 80,  160 => 55,  153 => 51,  148 => 49,  143 => 47,  139 => 46,  135 => 45,  126 => 39,  122 => 38,  113 => 32,  106 => 28,  101 => 26,  96 => 24,  92 => 23,  88 => 22,  79 => 16,  75 => 15,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <legend><span>Editer un fichier</span></legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutFormulaire.Type, "Fichier :", {'label_attr': {'class': 'labelFormulaireAjoutFormulaire'}}) }}*/
/*                 {{ form_errors(formAjoutFormulaire.Type) }}*/
/*                 {{ form_widget(formAjoutFormulaire.Type, {'attr': {'class': 'selectFormulaireAjoutFormulaire'}}) }}*/
/* */
/*                 {{ form_widget(formAjoutFormulaire._token) }}*/
/* */
/*                 {{ form_widget(formAjoutFormulaire.Editer, {'attr': {'class': 'submitFormulaireAjoutFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formAjoutFormulaire) }}*/
/* */
/*     </div>*/
/* */
/*     <!--*/
/*     <div class='DivFormulaireSuppressionFormulaire'>*/
/* */
/*     {{ form_start(formSuppressionFormulaire, {'attr': {'class': 'formulaireAdministrationSuppressionFormulaire'}}) }}*/
/*     {{ form_errors(formSuppressionFormulaire) }}*/
/* */
/*     <fieldset>*/
/* */
/*         <legend><span>Supprimer un Champ</span></legend>*/
/* */
/*     {{ form_label(formSuppressionFormulaire.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAdministrationSuppressionFormulaire'}}) }}*/
/*     {{ form_errors(formSuppressionFormulaire.Nom) }}*/
/*     {{ form_widget(formSuppressionFormulaire.Nom, {'attr': {'class': 'selectFormulaireAdministrationSuppressionFormulaire'}}) }}*/
/* */
/*     {{ form_widget(formSuppressionFormulaire._token) }}*/
/* */
/*     {{ form_widget(formSuppressionFormulaire.Supprimer, {'attr': {'class': 'submitFormulaireAdministrationSuppressionFormulaire', 'class': 'boutonFormulaire' }}) }}*/
/* */
/* </fieldset> */
/* */
/*     {{ form_end(formSuppressionFormulaire) }}*/
/* */
/* </div>*/
/*     -->*/
/* */
/* {% endblock %}*/
/* */
