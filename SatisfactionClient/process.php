<?php
include 'database.php'; ?>
<?php session_start(); ?>

<?php 
if(!isset($_SESSION['score4'])){
    $_SESSION['score4'] = 0;
}
if(!isset($_SESSION['score3'])){
    $_SESSION['score3'] = 0;
}
if(!isset($_SESSION['score2'])){
    $_SESSION['score2'] = 0;
}
if(!isset($_SESSION['score1'])){
    $_SESSION['score1'] = 0;
}

if($_POST){
    $number = $_POST['number'];
    if($number == 4) {
    $_SESSION["score4"] = 0;
    }
    if($number == 3) {
    $_SESSION["score3"] = 0;
    }
    if($number == 2) {
    $_SESSION["score2"] = 0;
    }
    if($number == 1) {
    $_SESSION["score1"] = 0;
    }
    
    $select_choice = $_POST['choice'];
    $next = $number+1;

    $query = "SELECT * FROM `questions`";
    $resultat = $connection->query($query) or die($connection->error.__LINE__); 
    $total = $resultat->num_rows;
    
    $query = "SELECT * FROM choices WHERE question_number = $number AND choice_poids = 4 AND choice_poids = 3 AND choice_poids = 2 AND choice_poids = 1";
    
    $resultat = $connection->query($query) or die($connection->error.__LINE__);
    
    $row = $resultat->fetch_assoc();
    
    $poids_de_la_reponse = $row['id'];
    
    if($poids_de_la_reponse == $select_choice){
        $_SESSION['score4']++;
    }
    if($poids_de_la_reponse == $select_choice){
        $_SESSION['score3']++;
    }
    if($poids_de_la_reponse == $select_choice){
        $_SESSION['score2']++;
    }
    if($poids_de_la_reponse == $select_choice){
        $_SESSION['score1']++;
    }


    if($number == $total){
        header("Location: final.php");
        exit();
    }
    else{
        header("Location: question.php?n=".$next);
    }
}


