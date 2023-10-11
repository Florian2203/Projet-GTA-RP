<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./nouvelarticle.css">
    <title>Nouvel Article</title>
    
</head>
    <body>
        <section id="body">
            <section id="navlogo">
            
                    <section id="settings">
                        <a href="settings.php"><img src="./settings (2).png" alt="iconesettings" id="iconesettings"></a><br>
                        <a href="index.php" id="deconnection">Déconnexion</a><br>
                    </section>
                    <section id="links">
                        <a href="derniersarticles.php" id="dernierselements">Accueil</a><br>
                        <a href="nouvelarticle.php" id="casiersjudiciaires">Nouvel Article</a><br>
                        <a href="listedesarticles.php" id="nouvelleenquete">Liste des articles</a><br>
                    </section>
    
                <figure>
                    <img id="LogoJournaliste" src="./logoJournaliste.png" alt="LogoJournaliste">
                </figure>
            </section>
            <main id="main">
                <div id="content">
                    <h1>Nouvel Article</h1>
<section id="Enquete textearea">
<textarea name="Title" id="Title" cols="30" rows="1" placeholder="Titre" required></textarea>
<br>
<textarea name="Article" id="Article" cols="30" rows="10"
placeholder="Écrivez votre article"></textarea>
<br>
</section>
<footer><div id="report-buttons">
<button type="button" id="Publier">Publier</button>
</div></footer>
<script>document.getElementById("Publier").addEventListener("click", function(){     window.location.href="dernierselements.html" })</script>
</body>

</html>