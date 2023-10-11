<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="listedesarticles.css">
    <title>Liste Des Articles</title>
    
</head>

<body>
    <section id="body">
        <section id="navlogo">
        
                <section id="settings">
                    <a href="settings.php"><img src="Images/settings.png" alt="iconesettings" id="iconesettings"></a><br>
                    <a href="index.php" id="deconnection">Déconnexion</a><br>
                </section>
                <section id="links">
                    <a href="derniersarticles.php" id="dernierselements">Accueil</a><br>
                    <a href="nouvelarticle.php" id="casiersjudiciaires">Nouvel Article</a><br>
                    <a href="listedesarticles.php" id="nouvelleenquete">Liste des articles</a><br>
                    
                </section>

            <figure>
                <img id="LogoLSPD" src="logoJournaliste.png" alt="LogoLSPD">
            </figure>
        </section>
        <main id="main">
            <div id="content">
                <h1>Liste Des Articles</h1>
                <div id="search-bar">
                    <input type="text" placeholder="Taper pour rechercher">
                </div>
                <table>
                    <tr>
                    <th> Nom</th>
                    <th> Journaliste</th>
                    <th> Date</th>
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