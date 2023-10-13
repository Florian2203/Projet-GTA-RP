<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquetes en cours</title>
    <link rel="stylesheet" href="enquetesencours.css">
</head>

<body>
    <section id="body">
        <section id="navlogo">
        
                <section id="settings">
                    <a href="settings.php"><img src="Images/settings.png" alt="iconesettings" id="iconesettings"></a><br>
                    <a href="index.php" id="deconnection">Déconnexion</a><br>
                </section>
                <section id="links">
                    <a href="dernierselements.php" id="dernierselements">Accueil</a><br>
                    <a href="casiersjudiciaires.php" id="casiersjudiciaires">Casisers Judiciaires</a><br>
                    <a href="nouvelleenquete.php" id="nouvelleenquete">Nouvelle enquête</a><br>
                    <a href="enquetesencours.php" id="enquetesencours">Enquêtes en cours</a><br>
                    <a href="nouveaurapport.php" id="nouveaurapport">Nouveau rapport</a><br>
                    <a href="listedesrapports.php" id="listedesrapports">Liste des rapports</a><br>
                </section>

            <figure>
                <img id="LogoLSPD" src="Images/Police.png" alt="LogoLSPD">
            </figure>
        </section>
        <main id="main">
            <div id="content">
                <h1>Enquetes en cours</h1>
                <div id="search-bar">
                    <input type="text" placeholder="Taper pour rechercher">
                </div>
                <table>
                    <tr>
                    <th> Nom</th>
                    <th> Agent</th>
                    <th> Date de publication</th>
                    </tr>
                    <?php
                    // Connexion à la base de données (remplacez les valeurs par les vôtres)
                    $conn = new mysqli("localhost", "root", "", "gtav");

                    // Vérifier la connexion
                    if ($conn->connect_error) {
                        die("La connexion à la base de données a échoué : " . $conn->connect_error);
                    }

                    // Requête SQL pour récupérer les données depuis la base de données
                    $sql = "SELECT titre, auteur_nom,auteur_prenom,date_publication FROM enquetes";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $row["titre"] . "</td>";
                            echo "<td>" . $row["auteur_nom"]," ", $row['auteur_prenom'] . "</td>";
                            echo "<td>" . $row["date_publication"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "Aucun résultat trouvé dans la base de données.";
                    }

                    // Fermer la connexion à la base de données
                    $conn->close();
                    ?>
                    </table>
                </div>
            </div>
        </main>
    </section>
   <footer><div id="report-buttons">
    <button id="modify-button">Modifier</button>
    <button id="confirm-button">Confirmer</button>
</div></footer>
</body>
</html>