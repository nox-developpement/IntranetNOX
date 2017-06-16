<?php
// On récupère la clé passé en paramêtre.
$error = filter_input(INPUT_GET, "error");

// On défini un message d'erreur en fonction de l'erreur.
$message = array("already completed" => "Vous avez déjà remplis le questionnaire.", "not found" => "Ce questionnaire n'existe pas.");
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
                    <span style="color: red">Erreur</span>: <?php echo $message[$error]; ?>
                </p>
            </div>
        </div>
        <footer>

        </footer>
    </body>
</html>
