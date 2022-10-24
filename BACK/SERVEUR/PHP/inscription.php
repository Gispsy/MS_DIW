<!DOCTYPE HTML>
<htmL>
    <head>
        <title> Inscription</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
        <form action ="inscription_script.php" method ="POST">
            <fieldset>
                <legend>Inscription</legend>
                    <label for ="identifiant">Identifiant</label>
                    <input type ="text" name ="identifiant"></input><br><br>
                    <label for ="mdp">Mot de passe</label>
                    <input type ="password" name="mdp"></input><br><br>
                    <input type ="submit"></input>
                    <input type ="reset"></input>
            </fieldset>
        </form>
    </body>