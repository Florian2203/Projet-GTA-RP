<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derniers Articles Publiés</title>
    <link rel="stylesheet" href="derniersarticles.css">
</head>

<body>
    

<section id="body">
    <section id="navlogo">
        <nav id="nav">
      <section id="settings">
          <a href="settings.php"><img src="img/settings.png" alt="iconesettings" id="iconesettings"></a><br>
        <a href="index.php" id="deconnection">Déconnexion</a><br>
      </section>
      <section id="links">
        <a href="derniersarticles.php" id="dernierselements">Accueil</a><br>
        <a href="nouvelarticle.php " id="casiersjudiciaires">Nouvel Article</a><br>
        <a href="listedesarticles.php" id="nouvelleenquete">Liste des articles</a><br>
      
      </section>
    </nav>
    <figure>
    <img id="LogoLSPD" src="logoJournaliste.png" alt="LogoJournaliste">
    </figure>
    </section>
    <main id="main">
    <h1> Derniers Articles Publiés </h1>
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
    </section>
  </main>
  <footer><div id="report-buttons">
    <button id="modify-button">Modifier</button>
    </div></footer>
    

    <script>document.getElementById("modify-button").addEventListener("click", function() {
      window.location.href = ""
    })</script>
</body>
</html>