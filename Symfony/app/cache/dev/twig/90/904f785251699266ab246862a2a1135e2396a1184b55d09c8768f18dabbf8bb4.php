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
        $__internal_0dfcb2fbf6a028b7df0b3e290804cd1cc8618f06142c4c97ad53c2a8ba8a053d = $this->env->getExtension("native_profiler");
        $__internal_0dfcb2fbf6a028b7df0b3e290804cd1cc8618f06142c4c97ad53c2a8ba8a053d->enter($__internal_0dfcb2fbf6a028b7df0b3e290804cd1cc8618f06142c4c97ad53c2a8ba8a053d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dfcb2fbf6a028b7df0b3e290804cd1cc8618f06142c4c97ad53c2a8ba8a053d->leave($__internal_0dfcb2fbf6a028b7df0b3e290804cd1cc8618f06142c4c97ad53c2a8ba8a053d_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_a1f4b3f82ce9a74d418c530447d5f168986f4f663e2e19df87ae50cc6ad2daad = $this->env->getExtension("native_profiler");
        $__internal_a1f4b3f82ce9a74d418c530447d5f168986f4f663e2e19df87ae50cc6ad2daad->enter($__internal_a1f4b3f82ce9a74d418c530447d5f168986f4f663e2e19df87ae50cc6ad2daad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Administration assistant d'affaires ";
        
        $__internal_a1f4b3f82ce9a74d418c530447d5f168986f4f663e2e19df87ae50cc6ad2daad->leave($__internal_a1f4b3f82ce9a74d418c530447d5f168986f4f663e2e19df87ae50cc6ad2daad_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_65cdc6a47be5fb8cf5aa5c4cc9d99e8af7dfa1d76e7433daa282eea76655d481 = $this->env->getExtension("native_profiler");
        $__internal_65cdc6a47be5fb8cf5aa5c4cc9d99e8af7dfa1d76e7433daa282eea76655d481->enter($__internal_65cdc6a47be5fb8cf5aa5c4cc9d99e8af7dfa1d76e7433daa282eea76655d481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_65cdc6a47be5fb8cf5aa5c4cc9d99e8af7dfa1d76e7433daa282eea76655d481->leave($__internal_65cdc6a47be5fb8cf5aa5c4cc9d99e8af7dfa1d76e7433daa282eea76655d481_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d3f45bb5e672b17b1a24c7399080c57690f40662719fb0004961314bc82db899 = $this->env->getExtension("native_profiler");
        $__internal_d3f45bb5e672b17b1a24c7399080c57690f40662719fb0004961314bc82db899->enter($__internal_d3f45bb5e672b17b1a24c7399080c57690f40662719fb0004961314bc82db899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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

            <legend>Ajouter un profil</legend>

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

            <legend>Supprimer un profil</legend>

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

            <legend>Ajouter un fichier</legend>

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

            <legend>Ajouter un champ</legend>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Profil :"));
        echo "
                ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Profil", array()), 'errors');
        echo "
                ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Profil", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutChamp")));
        echo "

                ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "_token", array()), 'widget');
        echo "
            </p>

            <p>
                ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 135
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionChamp'>

        ";
        // line 141
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), 'form_start', array("attr" => array("class" => "formulaireSuppressionChamp")));
        echo "
        ";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer un champ</legend>       

            <p>
                ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSuppressionChamp"), "label" => "Nom :"));
        echo "
                ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Nom", array()), 'errors');
        echo "
                ";
        // line 151
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireSuppressionChamp")));
        echo "
            </p>

            <p>
                ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "_token", array()), 'widget');
        echo " 

                ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSuppressionChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 162
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), 'form_end');
        echo "

    </div>


    <div class=\"sousMessageAcceuil\">
        <h4> Suivis : </h4>
    </div>

    <div id='DivFormulaireSelectionDossier'>

        ";
        // line 173
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), 'form_start', array("attr" => array("class" => "formulaireSelectionDossier")));
        echo "
        ";
        // line 174
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), 'errors');
        echo "

        <fieldset>

            <legend>Profil</legend>

            ";
        // line 180
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), "profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionDossier"), "label" => "Selection du profil :"));
        echo "
            ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), "profil", array()), 'errors');
        echo "
            ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), "profil", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionDossier")));
        echo "

        </fieldset>

        ";
        // line 186
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSelectionVersion'>
        ";
        // line 191
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), 'form_start', array("attr" => array("class" => "formulaireSelectionVersion")));
        echo "
        ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), 'errors');
        echo "

        <fieldset>

            <legend>Selection du suivi</legend>

            <p>
                ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "Suivi", array()), 'errors');
        echo "
                ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "Suivi", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionVersion", "size" => 15)));
        echo "
            </p>

            ";
        // line 203
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "_token", array()), 'widget');
        echo "

            <p>
                ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "Editer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSelectionVersion")));
        echo "
                ";
        // line 207
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSelectionVersion")));
        echo "
            </p>

        </fieldset>

        ";
        // line 212
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), 'form_end');
        echo "

    </div>

";
        
        $__internal_d3f45bb5e672b17b1a24c7399080c57690f40662719fb0004961314bc82db899->leave($__internal_d3f45bb5e672b17b1a24c7399080c57690f40662719fb0004961314bc82db899_prof);

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
        return array (  458 => 212,  450 => 207,  446 => 206,  440 => 203,  434 => 200,  430 => 199,  420 => 192,  416 => 191,  408 => 186,  401 => 182,  397 => 181,  393 => 180,  384 => 174,  380 => 173,  366 => 162,  358 => 157,  353 => 155,  346 => 151,  342 => 150,  338 => 149,  328 => 142,  324 => 141,  315 => 135,  307 => 130,  300 => 126,  295 => 124,  291 => 123,  287 => 122,  280 => 118,  275 => 116,  271 => 115,  267 => 114,  260 => 110,  256 => 109,  252 => 108,  242 => 101,  238 => 100,  225 => 90,  217 => 85,  212 => 83,  207 => 81,  203 => 80,  194 => 74,  190 => 73,  186 => 72,  178 => 67,  174 => 66,  160 => 55,  153 => 51,  148 => 49,  143 => 47,  139 => 46,  135 => 45,  126 => 39,  122 => 38,  113 => 32,  106 => 28,  101 => 26,  96 => 24,  92 => 23,  88 => 22,  79 => 16,  75 => 15,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*     <div id='DivFormulaireSuppressionProfil'>*/
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
/*             <legend>Ajouter un champ</legend>*/
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
/*     <div class='DivFormulaireSuppressionChamp'>*/
/* */
/*         {{ form_start(formSuppressionChamp, {'attr': {'class': 'formulaireSuppressionChamp'}}) }}*/
/*         {{ form_errors(formSuppressionChamp) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Supprimer un champ</legend>       */
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
/*     <div id='DivFormulaireSelectionVersion'>*/
/*         {{ form_start(formSelectionVersion, {'attr': {'class': 'formulaireSelectionVersion'}}) }}*/
/*         {{ form_errors(formSelectionVersion) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Selection du suivi</legend>*/
/* */
/*             <p>*/
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
