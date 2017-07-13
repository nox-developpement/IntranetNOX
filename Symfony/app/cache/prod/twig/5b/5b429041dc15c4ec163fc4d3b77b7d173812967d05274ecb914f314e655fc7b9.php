<?php

/* @NoxIntranetUser/MatriceCompetence/formulaireMatriceCompetence.html.twig */
class __TwigTemplate_b787ab4e6f8f19cc225360bee5f18ab542ad9144454db86843122fb0ab6b8ddf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetUser/MatriceCompetence/formulaireMatriceCompetence.html.twig", 1);
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
        echo "    <style>
        #form_competence_div {
            text-align: center;
        }

        #form_competence_div form {
            display: inline-block;
            width: auto;
            padding-top: 0.5em;
            padding-bottom: 0.5em;
            background-color: rgba(255,255,255, 0.6);
            border: 2px outset #1F4E79;
            text-align: left;
            font-size: calc(11px + 0.2vw) !important;
        }

        #form_competence_div form td {
            padding: 0.3em 0;
        }

        #form_competence_div form .form_label {
            text-align: right;
        }

        #form_competence_div form .competence_select {
            display: inline-block;
            vertical-align: middle;
        }

        #form_competence_div form .competence_select button {
            vertical-align: middle;
            margin-left: 0.5em;
        }

        #form_competence_div form .competence_select select {
            vertical-align: middle;
        }
    </style>
";
    }

    // line 44
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Mes compétences ";
    }

    // line 46
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Mes compétences";
    }

    // line 48
    public function block_contenu($context, array $blocks = array())
    {
        // line 49
        echo "    <script>
        // Variable globale du nombre de compétences secondaires actuels.
        var competence_secondaire_counts = \"";
        // line 51
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competences_Secondaires", array())), "html", null, true);
        echo "\";

        \$(document).ready(function () {
            addCompetenceSecondaire();
            addRemoveCompetenceSecondaireButton();
            initDatepicker();
        });

        // Ajoute une nouvelle compétence secondaire au formulaire.
        function addCompetenceSecondaire() {
            // Lors du clique sur le bouton d'ajout de compétence secondaire.
            \$('#add_competence_secondaire_button').click(function (e) {
                e.preventDefault();

                // La div qui contient les sélécteurs de compétence secondaire.
                var competence_secondaire_table = \$('#competence_secondaire_fields_table');

                // Le prototype de sélécteur de compétence secondaire.
                var new_competence_secondaire_widget = competence_secondaire_table.data('prototype');

                // On remplace le nom du sélécteur en fonction du nombre de sélécteurs.
                new_competence_secondaire_widget = new_competence_secondaire_widget.replace(/__name__/g, competence_secondaire_counts);

                // On incérement le compteur de compétence secondaire.
                competence_secondaire_counts++;

                // On ajoute le nouveau sélécteur de compétence secondaire à la div.
                var new_competence_secondaire_tr = \$(\"<tr class='competence_secondaire_tr'></tr>\").html(new_competence_secondaire_widget);
                new_competence_secondaire_tr.insertBefore(\$('#add_competence_secondaire_button').parent('td').parent('tr'));
                removeCompetenceSecondaire(new_competence_secondaire_tr);
            });
        }

        // Ajoute un bouton de suppression à la compétence secondaire.
        function removeCompetenceSecondaire(new_competence_secondaire_tr) {
            // Ajoute un bouton de suppression au sélécteur.
            var remove_competence_secondaire_button = \$(\"<button type='button' class='remove_competence_secondaire_button' style='color: red;'>&#x2716;</button>\");
            new_competence_secondaire_tr.find('.competence_select').append(remove_competence_secondaire_button);

            // Lors du clique sur le bouton de suppression...
            remove_competence_secondaire_button.on('click', function (e) {
                e.preventDefault();

                // On désincrémente le compteur de compétence.
                competence_secondaire_counts--;

                // On supprime le sélécteur.
                new_competence_secondaire_tr.remove();

                // Pour chaques sélécteur...
                var selectIndex = 0;
                \$('.competence_select').each(function () {
                    // On attribut l'index correspondant à la position du sélécteur comme name.
                    var selectName = \$(this).find('select').attr('name');
                    \$(this).find('select').attr('name', selectName.replace(/\\d+/, selectIndex));
                    selectIndex++;
                });
            });
        }

        // Ajoute un bouton de suppression au compétence secondaire d'origine.
        function addRemoveCompetenceSecondaireButton() {
            \$('.competence_secondaire_tr').each(function () {
                removeCompetenceSecondaire(\$(this));
            });
        }

        // Ajoute un widget de séléction de date au input de date.
        function initDatepicker() {
            // On change le type des input de date pour désactiver le datepicker par défaut de chrome.
            \$(\"input[type='date']\").attr('type', 'text');

            // Initialisation des datepicker.
            \$('.datepicker').datepicker({
                minDate: \"-100Y\",
                maxDate: \"0\",
                yearRange: \"-100:+0\",
                changeMonth: true,
                changeYear: true
            });

            // On passe les datepicker en français.
            \$.datepicker.regional.fr = {
                closeText: \"Fermer\",
                prevText: \"Précédent\",
                nextText: \"Suivant\",
                currentText: \"Aujourd'hui\",
                monthNames: [\"janvier\", \"février\", \"mars\", \"avril\", \"mai\", \"juin\",
                    \"juillet\", \"août\", \"septembre\", \"octobre\", \"novembre\", \"décembre\"],
                monthNamesShort: [\"janv.\", \"févr.\", \"mars\", \"avr.\", \"mai\", \"juin\",
                    \"juil.\", \"août\", \"sept.\", \"oct.\", \"nov.\", \"déc.\"],
                dayNames: [\"dimanche\", \"lundi\", \"mardi\", \"mercredi\", \"jeudi\", \"vendredi\", \"samedi\"],
                dayNamesShort: [\"dim.\", \"lun.\", \"mar.\", \"mer.\", \"jeu.\", \"ven.\", \"sam.\"],
                dayNamesMin: [\"D\", \"L\", \"M\", \"M\", \"J\", \"V\", \"S\"],
                weekHeader: \"Sem.\",
                dateFormat: \"dd/mm/yy\",
                firstDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: \"\"};
            \$.datepicker.setDefaults(\$.datepicker.regional.fr);
        }

    </script>

    <div id=\"form_competence_div\">
        ";
        // line 157
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCompetence"]) ? $context["formCompetence"] : null), 'form_start');
        echo "

        <table id=\"competence_secondaire_fields_table\" data-prototype=\"<td class='form_label'>";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competences_Secondaires", array()), "vars", array()), "prototype", array()), 'label'));
        echo " :&nbsp;</td><td class='competence_select'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competences_Secondaires", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "</td>\">
            <tr>
                <td class='form_label'>";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Societe", array()), 'label');
        echo " :&nbsp;</td> 
                <td>";
        // line 162
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Societe", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='form_label'>";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Etablissement", array()), 'label');
        echo " :&nbsp;</td> 
                <td>";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Etablissement", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='form_label'>";
        // line 169
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Nom", array()), 'label');
        echo " :&nbsp;</td> 
                <td>";
        // line 170
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Nom", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='form_label'>";
        // line 173
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Prenom", array()), 'label');
        echo " :&nbsp;</td> 
                <td>";
        // line 174
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Prenom", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='form_label'>";
        // line 177
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Date_Naissance", array()), 'label');
        echo " :&nbsp;</td> 
                <td>";
        // line 178
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Date_Naissance", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='form_label'>";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Date_Anciennete", array()), 'label');
        echo " :&nbsp;</td> 
                <td>";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Date_Anciennete", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='form_label'>";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Statut", array()), 'label');
        echo " :&nbsp;</td> 
                <td>";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Statut", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='form_label'>";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Poste", array()), 'label');
        echo " :&nbsp;</td> 
                <td>";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Poste", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='form_label'>";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competence_Principale", array()), 'label');
        echo " :&nbsp;</td> 
                <td>";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competence_Principale", array()), 'widget');
        echo "</td>
            </tr>
            ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competences_Secondaires", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["competence_secondaire_field"]) {
            // line 197
            echo "                <tr class='competence_secondaire_tr'>
                    <td class='form_label'>";
            // line 198
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["competence_secondaire_field"], 'label');
            echo " :&nbsp;</td>
                    <td class='competence_select'>";
            // line 199
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["competence_secondaire_field"], 'widget');
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence_secondaire_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 202
        echo "            <tr>
                <td style='text-align: center;'>
                    <button type=\"button\" id=\"add_competence_secondaire_button\" style='width: 100%;'>Compétence secondaire &#x271A;</button>
                </td>
                <td>
            </tr>
            <tr>
                <td colspan='2' style='text-align: center;'>
                    ";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Sauvegarder", array()), 'widget');
        echo "
                </td>
            </tr>
        </table>
    </div>

    ";
        // line 216
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCompetence"]) ? $context["formCompetence"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetUser/MatriceCompetence/formulaireMatriceCompetence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 216,  335 => 210,  325 => 202,  316 => 199,  312 => 198,  309 => 197,  305 => 196,  300 => 194,  296 => 193,  290 => 190,  286 => 189,  280 => 186,  276 => 185,  270 => 182,  266 => 181,  260 => 178,  256 => 177,  250 => 174,  246 => 173,  240 => 170,  236 => 169,  230 => 166,  226 => 165,  220 => 162,  216 => 161,  209 => 159,  204 => 157,  95 => 51,  91 => 49,  88 => 48,  82 => 46,  76 => 44,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetUser/MatriceCompetence/formulaireMatriceCompetence.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\UserBundle\\Resources\\views\\MatriceCompetence\\formulaireMatriceCompetence.html.twig");
    }
}
