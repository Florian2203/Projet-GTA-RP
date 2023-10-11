<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Derniers éléments publiés</title>
    <link rel="stylesheet" href="dernierselements.css">
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
        <a href="dernierselements.php" id="dernierselements">Accueil</a><br>
        <a href="casiersjudiciaires.php" id="casiersjudiciaires">Casisers Judiciaires</a><br>
        <a href="nouvelleenquete.php" id="nouvelleenquete">Nouvelle enquête</a><br>
        <a href="enquetesencours.php" id="enquetesencours">Enquêtes en cours</a><br>
        <a href="nouveaurapport.php" id="nouveaurapport">Nouveau rapport</a><br>
        <a href="listedesrapports.php" id="listedesrapports">Liste des rapports</a><br>
      </section>
    </nav>
    <figure>
    <img id="LogoLSPD" src="img/BTmvvEw 2.png" alt="LogoLSPD">
    </figure>
    </section>
    <main id="main">
    <h1> Derniers Éléments Publiés </h1>
    <table>
        <tr>
        <th> Nom</th>
        <th> Agent</th>
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