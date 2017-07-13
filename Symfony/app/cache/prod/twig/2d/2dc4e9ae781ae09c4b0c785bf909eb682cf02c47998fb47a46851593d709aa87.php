<?php

/* NoxIntranetUserBundle:DeveloppementProfessionnel:formulaireDeveloppementProfessionnel.html.twig */
class __TwigTemplate_a737ffd813de5c4729e2f834b689447dc04336fc21e11d15e6344c2de4f6289b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetUserBundle:DeveloppementProfessionnel:formulaireDeveloppementProfessionnel.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
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
        echo " Entretien annuel de développement professionnel ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Entretien annuel de développement professionnel";
    }

    // line 7
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "Année ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " | <a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Préparation à l'Entretien de Développement Professionnel.pdf"), "html", null, true);
        echo "' target=\"_blank\">Préparation à l'Entretien de Développement Professionnel</a>";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "    <script>
        \$(window).load(function () {
            readObjectifData();
            getFormCookies();
            saveCurrentFormProgress();
            textareaAutoHeight();

            // Lors du clique sur le bouton d'export PDF et sur celui de validation du formulaire...
            \$(\"#downloadPDF\").click(function () {
                ajaxConvertHtmlToPDF(); // On génére un PDF et on l'affiche.
            });

            \$(\"form\").submit(function () {
                ajaxConvertHtmlToPDF(); // On génére un PDF et on l'affiche.
                deleteFormCookies();

                return true;
            });
        });

        // Sauvegarde les données du formulaire en cours de remplissage sous forme de cookies.
        function saveCurrentFormProgress() {
            // Initialisation d'une variable de timer.
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // Lors d'une modification sur un sélécteur...
            \$('#formulaireDeveloppementProfessionnelDiv').on('change', 'select', function () {
                Cookies.set(\$(this).attr('id'), \$(this).val(), {expires: 7}); // On crée un cookie contenant la valeur du sélécteur.
            });

            // Lorsqu'on remplis une input...
            \$('#formulaireDeveloppementProfessionnelDiv').on('keyup', 'input, textarea', function () {
                var input = \$(this); // On récupére l'input.

                // Après une seconde sans taper...
                delay(function () {
                    Cookies.set(input.attr('id'), input.val(), {expires: 7}); // On crée un cookie contenant la valeur de l'input.
                }, 1000);
            });
        }

        // Supprime tous les cookies du formulaire.
        function deleteFormCookies() {
            // Pour chaques sélécteur et input du formulaire...
            \$('#formulaireDeveloppementProfessionnelDiv select, #formulaireDeveloppementProfessionnelDiv input, #formulaireDeveloppementProfessionnelDiv textarea').each(function () {
                Cookies.remove(\$(this).attr('id')); // On supprime le cookie associé au champ du formulaire.
            });

            // On supprime le cookie du nombre d'objectif.
            Cookies.remove('ObjectifNumber');
        }

        // Récupére les données des champs de formulaire depuis les cookies.
        function getFormCookies() {
            // Si il existe un cookie de nombre d'objectif et que le nombre d'objectif est supérieur à 1.
            if (Cookies.get('ObjectifNumber') !== undefined && Cookies.get('ObjectifNumber') > 1) {
                var objectifCount = Cookies.get('ObjectifNumber'); // On récupére le nombre d'objectif.

                // Pour i de 2 à objetifCount...
                for (var objectifIndex = 1; objectifIndex < objectifCount; objectifIndex++) {
                    // Génération du code HTML à insérer.
                    var objectifHtml = \"<tr class='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"'><td class='neutreTd' colspan='2'><span class='questionLibelle'>Objectif \" + (parseInt(objectifIndex) + 1) + \" : Décrivez l'objectif (<span class='deleteObjectif' tr_index='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"' onclick='deleteObjectif(\$(this));'>supprimer</span>)</span><textarea id='objectif_description_\" + (parseInt(objectifIndex) + 1) + \"' required='required' class='neutreTextarea objectifInput' style='height: 2em;'></textarea></td></tr><tr class='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"'><td class='managerTd' colspan='2'><span class='questionLibelle'>Quels sont les résultats obtenus ?</span><textarea id='objectif_resultat_\" + (parseInt(objectifIndex) + 1) + \"' required='required' class='managerTextarea objectifInput' style='height: 10em;'></textarea></td></tr><tr class='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"'><td class='managerTd noWhiteSpaceTd' colspan='2'><span class='questionLibelle'>Sélectionnez le niveau d'atteinte de l'objectif</span><select id='objectif_niveau_\" + (parseInt(objectifIndex) + 1) + \"' required='required' class='objectifSelect'><option value='' selected='selected'>Choisir une réponse...</option><option value='Non atteint'>Non atteint</option><option value='Partiellement atteint'>Partiellement atteint</option><option value='Atteint'>Atteint</option><option value='Dépassé'>Dépassé</option></select></td></tr><tr class='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"'><td class='managerTd' colspan='2'><span class='questionLibelle'>Quelles ont été les difficultés rencontrées ?</span><textarea id='objectif_difficulte_\" + (parseInt(objectifIndex) + 1) + \"' class='managerTextarea objectifInput' style='height: 10em;'></textarea></td></tr><tr class='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"'><td class='managerTd' colspan='2'><span class='questionLibelle'>Quelles sont les réussites et les apports pour le Groupe ?</span><textarea id='objectif_reussite_\" + (parseInt(objectifIndex) + 1) + \"' required='required' class='managerTextarea objectifInput' style='height: 10em;'></textarea></td></tr>\";

                    // On insère le code HTML à la suite du dernière objectif.
                    \$('#addObjectif').parent('td').parent('tr').before(objectifHtml);

                    // On attribut le nombre d'objectif au formulaire.
                    \$('#form_NombreObjectifs').val(Cookies.get('ObjectifNumber'));
                }
            }

            // Pour chaques sélécteur et input du formulaire...
            \$('#formulaireDeveloppementProfessionnelDiv select, #formulaireDeveloppementProfessionnelDiv input, #formulaireDeveloppementProfessionnelDiv textarea').each(function () {
                // Si le champ a un cookie associé...
                if (Cookies.get(\$(this).attr('id')) !== undefined) {
                    \$(this).val(Cookies.get(\$(this).attr('id'))); // On attribue la valeur du cookie au champ du formulaire.
                }
            });
        }

        // Supprime un formulaire d'objectifs.
        function deleteObjectif(element) {
            var objectifIndex = element.attr('tr_index'); // On récupére la class des champs d'objectif de l'indes séléctionné.
            \$('.' + objectifIndex).remove(); // On supprime les champs de même class.

            // On décrémente la valeur du nombre d'objectif.
            \$('#form_NombreObjectifs').val(parseInt(\$('#form_NombreObjectifs').val()) - 1);

            // On crée un cookie contenant le nombre d'objectif Actuel.
            Cookies.set('ObjectifNumber', \$('#form_NombreObjectifs').val());
        }

        // Ajoute un formulaire d'objectif.
        function addObjectif(objectifIndex) {
            // Génération du code HTML à insérer.
            var objectifHtml = \"<tr class='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"'><td class='neutreTd' colspan='2'><span class='questionLibelle'>Objectif \" + (parseInt(objectifIndex) + 1) + \" : Décrivez l'objectif (<span class='deleteObjectif' tr_index='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"' onclick='deleteObjectif(\$(this));'>supprimer</span>)</span><textarea id='objectif_description_\" + (parseInt(objectifIndex) + 1) + \"' required='required' class='neutreTextarea objectifInput' style='height: 2em;'></textarea></td></tr><tr class='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"'><td class='managerTd' colspan='2'><span class='questionLibelle'>Quels sont les résultats obtenus ?</span><textarea id='objectif_resultat_\" + (parseInt(objectifIndex) + 1) + \"' required='required' class='managerTextarea objectifInput' style='height: 10em;'></textarea></td></tr><tr class='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"'><td class='managerTd noWhiteSpaceTd' colspan='2'><span class='questionLibelle'>Sélectionnez le niveau d'atteinte de l'objectif</span><select id='objectif_niveau_\" + (parseInt(objectifIndex) + 1) + \"' required='required' class='objectifSelect'><option value='' selected='selected'>Choisir une réponse...</option><option value='Non atteint'>Non atteint</option><option value='Partiellement atteint'>Partiellement atteint</option><option value='Atteint'>Atteint</option><option value='Dépassé'>Dépassé</option></select></td></tr><tr class='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"'><td class='managerTd' colspan='2'><span class='questionLibelle'>Quelles ont été les difficultés rencontrées ?</span><textarea id='objectif_difficulte_\" + (parseInt(objectifIndex) + 1) + \"' class='managerTextarea objectifInput' style='height: 10em;'></textarea></td></tr><tr class='objectif_td_\" + (parseInt(objectifIndex) + 1) + \"'><td class='managerTd' colspan='2'><span class='questionLibelle'>Quelles sont les réussites et les apports pour le Groupe ?</span><textarea id='objectif_reussite_\" + (parseInt(objectifIndex) + 1) + \"' required='required' class='managerTextarea objectifInput' style='height: 10em;'></textarea></td></tr>\";

            // On insère le code HTML à la suite du dernière objectif.
            \$('#addObjectif').parent('td').parent('tr').before(objectifHtml);

            // On incrémente la valeur du nombre d'objectif.
            //\$('#addObjectif').attr('objectifCount', objectifIndex);
            \$('#form_NombreObjectifs').val(parseInt(\$('#form_NombreObjectifs').val()) + 1);

            // On crée un cookie contenant le nombre d'objectif Actuel.
            Cookies.set('ObjectifNumber', parseInt(objectifIndex) + 1);

        }

        // Attribut les valeurs des objectifs au champ correspondant du formulaire.
        function saveOjectifsData() {
            var data = {}; // Initialisation d'un nouvel objet.

            // Pour chaques champs d'objetifs...
            \$('.objectifInput, .objectifSelect').each(function () {
                data[\$(this).attr('id')] = \$(this).val(); // On attibut la valeur du champs à l'objet.
            });

            // On convertie le tableau au format JSON.
            var jsonData = JSON.stringify(data);

            // On attribut la chaine JSON au champs des objectifs.
            \$('#form_Objectifs').val(jsonData);
        }

        // Lis les valeurs des objectifs sauvegardées en base de données.
        function readObjectifData() {
            // Si il existe des objectifs enregistrés en base de données.
            if (\$('#form_Objectifs').val() !== '') {
                // On récupére les objectifs sous forme d'objet.
                var objectifsDatas = JSON.parse(\$('#form_Objectifs').val());

                // Pour chaques objectifs...
                \$.each(objectifsDatas, function (key, value) {
                    \$('#' + key).val(value); // On attribut sa valeur au champ d'objectif.
                    \$('#' + key).attr('disabled', 'disabled'); // On désactive le champ.
                });
            }
        }

        // Génére un PDF à partir du formulaire et l'affiche dans une popup.
        function ajaxConvertHtmlToPDF() {
            var formulaireOriginal = \$('#formulaireDeveloppementProfessionnelDiv');

            // On copie le formulaire d'entretien professionnel.
            var formulaireCopy = \$('<div>' + formulaireOriginal.html() + '</div>');

            // On supprime les boutons de la copie.
            formulaireCopy.find('button').remove();

            // On attribut les valeurs du formulaire à la copie.
            formulaireOriginal.find('textarea').each(function (index) {
                formulaireCopy.find('textarea').eq(index).text(\$(this).val());
            });
            formulaireOriginal.find('input').each(function (index) {
                formulaireCopy.find('input').eq(index).val(\$(this).val());
            });
            formulaireOriginal.find('select').each(function (index) {
                formulaireCopy.find('select').eq(index).find('option').removeAttr('selected');
                formulaireCopy.find('select').eq(index).find(\"option[value=\\\"\" + \$(this).find('option:selected').val() + \"\\\"]\").attr('selected', 'selected');
            });

            // On récupére le code HTML de la copie.
            var formulaireHtmlCopy = formulaireCopy.html();

            // On initialise une fenêtre popup qui affichera le PDF.
            var redirectWindow = window.open('', '_blank');
            redirectWindow.document.write(\"<p style='font-size: 2em;'>Vous pouvez fermer cet onglet une fois le téléchargement démarré.<p>\");

            // Génére le fichier PDF et l'affiche dans la popup.
            \$.ajax({
                url: '";
        // line 187
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_developpement_professionnel_ajax_convert_html_to_pdf");
        echo "',
                type: 'POST',
                async: false,
                data: {formulaireHtml: formulaireHtmlCopy, firstname: \$(\"#form_Prenom\").val(), lastname: \$(\"#form_Nom\").val()},
                dataType: 'HTML',
                success: function (downloadUrl) {
                    // On renome la popup et on lui assigne le PDF.
                    redirectWindow.location = downloadUrl;
                }
            });
        }

        // Redimensionne les textarea lorsque la barre de scroll apparait.
        function textareaAutoHeight() {
            // Si il y a une barre de scroll, redimensionne la textarea.
            function resizeHeight(element) {
                if (element.scrollHeight > \$(element).outerHeight()) {
                    \$(element).height(element.scrollHeight);
                }
            }

            // Pour chaques textarea...
            \$('textarea').each(function () {
                resizeHeight(this);
            });

            // Lorsque que l'on tape ou colle du texte dans une textara...
            \$('#formulaireDeveloppementProfessionnelDiv').on('keyup paste', 'textarea', function () {
                resizeHeight(this);
            });
        }
    </script>

    <div id=\"formulaireDeveloppementProfessionnelDiv\">        

        <style>
            #formulaireDeveloppementProfessionnelDiv {
                width: 70%;
                margin: auto;
            }

            #formulaireDeveloppementProfessionnelDiv form {
                width: 100%;
                margin: 0;
                padding: 0;
                border: none;
            }

            #infoGeneraleTable {
                width: 100%;
                border-collapse: collapse;
                border: 2px solid black;
            }

            #infoGeneraleTable tr, #infoGeneraleTable td {
                border-collapse: collapse;
                border: 1px solid black;
            }

            #infoGeneraleTable td {
                padding: 1em;
                color: black;
            }

            #infoGeneraleTable div:not(.cellInputDiv) {
                display: inline-block;
            }

            .cellInputDiv {
                display: table;
                width: 100%;
            }

            .cellInputDiv label {
                display: table-cell;
                width: 1px;
                white-space: pre;
            }

            .cellInputDiv input[type='text'], .cellInputDiv input[type='number'] {
                display: table-cell;
                box-sizing: border-box;
                width: 100%;
                text-align: center;
            }

            h4 {
                text-decoration: underline;
                color: rgb(0 ,32, 96);
                font-size: 1.2em;
            }

            .collaborateurTd, .collaborateurTextarea {
                background-color: rgb(218, 238, 243);
            }

            .managerTd, .managerTextarea {
                background-color: rgb(217, 217, 217);
            }

            .neutreTd, .neutreTextarea {
                background-color: white;
            }

            .questionsTable {
                table-layout: fixed;
                width: 100%;
            }

            .questionsTable, .questionsTable tr, .questionsTable td {
                border-collapse: collapse;
                border: 1px solid black;
            }

            .questionsTable td {
                width: 50%;
                padding-left: 0.5em;
                padding-right: 0.5em;
                color: black;
            }

            .questionsTable td textarea {
                display: block;
                box-sizing: border-box;
                width: 100%;
                resize: none;
                border: none;
            }

            .questionLibelle {
                display: block;
                font-style: italic;
                text-align: left;
            }

            .noWhiteSpaceTd {
                padding: 0.5% !important; 
                text-align: center;
            }

            .noWhiteSpaceTd select {
                width: 100%;
            }

            #questionsTable1 tr:nth-child(5), #questionsTable1 tr:nth-child(5) td {
                border-bottom: none;
            }

            #questionsTable1 tr:nth-child(6), #questionsTable1 tr:nth-child(6) td {
                border-top: none;
            }

            #questionsTable1 tr:nth-child(n+7):nth-child(-n+8), #questionsTable1 tr:nth-child(n+7):nth-child(-n+8) td {
                border-top: none;
                border-bottom: none;
            }

            #questionsTable1 tr:nth-child(n+10):nth-child(-n+13), #questionsTable1 tr:nth-child(n+10):nth-child(-n+13) td {
                border-top: none;
                border-bottom: none;
            }

            #questionsTable1 tr:nth-child(n+15):nth-child(-n+18), #questionsTable1 tr:nth-child(n+15):nth-child(-n+18) td {
                border-top: none;
                border-bottom: none;
            }

            #questionsTable1 tr:nth-child(n+20):nth-child(-n+21), #questionsTable1 tr:nth-child(n+20):nth-child(-n+21) td {
                border-top: none;
                border-bottom: none;
            }

            #questionsTable2 tr:nth-child(n+4):nth-child(-n+5), #questionsTable2 tr:nth-child(n+4):nth-child(-n+5) td {
                border-top: none;
                border-bottom: none;
            }

            #questionsTable3 tr:nth-child(n+6):nth-child(-n+7), #questionsTable3 tr:nth-child(n+6):nth-child(-n+7) td {
                border-top: none;
                border-bottom: none;
            }

            #questionsTable3 tr:nth-child(n+9):nth-child(-n+15), #questionsTable3 tr:nth-child(n+9):nth-child(-n+15) td {
                border-top: none;
                border-bottom: none;
            }

            #questionsTable4 tr:nth-child(n+5):nth-child(-n+6), #questionsTable4 tr:nth-child(n+5):nth-child(-n+6) td {
                border-top: none;
                border-bottom: none;
            }

            #questionsTable5 {
                margin-bottom: 2em;
            }

            #questionsTable6 {
                margin-bottom: 1em;
            }

            #formValidationParagraph {
                margin: 0;
                text-align: center;
            }

            #form_Valider {
                margin-bottom: 5em;
                padding: 1em;
            }

            #form_Valider:hover {
                /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#7db9e8+0,daeef3+100 */
                background: #7db9e8; /* Old browsers */
                background: -moz-linear-gradient(top,  #7db9e8 0%, #daeef3 100%); /* FF3.6-15 */
                background: -webkit-linear-gradient(top,  #7db9e8 0%,#daeef3 100%); /* Chrome10-25,Safari5.1-6 */
                background: linear-gradient(to bottom,  #7db9e8 0%,#daeef3 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7db9e8', endColorstr='#daeef3',GradientType=0 ); /* IE6-9 */
            }

            #formationTable {
                border-collapse: collapse;
                width: 100%;
            }

            #formationTable, #formationTable tr, #formationTable td {
                border: 1px solid black;
            }

            #formationTable td {
                padding: 0;
                text-align: center;
                background-color: rgb(217, 217, 217); 
            }

            #formationTable tr input[type='text'] {
                display: block;
                box-sizing: border-box;
                border: none;
                width: 100%;
                height: 100%;
            }

            .deleteObjectif {
                color: blue;
                cursor: pointer;
            }

            .deleteObjectif:hover {
                text-decoration: underline;
            }

            #addObjectif {
                color: blue;
                cursor: pointer;
            }

            #addObjectif:hover {
                text-decoration: underline;
            }
        </style>

        ";
        // line 448
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), 'form_start');
        echo "
        <table id='infoGeneraleTable'>
            <tr>
                <td><div class='cellInputDiv'>";
        // line 451
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Nom", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Nom", array()), 'widget');
        echo "</div></td>
                <td><div class='cellInputDiv'>";
        // line 452
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "PosteActuel", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "PosteActuel", array()), 'widget');
        echo "</div></td>
            </tr>
            <tr>
                <td><div class='cellInputDiv'>";
        // line 455
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Prenom", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Prenom", array()), 'widget');
        echo "</div></td>
                <td>";
        // line 456
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "DateAnciennetePoste", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "DateAnciennetePoste", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td><div class='cellInputDiv'>";
        // line 459
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Age", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Age", array()), 'widget');
        echo "</div></td>
                <td><div class='cellInputDiv'>";
        // line 460
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "SalaireBrutMensuel", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "SalaireBrutMensuel", array()), 'widget');
        echo "</div></td>
            </tr>
            <tr>
                <td>";
        // line 463
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "DateAncienneteGroupe", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "DateAncienneteGroupe", array()), 'widget');
        echo "</td>
                <td><div class='cellInputDiv'>";
        // line 464
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "NomResponsable", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "NomResponsable", array()), 'widget');
        echo "</div></td>
            </tr>
            <tr>
                <td><div class='cellInputDiv'>";
        // line 467
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Entite", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Entite", array()), 'widget');
        echo "</div></td>
                <td>";
        // line 468
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "DateEntretien", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "DateEntretien", array()), 'widget');
        echo "</td>
            </tr>
        </table>

        <h4>Thème 1 : Bilan de l'année écoulée</h4>

        <table class='questionsTable' id=\"questionsTable1\">
            <tr>
                <td class='collaborateurTd' style='text-align: center; font-weight: bold;'>AUTO EVALUATION</td>
                <td class='managerTd' style='text-align: center; font-weight: bold;'>EVALUATION DU MANAGER</td>
            </tr>
            <tr>
                <td colspan='2' style='text-align: center; font-weight: bold;'>Bilan de l'année écoulée</td>
            </tr>
            ";
        // line 482
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 1) && ($context["key"] <= 6))) {
                // line 483
                echo "                <tr>
                    ";
                // line 484
                if ($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) {
                    // line 485
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 486
                        echo "                            <td class='collaborateurTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 487
$context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 488
                        echo "                            <td class='collaborateurTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 490
                    echo "                        ";
                }
                // line 491
                echo "                        ";
                if ($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) {
                    // line 492
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 493
                        echo "                            <td class='managerTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 494
$context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 495
                        echo "                            <td class='managerTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 497
                    echo "                        ";
                }
                // line 498
                echo "                        ";
                if ($this->getAttribute($context["question"], "Neutre", array(), "array", true, true)) {
                    // line 499
                    echo "                        <td class='neutreTd' colspan='2'><span class='questionLibelle'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Question", array(), "array"), "html", null, true);
                    echo "</span>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Neutre"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                    echo "</td>
                    ";
                }
                // line 501
                echo "                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 502
        echo "       
            ";
        // line 503
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "NombreObjectifs", array()), "vars", array()), "value", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["objectifIndex"]) {
            // line 504
            echo "                <tr class=\"objectif_td_";
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\">
                    <td class=\"neutreTd\" colspan=\"2\">
                        <span class=\"questionLibelle\">Objectif ";
            // line 506
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo " : Décrivez l'objectif (<span class=\"deleteObjectif\" tr_index=\"objectif_td_";
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\" onclick=\"deleteObjectif(\$(this));\">supprimer</span>)</span>
                        <textarea id=\"objectif_description_";
            // line 507
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\" required=\"required\" class=\"neutreTextarea objectifInput\" style=\"height: 2em;\"></textarea>
                    </td>
                </tr>
                <tr class=\"objectif_td_";
            // line 510
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\">
                    <td class=\"managerTd\" colspan=\"2\"><span class=\"questionLibelle\">Quels sont les résultats obtenus ?</span><textarea id=\"objectif_resultat_";
            // line 511
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\" required=\"required\" class=\"managerTextarea objectifInput\" style=\"height: 10em;\"></textarea></td>
                </tr>
                <tr class=\"objectif_td_";
            // line 513
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\">
                    <td class=\"managerTd noWhiteSpaceTd\" colspan=\"2\"><span class=\"questionLibelle\">Sélectionnez le niveau d'atteinte de l'objectif</span><select id=\"objectif_niveau_";
            // line 514
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\" required=\"required\" class=\"objectifSelect\"><option value=\"\" selected=\"selected\">Choisir une réponse...</option><option value=\"Non atteint\">Non atteint</option><option value=\"Partiellement atteint\">Partiellement atteint</option><option value=\"Atteint\">Atteint</option><option value=\"Dépassé\">Dépassé</option></select></td>
                </tr>
                <tr class=\"objectif_td_";
            // line 516
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\">
                    <td class=\"managerTd\" colspan=\"2\"><span class=\"questionLibelle\">Quelles ont été les difficultés rencontrées ?</span><textarea id=\"objectif_difficulte_";
            // line 517
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\" class=\"managerTextarea objectifInput\" style=\"height: 10em;\"></textarea></td>
                </tr>
                <tr class=\"objectif_td_";
            // line 519
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\">
                    <td class=\"managerTd\" colspan=\"2\"><span class=\"questionLibelle\">Quelles sont les réussites et les apports pour le Groupe ?</span><textarea id=\"objectif_reussite_";
            // line 520
            echo twig_escape_filter($this->env, $context["objectifIndex"], "html", null, true);
            echo "\" required=\"required\" class=\"managerTextarea objectifInput\" style=\"height: 10em;\"></textarea></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['objectifIndex'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 523
        echo "            <tr>
                <td colspan=\"2\" style=\"text-align: center; background-color: rgb(217, 217, 217);\"><span id=\"addObjectif\" onclick=\"addObjectif(\$('#form_NombreObjectifs').val());\">Ajouter un objectif</span></td>
            </tr>

            <tr>
                <td colspan='2' style='text-align: center; font-weight: bold;'>Charge de travail</td>
            </tr>
            ";
        // line 530
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 17) && ($context["key"] <= 18))) {
                // line 531
                echo "                <tr>
                    ";
                // line 532
                if ($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) {
                    // line 533
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 534
                        echo "                            <td class='collaborateurTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 535
$context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 536
                        echo "                            <td class='collaborateurTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 538
                    echo "                        ";
                }
                // line 539
                echo "                        ";
                if ($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) {
                    // line 540
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 541
                        echo "                            <td class='managerTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 542
$context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 543
                        echo "                            <td class='managerTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 545
                    echo "                        ";
                }
                // line 546
                echo "                        ";
                if ($this->getAttribute($context["question"], "Neutre", array(), "array", true, true)) {
                    // line 547
                    echo "                        <td class='neutreTd' colspan='2'><span class='questionLibelle'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Question", array(), "array"), "html", null, true);
                    echo "</span>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Neutre"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                    echo "</td>
                    ";
                }
                // line 549
                echo "                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 551
        echo "        </table>

        <h4>Thème 2 : Acquis, forces et faiblesses</h4>
        <table class='questionsTable' id=\"questionsTable2\">
            <tr>
                <td class='collaborateurTd' style='text-align: center; font-weight: bold;'>AUTO EVALUATION</td>
                <td class='managerTd' style='text-align: center; font-weight: bold;'>EVALUATION DU MANAGER</td>
            </tr>

            ";
        // line 560
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 19) && ($context["key"] <= 23))) {
                // line 561
                echo "                <tr>
                    ";
                // line 562
                if ($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) {
                    // line 563
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 564
                        echo "                            <td class='collaborateurTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 565
$context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 566
                        echo "                            <td class='collaborateurTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 568
                    echo "                        ";
                }
                // line 569
                echo "                        ";
                if ($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) {
                    // line 570
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 571
                        echo "                            <td class='managerTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 572
$context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 573
                        echo "                            <td class='managerTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 575
                    echo "                        ";
                }
                // line 576
                echo "                        ";
                if ($this->getAttribute($context["question"], "Neutre", array(), "array", true, true)) {
                    // line 577
                    echo "                        <td class='neutreTd' colspan='2'><span class='questionLibelle'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Question", array(), "array"), "html", null, true);
                    echo "</span>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Neutre"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                    echo "</td>
                    ";
                }
                // line 579
                echo "                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 581
        echo "        </table>

        <h4>Thème 3 : Projet professionnel - motivations et aspirations</h4>
        <table class='questionsTable' id=\"questionsTable3\">
            <tr>
                <td class='collaborateurTd' style='text-align: center; font-weight: bold;'>AUTO EVALUATION</td>
                <td class='managerTd' style='text-align: center; font-weight: bold;'>EVALUATION DU MANAGER</td>
            </tr>
            <tr>
                <td colspan='2' style='text-align: center; font-weight: bold;'>Evolution du métier</td>
            </tr>

            ";
        // line 593
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 24) && ($context["key"] <= 25))) {
                // line 594
                echo "                <tr>
                    ";
                // line 595
                if ($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) {
                    // line 596
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 597
                        echo "                            <td class='collaborateurTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 598
$context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 599
                        echo "                            <td class='collaborateurTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 601
                    echo "                        ";
                }
                // line 602
                echo "                        ";
                if ($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) {
                    // line 603
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 604
                        echo "                            <td class='managerTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 605
$context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 606
                        echo "                            <td class='managerTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 608
                    echo "                        ";
                }
                // line 609
                echo "                        ";
                if ($this->getAttribute($context["question"], "Neutre", array(), "array", true, true)) {
                    // line 610
                    echo "                        <td class='neutreTd' colspan='2'><span class='questionLibelle'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Question", array(), "array"), "html", null, true);
                    echo "</span>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Neutre"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                    echo "</td>
                    ";
                }
                // line 612
                echo "                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 614
        echo "
            <tr>
                <td colspan='2' style='text-align: center; font-weight: bold;'>Projet professionnel</td>
            </tr>

            ";
        // line 619
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 26) && ($context["key"] <= 27))) {
                // line 620
                echo "                <tr>
                    ";
                // line 621
                if ($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) {
                    // line 622
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 623
                        echo "                            <td class='collaborateurTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 624
$context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 625
                        echo "                            <td class='collaborateurTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 627
                    echo "                        ";
                }
                // line 628
                echo "                        ";
                if ($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) {
                    // line 629
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 630
                        echo "                            <td class='managerTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 631
$context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 632
                        echo "                            <td class='managerTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 634
                    echo "                        ";
                }
                // line 635
                echo "                        ";
                if ($this->getAttribute($context["question"], "Neutre", array(), "array", true, true)) {
                    // line 636
                    echo "                        <td class='neutreTd' colspan='2'><span class='questionLibelle'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Question", array(), "array"), "html", null, true);
                    echo "</span>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Neutre"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                    echo "</td>
                    ";
                }
                // line 638
                echo "                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 640
        echo "
            <tr>
                <td colspan='2' style='text-align: center; font-weight: bold;'>Mobilité géographique</td>
            </tr>

            ";
        // line 645
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 28) && ($context["key"] <= 28))) {
                // line 646
                echo "                <tr>
                    <td class='collaborateurTd noWhiteSpaceTd' colspan='2'><span class='questionLibelle'>";
                // line 647
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                echo "</span>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget');
                echo "</td>
                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 650
        echo "            <tr>
                <td class='collaborateurTd' colspan='2' style='padding-top: 1em;'><span class='questionLibelle'>Région/Pays : </span></td>
            </tr>
            <tr>
                <td class='collaborateurTd' colspan='2'>";
        // line 654
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "RegionFrance", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "RegionFrance", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='collaborateurTd' colspan='2'>";
        // line 657
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "PaysInternational", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "PaysInternational", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='collaborateurTd' colspan='2' style='padding-top: 1em;'><span class='questionLibelle'>Quels est mon niveau de langue ?</span></td>
            </tr>
            <tr>
                <td class='collaborateurTd' colspan='2'>";
        // line 663
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Langue1", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Langue1", array()), 'widget', array("attr" => array("style" => "margin-right: 1em;")));
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "NiveauLangue1", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "NiveauLangue1", array()), 'widget');
        echo "</td>
            </tr>
            <tr>
                <td class='collaborateurTd' colspan='2'>";
        // line 666
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Langue2", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Langue2", array()), 'widget', array("attr" => array("style" => "margin-right: 1em;")));
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "NiveauLangue2", array()), 'label');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "NiveauLangue2", array()), 'widget');
        echo "</td>
            </tr>
        </table>

        <h4>Thème 4 : Objectifs de l'année à venir</h4>
        <table class='questionsTable' id=\"questionsTable4\">
            <tr>
                <td class='collaborateurTd' style='text-align: center; font-weight: bold;'>AUTO EVALUATION</td>
                <td class='managerTd' style='text-align: center; font-weight: bold;'>EVALUATION DU MANAGER</td>
            </tr>
            <tr>
                <td colspan='2' style='text-align: center; font-weight: bold;'>Objectifs personnels et professionnels pour l'année prochaine</td>
            </tr>

            ";
        // line 680
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 29) && ($context["key"] <= 29))) {
                // line 681
                echo "                <tr>
                    ";
                // line 682
                if ($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) {
                    // line 683
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 684
                        echo "                            <td class='collaborateurTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 685
$context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 686
                        echo "                            <td class='collaborateurTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 688
                    echo "                        ";
                }
                // line 689
                echo "                        ";
                if ($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) {
                    // line 690
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 691
                        echo "                            <td class='managerTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 692
$context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 693
                        echo "                            <td class='managerTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 695
                    echo "                        ";
                }
                // line 696
                echo "                        ";
                if ($this->getAttribute($context["question"], "Neutre", array(), "array", true, true)) {
                    // line 697
                    echo "                        <td class='neutreTd' colspan='2'><span class='questionLibelle'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Question", array(), "array"), "html", null, true);
                    echo "</span>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Neutre"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                    echo "</td>
                    ";
                }
                // line 699
                echo "                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 701
        echo "
            <tr>
                <td colspan='2' style='text-align: center; font-weight: bold;'>Moyens pour atteindre les objectifs ?</td>
            </tr>

            ";
        // line 706
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 30) && ($context["key"] <= 30))) {
                // line 707
                echo "                <tr>
                    ";
                // line 708
                if ($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) {
                    // line 709
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 710
                        echo "                            <td class='collaborateurTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 711
$context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 712
                        echo "                            <td class='collaborateurTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 714
                    echo "                        ";
                }
                // line 715
                echo "                        ";
                if ($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) {
                    // line 716
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 717
                        echo "                            <td class='managerTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 718
$context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 719
                        echo "                            <td class='managerTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 721
                    echo "                        ";
                }
                // line 722
                echo "                        ";
                if ($this->getAttribute($context["question"], "Neutre", array(), "array", true, true)) {
                    // line 723
                    echo "                        <td class='neutreTd' colspan='2'><span class='questionLibelle'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Question", array(), "array"), "html", null, true);
                    echo "</span>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Neutre"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                    echo "</td>
                    ";
                }
                // line 725
                echo "                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 727
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 31) && ($context["key"] <= 31))) {
                // line 728
                echo "                <tr>
                    ";
                // line 729
                if ($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) {
                    // line 730
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 731
                        echo "                            <td class='collaborateurTd'><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    }
                    // line 733
                    echo "                    ";
                }
                // line 734
                echo "                    <td class='managerTd' style='text-align: center; vertical-align: top;'>
                        <span class='questionLibelle' style='margin-bottom: 1em;'>Quelles formations sont à prévoir ? Indiquez les niveaux de priorité ?</span>
                        <table id='formationTable'>
                            <tr>
                                <td>Formation</td>
                                <td>Priorité</td>
                            </tr>
                            <tr>
                                <td>";
                // line 742
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Formation1", array(), "array"), 'widget');
                echo "</td>
                                <td>";
                // line 743
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Priorite1", array(), "array"), 'widget');
                echo "</td>
                            </tr>
                            <tr>
                                <td>";
                // line 746
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Formation2", array(), "array"), 'widget');
                echo "</td>
                                <td>";
                // line 747
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Priorite2", array(), "array"), 'widget');
                echo "</td>
                            </tr>
                            <tr>
                                <td>";
                // line 750
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Formation3", array(), "array"), 'widget');
                echo "</td>
                                <td>";
                // line 751
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Priorite3", array(), "array"), 'widget');
                echo "</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 757
        echo "        </table>

        <h4>Synthèse de l'entretien</h4>
        <table class='questionsTable' id=\"questionsTable5\">
            ";
        // line 761
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 32) && ($context["key"] <= 32))) {
                // line 762
                echo "                <tr>
                    ";
                // line 763
                if ($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) {
                    // line 764
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 765
                        echo "                            <td class='collaborateurTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 766
$context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 767
                        echo "                            <td class='collaborateurTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 769
                    echo "                        ";
                }
                // line 770
                echo "                        ";
                if ($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) {
                    // line 771
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 772
                        echo "                            <td class='managerTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 773
$context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 774
                        echo "                            <td class='managerTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 776
                    echo "                        ";
                }
                // line 777
                echo "                        ";
                if ($this->getAttribute($context["question"], "Neutre", array(), "array", true, true)) {
                    // line 778
                    echo "                        <td class='neutreTd' colspan='2'><span class='questionLibelle'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Question", array(), "array"), "html", null, true);
                    echo "</span>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Neutre"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                    echo "</td>
                    ";
                }
                // line 780
                echo "                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 782
        echo "        </table>

        <table class='questionsTable' id=\"questionsTable6\">
            ";
        // line 785
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 33) && ($context["key"] <= 34))) {
                // line 786
                echo "                <tr>
                    ";
                // line 787
                if ($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) {
                    // line 788
                    echo "                        ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 789
                        echo "                            <td class='collaborateurTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 790
$context["question"], "Collaborateur", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 791
                        echo "                            <td class='collaborateurTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Collaborateur", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Collaborateur"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 793
                    echo "                        ";
                }
                // line 794
                echo "                        ";
                if ($this->getAttribute($context["question"], "Manager", array(), "array", true, true)) {
                    // line 795
                    echo "                            ";
                    if (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Texte")) {
                        // line 796
                        echo "                            <td class='managerTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                        echo "</td>
                        ";
                    } elseif (($this->getAttribute($this->getAttribute(                    // line 797
$context["question"], "Manager", array(), "array"), "Type", array(), "array") == "Choix")) {
                        // line 798
                        echo "                            <td class='managerTd noWhiteSpaceTd' ";
                        echo (($this->getAttribute($context["question"], "Collaborateur", array(), "array", true, true)) ? ("") : ("colspan='2'"));
                        echo "><span class='questionLibelle'>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Manager", array(), "array"), "Question", array(), "array"), "html", null, true);
                        echo "</span>";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Manager"), array(), "array"), 'widget');
                        echo "</td>
                            ";
                    }
                    // line 800
                    echo "                        ";
                }
                // line 801
                echo "                        ";
                if ($this->getAttribute($context["question"], "Neutre", array(), "array", true, true)) {
                    // line 802
                    echo "                        <td class='neutreTd' colspan='2'><span class='questionLibelle'>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Question", array(), "array"), "html", null, true);
                    echo "</span>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), ($context["key"] . "_Neutre"), array(), "array"), 'widget', array("attr" => array("style" => (($this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array", false, true), "Taille", array(), "array", true, true)) ? ((("height: " . $this->getAttribute($this->getAttribute($context["question"], "Neutre", array(), "array"), "Taille", array(), "array")) . "em;")) : ("")))));
                    echo "</td>
                    ";
                }
                // line 804
                echo "                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 806
        echo "        </table>
        <p id='formValidationParagraph'>
            <button id=\"downloadPDF\" type=\"button\">Export PDF</button>
            <br /><br />
            ";
        // line 810
        if (($this->getAttribute((isset($context["entretien"]) ? $context["entretien"] : null), "statut", array(), "any", true, true) && ($this->getAttribute((isset($context["entretien"]) ? $context["entretien"] : null), "statut", array()) == "Synthèse"))) {
            // line 811
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Valider", array()), 'widget', array("attr" => array("style" => "display: none;")));
            echo "
            ";
        } else {
            // line 813
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), "Valider", array()), 'widget', array("attr" => array("onclick" => "saveOjectifsData();")));
            echo "
            ";
        }
        // line 815
        echo "        </p>
        ";
        // line 816
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaireDevellopementProfessionnel"]) ? $context["formulaireDevellopementProfessionnel"] : null), 'form_end');
        echo "

    </div>
";
    }

    public function getTemplateName()
    {
        return "NoxIntranetUserBundle:DeveloppementProfessionnel:formulaireDeveloppementProfessionnel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1648 => 816,  1645 => 815,  1639 => 813,  1633 => 811,  1631 => 810,  1625 => 806,  1617 => 804,  1609 => 802,  1606 => 801,  1603 => 800,  1593 => 798,  1591 => 797,  1582 => 796,  1579 => 795,  1576 => 794,  1573 => 793,  1563 => 791,  1561 => 790,  1552 => 789,  1549 => 788,  1547 => 787,  1544 => 786,  1539 => 785,  1534 => 782,  1526 => 780,  1518 => 778,  1515 => 777,  1512 => 776,  1502 => 774,  1500 => 773,  1491 => 772,  1488 => 771,  1485 => 770,  1482 => 769,  1472 => 767,  1470 => 766,  1461 => 765,  1458 => 764,  1456 => 763,  1453 => 762,  1448 => 761,  1442 => 757,  1429 => 751,  1425 => 750,  1419 => 747,  1415 => 746,  1409 => 743,  1405 => 742,  1395 => 734,  1392 => 733,  1384 => 731,  1381 => 730,  1379 => 729,  1376 => 728,  1370 => 727,  1362 => 725,  1354 => 723,  1351 => 722,  1348 => 721,  1338 => 719,  1336 => 718,  1327 => 717,  1324 => 716,  1321 => 715,  1318 => 714,  1308 => 712,  1306 => 711,  1297 => 710,  1294 => 709,  1292 => 708,  1289 => 707,  1284 => 706,  1277 => 701,  1269 => 699,  1261 => 697,  1258 => 696,  1255 => 695,  1245 => 693,  1243 => 692,  1234 => 691,  1231 => 690,  1228 => 689,  1225 => 688,  1215 => 686,  1213 => 685,  1204 => 684,  1201 => 683,  1199 => 682,  1196 => 681,  1191 => 680,  1171 => 666,  1162 => 663,  1152 => 657,  1145 => 654,  1139 => 650,  1127 => 647,  1124 => 646,  1119 => 645,  1112 => 640,  1104 => 638,  1096 => 636,  1093 => 635,  1090 => 634,  1080 => 632,  1078 => 631,  1069 => 630,  1066 => 629,  1063 => 628,  1060 => 627,  1050 => 625,  1048 => 624,  1039 => 623,  1036 => 622,  1034 => 621,  1031 => 620,  1026 => 619,  1019 => 614,  1011 => 612,  1003 => 610,  1000 => 609,  997 => 608,  987 => 606,  985 => 605,  976 => 604,  973 => 603,  970 => 602,  967 => 601,  957 => 599,  955 => 598,  946 => 597,  943 => 596,  941 => 595,  938 => 594,  933 => 593,  919 => 581,  911 => 579,  903 => 577,  900 => 576,  897 => 575,  887 => 573,  885 => 572,  876 => 571,  873 => 570,  870 => 569,  867 => 568,  857 => 566,  855 => 565,  846 => 564,  843 => 563,  841 => 562,  838 => 561,  833 => 560,  822 => 551,  814 => 549,  806 => 547,  803 => 546,  800 => 545,  790 => 543,  788 => 542,  779 => 541,  776 => 540,  773 => 539,  770 => 538,  760 => 536,  758 => 535,  749 => 534,  746 => 533,  744 => 532,  741 => 531,  736 => 530,  727 => 523,  718 => 520,  714 => 519,  709 => 517,  705 => 516,  700 => 514,  696 => 513,  691 => 511,  687 => 510,  681 => 507,  675 => 506,  669 => 504,  665 => 503,  662 => 502,  654 => 501,  646 => 499,  643 => 498,  640 => 497,  630 => 495,  628 => 494,  619 => 493,  616 => 492,  613 => 491,  610 => 490,  600 => 488,  598 => 487,  589 => 486,  586 => 485,  584 => 484,  581 => 483,  576 => 482,  558 => 468,  553 => 467,  546 => 464,  541 => 463,  534 => 460,  529 => 459,  522 => 456,  517 => 455,  510 => 452,  505 => 451,  499 => 448,  235 => 187,  56 => 10,  53 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetUserBundle:DeveloppementProfessionnel:formulaireDeveloppementProfessionnel.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\UserBundle/Resources/views/DeveloppementProfessionnel/formulaireDeveloppementProfessionnel.html.twig");
    }
}
