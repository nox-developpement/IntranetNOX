<?php
session_start();

$results = unserialize($_SESSION["results"]);

//session_destroy();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Questionnaire de satisfaction client | Groupe-NOX</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
    <src>
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Questionnaire de satisfaction client | Groupe-NOX</h1>
            </div>

        </header>
        <div class="main">
            <div class="container">
                <h2>Merci de nous avoir consacré du temps.</h2>
                <ul>
                    <?php
                    foreach ($results as $categories) {
                        foreach ($categories as $answer) {
                            echo "<li>" . $answer["question"] . " : " . $answer["choice"] . "</li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <footer>

        </footer>
        </form>
    </body>
</html>
