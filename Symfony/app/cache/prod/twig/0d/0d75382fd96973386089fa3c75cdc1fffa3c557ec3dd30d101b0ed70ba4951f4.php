<?php

/* @NoxIntranetAdministration/AdministrationAffaires/administrationaffaires.html.twig */
class __TwigTemplate_ffa8687714e82d57912b425d854989985e64fac7ed6cca05bae4dde65147a93a extends Twig_Template
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
    <div id=\"DivChoixActionInfo\" style='width: 70%; margin: auto; text-align: center; margin-bottom: 2%;'>
        <div style='display: inline-block; width: 33.33%; text-align: center;'>
            <button type=\"button\" name='profils' class='boutonFormulaire' style='font-size: 0.9vw;'>Profils</button>
        </div><!--
        --><div style='display: inline-block; width: 33.33%; text-align: center;'>
            <button type=\"button\" name='champs' class='boutonFormulaire' style='font-size: 0.9vw;'>Champs</button>
        </div><!--
        --><div style='display: inline-block; width: 33.33%; text-align: center;'>
            <button type=\"button\" name='modeles' class='boutonFormulaire' style='font-size: 0.9vw;'>Modèles</button>
        </div>
    </div>

    <div id='DivProfils' style='";
        // line 21
        if (((isset($context["section"]) ? $context["section"] : null) != "profils")) {
            echo "display: none;";
        }
        echo " width: 70%; margin: auto;'>

        ";
        // line 23
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formProfils"]) ? $context["formProfils"] : null), 'form_start', array("attr" => array("class" => "formulaireAdministrationAjoutProfil")));
        echo "
        ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formProfils"]) ? $context["formProfils"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter un profil</legend>

            <p style=\"margin: 0;\">
                <label for='addProfilName' style='display: inline-block; width: 100%; text-align: center; margin-top: 2%;'>Profils</label><br />
                <input type='text' name='addProfilName'  style='width: 30%; margin: 0; margin-bottom: 1%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box; text-align: center;'><button type='button' name='addProfil' class='boutonFormulaire' style='width: 9%; margin-left: 1%;'>+</button><br />
                ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfils"]) ? $context["formProfils"] : null), "Profils", array()), 'errors');
        echo "
                ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formProfils"]) ? $context["formProfils"] : null), "Profils", array()), 'widget', array("attr" => array("class" => "textFormulaireAdministrationAjoutProfil", "size" => "15", "style" => "width: 40%; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; -ms-box-sizing: border-box; box-sizing: border-box;")));
        echo "<br />
                <button name='deleteProfil' type='button' class='boutonFormulaire' style='width: 40%; font-size: 0.8vw; margin-top: 1%;'>Supprimer</button>
            </p>

        </fieldset>

        ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formProfils"]) ? $context["formProfils"] : null), 'form_end');
        echo "

    </div>

    <div id='DivChamps' style='";
        // line 44
        if (((isset($context["section"]) ? $context["section"] : null) != "champs")) {
            echo "display: none;";
        }
        echo "'>
        <table id='administrationChampsTable'>
            <tr>
                <th data-sorter=\"true\" sorter-order=\"none\" data-type=\"Champs_Nom\">
                    Nom
                    <div style='display: inline-block; vertical-align: middle; height: 0.8vw'><!--
                        --><img class='sortArrowUp' src='";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Up-White-32.png"), "html", null, true);
        echo "' alt='croissant' style='height: 0.4vw; vertical-align: middle; display: block;'><!--
                        --><img class='sortArrowDown' src='";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-White-32.png"), "html", null, true);
        echo "' alt='decroissant' style='height: 0.4vw; vertical-align: middle; display: block;'><!--
                        --></div>
                </th>
                <th data-sorter=\"true\" sorter-order=\"none\" data-type=\"Champs_Profil\">
                    Profil
                    <div style='display: inline-block; vertical-align: middle; height: 0.8vw'><!--
                        --><img class='sortArrowUp' src='";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Up-White-32.png"), "html", null, true);
        echo "' alt='croissant' style='height: 0.4vw; vertical-align: middle; display: block;'><!--
                        --><img class='sortArrowDown' src='";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-White-32.png"), "html", null, true);
        echo "' alt='decroissant' style='height: 0.4vw; vertical-align: middle; display: block;'><!--
                        --></div>
                </th>
                <th data-sorter=\"true\" sorter-order=\"none\" data-type=\"Champs_Type\">
                    Type
                    <div style='display: inline-block; vertical-align: middle; height: 0.8vw'><!--
                        --><img class='sortArrowUp' src='";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Up-White-32.png"), "html", null, true);
        echo "' alt='croissant' style='height: 0.4vw; vertical-align: middle; display: block;'><!--
                        --><img class='sortArrowDown' src='";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-White-32.png"), "html", null, true);
        echo "' alt='decroissant' style='height: 0.4vw; vertical-align: middle; display: block;'><!--
                        --></div>
                </th>
                <th>Editer</th>
                <th>Supprimer</th>
            </tr>
            <tr>
                ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formNewChamp"]) ? $context["formNewChamp"] : null), 'form_start');
        echo "
                <td>";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewChamp"]) ? $context["formNewChamp"] : null), "Nom", array()), 'widget');
        echo "</td>
                <td>";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewChamp"]) ? $context["formNewChamp"] : null), "Profil", array()), 'widget');
        echo "</td>
                <td>";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewChamp"]) ? $context["formNewChamp"] : null), "Type", array()), 'widget');
        echo "</td>
                <td style=\"opacity: 0;\">
                    ";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewChamp"]) ? $context["formNewChamp"] : null), "AjoutDonnees", array()), 'label');
        echo "<br />
                    ";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewChamp"]) ? $context["formNewChamp"] : null), "AjoutDonnees", array()), 'widget', array("attr" => array("style" => "vertical-align: middle;")));
        echo "
                </td>
                <td style='background-color: lightgrey;'></td>
                <td>";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewChamp"]) ? $context["formNewChamp"] : null), "Ajouter", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "</td>
                ";
        // line 82
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formNewChamp"]) ? $context["formNewChamp"] : null), 'form_end');
        echo "
            </tr>
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["champs"]) ? $context["champs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["champ"]) {
            // line 85
            echo "                <tr>
                    <td data-type=\"Champs_Nom\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "Nom", array()), "html", null, true);
            echo "</td>
                    <td data-type=\"Champs_Profil\">";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "Profil", array()), "html", null, true);
            echo "</td>
                    <td data-type=\"Champs_Type\">";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["champ"], "Type", array()), "html", null, true);
            echo "</td>
                    ";
            // line 89
            if (($this->getAttribute($context["champ"], "AjoutDonnees", array()) == true)) {
                // line 90
                echo "                        <td><a href='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_affaires_edition_champ", array("IDChamp" => $this->getAttribute($context["champ"], "Id", array()))), "html", null, true);
                echo "'><img src='";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Data-Edit-48.png"), "html", null, true);
                echo "' alt='Editer' class='editChampImg'></a></td>
                            ";
            } else {
                // line 92
                echo "                        <td style='background-color: lightgrey'></td>
                    ";
            }
            // line 94
            echo "                    <td><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_affaire_delete_champ", array("IDChamp" => $this->getAttribute($context["champ"], "Id", array()))), "html", null, true);
            echo "'><img src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Delete-48.png"), "html", null, true);
            echo "' alt='Supprimer' class='deleteChampImg'></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['champ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "        </table>
    </div>

    <div id='DivModeles' style='";
        // line 100
        if (((isset($context["section"]) ? $context["section"] : null) != "modeles")) {
            echo "display: none;";
        }
        echo "'>
        <table id=\"administrationModelesTable\">
            <tr>
                <th data-sorter=\"true\" sorter-order=\"none\" data-type=\"Modeles_Nom\">
                    Nom
                    <div style='display: inline-block; vertical-align: middle; height: 0.8vw'><!--
                        --><img class='sortArrowUp' src='";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Up-White-32.png"), "html", null, true);
        echo "' alt='croissant' style='height: 0.4vw; vertical-align: middle; display: block;'><!--
                        --><img class='sortArrowDown' src='";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-White-32.png"), "html", null, true);
        echo "' alt='decroissant' style='height: 0.4vw; vertical-align: middle; display: block;'><!--
                        --></div>
                </th>
                <th data-sorter=\"true\" sorter-order=\"none\" data-type=\"Modeles_Profil\">
                    Profil
                    <div style='display: inline-block; vertical-align: middle; height: 0.8vw'><!--
                        --><img class='sortArrowUp' src='";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Up-White-32.png"), "html", null, true);
        echo "' alt='croissant' style='height: 0.4vw; vertical-align: middle; display: block;'><!--
                        --><img class='sortArrowDown' src='";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Arrow-Down-White-32.png"), "html", null, true);
        echo "' alt='decroissant' style='height: 0.4vw; vertical-align: middle; display: block;'><!--
                        --></div>
                </th>
                <th>Editer</th>
                <th>Supprimer</th>
            </tr>
            <tr>
                ";
        // line 121
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formNewModele"]) ? $context["formNewModele"] : null), 'form_start');
        echo "
                <td>";
        // line 122
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewModele"]) ? $context["formNewModele"] : null), "Chemin", array()), 'widget');
        echo "</td>
                <td>";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewModele"]) ? $context["formNewModele"] : null), "Profil", array()), 'widget');
        echo "</td>
                <td style='background-color: lightgrey;'></th>
                <td style='background-color: lightgrey;'></th>
                <td>";
        // line 126
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewModele"]) ? $context["formNewModele"] : null), "Ajouter", array()), 'widget');
        echo "</td>
                ";
        // line 127
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formNewModele"]) ? $context["formNewModele"] : null), 'form_end');
        echo "
            </tr>
            ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modeles"]) ? $context["modeles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["modele"]) {
            // line 130
            echo "                <tr>
                    <td data-type=\"Modeles_Nom\">";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["modele"], "filename", array(), "array"), "html", null, true);
            echo "</td>
                    <td data-type=\"Modeles_Profil\">";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["modele"], "modele", array(), "array"), "Profil", array()), "html", null, true);
            echo "</td>
                    <td></td>
                    <td><a href='";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_affaires_delete_modele", array("IDModele" => $this->getAttribute($this->getAttribute($context["modele"], "modele", array(), "array"), "Id", array()))), "html", null, true);
            echo "'><img src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetadministration/images/Delete-48.png"), "html", null, true);
            echo "' alt='Supprimer' class='deleteModeleImg'></a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['modele'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "        </table>
    </div>

    <script>

        \$(window).load(function () {
            selectInterlocuteurAction();
            toggleCheckboxAjoutDonnees();
            searchSuivi('#rechercheSuivi', '.selectFormulaireSelectionVersion');
            ajaxAddProfil();
            ajaxDeleteProfil();
            trieTableau();
        });

        // Affiche/Cache les 'div' de profils/Champs/Modèles.
        function selectInterlocuteurAction() {
            // Lors d'un clique sur le bouton de profils.
            \$(\"button[name='profils']\").click(function () {
                \$('#DivProfils').show(); // Affiche la 'div' de profils.
                \$('#DivChamps').hide(); // Cache la 'div' de champs.
                \$('#DivModeles').hide(); // Cache la 'div' de modèles.
            });
            // Lors d'un clique sur le bouton de champs.
            \$(\"button[name='champs']\").click(function () {
                \$('#DivProfils').hide(); // Affiche la 'div' de profils.
                \$('#DivChamps').show(); // Cache la 'div' de champs.
                \$('#DivModeles').hide(); // Cache la 'div' de modèles.
            });
            // Lors d'un clique sur le bouton de modèles.
            \$(\"button[name='modeles']\").click(function () {
                \$('#DivProfils').hide(); // Affiche la 'div' de profils.
                \$('#DivChamps').hide(); // Cache la 'div' de champs.
                \$('#DivModeles').show(); // Cache la 'div' de modèles.
            });
        }

        // Affiche cache la 'checkbox' d'ajout de données supplémentaire par l'utilisateur en fonction du type de champ séléctionné.
        function toggleCheckboxAjoutDonnees() {
            \$('#formNewChamp_Type').change(function () {
                // Si le type de champ séléctioné est 'Données'.
                if (\$('#formNewChamp_Type option:selected').text() === 'Données') {
                    \$('#formNewChamp_AjoutDonnees').closest('td').css('opacity', '1');
                    \$('#formNewChamp_AjoutDonnees').attr('required', 'required');
                }
                // Si le type de champ séléctioné n'est pas 'Données'.
                else {
                    \$('#formNewChamp_AjoutDonnees').closest('td').css('opacity', '0');
                    \$('#formNewChamp_AjoutDonnees').removeAttr('required');
                }
            });
        }

        // Affiche les suivis selon le nom recherché.
        function searchSuivi(champRecherche, selecteur) {

            // Initialisation d'un timer pour executer la fonction après 1 seconde sans frappe.
            var typewatch = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // Lorsque une valeur est entré dans la barre de recherche.
            \$(champRecherche).keyup(function () {
                typewatch(function () {
                    // Pour chaque résultat.
                    \$(selecteur + ' option').each(function () {
                        // Si il ne correspond pas à la recherche...
                        if (\$(this).text().search(new RegExp(\$(champRecherche).val(), 'i')) === -1) {
                            \$(this).hide(); // ...On le cache.
                        }
                        // Si il correspond à la recherche.
                        else {
                            // On le montre et on lui donne son nom comme attribut 'title'.
                            \$(this).show();
                            \$(this).attr('title', \$(this).text());
                        }
                    });
                    // On applique une couleur différente au résultat pair et impair.
                    \$(selecteur + ' option:visible:odd').css('background', 'SeaShell');
                    \$(selecteur + ' option:visible:even').css('background', 'white');
                }, 500);
            });
        }

        // Ajoute un profil.
        function ajaxAddProfil() {
            // Lors d'un clic sur le bouton d'ajout de N°Commande.
            \$(\"button[name='addProfil']\").click(function () {
                // Si le numéro de commande n'est pas vide.
                if (\$.trim(\$(\"input[name='addProfilName']\").val()).length > 0) {
                    // On change le contenu du bouton d'ajout de numéro de commande par un gif de chargement et on le désactive.
                    \$(\"button[name='addProfil']\").attr('disabled', true);
                    \$(\"button[name='addProfil']\").html('&nbsp;');
                    \$(\"button[name='addProfil']\").css({
                        'background-image': \"url(";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/noCommandeTraitement.gif"), "html", null, true);
        echo ")\",
                        'background-position': 'center center',
                        'background-repeat': 'no-repeat',
                        'background-size': 'auto 50%'
                    });
                    // On sauvegarde le numéro en base de donnée avec une fonction Ajax.        
                    \$.ajax({
                        url: '";
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_affaires_add_profil");
        echo "',
                        type: 'POST',
                        data: {'profil': \$(\"input[name='addProfilName']\").val()},
                        success: function (response) {
                            // On change le contenu du bouton par celui d'origine et on le réactive.
                            \$(\"button[name='addProfil']\").removeAttr('disabled');
                            \$(\"button[name='addProfil']\").html('+');
                            \$(\"button[name='addProfil']\").css({
                                'background-image': \"none\",
                                'background-position': 'center center',
                                'background-repeat': 'no-repeat',
                                'background-size': 'auto 50%'
                            });
                            // Si le numéro d'affaire n'existe pas déjà.
                            if (response === 'true') {
                                // On fait apparaître le nouveau numéro dans le selecteur de numéros.
                                var newOption = \$(\"<option value='\" + \$(\"input[name='addProfilName']\").val() + \"' style='text-align: center; background-color: green;'>\" + \$(\"input[name='addProfilName']\").val() + \"</option>\");
                                \$(\"select[name='formAjoutProfil[Profils]']\").append(newOption);
                                // On scroll en bas du sélécteur de numéro.
                                \$(\"select[name='formAjoutProfil[Profils]']\").scrollTop(\$(\"select[name='formAjoutProfil[Profils]']\")[0].scrollHeight);
                                // On anime la couleur de fond du nouveau numéro.
                                newOption.animate({
                                    backgroundColor: 'white'
                                }, 3000);
                                // On efface le contenue de nouveau numéro.
                                \$(\"input[name='addProfilName']\").val('');
                            }
                            // Si le numéro d'affaire existe déjà.
                            else {
                                // On efface le contenue de nouveau numéro et on affiche un message d'avertissement.
                                var messageErreur = \$(\"<p style='display: inline-block; margin: 0% 0% 1% 0%; color: red;'>Le profil existe déjà !</p>\");
                                \$(\"label[for='addProfilName']\").after(messageErreur);
                                setTimeout(function () {
                                    messageErreur.fadeOut(1000, function () {
                                        messageErreur.remove();
                                    });
                                }, 4000);
                                \$(\"input[name='addProfilName']\").val('');
                            }
                        }
                    });
                }
            });
        }

        // Supprime un profil.
        function ajaxDeleteProfil() {
            // Lors d'un clic sur le bouton de suppression de numéro de commande.
            \$(\"button[name='deleteProfil']\").click(function () {
                // Si une valeur est séléctionnée.
                if (\$(\"select[name='formAjoutProfil[Profils]']\").val() !== null) {
                    // On change le contenu du bouton de suppression de numéro de commande par un gif de chargement et on le désactive.
                    \$(\"button[name='deleteProfil']\").attr('disabled', true);
                    \$(\"button[name='deleteProfil']\").html('&nbsp;');
                    \$(\"button[name='deleteProfil']\").css({
                        'background-image': \"url(";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/noCommandeTraitement.gif"), "html", null, true);
        echo ")\",
                        'background-position': 'center center',
                        'background-repeat': 'no-repeat',
                        'background-size': 'auto 50%'
                    });
                    // On supprime le numéro de la base de données avec une fonction Ajax.
                    \$.ajax({
                        url: '";
        // line 303
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_administration_affaires_delete_profil");
        echo "',
                        type: 'POST',
                        data: {'profil': \$(\"select[name='formAjoutProfil[Profils]']\").val()},
                        success: function () {
                            // On change le contenu du bouton par celui d'origine et on le réactive.
                            \$(\"button[name='deleteProfil']\").removeAttr('disabled');
                            \$(\"button[name='deleteProfil']\").html('Supprimer');
                            \$(\"button[name='deleteProfil']\").css({
                                'background-image': \"none\",
                                'background-position': 'center center',
                                'background-repeat': 'no-repeat',
                                'background-size': 'auto 50%'
                            });
                            // On efface le numéros de commande dans le sélécteur de numéro.
                            \$(\"select[name='formAjoutProfil[Profils]'] option:selected\").remove();
                        }
                    });

                }
            });
        }

        // Trie un tableau en fonction de la colonne séléctionnée.
        function trieTableau() {

            // Trie les chaîne de caractères par odres croissant.
            function compareStringCroissant(a, b) {
                if (a.text < b.text)
                    return -1;
                if (a.text > b.text)
                    return 1;
                return 0;
            }

            // Trie les chaîne de caractères par odres décroissant.
            function compareStringDecroissant(a, b) {
                if (a.text < b.text)
                    return 1;
                if (a.text > b.text)
                    return -1;
                return 0;
            }

            // Lors du clique sur un titre de colonne.
            \$(\"th[data-sorter='true']\").click(function () {

                // On récupére le tableau contenant le titre.
                var table = \$(this).closest('table');

                // On initialise un tableau qui contiendras les lignes du tableau.
                var rows = [];

                // Pour chaque cellule de type identique à celui du titre.
                \$(\"td[data-type='\" + \$(this).attr('data-type') + \"']\").each(function () {
                    // On récupére le contenu de la cellule.
                    var text = \$(this).text();
                    // On récupére la structure HTML de la ligne parente de la cellule.
                    var element = \$(this).closest('tr').clone();

                    // On crée un objet javascript contenant le contenu et la structure et on l'empile dans le tableau des lignes.
                    var row = {text: text, element: element};
                    rows.push(row);
                });

                // Si l'odre de trie de la cellule titre est 'none' ou 'decroissant'.
                if (\$(this).attr('sorter-order') === 'none' || \$(this).attr('sorter-order') === 'decroissant') {
                    rows.sort(compareStringCroissant); // On trie les données du tableau par ordre croissant.
                    \$(this).attr('sorter-order', 'croissant'); // On passe l'attribut d'odre de trie à croissant.
                    \$(\"th[data-sorter='true'] div\").css('height', '0.8vw'); // On redonne leur taille d'origine aux div d'img.
                    \$(\"th[data-sorter='true'] img\").show(); // On fait apparaître les flêches de trie des cellules titres.
                    \$(this).find('div').css('height', '0.4vw'); // On divise la taille de la div d'img de la cellule titre courante par deux.
                    \$(this).find('.sortArrowDown').hide(); // On fait disparaitre la flêche décroissante de la cellule titre courante.
                }
                // Si l'odre de trie de la cellule titre est 'croissant'.
                else {
                    rows.sort(compareStringDecroissant); // On trie les données du tableau par ordre décroissant.
                    \$(this).attr('sorter-order', 'decroissant'); // On passe l'attribut d'odre de trie à décroissant.
                    \$(\"th[data-sorter='true'] div\").css('height', '0.8vw'); // On redonne leur taille d'origine aux div d'img.
                    \$(\"th[data-sorter='true'] img\").show(); // On fait apparaître les flêches de trie des cellules titres.
                    \$(this).find('div').css('height', '0.4vw'); // On divise la taille de la div d'img de la cellule titre courante par deux.
                    \$(this).find('.sortArrowUp').hide(); // On fait disparaitre la flêche croissante de la cellule titre courante.
                }

                // On supprime les lignes du tableau.
                \$(\"td[data-type='\" + \$(this).attr('data-type') + \"']\").closest('tr').remove();

                // On injecte chaque ligne dans le tableau.
                \$.each(rows, function (index, value) {
                    table.append(value.element);
                });
            });
        }
    </script>

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
        return array (  505 => 303,  495 => 296,  437 => 241,  427 => 234,  328 => 137,  317 => 134,  312 => 132,  308 => 131,  305 => 130,  301 => 129,  296 => 127,  292 => 126,  286 => 123,  282 => 122,  278 => 121,  268 => 114,  264 => 113,  255 => 107,  251 => 106,  240 => 100,  235 => 97,  223 => 94,  219 => 92,  211 => 90,  209 => 89,  205 => 88,  201 => 87,  197 => 86,  194 => 85,  190 => 84,  185 => 82,  181 => 81,  175 => 78,  171 => 77,  166 => 75,  162 => 74,  158 => 73,  154 => 72,  144 => 65,  140 => 64,  131 => 58,  127 => 57,  118 => 51,  114 => 50,  103 => 44,  96 => 40,  87 => 34,  83 => 33,  71 => 24,  67 => 23,  60 => 21,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetAdministration/AdministrationAffaires/administrationaffaires.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle\\Resources\\views\\AdministrationAffaires\\administrationaffaires.html.twig");
    }
}
