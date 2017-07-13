<?php

/* NoxIntranetUserBundle:MatriceCompetence:matriceCollaborateurEdition.html.twig */
class __TwigTemplate_cb943b275b5618e4de9cddabd636e2c223413c3396cbf4322feeed4149a1d9af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style>
    html, body {
        margin: 0;
        padding: 0;
    }

    #form_competence_div {
        text-align: center;
    }

    #form_competence_div form {
        display: inline-block;
        width: auto;
        padding: 0.5em;
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

<script>
    // Variable globale du nombre de compétences secondaires actuels.
    var competence_secondaire_counts = \"";
        // line 46
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competences_Secondaires", array())), "html", null, true);
        echo "\";

    \$(document).ready(function () {
        addCompetenceSecondaire();
        addRemoveCompetenceSecondaireButton();
        initDatepicker();
        formMatriceSaveData();
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

    // Sauvegade les modification de la matrice collaborateur en base de données.
    function formMatriceSaveData() {
        // Lors de l'envoi du formulaire...
        \$(\"form[name='formMatriceCollaborateurEdition']\").submit(function (e) {
            // Bloquage de l'envoie.
            e.preventDefault();

            // Si le formulaire est valide...
            if (this.checkValidity()) {
                // Requête ajax de sauvegarde.
                \$.ajax({
                    url: '";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ajax_matrice_collaborateur_edition_save");
        echo "',
                    type: 'POST',
                    data: \$(\"form[name='formMatriceCollaborateurEdition']\").serialize(),
                    headers: {name: \"save_matrice_competence\"} // On attribue un nom à la requête ajax pour la retrouver facilement dans d'autres fonctions.
                });
            }
            // Sinon...
            else {
                // Simulation du bloquage par le navigateur.
                \$('<input type=\"submit\">').hide().appendTo(\$(this)).click().remove();
            }
        });
    }

</script>

<div id=\"form_competence_div\">
    ";
        // line 178
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCompetence"]) ? $context["formCompetence"] : null), 'form_start');
        echo "
    ";
        // line 179
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Id", array()), 'widget');
        echo "
    <table id=\"competence_secondaire_fields_table\" data-prototype=\"<td class='form_label'>";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competences_Secondaires", array()), "vars", array()), "prototype", array()), 'label'));
        echo " :&nbsp;</td><td class='competence_select'>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competences_Secondaires", array()), "vars", array()), "prototype", array()), 'widget'));
        echo "</td>\">
        <tr>
            <td class='form_label'>";
        // line 182
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Societe", array()), 'label');
        echo " :&nbsp;</td> 
            <td>";
        // line 183
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Societe", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td class='form_label'>";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Etablissement", array()), 'label');
        echo " :&nbsp;</td> 
            <td>";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Etablissement", array()), 'widget');
        echo "</td>
        </tr>
         <tr>
            <td class='form_label'>";
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Matricule", array()), 'label');
        echo " :&nbsp;</td> 
            <td>";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Matricule", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td class='form_label'>";
        // line 194
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Nom", array()), 'label');
        echo " :&nbsp;</td> 
            <td>";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Nom", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td class='form_label'>";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Prenom", array()), 'label');
        echo " :&nbsp;</td> 
            <td>";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Prenom", array()), 'widget');
        echo "</td>
        </tr>
        <tr>
            <td class='form_label'>";
        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competence_Principale", array()), 'label');
        echo " :&nbsp;</td> 
            <td>";
        // line 203
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competence_Principale", array()), 'widget');
        echo "</td>
        </tr>
        ";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["formCompetence"]) ? $context["formCompetence"] : null), "Competences_Secondaires", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["competence_secondaire_field"]) {
            // line 206
            echo "            <tr class='competence_secondaire_tr'>
                <td class='form_label'>";
            // line 207
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["competence_secondaire_field"], 'label');
            echo " :&nbsp;</td>
                <td class='competence_select'>";
            // line 208
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["competence_secondaire_field"], 'widget');
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence_secondaire_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "        <tr>
            <td style='text-align: center;'>
                <button type=\"button\" id=\"add_competence_secondaire_button\" style='width: 100%;'>Compétence secondaire &#x271A;</button>
            </td>
            <td>
        </tr>
    </table>
</div>
";
        // line 219
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCompetence"]) ? $context["formCompetence"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "NoxIntranetUserBundle:MatriceCompetence:matriceCollaborateurEdition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 219,  298 => 211,  289 => 208,  285 => 207,  282 => 206,  278 => 205,  273 => 203,  269 => 202,  263 => 199,  259 => 198,  253 => 195,  249 => 194,  243 => 191,  239 => 190,  233 => 187,  229 => 186,  223 => 183,  219 => 182,  212 => 180,  208 => 179,  204 => 178,  184 => 161,  66 => 46,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetUserBundle:MatriceCompetence:matriceCollaborateurEdition.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\UserBundle/Resources/views/MatriceCompetence/matriceCollaborateurEdition.html.twig");
    }
}
