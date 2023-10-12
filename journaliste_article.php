<?php
// Vérifiez si l'utilisateur est connecté en récupérant son ID depuis la session.
session_start();

if (isset($_SESSION['user_id'])) {
    $auteur_id = $_SESSION['user_id'];

    // Connexion à la base de données
    $conn = new mysqli("localhost", "utilisateur", "motdepasse", "ma_base_de_donnees");

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    // Récupérez le nom et le prénom de l'utilisateur connecté depuis la table "utilisateurs"
    $query = "SELECT nom, prenom FROM utilisateurs WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $auteur_id);
    $stmt->execute();
    $stmt->bind_result($nom, $prenom);

    // Vérifiez s'il y a un résultat
    if ($stmt->fetch()) {
        // Récupérez les données du formulaire
        $titre = $_POST['titre'];
        $contenu = $_POST['contenu'];

        // Préparez et exécutez la requête SQL pour insérer l'article
        $sql = "INSERT INTO articles (titre, contenu, auteur_nom, auteur_prenom, date_publication) VALUES (?, ?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $nom, $prenom);
        $stmt->execute();

        // Vérifiez si l'insertion a réussi
        if ($stmt->affected_rows > 0) {
            echo "L'article a été enregistré avec succès.";
        } else {
            echo "Erreur lors de l'enregistrement de l'article : " . $conn->error;
        }
    } else {
        echo "Utilisateur non trouvé dans la table 'utilisateurs'.";
    }

    // Fermez la connexion à la base de données
    $stmt->close();
    $conn->close();
} else {
    echo "Vous devez être connecté pour soumettre un article.";
}
