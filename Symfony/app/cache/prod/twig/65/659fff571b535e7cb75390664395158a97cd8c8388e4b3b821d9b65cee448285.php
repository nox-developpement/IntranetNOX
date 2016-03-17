<?php

/* @NoxIntranetAdministration/AdministrationAffaires/administrationaffaires.html.twig */
class __TwigTemplate_e9e08fcb9e0c24e3b997dd9ac0692a39f10cdd002d303037b9184b626416cdb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationAffaires/administrationaffaires.html.twig", 1);
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
    <div class=\"titreFormulaireAA\" onclick=\"
            assistantAffaireToggle([
                \$('#DivFormulaireAjoutProfil'),
                \$('#DivFormulaireSuppressionProfil')
            ], \$(this));\">
        <h4> Profils <img src='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='formulaireAAImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='formulaireAAImgDown'></h4>
    </div>

    <div id='DivFormulaireAjoutProfil' class='formulaireAA'>

        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), 'form_start', array("attr" => array("class" => "formulaireAdministrationAjoutProfil")));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter un profil</legend>

            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutProfil"), "label" => "Nom :"));
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), "Nom", array()), 'errors');
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutProfil")));
        echo "

            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), "_token", array()), 'widget');
        echo "

            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationAjoutProfil", "class" => "boutonFormulaire")));
        echo "

        </fieldset>

        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : null), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSuppressionProfil' class='formulaireAA'>

        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), 'form_start', array("attr" => array("class" => "formulaireAdministrationSuppressionProfil")));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer un profil</legend>

            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationSuppressionProfil"), "label" => "Nom :"));
        echo "
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), "Nom", array()), 'errors');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationSuppressionProfil")));
        echo "

            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), "_token", array()), 'widget');
        echo "

            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationSuppressionProfil", "class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : null), 'form_end');
        echo "

    </div>


    <div class=\"titreFormulaireAA\" onclick=\"
            assistantAffaireToggle([
                \$('.DivFormulaireAjoutFichier')
            ], \$(this));\">
        <h4> Feuilles de modèle <img src='";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='formulaireAAImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='formulaireAAImgDown'> </h4>
    </div>



    <div class=\"titreFormulaireAA\" onclick=\"
            assistantAffaireToggle([
                \$('.DivFormulaireAjoutChamp'),
                \$('.DivFormulaireSuppressionChamp'),
                \$('.DivFormulaireSelectionChamp')
            ], \$(this));\">
        <h4> Champs <img src='";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='formulaireAAImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='formulaireAAImgDown'> </h4>
    </div>

    <div class='DivFormulaireAjoutChamp formulaireAA'>

        ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), 'form_start', array("attr" => array("class" => "formulaireAjoutChamp")));
        echo "
        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter un champ</legend>

            <p>
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "Type", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Type :"));
        echo "
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "Type", array()), 'errors');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "Type", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutChamp")));
        echo "

                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "_token", array()), 'widget');
        echo "
            </p>

            <p>
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Nom :"));
        echo "
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "Nom", array()), 'errors');
        echo "
                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "Nom", array()), 'widget', array("attr" => array("class" => "texteFormulaireAjoutChamp")));
        echo "
            </p>

            <p>
                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "AjoutDonnees", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Permettre l'ajout de donnée supplémentaire par l'utilisateur"));
        echo "
                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "AjoutDonnees", array()), 'errors');
        echo "
                ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "AjoutDonnees", array()), 'widget', array("attr" => array("class" => "checkboxFormulaireAjoutChamp")));
        echo "
            </p>

            <p>
                ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "Profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Profil :"));
        echo "
                ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "Profil", array()), 'errors');
        echo "
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "Profil", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutChamp")));
        echo "

                ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "_token", array()), 'widget');
        echo "
            </p>

            <p>
                ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 125
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : null), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionChamp formulaireAA'>

        ";
        // line 131
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : null), 'form_start', array("attr" => array("class" => "formulaireSuppressionChamp")));
        echo "
        ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer un champ</legend>       

            <p>
                ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : null), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSuppressionChamp"), "label" => "Nom - Type - Profil"));
        echo " <br />
                ";
        // line 140
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : null), "Nom", array()), 'errors');
        echo "
                ";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : null), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireSuppressionChamp")));
        echo "
            </p>

            <p>
                ";
        // line 145
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : null), "_token", array()), 'widget');
        echo " 

                ";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : null), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSuppressionChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 152
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : null), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSelectionChamp formulaireAA'>

        ";
        // line 158
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : null), 'form_start', array("attr" => array("class" => "formulaireSelectionChamp")));
        echo "
        ";
        // line 159
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Editer un champ de données</legend>       

            <p>
                ";
        // line 166
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : null), "Champs", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionChamp"), "label" => "Champ :"));
        echo "
                ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : null), "Champs", array()), 'errors');
        echo "
                ";
        // line 168
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : null), "Champs", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionChamp")));
        echo "
            </p>

            <p>
                ";
        // line 172
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : null), "_token", array()), 'widget');
        echo " 

                ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : null), "Editer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSelectionChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 179
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : null), 'form_end');
        echo "

    </div>

    <div id=\"DivFormulaireAAModele\" class=\"titreFormulaireAA\" onclick=\"
            assistantAffaireToggle([
                \$('#DivFormulaireSelectionDossier'),
                \$('#DivFormulaireSelectionVersion'),
                \$('.DivFormulaireAjoutFichier')
            ], \$(this));
            Recherche('.selectFormulaireSelectionVersion');\">
        <h4> Modèles <img src='";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='formulaireAAImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='formulaireAAImgDown'> </h4>
    </div>

    <div class='DivFormulaireAjoutFichier formulaireAA'>

        ";
        // line 195
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : null), 'form_start', array("attr" => array("class" => "formulaireAjoutFichier")));
        echo "
        ";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : null), 'errors');
        echo "

        <fieldset>

            <p>
                ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : null), "Profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutFichier"), "label" => "Profil :"));
        echo "
                ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : null), "Profil", array()), 'errors');
        echo "
                ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : null), "Profil", array()), 'widget', array("attr" => array("class" => "fileFormulaireAjoutFichier")));
        echo "
            </p>

            <legend>Ajouter un fichier</legend>

            <p>
                ";
        // line 209
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : null), "file", array()), 'errors');
        echo "
                ";
        // line 210
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : null), "file", array()), 'widget', array("attr" => array("class" => "fileFormulaireAjoutFichier")));
        echo "

                ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : null), "_token", array()), 'widget');
        echo " <br /><br />

                ";
        // line 214
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : null), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutFichier", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 219
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : null), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSelectionDossier' class=\"formulaireAA\">

        ";
        // line 225
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : null), 'form_start', array("attr" => array("class" => "formulaireSelectionDossier")));
        echo "
        ";
        // line 226
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Profil</legend>

            ";
        // line 232
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : null), "profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionDossier"), "label" => "Selection du profil :"));
        echo "
            ";
        // line 233
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : null), "profil", array()), 'errors');
        echo "
            ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : null), "profil", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionDossier")));
        echo "

        </fieldset>

        ";
        // line 238
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : null), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSelectionVersion' class=\"formulaireAA\">
        ";
        // line 243
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : null), 'form_start', array("attr" => array("class" => "formulaireSelectionVersion")));
        echo "
        ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Selection du modèle</legend>

            <p>
                <label for=\"rechercehSuivi\">Recherche</label>
                <input placeholder=\"Ex : Ventes 2016\" type=\"text\" id=\"rechercehSuivi\"/>
                ";
        // line 253
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : null), "Suivi", array()), 'errors');
        echo "
                ";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : null), "Suivi", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionVersion", "size" => 15)));
        echo "
            </p>

            ";
        // line 257
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : null), "_token", array()), 'widget');
        echo "

            <p>
                ";
        // line 260
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : null), "Editer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSelectionVersion")));
        echo "
                ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : null), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSelectionVersion")));
        echo "
            </p>

        </fieldset>

        ";
        // line 266
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : null), 'form_end');
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationAffaires/administrationaffaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 266,  536 => 261,  532 => 260,  526 => 257,  520 => 254,  516 => 253,  504 => 244,  500 => 243,  492 => 238,  485 => 234,  481 => 233,  477 => 232,  468 => 226,  464 => 225,  455 => 219,  447 => 214,  442 => 212,  437 => 210,  433 => 209,  424 => 203,  420 => 202,  416 => 201,  408 => 196,  404 => 195,  394 => 190,  380 => 179,  372 => 174,  367 => 172,  360 => 168,  356 => 167,  352 => 166,  342 => 159,  338 => 158,  329 => 152,  321 => 147,  316 => 145,  309 => 141,  305 => 140,  301 => 139,  291 => 132,  287 => 131,  278 => 125,  270 => 120,  263 => 116,  258 => 114,  254 => 113,  250 => 112,  243 => 108,  239 => 107,  235 => 106,  228 => 102,  224 => 101,  220 => 100,  213 => 96,  208 => 94,  204 => 93,  200 => 92,  190 => 85,  186 => 84,  176 => 79,  160 => 68,  148 => 59,  141 => 55,  136 => 53,  131 => 51,  127 => 50,  123 => 49,  114 => 43,  110 => 42,  101 => 36,  94 => 32,  89 => 30,  84 => 28,  80 => 27,  76 => 26,  67 => 20,  63 => 19,  53 => 14,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
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
/*     <div class="titreFormulaireAA" onclick="*/
/*             assistantAffaireToggle([*/
/*                 $('#DivFormulaireAjoutProfil'),*/
/*                 $('#DivFormulaireSuppressionProfil')*/
/*             ], $(this));">*/
/*         <h4> Profils <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='formulaireAAImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='formulaireAAImgDown'></h4>*/
/*     </div>*/
/* */
/*     <div id='DivFormulaireAjoutProfil' class='formulaireAA'>*/
/* */
/*         {{ form_start(formAjoutProfil, {'attr': {'class': 'formulaireAdministrationAjoutProfil'}}) }}*/
/*         {{ form_errors(formAjoutProfil) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Ajouter un profil</legend>*/
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
/*     <div id='DivFormulaireSuppressionProfil' class='formulaireAA'>*/
/* */
/*         {{ form_start(formSuppresionProfil, {'attr': {'class': 'formulaireAdministrationSuppressionProfil'}}) }}*/
/*         {{ form_errors(formSuppresionProfil) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Supprimer un profil</legend>*/
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
/*     <div class="titreFormulaireAA" onclick="*/
/*             assistantAffaireToggle([*/
/*                 $('.DivFormulaireAjoutFichier')*/
/*             ], $(this));">*/
/*         <h4> Feuilles de modèle <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='formulaireAAImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='formulaireAAImgDown'> </h4>*/
/*     </div>*/
/* */
/* */
/* */
/*     <div class="titreFormulaireAA" onclick="*/
/*             assistantAffaireToggle([*/
/*                 $('.DivFormulaireAjoutChamp'),*/
/*                 $('.DivFormulaireSuppressionChamp'),*/
/*                 $('.DivFormulaireSelectionChamp')*/
/*             ], $(this));">*/
/*         <h4> Champs <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='formulaireAAImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='formulaireAAImgDown'> </h4>*/
/*     </div>*/
/* */
/*     <div class='DivFormulaireAjoutChamp formulaireAA'>*/
/* */
/*         {{ form_start(formAjoutChamp, {'attr': {'class': 'formulaireAjoutChamp'}}) }}*/
/*         {{ form_errors(formAjoutChamp) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Ajouter un champ</legend>*/
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
/*                 {{ form_label(formAjoutChamp.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAjoutChamp'}}) }}*/
/*                 {{ form_errors(formAjoutChamp.Nom) }}*/
/*                 {{ form_widget(formAjoutChamp.Nom, {'attr': {'class': 'texteFormulaireAjoutChamp' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutChamp.AjoutDonnees, "Permettre l'ajout de donnée supplémentaire par l'utilisateur", {'label_attr': {'class': 'labelFormulaireAjoutChamp'}}) }}*/
/*                 {{ form_errors(formAjoutChamp.AjoutDonnees) }}*/
/*                 {{ form_widget(formAjoutChamp.AjoutDonnees, {'attr': {'class': 'checkboxFormulaireAjoutChamp' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutChamp.Profil, "Profil :", {'label_attr': {'class': 'labelFormulaireAjoutChamp'}}) }}*/
/*                 {{ form_errors(formAjoutChamp.Profil) }}*/
/*                 {{ form_widget(formAjoutChamp.Profil, {'attr': {'class': 'selectFormulaireAjoutChamp' }}) }}*/
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
/*     <div class='DivFormulaireSuppressionChamp formulaireAA'>*/
/* */
/*         {{ form_start(formSuppressionChamp, {'attr': {'class': 'formulaireSuppressionChamp'}}) }}*/
/*         {{ form_errors(formSuppressionChamp) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Supprimer un champ</legend>       */
/* */
/*             <p>*/
/*                 {{ form_label(formSuppressionChamp.Nom, "Nom - Type - Profil", {'label_attr': {'class': 'labelFormulaireSuppressionChamp'}}) }} <br />*/
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
/*     <div class='DivFormulaireSelectionChamp formulaireAA'>*/
/* */
/*         {{ form_start(formSelectionChamp, {'attr': {'class': 'formulaireSelectionChamp'}}) }}*/
/*         {{ form_errors(formSelectionChamp) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Editer un champ de données</legend>       */
/* */
/*             <p>*/
/*                 {{ form_label(formSelectionChamp.Champs, "Champ :", {'label_attr': {'class': 'labelFormulaireSelectionChamp'}}) }}*/
/*                 {{ form_errors(formSelectionChamp.Champs) }}*/
/*                 {{ form_widget(formSelectionChamp.Champs, {'attr': {'class': 'selectFormulaireSelectionChamp' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_widget(formSelectionChamp._token) }} */
/* */
/*                 {{ form_widget(formSelectionChamp.Editer, {'attr': {'class': 'submitFormulaireSelectionChamp', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formSelectionChamp) }}*/
/* */
/*     </div>*/
/* */
/*     <div id="DivFormulaireAAModele" class="titreFormulaireAA" onclick="*/
/*             assistantAffaireToggle([*/
/*                 $('#DivFormulaireSelectionDossier'),*/
/*                 $('#DivFormulaireSelectionVersion'),*/
/*                 $('.DivFormulaireAjoutFichier')*/
/*             ], $(this));*/
/*             Recherche('.selectFormulaireSelectionVersion');">*/
/*         <h4> Modèles <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='formulaireAAImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='formulaireAAImgDown'> </h4>*/
/*     </div>*/
/* */
/*     <div class='DivFormulaireAjoutFichier formulaireAA'>*/
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
/*             <legend>Ajouter un fichier</legend>*/
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
/*     <div id='DivFormulaireSelectionDossier' class="formulaireAA">*/
/* */
/*         {{ form_start(formSelectionDossier, {'attr': {'class': 'formulaireSelectionDossier'}}) }}*/
/*         {{ form_errors(formSelectionDossier) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Profil</legend>*/
/* */
/*             {{ form_label(formSelectionDossier.profil, "Selection du profil :", {'label_attr': {'class': 'labelFormulaireSelectionDossier'}}) }}*/
/*             {{ form_errors(formSelectionDossier.profil) }}*/
/*             {{ form_widget(formSelectionDossier.profil, {'attr': {'class': 'selectFormulaireSelectionDossier'}}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formSelectionDossier) }}*/
/* */
/*     </div>*/
/* */
/*     <div id='DivFormulaireSelectionVersion' class="formulaireAA">*/
/*         {{ form_start(formSelectionVersion, {'attr': {'class': 'formulaireSelectionVersion'}}) }}*/
/*         {{ form_errors(formSelectionVersion) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Selection du modèle</legend>*/
/* */
/*             <p>*/
/*                 <label for="rechercehSuivi">Recherche</label>*/
/*                 <input placeholder="Ex : Ventes 2016" type="text" id="rechercehSuivi"/>*/
/*                 {{ form_errors(formSelectionVersion.Suivi) }}*/
/*                 {{ form_widget(formSelectionVersion.Suivi, {'attr': {'class': 'selectFormulaireSelectionVersion', 'size': 15}}) }}*/
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
