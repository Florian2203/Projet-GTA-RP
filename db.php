<?php
$host = 'localhost';
$db = 'monsite';
$user = 'votreNomDUtilisateur'; // Remplacez par votre nom d'utilisateur de la base de données
$pass = 'votreMotDePasse'; // Remplacez par votre mot de passe de la base de données

$dsn = "mysql:host=$host;dbname=$db";
$pdo = new PDO($dsn, $user, $pass);
?>