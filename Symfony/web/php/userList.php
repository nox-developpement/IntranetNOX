<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userList
 *
 * @author t.besson
 */
// Sous WAMP (Windows)
$bdd = new PDO('mysql:host=localhost;dbname=intranet;charset=utf8', 'intranetadmin', 'intranet');


$term = $_GET['term'];

$requete = $bdd->prepare('SELECT * FROM user WHERE username LIKE :term LIMIT 7'); // j'effectue ma requête SQL grâce au mot-clé LIKE
$requete->execute(array('term' => '%' . $term . '%'));

$array = array(); // on créé le tableau

while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
    array_push($array, $donnee['username']); // et on ajoute celles-ci à notre tableau
}

echo json_encode($array); // il n'y a plus qu'à convertir en JSON