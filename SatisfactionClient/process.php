<?php

include 'database.php';
session_start();

// On récupère la catégorie et la question courante et la clé du questionnaire.
$current_categorie = (int) filter_input(INPUT_POST, "categorie");
$current_question = (int) filter_input(INPUT_POST, "question");
$cle_questionnaire = filter_input(INPUT_POST, "cleQuestionnaire");

// Incrémentation de l'index de question.
questionIndexIncrementation($current_categorie, $current_question);

// Initialisation des compteurs de réponses.
initComptageVariable();

// Chargement du fichier contenant les questions.
$questions_xml = simplexml_load_file("./data/questions.xml");

// Récupération des catégorie et de leur nombre.
$categories = $questions_xml->categories->categorie;

// Initialisation du compteur de question.
initQuestionCount($categories);

// Sauvegarde de la réponse en BDD.
saveAnswer($categories, $current_categorie, $current_question, $connection, $cle_questionnaire);

// Redirection vers l'étape suivante.
nextStepRedirection($categories, $current_categorie, $current_question, $cle_questionnaire, $connection);

/**
 * 
 * Incrémente la variable de session d'index de la question courante.
 * 
 * @param Int $current_categorie Index de la catégorie courante.
 * @param Int $current_question Index de la question courante dans sa catégorie.
 */
function questionIndexIncrementation($current_categorie, $current_question) {
    // Si la question est la 1ere du questionnaire.
    if ($current_categorie === 0 && $current_question === 0) {
        // On initialise l'index de question de la session à 1.
        $_SESSION["question_index"] = 1;
    }
    // Sinon...
    else {
        // On incrémente l'index de question de la session.
        $_SESSION["question_index"] = $_SESSION["question_index"] + 1;
    }
}

/**
 * 
 * Initialisation des variables de comptage du score du questionnaire.
 * 
 */
function initComptageVariable() {
    $scores = array("score1", "score2", "score3", "score4");
    foreach ($scores as $score) {
        if (!isset($_SESSION[$score])) {
            $_SESSION[$score] = 0;
        }
    }
}

/**
 * 
 * Initialise la variable de session de nombre total de questions.
 * 
 * @param Array $categories Tableau des catégories de questions.
 */
function initQuestionCount($categories) {
    // Si la variable du nombre total de question n'est pas définie.
    if (!isset($_SESSION['question_count'])) {
        // Calcule du nombre total de questions.
        $question_count = 0;
        foreach ($categories as $categorie) {
            foreach ($categorie->questions->question as $question) {
                $question_count++;
            }
        }

        // Initialisation de la variable.
        $_SESSION['question_count'] = $question_count;
    }
}

function nextStepRedirection($categories, $current_categorie, $current_question, $cle_questionnaire, $connection) {
    // Si c'est la dernière question...
    if ($_SESSION["question_index"] === $_SESSION['question_count']) {
        //session_destroy();

        $getQuestionnaireRequest = $connection->prepare("SELECT * FROM questionnaire_satisfaction_client WHERE CleQuestionnaireSatisfactionClient = :cle");
        $getQuestionnaireRequest->bindParam("cle", $cle_questionnaire);

        $getQuestionnaireRequest->execute();

        $questionnaire = $getQuestionnaireRequest->fetch();

        $_SESSION["results"] = $questionnaire["ReponsesQuestionnaire"];

        header("Location: ./final.php");
    }
    // Sinon...
    else {
        // Si il n'y pas de question suivante pour cette catégorie...
        if (empty($categories[$current_categorie]->questions->question[$current_question + 1])) {
            // On la 1ere question de la catégorie suivante.
            $next_categorie = $current_categorie + 1;
            $next_question = 0;
        }
        // Sinon...
        else {
            // On passe à la question suivante.
            $next_categorie = $current_categorie;
            $next_question = $current_question + 1;
        }

        // On redirige vers la suite du questionnaire.
        header("Location: ./question.php?cleQuestionnaire=$cle_questionnaire&categorie=" . $next_categorie . "&question=" . $next_question);
    }
}

/**
 * 
 * Met à jour la base de données avec la nouvelle réponses au questionnaire.
 * 
 * @param XML_Oject $categories Les catégories et question du questionnaire.
 * @param Int $current_categorie Index de la catégorie.
 * @param Int $current_question Index de la question.
 * @param PDO $connection Handler de connexion à la base de données.
 * @param String $cle_questionnaire Clé du questionnaire.
 */
function saveAnswer($categories, $current_categorie, $current_question, $connection, $cle_questionnaire) {
    // On place la question et sa réponse dans un tableau.
    $question = (string) $categories[$current_categorie]->questions->question[$current_question]->texte;
    $choice = filter_input(INPUT_POST, "choice");
    $answer = array("categorie_index" => $current_categorie, "question_index" => $current_question, "question" => $question, "choice" => $choice);

    // Initialisation de la requête de récupération du questionnaire associé à la clé.
    $getQuestionnaireRequest = $connection->prepare("SELECT * FROM questionnaire_satisfaction_client WHERE CleQuestionnaireSatisfactionClient = :cle");
    $getQuestionnaireRequest->bindParam("cle", $cle_questionnaire);

    // Execution de la requête.
    $getQuestionnaireRequest->execute();

    // Récupération du questionnaire.
    $questionnaire = $getQuestionnaireRequest->fetch();

    // Extraction du tableau des réponses du questonnaire.
    $unserializedReponsesQuestionnaire = unserialize($questionnaire["ReponsesQuestionnaire"]);

    // On ajoute la nouvelle réponse au tableau.
    $unserializedReponsesQuestionnaire[$answer["categorie_index"]][$answer["question_index"]] = $answer;

    // Serialisation du tableau pour sauvegarde en BDD.
    $serializedReponsesQuestionnaire = serialize($unserializedReponsesQuestionnaire);

    // Mise à jour du questionnaire dans la base de données.
    $setQuestionnaireReponsesRequest = $connection->prepare("UPDATE questionnaire_satisfaction_client SET ReponsesQuestionnaire = :reponses WHERE CleQuestionnaireSatisfactionClient = :cle");
    $setQuestionnaireReponsesRequest->bindParam("reponses", $serializedReponsesQuestionnaire);
    $setQuestionnaireReponsesRequest->bindParam("cle", $cle_questionnaire);
    $setQuestionnaireReponsesRequest->execute();
}

//if ($_POST) {
//    $number = $_POST['number'];
//    if ($number == 4) {
//        $_SESSION["score4"] = 0;
//    }
//    if ($number == 3) {
//        $_SESSION["score3"] = 0;
//    }
//    if ($number == 2) {
//        $_SESSION["score2"] = 0;
//    }
//    if ($number == 1) {
//        $_SESSION["score1"] = 0;
//    }
//
//    $select_choice = $_POST['choice'];
//    $next = $number + 1;
//
//    $query = "SELECT * FROM `questions`";
//    $resultat = $connection->query($query) or die($connection->error . __LINE__);
//    $total = $resultat->num_rows;
//
//    $query = "SELECT * FROM choices WHERE question_number = $number AND choice_poids = 4 AND choice_poids = 3 AND choice_poids = 2 AND choice_poids = 1";
//
//    $resultat = $connection->query($query) or die($connection->error . __LINE__);
//
//    $row = $resultat->fetch_assoc();
//
//    $poids_de_la_reponse = $row['id'];
//
//    if ($poids_de_la_reponse == $select_choice) {
//        $_SESSION['score4'] ++;
//    }
//    if ($poids_de_la_reponse == $select_choice) {
//        $_SESSION['score3'] ++;
//    }
//    if ($poids_de_la_reponse == $select_choice) {
//        $_SESSION['score2'] ++;
//    }
//    if ($poids_de_la_reponse == $select_choice) {
//        $_SESSION['score1'] ++;
//    }
//
//
//    if ($number == $total) {
//        header("Location: final.php");
//        exit();
//    } else {
//        header("Location: question.php?n=" . $next);
//    }
//}
