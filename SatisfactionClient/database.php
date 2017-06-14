<?php

// Création de la connection à la base de données
$db_host = "192.168.35.217";
$db_name = "intranet";
$db_user = "intranetadmin";
$db_pass = "intranet";

try {
    $connection = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);

    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}