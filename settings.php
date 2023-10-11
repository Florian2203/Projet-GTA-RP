<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer Mot de Passe</title>
    <link rel="stylesheet" href="./Changer Mot de Passe.css">
</head>
<body>


    <figure id="Logoduserveur">
        <img src="./img/Logo serveur.png" alt="Logo du serveur">
    </figure>
    <section id="Formutilisateur">
    <figure id="Logonomutilisateur">
        <img src="./img/Utlisateurlogo.png" alt="Logo Nom d'utilisateur">
    </figure>

        <form action="" method="get">
            <label for="Utilisateur">
                <input type="text" id="Utilisateur"
                placeholder="Pseudo">
            </label>
            </form>
            </section>

    <section>
    <figure id="Logomdp">
        <img src="./img/MDP.png" alt="Icone MDP">
    </figure>

   <form>
        <label for="MDP">
            <input type="text" id="MDP" placeholder="Nouveau Mot de Passe">
        </label>
    </form>
    </section>
    <section>
    <figure id="Logomdp">
        <img src="./img/mdplogo.png" alt="Icone MDP">
    </figure>

   <form>
        <label for="NewMDP">
            <input type="text" id="NewMDP" placeholder="Confirmer Mot de Passe">
        </label>
    </form>
    </section>
        <br>
        <button type="submit" id="Modif" >Confirmer </button> <br>


    
    <br>
    <footer>
    <p id="Droits"> ©2023 tous droits réservés </p>
</footer>

<script>
    document.getElementById("Modif").addEventListener("click", function(){
        window.location.href = "dernierselements.php"
    })
</script>
</body>
</html>