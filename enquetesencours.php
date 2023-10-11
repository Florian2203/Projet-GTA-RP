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
                    <th> ID</th>
                    <th> Date de naissance</th>
                    </tr>
                    <tr>
                        <td> requête php </td>
                        <td> requête php </td>
                        <td> requête php </td>
                    </tr>
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