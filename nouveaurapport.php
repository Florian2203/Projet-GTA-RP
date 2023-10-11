<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nouveaurapport.css">
    <title>Nouveau Rapport</title>
    
</head>
    <body>
        <section id="body">
            <section id="navlogo">
            
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
    
                <figure>
                    <img id="LogoLSPD" src="img/Police.png" alt="LogoLSPD">
                </figure>
            </section>
            <main id="main">
                <div id="content">
                    <h1>Nouveau Rapport</h1>
<section id="Enquete textearea">
<textarea name="Title" id="Title" cols="30" rows="1" placeholder="Titre" required></textarea>
<br>
<textarea name="Article" id="Article" cols="30" rows="10"
placeholder="Écrivez votre enquête"></textarea>
<br>
</section>
<footer><div id="report-buttons">
<button type="button" id="Publier">Publier</button>
</div></footer>

<script>document.getElementById("Publier").addEventListener("click", function(){
    window.location.href="dernierselements.html"
})</script>
</body>

</html>