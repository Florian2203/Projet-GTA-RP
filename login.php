<?php
include 'db.php';

$pseudo = $_POST['pseudo'];
$motdepasse = $_POST['motdepasse'];

$stmt = $pdo->prepare("SELECT motdepasse FROM utilisateurs WHERE pseudo = :pseudo");
$stmt->bindParam(':pseudo', $pseudo, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowCount() > 0) {
    $hash = $stmt->fetchColumn();
    if (password_verify($motdepasse, $hash)) {
        echo "Connexion réussie";
    } else {
        echo "Mot de passe incorrect";
    }
} else {
    echo "Utilisateur non trouvé";
}
?>