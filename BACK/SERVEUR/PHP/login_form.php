<!DOCTYPE HTML>
<htmL>
    <head>
        <title> Login</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <form action ="login_script.php" method ="POST">
            <fieldset>
                <legend> Connexion Compte</legend>
                    <label for = "log">Login</label>
                    <input type = "text" name ="log" id ="log"></input><br><br>
                    <label for = "mdp">Mot de passe</label>
                    <input type = "password" name ="mdp" id ="mdp"></input><br><br>
                <input type ="submit"></input>
                <input type ="reset"></input>
            </fieldset>
        </form><br>
        <a href ="inscription.php">Inscription</a>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
    