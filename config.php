<?php
$host = "localhost";
$dbname = "care_of_cerena";
$username = "root"; 
$password = "";
try {
    $con_id = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $con_id->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
