<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nouveaurapport.css">
    <title>Nouveau Rapport</title>
    <style>
        #Publier {
            position: relative;
            left: -30px; /* Ajustez cette valeur selon vos besoins */
        }
    </style>
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
                    <form action="police_rapport.php" method="post">
<section id="Enquetetextearea">
<textarea name="titre" id="Title" style="resize: none; width: 95%; height: 30px;" cols="30" rows="1" placeholder="Titre" required></textarea>
<br>
<textarea name="contenu" id="Article" style="resize: none; width: 95%; height: 500px;" cols="30" rows="10" placeholder="Écrivez votre enquête"></textarea>
<br>
<input type="submit" value="Publier">
</form>
</section>

</body>

</html>