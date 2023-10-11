<?php
session_start();

//Connexion à la base de données
$server = 'localhost';
$name = 'root';
$pass = '';
$dbname = 'gtav';

$conn = new mysqli($server, $name, $pass, $dbname);

//Vérifier la connexion
if($conn->connect_error) {
    die("Echec de la connexion ".$conn->connect_error);
}

//Récupérer les données du formulaire
$userName = $_POST['userName'];
$password = $_POST['MDP'];

//Recherche de l'utilisateur dans la base de données
$stmt = $conn->prepare("SELECT id,userName, nom, prenom, MDP, metiers FROM utilisateurs WHERE userName=?");

$stmt->bind_param("s",$userName);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    //vérifier le mot de passe

    if ($password === $row['MDP']) {
 //Authentification réussie
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['user_nom'] = $row['nom'];
        $_SESSION['user_prenom'] = $row['prenom'];
        $_SESSION['metiers']= $row['metiers'];

        if ($_SESSION['metiers'] === 'Policier') {
            header("Location:dernierselements.php"); //Rediriger vers la page de la Police 
        } else {
            header("Location:index.php");
        }
 
    } else {
        echo 'Mot de passe incorrect';
    }
}   else { 
    echo 'Utilisateur non trouvé';
}

 //Fermer la connexion à la base de données
 $conn->close();   


?>