<?php

/* @NoxIntranetUser/MatriceCompetence/collaborateurSelection.html.twig */
class __TwigTemplate_417a6f9b3ddd14e487d37cf5a294ce238e0bbdc28e2152205eb0860693358ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetUser/MatriceCompetence/collaborateurSelection.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
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
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <style>
        #collaborateur_selector_container {
            width: 70%;
            margin: auto;
            text-align: center;
            margin-bottom: 5em;
        }

        #collaborateur_selector {
            margin: 0;
            margin-bottom: 0.5em;
        }

        #matrice_editor {
            width: 100%;
            overflow: auto;
        }

        #save_matrice_competence_button {
            display: none;
        }

        #collaborateurs_matrice_selector {
            width: 30%;
        }
    </style>
";
    }

    // line 33
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Saisie des compétences ";
    }

    // line 35
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Saisie des compétences";
    }

    // line 37
    public function block_contenu($context, array $blocks = array())
    {
        // line 38
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2/dist/js/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/select2/dist/js/i18n/fr.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            // Initialisation du sélécteur avancé.
            \$(\"#collaborateurs_matrice_selector\").select2({
                placeholder: \"Choisir un collaborateur...\",
                language: \"fr\",
                dropdownAutoWidth: true
            });

            // Lorsque un collaborateur est séléctionné...
            \$(\"#collaborateurs_matrice_selector\").on(\"select2:select\", function () {
                // On charge sa matrice de compétence.
                \$(\"#matrice_editor\").load(\$(this).val(), function () {
                    // On affiche le bouton de sauvegarde de la matrice.
                    \$(\"#save_matrice_competence_button\").show();
                });
            });

            // Lorsqu'on change le sélécteur...
            \$(\"#collaborateurs_matrice_selector\").on(\"change\", function () {
                // On cache le bouton de sauvegarde et on efface la div de matrice.
                \$(\"#save_matrice_competence_button\").hide();
                \$(\"#matrice_editor\").html(null);
            });

            // Lors d'un clique sur le bouton de sauvegarde...
            \$(\"#save_matrice_competence_button\").on('click', function () {
                // On envoie le formulaire.
                \$(\"form[name='formMatriceCollaborateurEdition']\").submit();

                // Ecoute des requêtes ajax.
                \$(document).ajaxComplete(function (event, xhr, settings) {
                    // Si une requête de sauvegarde de la matrice de compétence a été effectué...
                    if (settings.headers.name === \"save_matrice_competence\" && xhr.readyState === 4) {
                        // On réinitialise la séléction de collaborateur et on affiche une confirmation de sauvegarde.
                        \$(\"#collaborateurs_matrice_selector\").val(null).trigger(\"change\");
                        \$(\"<p style='display: inline-block; white-space: nowrap; border: 1px solid black; border-radius: 10px; padding: 1em; background-color: green; color: white;'>Sauvegardé &#10004;</p>\")
                                .appendTo(\$(\"#matrice_editor\"))
                                .hide()
                                .animate({width: 'toggle'}, 500)
                                .delay(3000)
                                .animate({width: 'toggle'}, 500, function () {
                                    \$(this).remove();
                                });
                    }
                });
            });

            // Si un collaborateur par défaut est défini...
            var default_collaborateur_id = Cookies.get('default_collaborateur_id');
            if (default_collaborateur_id !== undefined) {
                // On change la valeur du sélécteur et on affiche ses données.
                \$(\"#collaborateurs_matrice_selector\").val(default_collaborateur_id);
                \$(\"#collaborateurs_matrice_selector\").trigger('change');
                \$(\"#collaborateurs_matrice_selector\").trigger('select2:select');
            }
        });
    </script>

    <div id=\"collaborateur_selector_container\">
        <p id=\"collaborateur_selector\">
            <label for=\"collaborateurs_matrice_selector\">Séléction du collaborateur : </label>
            <select id=\"collaborateurs_matrice_selector\">
                <option></option>
                ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collaborateursList"]) ? $context["collaborateursList"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["collaborateur"]) {
            // line 105
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_developpement_professionnel_matrice_competence_edition_collaborateur", array("userId" => $this->getAttribute($context["collaborateur"], "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "Lastname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["collaborateur"], "Firstname", array()), "html", null, true);
            echo "
                    </option>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['collaborateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "            </select>
        </p>
        <br />
        <div id=\"matrice_editor\"></div>
        <p>
            <button type=\"button\" class=\"boutonFormulaire\" id=\"save_matrice_competence_button\">Sauvegarder</button>
        </p>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetUser/MatriceCompetence/collaborateurSelection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 109,  164 => 106,  159 => 105,  155 => 104,  87 => 39,  82 => 38,  79 => 37,  73 => 35,  67 => 33,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetUser/MatriceCompetence/collaborateurSelection.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\UserBundle\\Resources\\views\\MatriceCompetence\\collaborateurSelection.html.twig");
    }
}
