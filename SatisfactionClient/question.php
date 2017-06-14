<?php include 'database.php' ?>
<?php session_start(); ?>
<?php
// Mise en place des numérotations des questions
// SET
$number = (int) $_GET['n'];
// GET question
$query = "SELECT * FROM questions WHERE question_number = $number";
$resultat = $connection->query($query) or die($connection->error . __LINE__);
$question = $resultat->fetch_assoc();

$query = "SELECT * FROM questions";
$resultat = $connection->query($query) or die($connection->error . __LINE__);
$total = $resultat->num_rows;

// GET choices
$query = "SELECT * FROM choices WHERE question_number = $number";
$choices = $connection->query($query) or die($connection->error . __LINE__);
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
                <div class="current">Question <?php echo $question['question_number'] ?> of <?php echo $total; ?></div>
                <p class="question">
                    <?php echo utf8_encode($question['libelle']); ?>
                </p>
                <form method="POST" action="process.php">
                    <ul class="choices">
                        <?php while ($row = $choices->fetch_assoc()): ?>
                            <li><input name="choice" type="radio" value="<?php echo utf8_encode($row['id']); ?>"/><?php echo utf8_encode($row['text']); ?></li>
                        <?php endwhile; ?>
                    </ul>
                    <input id='nextButton' type="submit" value="Suivant" />

                    <input type="hidden" name="number" value="<?php echo $number; ?>"/>
                </form>
            </div>
        </div>
        <footer>

        </footer>
    </form>
</body>
<script>
    // Pour faire la vérification lors du clique sur le bouton.
    $('#nextButton').click(function (event) {
        // Si aucun radiobutton n'est séléctionné...
        if (!$("input[name='radio']").is(':checked')) {
            event.preventDefault(); // Bloque l'action par défaut.
            alert('Veuillez choisir une réponse !');
        }
    });
</script>    
</html>
