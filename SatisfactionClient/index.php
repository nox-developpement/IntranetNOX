<?php
include 'database.php';

if (session_status() !== PHP_SESSION_NONE) {
    session_destroy();
}

// On récupère la clé passé en paramêtre.
$cle = filter_input(INPUT_GET, "cleQuestionnaire");

// Initialisation de la requête de récupération du questionnaire associé à la clé.
$getQuestionnaireRequest = $connection->prepare("SELECT * FROM questionnaire_satisfaction_client WHERE CleQuestionnaireSatisfactionClient = :cle");
$getQuestionnaireRequest->bindParam("cle", $cle);

// Execution de la requête.
$getQuestionnaireRequest->execute();

// Si aucun questionnaire ne correspond à cette clé...
if ($getQuestionnaireRequest->rowCount() === 0) {
    // On redirige vers la page d'erreur.
    header("Location: ./error.php?error=not found");
}

// Récupération du questionnaire.
$questionnaire = $getQuestionnaireRequest->fetch();

// Si le formulaire a déjà été complété...
if ($questionnaire["Statut"] === "Complete") {
    // On redirige vers la page d'erreur.
    header("Location: ./error.php?error=already completed");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questionnaire de satisfaction client | Groupe-NOX</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <script type="text/javascript" src="./js/jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Questionnaire de satisfaction client | Groupe-NOX</h1>
            </div>

        </header>
        <div class="main">
            <div class="container">
                <p>
                    Madame, Monsieur,<br />
                    La satisfaction de nos donneurs d’ordre est un pilier essentiel de la politique qualité NOX.<br />
                    Nos équipes ont pour objectif d’améliorer de manière constante nos prestations afin de vous apporter une réelle valeur ajoutée.<br /> 
                    Pour atteindre cette excellence, nous vous remercions de bien vouloir évaluer notre prestation, cela ne vous prendra qu'une minute.<br /> 
                    Merci pour votre précieuse contribution.
                </p>
                <ul>
                    <li>

                    </li>
                </ul>
                <a href="question.php?cleQuestionnaire=<?php echo $cle; ?>&categorie=0&question=0" class="start">Commencer le questionnaire</a>
            </div>
        </div>
        <footer>

        </footer>
    </body>
</html>
