<?php

/* @NoxIntranetRessources/QuestionnaireStress/questionnaire.html.twig */
class __TwigTemplate_192ccdb5917377e1b2bb20509d7ba75d2ce76412bf79af69d97ba189befc664f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/QuestionnaireStress/questionnaire.html.twig", 1);
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
        echo " Questionnaire Stress ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Questionnaire Stress";
    }

    // line 7
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "Évaluer les facteurs de risques psychosociaux";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "
    <style>
        #formulaireQuestionnaireStressDiv {
            width: 70%;
            margin: auto;
        }

        #formulaireQuestionnaireStressDiv form {
            border: none;
            margin: 0;
            width: 100%;
            padding: 0;
        }

        #formulaireQuestionnaireStressDiv form table {
            table-layout: fixed;
        }

        #formulaireQuestionnaireStressDiv form table, #formulaireQuestionnaireStressDiv form table tr, #formulaireQuestionnaireStressDiv form table th, #formulaireQuestionnaireStressDiv form table td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        #formulaireQuestionnaireStressDiv form table td, #formulaireQuestionnaireStressDiv form table th {
            color: rgb(147, 63, 105);
            padding: 1em;
        }

        #formulaireQuestionnaireStressDiv p {
            color: black;
        }

        #formulaireQuestionnaireStressDiv h3 {
            color: rgb(147, 63, 105);
            margin-top: 3em;
            margin-bottom: 0;
        }

        .questionTd {
            width: 50%;
        }

        .questionLabel {
            display: block;
            color: rgb(168,165,163);
            font-weight: bold;
        }

        .questionTexte {
            font-style: italic;
        }

        .questionDetails {
            display: block;
            color: black;
            font-style: italic;
        }

        .commentaire textarea {
            display: block;
            box-sizing: border-box;
            width: 100%;
            height: 5em;
            margin: 0; 
            resize: none;
        }

        #validationFormulaire {
            text-align: center;
        }

        #validationFormulaire button {
            color: rgb(147, 63, 105);
            border-color: rgb(175,133,153);
            font-size: 1.5em;
            /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#ffffff+0,f6f6f6+47,ededed+100;White+3D+%231 */
            background: rgb(255,255,255); /* Old browsers */
            background: -moz-linear-gradient(top,  rgba(255,255,255,1) 0%, rgba(246,246,246,1) 47%, rgba(237,237,237,1) 100%); /* FF3.6-15 */
            background: -webkit-linear-gradient(top,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(to bottom,  rgba(255,255,255,1) 0%,rgba(246,246,246,1) 47%,rgba(237,237,237,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed',GradientType=0 ); /* IE6-9 */
        }

        #validationFormulaire button:hover { 
            color: rgb(147, 63, 105);
            border-color: rgb(147, 63, 105);
        }
    </style>

    <div id='formulaireQuestionnaireStressDiv'>
        <p>
            Le stress au travail est reconnu comme un problème majeur pour la santé des travailleurs et de l'entreprise qui les emploie. <br /><br />
            Un état de stress survient lorsqu’il y a déséquilibre entre la perception qu’une personne a des contraintes que lui impose son environnement et la perception qu’elle a de ses propres ressources pour y faire face. <br /><br />
            Les employés stressés ont davantage de risques d’avoir une santé plus fragile, des problèmes de communication avec leurs collègues, d'être démotivés et/ou de s'isoler. <br /><br />
            Le stress peut être occassionné par des pressions au travail et hors travail. <br /><br />
            Le stress extraprofessionnel n'étant pas à notre portée, nous allons cependant tenter d'identifier, par le biais de ce questionnaire, les sources de stress possible au sein du groupe NOX INGENIERIE afin de pouvoir mener des actions permettant à chacun de mieux vivre au travail. <br /><br />
            Afin que vous puissiez vous exprimer librement, ce questionnaire est anonyme. <br /><br />
            La graduation est la suivante:  
        </p>

        <ol>
            <li>Jamais</li>
            <li>Parfois</li>
            <li>Souvent</li>
            <li>Toujours</li>
        </ol>

        ";
        // line 117
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["questionnaire"]) ? $context["questionnaire"] : null), 'form_start');
        echo "

        <h3>1/ Horaires de travail difficiles</h3>

        <p>
            La durée et l'organisation du temps de travail peuvent avoir une influence sur la santé physique et mentale des salariés. Les interférences qu'elles peuvent occasionner avec les engagements familiaux ou sociaux rendent également difficile la conciliation entre la vie professionnelle et la vie personnelle. Le nombre d'heures travaillées par semaine, les types d'horaires et de rotation, la disponibilité demandée aux salariés au-delà de leurs horaires de travail, les préavis de communication de leurs  plannings horaires sont notamment à prendre en compte dans l'évaluation.
        </p>

        <table>
            <tr>
                <th></th>
                <th>Réponse</th>
                <th>Commentaires<span style='display: block; color: rgb(175,133,153);'>(illustrations par des situations de travail, propositions d'actions)</span></th>
            </tr>
            ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 1) && ($context["key"] <= 4))) {
                // line 132
                echo "                <tr>
                    <td class='questionTd'><span class='questionLabel'>";
                // line 133
                echo twig_escape_filter($this->env, (($context["key"] . ". ") . $this->getAttribute($context["question"], "Label", array(), "array")), "html", null, true);
                echo "</span><span class='questionTexte'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Question", array(), "array"), "html", null, true);
                echo "</span><span class='questionDetails'>";
                if ($this->getAttribute($context["question"], "Details", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Details", array(), "array"), "html", null, true);
                }
                echo "</span></td>
                    <td>";
                // line 134
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), $context["key"], array(), "array"), 'widget');
                echo "</td>
                    <td class='commentaire'>";
                // line 135
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), ("Commentaire_" . $context["key"]), array(), "array"), 'widget');
                echo "</td>
                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "        </table>

        <h3>2/ Exigences émotionnelles</h3>

        <p>
            Certaines activités professionnelles ou métiers peuvent être éprouvants pour les salariés sur le plan émotionnel. C'est par exemple le cas des salariés en contact avec la clientèle, exposés parfois à des situations de tension épuisantes psychologiquement. Il en est de même pour les personnels dans les métiers d'aide, confrontés à la souffrance et à la détresse d'autrui (maladie, mort, précarité...). Si ces activités comportent des aspects gratifiants, elles imposent également bien souvent aux travailleurs de maîtriser leurs propres émotions et de faire preuve de contrôle de soi. Ces exigences émotionnelles induisent une charge mentale et psychologique forte dans la réalisation du travail.
        </p>

        <table>
            <tr>
                <th></th>
                <th>Réponse</th>
                <th>Commentaires<span style='display: block; color: rgb(175,133,153);'>(illustrations par des situations de travail, propositions d'actions)</span></th>
            </tr>
            ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 5) && ($context["key"] <= 7))) {
                // line 153
                echo "                <tr>
                    <td class='questionTd'><span class='questionLabel'>";
                // line 154
                echo twig_escape_filter($this->env, (($context["key"] . ". ") . $this->getAttribute($context["question"], "Label", array(), "array")), "html", null, true);
                echo "</span><span class='questionTexte'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Question", array(), "array"), "html", null, true);
                echo "</span><span class='questionDetails'>";
                if ($this->getAttribute($context["question"], "Details", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Details", array(), "array"), "html", null, true);
                }
                echo "</span></td>
                    <td>";
                // line 155
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), $context["key"], array(), "array"), 'widget');
                echo "</td>
                    <td class='commentaire'>";
                // line 156
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), ("Commentaire_" . $context["key"]), array(), "array"), 'widget');
                echo "</td>
                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "        </table>

        <h3>3/ Faible autonomie au travail</h3>

        <p>
            L'autonomie au travail désigne la possibilité pour le salarié d'être acteur de son travail et, plus largement, de sa vie professionnelle. Elle peut s'exercer dans le choix de la façon de travailler, dans la capacité à prendre des initiatives face à des situations non prévues mais aussi dans celle d'interrompre momentanément son travail à un moment choisi. L'autonomie dépend des marges de manœuvre accordées aux salariés par l'organisation du travail dans les modes d'exécution du travail, dans le contenu des tâches... Cette dimension comprend également les possibilités qu'ont les travailleurs d'acquérir, de maintenir et de valoriser leurs compétences dans leur travail. Selon les connaissances scientifiques actuelles, une autonomie insuffisante représente un risque de maladies cardiovasculaires et aussi un risque pour la santé mentale. Au-delà de ces risques, elle tend à appauvrir l'intérêt du travail et à dévaloriser les salariés et leurs compétences professionnelles.
        </p>

        <table>
            <tr>
                <th></th>
                <th>Réponse</th>
                <th>Commentaires<span style='display: block; color: rgb(175,133,153);'>(illustrations par des situations de travail, propositions d'actions)</span></th>
            </tr>
            ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 8) && ($context["key"] <= 10))) {
                // line 174
                echo "                <tr>
                    <td class='questionTd'><span class='questionLabel'>";
                // line 175
                echo twig_escape_filter($this->env, (($context["key"] . ". ") . $this->getAttribute($context["question"], "Label", array(), "array")), "html", null, true);
                echo "</span><span class='questionTexte'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Question", array(), "array"), "html", null, true);
                echo "</span><span class='questionDetails'>";
                if ($this->getAttribute($context["question"], "Details", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Details", array(), "array"), "html", null, true);
                }
                echo "</span></td>
                    <td>";
                // line 176
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), $context["key"], array(), "array"), 'widget');
                echo "</td>
                    <td class='commentaire'>";
                // line 177
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), ("Commentaire_" . $context["key"]), array(), "array"), 'widget');
                echo "</td>
                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "        </table>

        <h3>4/ Intensité et complexité du travail</h3>

        <p>
            L'intensité et la complexité du travail se mesurent au travers de diverse exigences et contraintes dans l'exécution du travail. On retiendra : <br />
            • les contraintes  de rythmes de travail, <br />
            • la précision des objectifs de travail, <br />
            • l'adéquation des objectifs de travail avec les moyens alloués et les responsabilités exercées, <br />
            • la compatibilité des instructions de travail entre elles, <br />
            • les modalités d'organisation de la polyvalence, <br />
            • les interruptions perturbatrices au cours du travail, <br />
            • les niveaux d'attention et de vigilance requis dans le travail. <br /><br />

            Une intensité excessive de travail génère des atteintes autant physiques que mentales, via le stress chronique, ainsi que des accidents du travail.
        </p>

        <table>
            <tr>
                <th></th>
                <th>Réponse</th>
                <th>Commentaires<span style='display: block; color: rgb(175,133,153);'>(illustrations par des situations de travail, propositions d'actions)</span></th>
            </tr>
            ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 11) && ($context["key"] <= 17))) {
                // line 204
                echo "                <tr>
                    <td class='questionTd'><span class='questionLabel'>";
                // line 205
                echo twig_escape_filter($this->env, (($context["key"] . ". ") . $this->getAttribute($context["question"], "Label", array(), "array")), "html", null, true);
                echo "</span><span class='questionTexte'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Question", array(), "array"), "html", null, true);
                echo "</span><span class='questionDetails'>";
                if ($this->getAttribute($context["question"], "Details", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Details", array(), "array"), "html", null, true);
                }
                echo "</span></td>
                    <td>";
                // line 206
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), $context["key"], array(), "array"), 'widget');
                echo "</td>
                    <td class='commentaire'>";
                // line 207
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), ("Commentaire_" . $context["key"]), array(), "array"), 'widget');
                echo "</td>
                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        echo "        </table>

        <h3>5/ Rapports sociaux au travail dégradés</h3>

        <p>
            Les rapports sociaux au travail englobent les relations interpersonnelles entre les salariés au sein de l'entreprise ainsi que celles entre les salariés et l'organisation qui les emploie. Ils sont examinés ici sous plusieurs angles: <br /><br />

            • la qualité des relations entre collègues et la capacité des collectifs de travail à intégrer de nouveaux salariés, <br />
            • le soutien apporté par les supérieurs hiérarchiques à leurs subordonnés face aux difficultés professionnelles qu'ils rencontrent, <br />
            • le niveau de civilité régnant dans l'entreprise, <br />
            • la valorisation par l'organisation des compétences des salariés, et de leur efficacité dans leur travail, au travers de différentes formes de reconnaissance du travail. <br /><br />

            La littérature scientifique montre l'importance des relations sociales au travail sur la santé physique et mentale des salariés, notamment l'influence positive du soutien social et de l'équilibre entre contributions des salariés et rétributions par l'entreprise. Aussi, les rapports sociaux peuvent-ils être un facteur de protection de la santé des salariés, autant qu'un facteur de risque psychosocial lorsque ces rapports sont particulièrement dégradés.
        </p>

        <table>
            <tr>
                <th></th>
                <th>Réponse</th>
                <th>Commentaires<span style='display: block; color: rgb(175,133,153);'>(illustrations par des situations de travail, propositions d'actions)</span></th>
            </tr>
            ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 18) && ($context["key"] <= 21))) {
                // line 232
                echo "                <tr>
                    <td class='questionTd'><span class='questionLabel'>";
                // line 233
                echo twig_escape_filter($this->env, (($context["key"] . ". ") . $this->getAttribute($context["question"], "Label", array(), "array")), "html", null, true);
                echo "</span><span class='questionTexte'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Question", array(), "array"), "html", null, true);
                echo "</span><span class='questionDetails'>";
                if ($this->getAttribute($context["question"], "Details", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Details", array(), "array"), "html", null, true);
                }
                echo "</span></td>
                    <td>";
                // line 234
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), $context["key"], array(), "array"), 'widget');
                echo "</td>
                    <td class='commentaire'>";
                // line 235
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), ("Commentaire_" . $context["key"]), array(), "array"), 'widget');
                echo "</td>
                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "        </table>

        <h3>6/ Conflits de valeurs</h3>

        <p>On entend par conflits de valeurs, l'ensemble des conflits intrapsychiques portant sur «ce qui compte» aux yeux des salariés dans leur travail, c'est-à-dire ce à quoi ils attribuent de l'importance sur le plan professionnel : par exemple, la possibilité de faire un travail de qualité ou un travail dont l'utilité est avérée ou reconnue. Travailler dans des conditions qu'on désapprouve, devoir faire des tâches qui contreviennent à sa conscience ou à ses principes professionnels... peuvent entrer en contradiction avec le sens que les salariés donnent à leur travail. Ces conflits de valeurs risquent d'affecter l'image qu'ils ont de leur travail, de leur métier, d'eux-mêmes et les conduire à se désengager.</p>

        <table>
            <tr>
                <th></th>
                <th>Réponse</th>
                <th>Commentaires<span style='display: block; color: rgb(175,133,153);'>(illustrations par des situations de travail, propositions d'actions)</span></th>
            </tr>
            ";
        // line 250
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 22) && ($context["key"] <= 23))) {
                // line 251
                echo "                <tr>
                    <td class='questionTd'><span class='questionLabel'>";
                // line 252
                echo twig_escape_filter($this->env, (($context["key"] . ". ") . $this->getAttribute($context["question"], "Label", array(), "array")), "html", null, true);
                echo "</span><span class='questionTexte'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Question", array(), "array"), "html", null, true);
                echo "</span><span class='questionDetails'>";
                if ($this->getAttribute($context["question"], "Details", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Details", array(), "array"), "html", null, true);
                }
                echo "</span></td>
                    <td>";
                // line 253
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), $context["key"], array(), "array"), 'widget');
                echo "</td>
                    <td class='commentaire'>";
                // line 254
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), ("Commentaire_" . $context["key"]), array(), "array"), 'widget');
                echo "</td>
                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 257
        echo "        </table>

        <h3>7 / Insécurité de l’emploi et du travail</h3>

        <p>
            L'insécurité de l'emploi et du travail est un facteur de risque pour las anté des salariés dans la mesure où elle réduit le sentiment de maîtrise de la situation. <br /><br />
            Elle comprend : <br /><br />

            &emsp;&emsp;-&emsp;l'insécurité socio-économique : peur de perdre son emploi, de subir des retards dans le versement des salaires, contrats précaires..., <br /><br />

            &emsp;&emsp;-&emsp;le risque de changement non maîtrisé de la tâche et des conditions de travail : Incertitude sur l'avenir de son métier, peur de devoir changer de qualification ou de métier  sans y être préparé...

        </p>

        <table>
            <tr>
                <th></th>
                <th>Réponse</th>
                <th>Commentaires<span style='display: block; color: rgb(175,133,153);'>(illustrations par des situations de travail, propositions d'actions)</span></th>
            </tr>
            ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["question"]) {
            if ((($context["key"] >= 24) && ($context["key"] <= 25))) {
                // line 278
                echo "                <tr>
                    <td class='questionTd'><span class='questionLabel'>";
                // line 279
                echo twig_escape_filter($this->env, (($context["key"] . ". ") . $this->getAttribute($context["question"], "Label", array(), "array")), "html", null, true);
                echo "</span><span class='questionTexte'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Question", array(), "array"), "html", null, true);
                echo "</span><span class='questionDetails'>";
                if ($this->getAttribute($context["question"], "Details", array(), "array", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "Details", array(), "array"), "html", null, true);
                }
                echo "</span></td>
                    <td>";
                // line 280
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), $context["key"], array(), "array"), 'widget');
                echo "</td>
                    <td class='commentaire'>";
                // line 281
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), ("Commentaire_" . $context["key"]), array(), "array"), 'widget');
                echo "</td>
                </tr>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "        </table>

        <p id='validationFormulaire'>";
        // line 286
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["questionnaire"]) ? $context["questionnaire"] : null), "Valider", array()), 'widget');
        echo "</p>

        ";
        // line 288
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["questionnaire"]) ? $context["questionnaire"] : null), 'form_end');
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/QuestionnaireStress/questionnaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 288,  522 => 286,  518 => 284,  508 => 281,  504 => 280,  494 => 279,  491 => 278,  486 => 277,  464 => 257,  454 => 254,  450 => 253,  440 => 252,  437 => 251,  432 => 250,  418 => 238,  408 => 235,  404 => 234,  394 => 233,  391 => 232,  386 => 231,  363 => 210,  353 => 207,  349 => 206,  339 => 205,  336 => 204,  331 => 203,  306 => 180,  296 => 177,  292 => 176,  282 => 175,  279 => 174,  274 => 173,  258 => 159,  248 => 156,  244 => 155,  234 => 154,  231 => 153,  226 => 152,  210 => 138,  200 => 135,  196 => 134,  186 => 133,  183 => 132,  178 => 131,  161 => 117,  52 => 10,  49 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/QuestionnaireStress/questionnaire.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\QuestionnaireStress\\questionnaire.html.twig");
    }
}
