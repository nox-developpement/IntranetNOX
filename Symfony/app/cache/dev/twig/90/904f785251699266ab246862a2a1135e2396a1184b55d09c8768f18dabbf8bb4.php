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
        $__internal_8c8d7626fa8540032107c47c7bf6d503bd22e07e54f3022171f0039b4670c062 = $this->env->getExtension("native_profiler");
        $__internal_8c8d7626fa8540032107c47c7bf6d503bd22e07e54f3022171f0039b4670c062->enter($__internal_8c8d7626fa8540032107c47c7bf6d503bd22e07e54f3022171f0039b4670c062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaires.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c8d7626fa8540032107c47c7bf6d503bd22e07e54f3022171f0039b4670c062->leave($__internal_8c8d7626fa8540032107c47c7bf6d503bd22e07e54f3022171f0039b4670c062_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_794a24a72e12880f7040a4e6b45547e665be513b7861bb0521ee10fdec95696f = $this->env->getExtension("native_profiler");
        $__internal_794a24a72e12880f7040a4e6b45547e665be513b7861bb0521ee10fdec95696f->enter($__internal_794a24a72e12880f7040a4e6b45547e665be513b7861bb0521ee10fdec95696f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Administration assistant d'affaires ";
        
        $__internal_794a24a72e12880f7040a4e6b45547e665be513b7861bb0521ee10fdec95696f->leave($__internal_794a24a72e12880f7040a4e6b45547e665be513b7861bb0521ee10fdec95696f_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_bfd5783fc9f89e88ef63aad5aaf2d1b45d02773fc17d6e770479162550dffb40 = $this->env->getExtension("native_profiler");
        $__internal_bfd5783fc9f89e88ef63aad5aaf2d1b45d02773fc17d6e770479162550dffb40->enter($__internal_bfd5783fc9f89e88ef63aad5aaf2d1b45d02773fc17d6e770479162550dffb40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_bfd5783fc9f89e88ef63aad5aaf2d1b45d02773fc17d6e770479162550dffb40->leave($__internal_bfd5783fc9f89e88ef63aad5aaf2d1b45d02773fc17d6e770479162550dffb40_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_c72e874a4f29c1fcc6ae6ea03d8b0cdbc1490ebc11c91df0ce6127ad34002601 = $this->env->getExtension("native_profiler");
        $__internal_c72e874a4f29c1fcc6ae6ea03d8b0cdbc1490ebc11c91df0ce6127ad34002601->enter($__internal_c72e874a4f29c1fcc6ae6ea03d8b0cdbc1490ebc11c91df0ce6127ad34002601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
            ], \$(this));\">
        <h4> Champs <img src='";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Right-32.png"), "html", null, true);
        echo "' class='formulaireAAImg'><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-32.png"), "html", null, true);
        echo "' class='formulaireAAImgDown'> </h4>
    </div>

    <div class='DivFormulaireAjoutChamp formulaireAA'>

        ";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), 'form_start', array("attr" => array("class" => "formulaireAjoutChamp")));
        echo "
        ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), 'errors');
        echo "

        <fieldset>

            <legend><p>Ajouter un champ</p></legend>

            <p>
                ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Type", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Type :"));
        echo "
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Type", array()), 'errors');
        echo "
                ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Type", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutChamp")));
        echo "

                ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "_token", array()), 'widget');
        echo "
            </p>

            <p>
                ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Nom :"));
        echo "
                ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Nom", array()), 'errors');
        echo "
                ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Nom", array()), 'widget', array("attr" => array("class" => "texteFormulaireAjoutChamp")));
        echo "
            </p>

            <p>
                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "AjoutDonnees", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Permettre l'ajout de donnée supplémentaire par l'utilisateur"));
        echo "
                ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "AjoutDonnees", array()), 'errors');
        echo "
                ";
        // line 98
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "AjoutDonnees", array()), 'widget', array("attr" => array("class" => "checkboxFormulaireAjoutChamp")));
        echo "
            </p>

            <p>
                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Profil", array()), 'label', array("label_attr" => array("class" => "labelFormulaireAjoutChamp"), "label" => "Profil :"));
        echo "
                ";
        // line 103
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Profil", array()), 'errors');
        echo "
                ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "Profil", array()), 'widget', array("attr" => array("class" => "selectFormulaireAjoutChamp")));
        echo "

                ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutChamp"]) ? $context["formAjoutChamp"] : $this->getContext($context, "formAjoutChamp")), "_token", array()), 'widget');
        echo "
            </p>

            <p>
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

";
        
        $__internal_c72e874a4f29c1fcc6ae6ea03d8b0cdbc1490ebc11c91df0ce6127ad34002601->leave($__internal_c72e874a4f29c1fcc6ae6ea03d8b0cdbc1490ebc11c91df0ce6127ad34002601_prof);

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
        return array (  550 => 256,  542 => 251,  538 => 250,  532 => 247,  526 => 244,  522 => 243,  510 => 234,  506 => 233,  498 => 228,  491 => 224,  487 => 223,  483 => 222,  474 => 216,  470 => 215,  461 => 209,  453 => 204,  448 => 202,  443 => 200,  439 => 199,  430 => 193,  426 => 192,  422 => 191,  414 => 186,  410 => 185,  400 => 180,  386 => 169,  378 => 164,  373 => 162,  366 => 158,  362 => 157,  358 => 156,  348 => 149,  344 => 148,  335 => 142,  327 => 137,  322 => 135,  315 => 131,  311 => 130,  307 => 129,  297 => 122,  293 => 121,  284 => 115,  276 => 110,  269 => 106,  264 => 104,  260 => 103,  256 => 102,  249 => 98,  245 => 97,  241 => 96,  234 => 92,  230 => 91,  226 => 90,  219 => 86,  214 => 84,  210 => 83,  206 => 82,  196 => 75,  192 => 74,  182 => 69,  169 => 59,  162 => 55,  157 => 53,  152 => 51,  148 => 50,  144 => 49,  135 => 43,  131 => 42,  122 => 36,  115 => 32,  110 => 30,  105 => 28,  101 => 27,  97 => 26,  88 => 20,  84 => 19,  74 => 14,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <legend><p>Ajouter un champ</p></legend>*/
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
