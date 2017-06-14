<?php
include 'database.php';

// GET total des questions
$query = "SELECT * FROM info_envoi_questionnaire_satisfaction_client";

//GET resultat
$resultat = $connection->query($query) or die($connection->error . __LINE__);
$total = $resultat->num_rows;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questionnaire de satisfaction client | Groupe-NOX</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Questionnaire de satisfaction client | Groupe-NOX</h1>
            </div>

        </header>
        <div class="main">
            <div class="container">
                <p>Madame , Monsieur ,<br>
                    La satisfaction de nos donneurs d’ordre est un pilier essentiel de la politique qualité NOX. 
                    Nos équipes ont pour objectif d’améliorer de manière constante nos prestations afin de vous apporter une réelle valeur ajoutée. 
                    Pour atteindre cette excellence, nous vous remercions de bien vouloir évaluer notre prestation  , cela ne vous prendra qu'une minute. 
                    Merci pour votre précieuse contribution.
                </p>
                <ul>
                    <li>

                    </li>
                </ul>
                <a href="question.php?n=1" class="start">Commencer le questionnaire</a>
            </div>
        </div>
        <footer>

        </footer>
    </form>
</body>
</html>
