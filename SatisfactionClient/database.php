<?php

// Création de la connection à la base de données
$db_host = "192.168.35.217";
$db_name = "intranet";
$db_user = "intranetadmin";
$db_pass = "intranet";

try {
    // Initialisation de la connexion à la base de données.
    $connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si la connexion échou, affichage d'un message d'erreur.
    echo "Connection failed: " . $e->getMessage();
}