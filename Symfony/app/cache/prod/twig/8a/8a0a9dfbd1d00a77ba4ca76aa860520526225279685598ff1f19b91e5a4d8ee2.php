<?php

/* NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaireseditionchamp.html.twig */
class __TwigTemplate_23b814165a3a91e9c51ad6ceada5441ce20467a3ed75e04ec66ab47c608af036 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaireseditionchamp.html.twig", 1);
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
        echo " Edition de champ ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Edition de champ";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class='DivFormulaireAjoutDonnee'>

        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), 'form_start', array("attr" => array("class" => "formulaireAjoutDonnee")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter une donnée au champ ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["champ"]) ? $context["champ"] : null), "Nom", array()), "html", null, true);
        echo "</legend>       

            <p style=\"margin: 0;\">
                <label for='addDonneeName' style='display: inline-block; width: 100%; text-align: center; margin-top: 2%;'>Données</label><br />
                <input type='text' name='addDonneeName'  style='width: 30%; margin: 0; margin-bottom: 1%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box; text-align: center;'><button type='button' name='addDonnee' class='boutonFormulaire' style='width: 9%; margin-left: 1%;'>+</button><br />
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), "Donnees", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), "Donnees", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutProfil", "size" => "15", "style" => "width: 40%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;")));
        echo "<br />
                <button name='deleteDonnee' type='button' class='boutonFormulaire' style='width: 40%; font-size: 0.8vw; margin-top: 1%;'>Supprimer</button>
            </p>

        </fieldset> 

        ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAjoutDonnee"]) ? $context["formAjoutDonnee"] : null), 'form_end');
        echo "

    </div>

    <script>

        \$(window).load(function () {
            ajaxAddDonnee();
            ajaxDeleteDonnee();
        });

        // Ajoute une donnée.
        function ajaxAddDonnee() {
            // Lors d'un clic sur le bouton d'ajout de donnée.
            \$(\"button[name='addDonnee']\").click(function () {
                // Si le numéro de commande n'est pas vide.
                if (\$.trim(\$(\"input[name='addDonneeName']\").val()).length > 0) {
                    // On change le contenu du bouton d'ajout de donnee par un gif de chargement et on le désactive.
                    \$(\"button[name='addDonnee']\").attr('disabled', true);
                    \$(\"button[name='addDonnee']\").html('&nbsp;');
                    \$(\"button[name='addDonnee']\").css({
                        'background-image': \"url(";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/noCommandeTraitement.gif"), "html", null, true);
        echo ")\",
                        'background-position': 'center center',
                        'background-repeat': 'no-repeat',
                        'background-size': 'auto 50%'
                    });
                    // On sauvegarde le numéro en base de donnée avec une fonction Ajax.        
                    \$.ajax({
                        url: '";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_affaires_ajax_ajout_donnee");
        echo "',
                        type: 'POST',
                        data: {'donnee': \$(\"input[name='addDonneeName']\").val(), 'IdChamp':";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["IdChamp"]) ? $context["IdChamp"] : null), "html", null, true);
        echo "},
                        success: function (response) {
                            // On change le contenu du bouton par celui d'origine et on le réactive.
                            \$(\"button[name='addDonnee']\").removeAttr('disabled');
                            \$(\"button[name='addDonnee']\").html('+');
                            \$(\"button[name='addDonnee']\").css({
                                'background-image': \"none\",
                                'background-position': 'center center',
                                'background-repeat': 'no-repeat',
                                'background-size': 'auto 50%'
                            });
                            // Si la donnée n'existe pas déjà.
                            if (response === 'true') {
                                // On fait apparaître la nouvelle donnée dans le selecteur de numéros.
                                var newOption = \$(\"<option value='\" + \$(\"input[name='addDonneeName']\").val() + \"' style='text-align: center; background-color: green;'>\" + \$(\"input[name='addDonneeName']\").val() + \"</option>\");
                                \$(\"select[name='formAjoutDonnee[Donnees]\").append(newOption);
                                // On scroll en bas du sélécteur de numéro.
                                \$(\"select[name='formAjoutDonnee[Donnees]\").scrollTop(\$(\"select[name='formAjoutDonnee[Donnees]']\")[0].scrollHeight);
                                // On anime la couleur de fond du nouveau numéro.
                                newOption.animate({
                                    backgroundColor: 'white'
                                }, 3000);
                                // On efface le contenue de nouveau numéro.
                                \$(\"input[name='addDonneeName']\").val('');
                            }
                            // Si le numéro d'affaire existe déjà.
                            else {
                                // On efface le contenue de nouveau numéro et on affiche un message d'avertissement.
                                var messageErreur = \$(\"<p style='display: inline-block; margin: 0% 0% 1% 0%; color: red;'>Le profil existe déjà !</p>\");
                                \$(\"label[for='addDonneeName']\").after(messageErreur);
                                setTimeout(function () {
                                    messageErreur.fadeOut(1000, function () {
                                        messageErreur.remove();
                                    });
                                }, 4000);
                                \$(\"input[name='addDonneeName']\").val('');
                            }
                        }
                    });
                }
            });
        }

        // Supprime une donnée.
        function ajaxDeleteDonnee() {
            // Lors d'un clic sur le bouton de suppression de donnée.
            \$(\"button[name='deleteDonnee']\").click(function () {
                // Si une valeur est séléctionnée.
                if (\$(\"select[name='formAjoutDonnee[Donnees]']\").val() !== null) {
                    // On change le contenu du bouton de suppression de donnée par un gif de chargement et on le désactive.
                    \$(\"button[name='deleteDonnee']\").attr('disabled', true);
                    \$(\"button[name='deleteDonnee']\").html('&nbsp;');
                    \$(\"button[name='deleteDonnee']\").css({
                        'background-image': \"url(";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/noCommandeTraitement.gif"), "html", null, true);
        echo ")\",
                        'background-position': 'center center',
                        'background-repeat': 'no-repeat',
                        'background-size': 'auto 50%'
                    });
                    // On supprime la donnée de la base de données avec une fonction Ajax.
                    \$.ajax({
                        url: '";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_affaires_ajax_delete_donnee");
        echo "',
                        type: 'POST',
                        data: {'donnee': \$(\"select[name='formAjoutDonnee[Donnees]']\").val()},
                        success: function () {
                            // On change le contenu du bouton par celui d'origine et on le réactive.
                            \$(\"button[name='deleteDonnee']\").removeAttr('disabled');
                            \$(\"button[name='deleteDonnee']\").html('Supprimer');
                            \$(\"button[name='deleteDonnee']\").css({
                                'background-image': \"none\",
                                'background-position': 'center center',
                                'background-repeat': 'no-repeat',
                                'background-size': 'auto 50%'
                            });
                            // On efface la donnée dans le sélécteur de numéro.
                            \$(\"select[name='formAjoutDonnee[Donnees]'] option:selected\").remove();
                        }
                    });
                }
            });
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaireseditionchamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 118,  177 => 111,  121 => 58,  116 => 56,  106 => 49,  82 => 28,  73 => 22,  69 => 21,  61 => 16,  54 => 12,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffaireseditionchamp.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle/Resources/views/AdministrationAffaires/administrationaffaireseditionchamp.html.twig");
    }
}
