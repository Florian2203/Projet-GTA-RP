<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['pseudo'];
    $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO utilisateurs (pseudo, motdepasse) VALUES (:pseudo, :motdepasse)");
    $stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
    $stmt->bindParam(':motdepasse', $motdepasse, PDO::PARAM_STR);
    $stmt->execute();

    echo "Inscription réussie";
}
?>

