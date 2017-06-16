<?php
include 'database.php';

// Mise en place des numérotations des questions
$categorieIndex = (int) filter_input(INPUT_GET, "categorie");
$questionIndex = (int) filter_input(INPUT_GET, "question");

// Récupération de la clé du questionnaire.
$cle_questionnaire = filter_input(INPUT_GET, "cleQuestionnaire");

// Chargement du fichier contenant les questions.
$questions_xml = simplexml_load_file("./data/questions.xml");

// Récupération des catégorie et de leur nombre.
$categories = $questions_xml->categories->categorie;
$categories_count = count($categories);

// Récupération des questions en fonction de l'index de catégorie passé en paramêtre.
$questions = $categories[$categorieIndex]->questions->question;
$question_count = count($questions);

// Récupération des réponses en fonction de l'index de question passé en paramètre.
$reponses = $questions[$questionIndex]->reponses->reponse;

// Valeur de la catégorie et de la question actuelle.
$current_categorie = $categories[$categorieIndex];
$current_question = $questions[$questionIndex];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questionnaire de satisfaction client | Groupe-NOX</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    </head>

    <script>
        function checkResponseSelection() {
            // Si aucun radiobutton n'est séléctionné...
            if (!$("input[name='choice']").is(':checked')) {
                // On affiche un message d'erreur.
                alert('Veuillez choisir une réponse !');

                // On retourne false pour bloquer l'envoi du formulaire.
                return false;
            }
        }
    </script>  

    <body>

        <header>
            <div class="container">
                <h1>Questionnaire de satisfaction client | Groupe-NOX</h1>
            </div>
        </header>
        <div class="main">
            <div class="container">
                <div class="current">Catégorie <?php echo $categorieIndex + 1; ?> sur <?php echo $categories_count; ?></div>
                <div class="current">Question <?php echo $questionIndex + 1; ?> sur <?php echo $question_count; ?></div>
                <p class="question">
                    <?php echo utf8_encode($current_question->index) . ". " . $current_question->texte; ?>
                </p>
                <form name="validate_question" method="POST" action="./process.php" onsubmit="return checkResponseSelection();">
                    <ul class="choices">
                        <?php foreach ($reponses as $reponse) { ?>
                            <li><label><input name="choice" type="radio" value="<?php echo $reponse; ?>"/><?php echo $reponse; ?></label></li>
                        <?php } ?>
                    </ul>
                    <input id='nextButton' type="submit" value="Suivant" />

                    <input type="hidden" name="question" value="<?php echo $questionIndex; ?>"/>
                    <input type="hidden" name="categorie" value="<?php echo $categorieIndex; ?>"/>
                    <input type="hidden" name="cleQuestionnaire" value="<?php echo $cle_questionnaire; ?>"/>
                </form>
            </div>
        </div>
        <footer>

        </footer>
    </body>  
</html>
