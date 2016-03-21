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
        $__internal_3a94bd7c17212acd3aeb560ed871e277a5670f3aa5a6675efe88cb11f7a08be9 = $this->env->getExtension("native_profiler");
        $__internal_3a94bd7c17212acd3aeb560ed871e277a5670f3aa5a6675efe88cb11f7a08be9->enter($__internal_3a94bd7c17212acd3aeb560ed871e277a5670f3aa5a6675efe88cb11f7a08be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a94bd7c17212acd3aeb560ed871e277a5670f3aa5a6675efe88cb11f7a08be9->leave($__internal_3a94bd7c17212acd3aeb560ed871e277a5670f3aa5a6675efe88cb11f7a08be9_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ab96302e828ef29ff3f28b21cc02f4f70fca7d3cdcf5fdd0c4cd581520ec2891 = $this->env->getExtension("native_profiler");
        $__internal_ab96302e828ef29ff3f28b21cc02f4f70fca7d3cdcf5fdd0c4cd581520ec2891->enter($__internal_ab96302e828ef29ff3f28b21cc02f4f70fca7d3cdcf5fdd0c4cd581520ec2891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Administration assistant d'affaires ";
        
        $__internal_ab96302e828ef29ff3f28b21cc02f4f70fca7d3cdcf5fdd0c4cd581520ec2891->leave($__internal_ab96302e828ef29ff3f28b21cc02f4f70fca7d3cdcf5fdd0c4cd581520ec2891_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_9c7f0ac56918b1ef748b4f2edf170a09d4856cdf6a95bffb6949f69f211c6201 = $this->env->getExtension("native_profiler");
        $__internal_9c7f0ac56918b1ef748b4f2edf170a09d4856cdf6a95bffb6949f69f211c6201->enter($__internal_9c7f0ac56918b1ef748b4f2edf170a09d4856cdf6a95bffb6949f69f211c6201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_9c7f0ac56918b1ef748b4f2edf170a09d4856cdf6a95bffb6949f69f211c6201->leave($__internal_9c7f0ac56918b1ef748b4f2edf170a09d4856cdf6a95bffb6949f69f211c6201_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_cdc9acc9b92bd70f2b178e09ded2efba54dc25d194090ad13520f3d28dbb116b = $this->env->getExtension("native_profiler");
        $__internal_cdc9acc9b92bd70f2b178e09ded2efba54dc25d194090ad13520f3d28dbb116b->enter($__internal_cdc9acc9b92bd70f2b178e09ded2efba54dc25d194090ad13520f3d28dbb116b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), 'form_start', array("attr" => array("class" => "formulaireAdministrationAjoutProfil")));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter un profil</legend>

            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutProfil"), "label" => "Nom :"));
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Nom", array()), 'errors');
        echo "
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutProfil")));
        echo "

            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "_token", array()), 'widget');
        echo "

            ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationAjoutProfil", "class" => "boutonFormulaire")));
        echo "

        </fieldset>

        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutProfil"]) ? $context["formAjoutProfil"] : $this->getContext($context, "formAjoutProfil")), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSuppressionProfil' class='formulaireAA'>

        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), 'form_start', array("attr" => array("class" => "formulaireAdministrationSuppressionProfil")));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer un profil</legend>

            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationSuppressionProfil"), "label" => "Nom :"));
        echo "
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Nom", array()), 'errors');
        echo "
            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationSuppressionProfil")));
        echo "

            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "_token", array()), 'widget');
        echo "

            ";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationSuppressionProfil", "class" => "boutonFormulaire")));
        echo "

        </fieldset> 

        ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionProfil"]) ? $context["formSuppresionProfil"] : $this->getContext($context, "formSuppresionProfil")), 'form_end');
        echo "

    </div>

    <div class=\"titreFormulaireAA\" onclick=\"
            assistantAffaireToggle([
                \$('.DivFormulaireAjoutChamp'),
                \$('.DivFormulaireSuppressionChamp'),
                \$('.DivFormulaireSelectionChamp')
            ], \$(this));
            resizeFormLabelAndData(\$('.labelFormulaireAjoutChamp'), \$('.champFormulaireAjoutChamp'), \$('.formulaireAjoutChamp p:nth-child(2)'));
         \">
        <h4> Champs <img src='";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='formulaireAAImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='formulaireAAImgDown'> </h4>
    </div>

    <div class='DivFormulaireAjoutChamp formulaireAA'>

        ";
        // line 76
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), 'form_start', array("attr" => array("class" => "formulaireAjoutChamp")));
        echo "
        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), 'errors');
        echo "

        <fieldset>

            <legend><p>Ajouter un champ</p></legend>

            <p>
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Type", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Type :"));
        echo "
                ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Type", array()), 'errors');
        echo "
                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Type", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutChamp champFormulaireAjoutChamp")));
        echo "

                <br />

                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "_token", array()), 'widget');
        echo "

                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Nom :"));
        echo "
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Nom", array()), 'errors');
        echo "
                ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Nom", array()), 'widget', array("attr" => array("class" => "texteFormulaireAjoutChamp champFormulaireAjoutChamp")));
        echo "

                <br />

                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "AjoutDonnees", array()), 'label', array("label" => "Permettre l'ajout de donnée supplémentaire par l'utilisateur"));
        echo "
                ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "AjoutDonnees", array()), 'errors');
        echo "
                ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "AjoutDonnees", array()), 'widget', array("attr" => array("class" => "checkboxFormulaireAjoutChamp")));
        echo "

                <br />

                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Profil :"));
        echo "
                ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Profil", array()), 'errors');
        echo "
                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Profil", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutChamp champFormulaireAjoutChamp")));
        echo "

                <br />

                ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionChamp formulaireAA'>

        ";
        // line 121
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), 'form_start', array("attr" => array("class" => "formulaireSuppressionChamp")));
        echo "
        ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer un champ</legend>       

            <p>
                ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSuppressionChamp"), "label" => "Nom - Type - Profil"));
        echo " <br />
                ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Nom", array()), 'errors');
        echo "
                ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Nom", array()), 'widget', array("attr" => array("class" => "selectFormulaireSuppressionChamp")));
        echo "
            </p>

            <p>
                ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "_token", array()), 'widget');
        echo " 

                ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSuppressionChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 142
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionChamp"]) ? $context["formSuppressionChamp"] : $this->getContext($context, "formSuppressionChamp")), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSelectionChamp formulaireAA'>

        ";
        // line 148
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : $this->getContext($context, "formSelectionChamp")), 'form_start', array("attr" => array("class" => "formulaireSelectionChamp")));
        echo "
        ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : $this->getContext($context, "formSelectionChamp")), 'errors');
        echo "

        <fieldset>

            <legend>Editer un champ de données</legend>       

            <p>
                ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : $this->getContext($context, "formSelectionChamp")), "Champs", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionChamp"), "label" => "Champ :"));
        echo "
                ";
        // line 157
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : $this->getContext($context, "formSelectionChamp")), "Champs", array()), 'errors');
        echo "
                ";
        // line 158
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : $this->getContext($context, "formSelectionChamp")), "Champs", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionChamp")));
        echo "
            </p>

            <p>
                ";
        // line 162
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : $this->getContext($context, "formSelectionChamp")), "_token", array()), 'widget');
        echo " 

                ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : $this->getContext($context, "formSelectionChamp")), "Editer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSelectionChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 169
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionChamp"]) ? $context["formSelectionChamp"] : $this->getContext($context, "formSelectionChamp")), 'form_end');
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
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='formulaireAAImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='formulaireAAImgDown'> </h4>
    </div>

    <div class='DivFormulaireAjoutFichier formulaireAA'>

        ";
        // line 185
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), 'form_start', array("attr" => array("class" => "formulaireAjoutFichier")));
        echo "
        ";
        // line 186
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), 'errors');
        echo "

        <fieldset>

            <p>
                ";
        // line 191
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "Profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutFichier"), "label" => "Profil :"));
        echo "
                ";
        // line 192
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "Profil", array()), 'errors');
        echo "
                ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "Profil", array()), 'widget', array("attr" => array("class" => "fileFormulaireAjoutFichier")));
        echo "
            </p>

            <legend>Ajouter un fichier</legend>

            <p>
                ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "file", array()), 'errors');
        echo "
                ";
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "file", array()), 'widget', array("attr" => array("class" => "fileFormulaireAjoutFichier")));
        echo "

                ";
        // line 202
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "_token", array()), 'widget');
        echo " <br /><br />

                ";
        // line 204
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAjoutFichier", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 209
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutFichier"]) ? $context["formAjoutFichier"] : $this->getContext($context, "formAjoutFichier")), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSelectionDossier' class=\"formulaireAA\">

        ";
        // line 215
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), 'form_start', array("attr" => array("class" => "formulaireSelectionDossier")));
        echo "
        ";
        // line 216
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), 'errors');
        echo "

        <fieldset>

            <legend>Profil</legend>

            ";
        // line 222
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), "profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSelectionDossier"), "label" => "Selection du profil :"));
        echo "
            ";
        // line 223
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), "profil", array()), 'errors');
        echo "
            ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), "profil", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionDossier")));
        echo "

        </fieldset>

        ";
        // line 228
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionDossier"]) ? $context["formSelectionDossier"] : $this->getContext($context, "formSelectionDossier")), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireSelectionVersion' class=\"formulaireAA\">
        ";
        // line 233
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), 'form_start', array("attr" => array("class" => "formulaireSelectionVersion")));
        echo "
        ";
        // line 234
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), 'errors');
        echo "

        <fieldset>

            <legend>Selection du modèle</legend>

            <p>
                <label for=\"rechercehSuivi\">Recherche</label>
                <input placeholder=\"Ex : Ventes 2016\" type=\"text\" id=\"rechercehSuivi\"/>
                ";
        // line 243
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "Suivi", array()), 'errors');
        echo "
                ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "Suivi", array()), 'widget', array("attr" => array("class" => "selectFormulaireSelectionVersion", "size" => 15)));
        echo "
            </p>

            ";
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "_token", array()), 'widget');
        echo "

            <p>
                ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "Editer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSelectionVersion")));
        echo "
                ";
        // line 251
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSelectionVersion")));
        echo "
            </p>

        </fieldset>

        ";
        // line 256
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSelectionVersion"]) ? $context["formSelectionVersion"] : $this->getContext($context, "formSelectionVersion")), 'form_end');
        echo "

    </div>

    <div id=\"DivFormulaireAAModele\" class=\"titreFormulaireAA\" onclick=\"
            assistantAffaireToggle([
                \$('#DivFormulaireAjoutClient')
            ], \$(this));
            Recherche('.selectFormulaireSelectionVersion');
            resizeFormLabelAndData(\$('.labelFormulaireAdministrationAjoutClient'), \$('.champFormulaireRemplissageAjoutClient'), \$('.formulaireAdministrationAjoutClient p'));\"
         >
        <h4> Clients <img src='";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='formulaireAAImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='formulaireAAImgDown'> </h4>
    </div>

    <div id='DivFormulaireAjoutClient' class='formulaireAA'>

        ";
        // line 272
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), 'form_start', array("attr" => array("class" => "formulaireAdministrationAjoutClient")));
        echo "
        ";
        // line 273
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter un client</legend>

            <p>
                ";
        // line 280
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutClient"), "label" => "Nom :"));
        echo "
                ";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "Nom", array()), 'errors');
        echo "
                ";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "Nom", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutClient champFormulaireRemplissageAjoutClient")));
        echo "

                <br />

                ";
        // line 286
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "Adresse", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutClient"), "label" => "Adresse :"));
        echo "
                ";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "Adresse", array()), 'errors');
        echo "
                ";
        // line 288
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "Adresse", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutClient champFormulaireRemplissageAjoutClient")));
        echo "

                <br />

                ";
        // line 292
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "Fax", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutClient"), "label" => "Fax :"));
        echo "
                ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "Fax", array()), 'errors');
        echo "
                ";
        // line 294
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "Fax", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutClient champFormulaireRemplissageAjoutClient")));
        echo "

                ";
        // line 296
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "_token", array()), 'widget');
        echo "

                <br />

                ";
        // line 300
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationAjoutClient", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset>

        ";
        // line 305
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), 'form_end');
        echo "

        <script>
            function checkConstraint(Champ, regexp, message) {

                var reg = new RegExp(regexp);

                Champ.keyup(function () {
                    if (!reg.test(Champ.val())) {
                        Champ.css('border-color', 'red');
                        Champ[0].setCustomValidity(message);
                    } else {
                        Champ.css('border-color', 'initial');
                        Champ[0].setCustomValidity('');
                    }
                });
            }
            checkConstraint(\$('#formAjoutClient_Fax'), /(0|(\\\\+33))[1-9][0-9]{8}/, \"Le numéro dois être de la forme '0634691934' ou '+330634691934'.\");
        </script>

    </div>

    <div id=\"DivFormulaireAAModele\" class=\"titreFormulaireAA\" onclick=\"
            assistantAffaireToggle([
                \$('#DivFormulaireAjoutInterlocuteur')
            ], \$(this));
            resizeFormLabelAndData(\$('.labelFormulaireAdministrationAjoutInterlocuteur'), \$('.champFormulaireRemplissageAjoutInterlocuteur'), \$('.formulaireAdministrationAjoutInterlocuteur p'));\"
         >
        <h4> Interlocuteurs <img src='";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='formulaireAAImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='formulaireAAImgDown'> </h4>
    </div>

    <div id='DivFormulaireAjoutInterlocuteur' class='formulaireAA'>

        ";
        // line 338
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), 'form_start', array("attr" => array("class" => "formulaireAdministrationAjoutInterlocuteur")));
        echo "
        ";
        // line 339
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter un interlocuteur</legend>

            <p>
                ";
        // line 346
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Client", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutInterlocuteur"), "label" => "Client :"));
        echo "
                ";
        // line 347
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Client", array()), 'errors');
        echo "
                ";
        // line 348
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Client", array()), 'widget', array("attr" => array("class" => "selectFormulaireAdministrationAjoutClient champFormulaireRemplissageAjoutInterlocuteur")));
        echo "

                <br />

                ";
        // line 352
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Email", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutInterlocuteur"), "label" => "Email :"));
        echo "
                ";
        // line 353
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Email", array()), 'errors');
        echo "
                ";
        // line 354
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Email", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutInterlocuteur champFormulaireRemplissageAjoutInterlocuteur")));
        echo "

                <br />

                ";
        // line 358
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Fax", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutInterlocuteur"), "label" => "Fax :"));
        echo "
                ";
        // line 359
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Fax", array()), 'errors');
        echo "
                ";
        // line 360
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Fax", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutInterlocuteur champFormulaireRemplissageAjoutInterlocuteur")));
        echo "

                ";
        // line 362
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "_token", array()), 'widget');
        echo "

                <br />

                ";
        // line 366
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Telephone", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutInterlocuteur"), "label" => "Téléphone :"));
        echo "
                ";
        // line 367
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Telephone", array()), 'errors');
        echo "
                ";
        // line 368
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Telephone", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutInterlocuteur champFormulaireRemplissageAjoutInterlocuteur")));
        echo "

                <br />

                ";
        // line 372
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Portable", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAdministrationAjoutInterlocuteur"), "label" => "Portable :"));
        echo "
                ";
        // line 373
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Portable", array()), 'errors');
        echo "
                ";
        // line 374
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Portable", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutInterlocuteur champFormulaireRemplissageAjoutInterlocuteur")));
        echo "

                <br />

                ";
        // line 378
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutInterlocuteur"]) ? $context["formAjoutInterlocuteur"] : $this->getContext($context, "formAjoutInterlocuteur")), "Ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireAdministrationAjoutClient", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset>

        ";
        // line 383
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutClient"]) ? $context["formAjoutClient"] : $this->getContext($context, "formAjoutClient")), 'form_end');
        echo "

        <script>
            function checkConstraint(Champ, regexp, message) {

                var reg = new RegExp(regexp);

                Champ.keyup(function () {
                    if (!reg.test(Champ.val())) {
                        Champ.css('border-color', 'red');
                        Champ[0].setCustomValidity(message);
                    } else {
                        Champ.css('border-color', 'initial');
                        Champ[0].setCustomValidity('');
                    }
                });
            }
            checkConstraint(\$('#formAjoutInterlocuteur_Fax'), /(0|(\\\\+33)|(0033))[1-9][0-9]{8}/, \"Le numéro dois être de la forme '0634691934' ou '+33634691934'.\");
            checkConstraint(\$('#formAjoutInterlocuteur_Telephone'), /(0|(\\\\+33)|(0033))[1-9][0-9]{8}/, \"Le numéro dois être de la forme '0634691934' ou '+33634691934'.\");
            checkConstraint(\$('#formAjoutInterlocuteur_Portable'), /(0|(\\\\+33)|(0033))[1-9][0-9]{8}/, \"Le numéro dois être de la forme '0634691934' ou '+33634691934'.\");
            checkConstraint(\$('#formAjoutInterlocuteur_Email'), /^[-a-z0-9~!\$%^&*_=+}{\\'?]+(\\.[-a-z0-9~!\$%^&*_=+}{\\'?]+)*@([a-z0-9_][-a-z0-9_]*(\\.[-a-z0-9_]+)*\\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}))(:[0-9]{1,5})?\$/i, \"L'adresse email doit être de la forme 'prénom.nom@domain.fr'.\");
        </script>

    </div>

";
        
        $__internal_cdc9acc9b92bd70f2b178e09ded2efba54dc25d194090ad13520f3d28dbb116b->leave($__internal_cdc9acc9b92bd70f2b178e09ded2efba54dc25d194090ad13520f3d28dbb116b_prof);

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
        return array (  786 => 383,  778 => 378,  771 => 374,  767 => 373,  763 => 372,  756 => 368,  752 => 367,  748 => 366,  741 => 362,  736 => 360,  732 => 359,  728 => 358,  721 => 354,  717 => 353,  713 => 352,  706 => 348,  702 => 347,  698 => 346,  688 => 339,  684 => 338,  674 => 333,  643 => 305,  635 => 300,  628 => 296,  623 => 294,  619 => 293,  615 => 292,  608 => 288,  604 => 287,  600 => 286,  593 => 282,  589 => 281,  585 => 280,  575 => 273,  571 => 272,  561 => 267,  547 => 256,  539 => 251,  535 => 250,  529 => 247,  523 => 244,  519 => 243,  507 => 234,  503 => 233,  495 => 228,  488 => 224,  484 => 223,  480 => 222,  471 => 216,  467 => 215,  458 => 209,  450 => 204,  445 => 202,  440 => 200,  436 => 199,  427 => 193,  423 => 192,  419 => 191,  411 => 186,  407 => 185,  397 => 180,  383 => 169,  375 => 164,  370 => 162,  363 => 158,  359 => 157,  355 => 156,  345 => 149,  341 => 148,  332 => 142,  324 => 137,  319 => 135,  312 => 131,  308 => 130,  304 => 129,  294 => 122,  290 => 121,  281 => 115,  273 => 110,  266 => 106,  262 => 105,  258 => 104,  251 => 100,  247 => 99,  243 => 98,  236 => 94,  232 => 93,  228 => 92,  223 => 90,  216 => 86,  212 => 85,  208 => 84,  198 => 77,  194 => 76,  184 => 71,  169 => 59,  162 => 55,  157 => 53,  152 => 51,  148 => 50,  144 => 49,  135 => 43,  131 => 42,  122 => 36,  115 => 32,  110 => 30,  105 => 28,  101 => 27,  97 => 26,  88 => 20,  84 => 19,  74 => 14,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*     <div class="titreFormulaireAA" onclick="*/
/*             assistantAffaireToggle([*/
/*                 $('.DivFormulaireAjoutChamp'),*/
/*                 $('.DivFormulaireSuppressionChamp'),*/
/*                 $('.DivFormulaireSelectionChamp')*/
/*             ], $(this));*/
/*             resizeFormLabelAndData($('.labelFormulaireAjoutChamp'), $('.champFormulaireAjoutChamp'), $('.formulaireAjoutChamp p:nth-child(2)'));*/
/*          ">*/
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
/*             <legend><p>Ajouter un champ</p></legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutChamp.Type, "Type :", {'label_attr': {'class': 'labelFormulaireAjoutChamp'}}) }}*/
/*                 {{ form_errors(formAjoutChamp.Type) }}*/
/*                 {{ form_widget(formAjoutChamp.Type, {'attr': {'class': 'selectFormulaireAjoutChamp champFormulaireAjoutChamp' }}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_widget(formAjoutChamp._token) }}*/
/* */
/*                 {{ form_label(formAjoutChamp.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAjoutChamp'}}) }}*/
/*                 {{ form_errors(formAjoutChamp.Nom) }}*/
/*                 {{ form_widget(formAjoutChamp.Nom, {'attr': {'class': 'texteFormulaireAjoutChamp champFormulaireAjoutChamp' }}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(formAjoutChamp.AjoutDonnees, "Permettre l'ajout de donnée supplémentaire par l'utilisateur") }}*/
/*                 {{ form_errors(formAjoutChamp.AjoutDonnees) }}*/
/*                 {{ form_widget(formAjoutChamp.AjoutDonnees, {'attr': {'class': 'checkboxFormulaireAjoutChamp' }}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(formAjoutChamp.Profil, "Profil :", {'label_attr': {'class': 'labelFormulaireAjoutChamp'}}) }}*/
/*                 {{ form_errors(formAjoutChamp.Profil) }}*/
/*                 {{ form_widget(formAjoutChamp.Profil, {'attr': {'class': 'selectFormulaireAjoutChamp champFormulaireAjoutChamp' }}) }}*/
/* */
/*                 <br />*/
/* */
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
/*     <div id="DivFormulaireAAModele" class="titreFormulaireAA" onclick="*/
/*             assistantAffaireToggle([*/
/*                 $('#DivFormulaireAjoutClient')*/
/*             ], $(this));*/
/*             Recherche('.selectFormulaireSelectionVersion');*/
/*             resizeFormLabelAndData($('.labelFormulaireAdministrationAjoutClient'), $('.champFormulaireRemplissageAjoutClient'), $('.formulaireAdministrationAjoutClient p'));"*/
/*          >*/
/*         <h4> Clients <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='formulaireAAImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='formulaireAAImgDown'> </h4>*/
/*     </div>*/
/* */
/*     <div id='DivFormulaireAjoutClient' class='formulaireAA'>*/
/* */
/*         {{ form_start(formAjoutClient, {'attr': {'class': 'formulaireAdministrationAjoutClient'}}) }}*/
/*         {{ form_errors(formAjoutClient) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Ajouter un client</legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutClient.Nom, "Nom :", {'label_attr': {'class': 'labelFormulaireAdministrationAjoutClient'}}) }}*/
/*                 {{ form_errors(formAjoutClient.Nom) }}*/
/*                 {{ form_widget(formAjoutClient.Nom, {'attr': {'class': 'textFormulaireAdministrationAjoutClient champFormulaireRemplissageAjoutClient'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(formAjoutClient.Adresse, "Adresse :", {'label_attr': {'class': 'labelFormulaireAdministrationAjoutClient'}}) }}*/
/*                 {{ form_errors(formAjoutClient.Adresse) }}*/
/*                 {{ form_widget(formAjoutClient.Adresse, {'attr': {'class': 'textFormulaireAdministrationAjoutClient champFormulaireRemplissageAjoutClient'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(formAjoutClient.Fax, "Fax :", {'label_attr': {'class': 'labelFormulaireAdministrationAjoutClient'}}) }}*/
/*                 {{ form_errors(formAjoutClient.Fax) }}*/
/*                 {{ form_widget(formAjoutClient.Fax, {'attr': {'class': 'textFormulaireAdministrationAjoutClient champFormulaireRemplissageAjoutClient'}}) }}*/
/* */
/*                 {{ form_widget(formAjoutClient._token) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_widget(formAjoutClient.Ajouter, {'attr': {'class': 'submitFormulaireAdministrationAjoutClient', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formAjoutClient) }}*/
/* */
/*         <script>*/
/*             function checkConstraint(Champ, regexp, message) {*/
/* */
/*                 var reg = new RegExp(regexp);*/
/* */
/*                 Champ.keyup(function () {*/
/*                     if (!reg.test(Champ.val())) {*/
/*                         Champ.css('border-color', 'red');*/
/*                         Champ[0].setCustomValidity(message);*/
/*                     } else {*/
/*                         Champ.css('border-color', 'initial');*/
/*                         Champ[0].setCustomValidity('');*/
/*                     }*/
/*                 });*/
/*             }*/
/*             checkConstraint($('#formAjoutClient_Fax'), /(0|(\\+33))[1-9][0-9]{8}/, "Le numéro dois être de la forme '0634691934' ou '+330634691934'.");*/
/*         </script>*/
/* */
/*     </div>*/
/* */
/*     <div id="DivFormulaireAAModele" class="titreFormulaireAA" onclick="*/
/*             assistantAffaireToggle([*/
/*                 $('#DivFormulaireAjoutInterlocuteur')*/
/*             ], $(this));*/
/*             resizeFormLabelAndData($('.labelFormulaireAdministrationAjoutInterlocuteur'), $('.champFormulaireRemplissageAjoutInterlocuteur'), $('.formulaireAdministrationAjoutInterlocuteur p'));"*/
/*          >*/
/*         <h4> Interlocuteurs <img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Right-32.png') }}' class='formulaireAAImg'><img src='{{ asset('bundles/noxintranetadministration/images/Arrow-Down-32.png') }}' class='formulaireAAImgDown'> </h4>*/
/*     </div>*/
/* */
/*     <div id='DivFormulaireAjoutInterlocuteur' class='formulaireAA'>*/
/* */
/*         {{ form_start(formAjoutInterlocuteur, {'attr': {'class': 'formulaireAdministrationAjoutInterlocuteur'}}) }}*/
/*         {{ form_errors(formAjoutInterlocuteur) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Ajouter un interlocuteur</legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formAjoutInterlocuteur.Client, "Client :", {'label_attr': {'class': 'labelFormulaireAdministrationAjoutInterlocuteur'}}) }}*/
/*                 {{ form_errors(formAjoutInterlocuteur.Client) }}*/
/*                 {{ form_widget(formAjoutInterlocuteur.Client, {'attr': {'class': 'selectFormulaireAdministrationAjoutClient champFormulaireRemplissageAjoutInterlocuteur'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(formAjoutInterlocuteur.Email, "Email :", {'label_attr': {'class': 'labelFormulaireAdministrationAjoutInterlocuteur'}}) }}*/
/*                 {{ form_errors(formAjoutInterlocuteur.Email) }}*/
/*                 {{ form_widget(formAjoutInterlocuteur.Email, {'attr': {'class': 'textFormulaireAdministrationAjoutInterlocuteur champFormulaireRemplissageAjoutInterlocuteur'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(formAjoutInterlocuteur.Fax, "Fax :", {'label_attr': {'class': 'labelFormulaireAdministrationAjoutInterlocuteur'}}) }}*/
/*                 {{ form_errors(formAjoutInterlocuteur.Fax) }}*/
/*                 {{ form_widget(formAjoutInterlocuteur.Fax, {'attr': {'class': 'textFormulaireAdministrationAjoutInterlocuteur champFormulaireRemplissageAjoutInterlocuteur'}}) }}*/
/* */
/*                 {{ form_widget(formAjoutInterlocuteur._token) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(formAjoutInterlocuteur.Telephone, "Téléphone :", {'label_attr': {'class': 'labelFormulaireAdministrationAjoutInterlocuteur'}}) }}*/
/*                 {{ form_errors(formAjoutInterlocuteur.Telephone) }}*/
/*                 {{ form_widget(formAjoutInterlocuteur.Telephone, {'attr': {'class': 'textFormulaireAdministrationAjoutInterlocuteur champFormulaireRemplissageAjoutInterlocuteur'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(formAjoutInterlocuteur.Portable, "Portable :", {'label_attr': {'class': 'labelFormulaireAdministrationAjoutInterlocuteur'}}) }}*/
/*                 {{ form_errors(formAjoutInterlocuteur.Portable) }}*/
/*                 {{ form_widget(formAjoutInterlocuteur.Portable, {'attr': {'class': 'textFormulaireAdministrationAjoutInterlocuteur champFormulaireRemplissageAjoutInterlocuteur'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_widget(formAjoutInterlocuteur.Ajouter, {'attr': {'class': 'submitFormulaireAdministrationAjoutClient', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formAjoutClient) }}*/
/* */
/*         <script>*/
/*             function checkConstraint(Champ, regexp, message) {*/
/* */
/*                 var reg = new RegExp(regexp);*/
/* */
/*                 Champ.keyup(function () {*/
/*                     if (!reg.test(Champ.val())) {*/
/*                         Champ.css('border-color', 'red');*/
/*                         Champ[0].setCustomValidity(message);*/
/*                     } else {*/
/*                         Champ.css('border-color', 'initial');*/
/*                         Champ[0].setCustomValidity('');*/
/*                     }*/
/*                 });*/
/*             }*/
/*             checkConstraint($('#formAjoutInterlocuteur_Fax'), /(0|(\\+33)|(0033))[1-9][0-9]{8}/, "Le numéro dois être de la forme '0634691934' ou '+33634691934'.");*/
/*             checkConstraint($('#formAjoutInterlocuteur_Telephone'), /(0|(\\+33)|(0033))[1-9][0-9]{8}/, "Le numéro dois être de la forme '0634691934' ou '+33634691934'.");*/
/*             checkConstraint($('#formAjoutInterlocuteur_Portable'), /(0|(\\+33)|(0033))[1-9][0-9]{8}/, "Le numéro dois être de la forme '0634691934' ou '+33634691934'.");*/
/*             checkConstraint($('#formAjoutInterlocuteur_Email'), /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i, "L'adresse email doit être de la forme 'prénom.nom@domain.fr'.");*/
/*         </script>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
