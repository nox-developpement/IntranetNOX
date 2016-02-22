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
        $__internal_30f4f47a87e20979687ca34d977484080ba256384b8caa120b234e72aff232c0 = $this->env->getExtension("native_profiler");
        $__internal_30f4f47a87e20979687ca34d977484080ba256384b8caa120b234e72aff232c0->enter($__internal_30f4f47a87e20979687ca34d977484080ba256384b8caa120b234e72aff232c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30f4f47a87e20979687ca34d977484080ba256384b8caa120b234e72aff232c0->leave($__internal_30f4f47a87e20979687ca34d977484080ba256384b8caa120b234e72aff232c0_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f5989885d16ab38cea3f0aa169d408358753b8b5b20879e40f296cab1c980201 = $this->env->getExtension("native_profiler");
        $__internal_f5989885d16ab38cea3f0aa169d408358753b8b5b20879e40f296cab1c980201->enter($__internal_f5989885d16ab38cea3f0aa169d408358753b8b5b20879e40f296cab1c980201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Administration assistant d'affaires ";
        
        $__internal_f5989885d16ab38cea3f0aa169d408358753b8b5b20879e40f296cab1c980201->leave($__internal_f5989885d16ab38cea3f0aa169d408358753b8b5b20879e40f296cab1c980201_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_0176a86927cce67c740ecfcd3721869d41979477e754204f203171c5414925b0 = $this->env->getExtension("native_profiler");
        $__internal_0176a86927cce67c740ecfcd3721869d41979477e754204f203171c5414925b0->enter($__internal_0176a86927cce67c740ecfcd3721869d41979477e754204f203171c5414925b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_0176a86927cce67c740ecfcd3721869d41979477e754204f203171c5414925b0->leave($__internal_0176a86927cce67c740ecfcd3721869d41979477e754204f203171c5414925b0_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b450e7674cbca5e543aff976b0ab273e6afd9d5de1628aa6bf1a54595c0c4503 = $this->env->getExtension("native_profiler");
        $__internal_b450e7674cbca5e543aff976b0ab273e6afd9d5de1628aa6bf1a54595c0c4503->enter($__internal_b450e7674cbca5e543aff976b0ab273e6afd9d5de1628aa6bf1a54595c0c4503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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

            <legend><p>Ajouter un profil</p></legend>

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

            <legend><p>Supprimer un profil</p></legend>

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

    <div class='DivFormulaireAjoutFichier'>

        ";
        // line 66
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), 'form_start', array("attr" => array("class" => "formulaireAjoutFichier")));
        echo "
        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), 'errors');
        echo "

        <fieldset>

            <p>
                ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "Profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutFichier"), "label" => "Profil :"));
        echo "
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "Profil", array()), 'errors');
        echo "
                ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "Profil", array()), 'widget', array("attr" => array("class" => "fileFormulaireAjoutFichier")));
        echo "
            </p>

            <legend><p>Ajouter un fichier</p></legend>

            <p>
                ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "file", array()), 'errors');
        echo "
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "file", array()), 'widget', array("attr" => array("class" => "fileFormulaireAjoutFichier")));
        echo "

                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "_token", array()), 'widget');
        echo " <br /><br />

                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutFichier", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 90
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), 'form_end');
        echo "

    </div>

    <div class=\"sousMessageAcceuil\">
        <h4> Champs : </h4>
    </div>

    <div class='DivFormulaireAjoutChamp'>

        ";
        // line 100
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), 'form_start', array("attr" => array("class" => "formulaireAjoutChamp")));
        echo "
        ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), 'errors');
        echo "

        <fieldset>

            <legend><p>Ajouter un champ</p></legend>

            <p>
                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Nom :"));
        echo "
                ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Nom", array()), 'errors');
        echo "
                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Nom", array()), 'widget', array("attr" => array("class" => "texteFormulaireAjoutChamp")));
        echo "
            </p>

            <p>
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Type", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Type :"));
        echo "
                ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Type", array()), 'errors');
        echo "
                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Type", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutChamp")));
        echo "

                ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "_token", array()), 'widget');
        echo "
            </p>

            <p>
                ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 127
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionChamp'>

        ";
        // line 133
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), 'form_start', array("attr" => array("class" => "formulaireSuppressionChamp")));
        echo "
        ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), 'errors');
        echo "

        <fieldset>

            <legend><p>Supprimer un champ</p></legend>       

            <p>
                ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSuppressionChamp"), "label" => "Nom :"));
        echo "
                ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Nom", array()), 'errors');
        echo "
                ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireSuppressionChamp")));
        echo "
            </p>

            <p>
                ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "_token", array()), 'widget');
        echo " 

                ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSuppressionChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 154
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), 'form_end');
        echo "

    </div>


    <div class=\"sousMessageAcceuil\">
        <h4> Suivis : </h4>
    </div>

    <div id='DivFormulaireSelectionDossier'>

        ";
        // line 165
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), 'form_start', array("attr" => array("class" => "formulaireSelectionDossier")));
        echo "
        ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), 'errors');
        echo "

        <fieldset>

            <legend><p>Suivi</p></legend>

            ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), "dossiers", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionDossier"), "label" => "Selection du suivi :"));
        echo "
            ";
        // line 173
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), "dossiers", array()), 'errors');
        echo "
            ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), "dossiers", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionDossier")));
        echo "

            ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), "Supprimer", array()), 'widget', array("label" => "Supprimer le suivi", "attr" => array("class" => "boutonFormulaire")));
        echo "

        </fieldset>

        ";
        // line 180
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSelectionVersion'>
        ";
        // line 185
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), 'form_start', array("attr" => array("class" => "formulaireSelectionVersion")));
        echo "
        ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), 'errors');
        echo "

        <fieldset>

            <legend><p>Selection de la version</p></legend>

            <p>
                ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "versions", array()), 'errors');
        echo "
                ";
        // line 194
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "versions", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionVersion", "size" => 15)));
        echo "
            </p>

            ";
        // line 197
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "_token", array()), 'widget');
        echo "

            <p>
                ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "Editer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSelectionVersion")));
        echo "
                ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSelectionVersion")));
        echo "
            </p>

        </fieldset>

        ";
        // line 206
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), 'form_end');
        echo "

    </div>

";
        
        $__internal_b450e7674cbca5e543aff976b0ab273e6afd9d5de1628aa6bf1a54595c0c4503->leave($__internal_b450e7674cbca5e543aff976b0ab273e6afd9d5de1628aa6bf1a54595c0c4503_prof);

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
        return array (  443 => 206,  435 => 201,  431 => 200,  425 => 197,  419 => 194,  415 => 193,  405 => 186,  401 => 185,  393 => 180,  386 => 176,  381 => 174,  377 => 173,  373 => 172,  364 => 166,  360 => 165,  346 => 154,  338 => 149,  333 => 147,  326 => 143,  322 => 142,  318 => 141,  308 => 134,  304 => 133,  295 => 127,  287 => 122,  280 => 118,  275 => 116,  271 => 115,  267 => 114,  260 => 110,  256 => 109,  252 => 108,  242 => 101,  238 => 100,  225 => 90,  217 => 85,  212 => 83,  207 => 81,  203 => 80,  194 => 74,  190 => 73,  186 => 72,  178 => 67,  174 => 66,  160 => 55,  153 => 51,  148 => 49,  143 => 47,  139 => 46,  135 => 45,  126 => 39,  122 => 38,  113 => 32,  106 => 28,  101 => 26,  96 => 24,  92 => 23,  88 => 22,  79 => 16,  75 => 15,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <legend><p>Ajouter un profil</p></legend>*/
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
/*             <legend><p>Supprimer un profil</p></legend>*/
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
/*     <div class='DivFormulaireAjoutFichier'>*/
/* */
/*         {{ form_start(formAjoutFichier, {'attr': {'class': 'formulaireAjoutFichier'}}) }}*/
/*         {{ form_errors(formAjoutFichier) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutFichier.Profil, "Profil :", {'label_attr': {'class': 'labelFormulaireAjoutFichier'}}) }}*/
/*                 {{ form_errors(formAjoutFichier.Profil) }}*/
/*                 {{ form_widget(formAjoutFichier.Profil, {'attr': {'class': 'fileFormulaireAjoutFichier' }}) }}*/
/*             </p>*/
/* */
/*             <legend><p>Ajouter un fichier</p></legend>*/
/* */
/*             <p>*/
/*                 {{ form_errors(formAjoutFichier.file) }}*/
/*                 {{ form_widget(formAjoutFichier.file, {'attr': {'class': 'fileFormulaireAjoutFichier' }}) }}*/
/* */
/*                 {{ form_widget(formAjoutFichier._token) }} <br /><br />*/
/* */
/*                 {{ form_widget(formAjoutFichier.Ajouter, {'attr': {'class': 'submitFormulaireAjoutFichier', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formAjoutFichier) }}*/
/* */
/*     </div>*/
/* */
/*     <div class="sousMessageAcceuil">*/
/*         <h4> Champs : </h4>*/
/*     </div>*/
/* */
/*     <div class='DivFormulaireAjoutChamp'>*/
/* */
/*         {{ form_start(formAjoutChamp, {'attr': {'class': 'formulaireAjoutChamp'}}) }}*/
/*         {{ form_errors(formAjoutChamp) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><p>Ajouter un champ</p></legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutChamp.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAjoutChamp'}}) }}*/
/*                 {{ form_errors(formAjoutChamp.Nom) }}*/
/*                 {{ form_widget(formAjoutChamp.Nom, {'attr': {'class': 'texteFormulaireAjoutChamp' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutChamp.Type, "Type :", {'label_attr': {'class': 'labelFormulaireAjoutChamp'}}) }}*/
/*                 {{ form_errors(formAjoutChamp.Type) }}*/
/*                 {{ form_widget(formAjoutChamp.Type, {'attr': {'class': 'selectFormulaireAjoutChamp' }}) }}*/
/* */
/*                 {{ form_widget(formAjoutChamp._token) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_widget(formAjoutChamp.Ajouter, {'attr': {'class': 'submitFormulaireAjoutChamp', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formAjoutChamp) }}*/
/* */
/*     </div>*/
/* */
/*     <div class='DivFormulaireSuppressionChamp'>*/
/* */
/*         {{ form_start(formSuppressionChamp, {'attr': {'class': 'formulaireSuppressionChamp'}}) }}*/
/*         {{ form_errors(formSuppressionChamp) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><p>Supprimer un champ</p></legend>       */
/* */
/*             <p>*/
/*                 {{ form_label(formSuppressionChamp.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireSuppressionChamp'}}) }}*/
/*                 {{ form_errors(formSuppressionChamp.Nom) }}*/
/*                 {{ form_widget(formSuppressionChamp.Nom, {'attr': {'class': 'selectFormulaireSuppressionChamp' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_widget(formSuppressionChamp._token) }} */
/* */
/*                 {{ form_widget(formSuppressionChamp.Supprimer, {'attr': {'class': 'submitFormulaireSuppressionChamp', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formSuppressionChamp) }}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div class="sousMessageAcceuil">*/
/*         <h4> Suivis : </h4>*/
/*     </div>*/
/* */
/*     <div id='DivFormulaireSelectionDossier'>*/
/* */
/*         {{ form_start(formSelectionDossier, {'attr': {'class': 'formulaireSelectionDossier'}}) }}*/
/*         {{ form_errors(formSelectionDossier) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><p>Suivi</p></legend>*/
/* */
/*             {{ form_label(formSelectionDossier.dossiers, "Selection du suivi :", {'label_attr': {'class': 'labelFormulaireSelectionDossier'}}) }}*/
/*             {{ form_errors(formSelectionDossier.dossiers) }}*/
/*             {{ form_widget(formSelectionDossier.dossiers, {'attr': {'class': 'selectFormulaireSelectionDossier'}}) }}*/
/* */
/*             {{ form_widget(formSelectionDossier.Supprimer, { 'label': 'Supprimer le suivi', 'attr': {'class': 'boutonFormulaire'}}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formSelectionDossier) }}*/
/* */
/*     </div>*/
/* */
/*     <div id='DivFormulaireSelectionVersion'>*/
/*         {{ form_start(formSelectionVersion, {'attr': {'class': 'formulaireSelectionVersion'}}) }}*/
/*         {{ form_errors(formSelectionVersion) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend><p>Selection de la version</p></legend>*/
/* */
/*             <p>*/
/*                 {{ form_errors(formSelectionVersion.versions) }}*/
/*                 {{ form_widget(formSelectionVersion.versions, {'attr': {'class': 'selectFormulaireSelectionVersion', 'size': 15}}) }}*/
/*             </p>*/
/* */
/*             {{ form_widget(formSelectionVersion._token) }}*/
/* */
/*             <p>*/
/*                 {{ form_widget(formSelectionVersion.Editer, {'attr': {'class': 'submitFormulaireSelectionVersion' }}) }}*/
/*                 {{ form_widget(formSelectionVersion.Supprimer, {'attr': {'class': 'submitFormulaireSelectionVersion' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formSelectionVersion) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
