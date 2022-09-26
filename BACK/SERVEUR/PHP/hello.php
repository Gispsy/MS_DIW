<?php
    // Fichier 'hello.php'

        include("fonctions.php"); 
        $message = "Hello world !";
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Inclusion de fichiers PHP</title>
        <link rel="stylesheet" href="css/style.css">        
    </head>
    <body>
        <?php 
            writeMessage($message); 
        ?>
        <br>
        <?php 
            writeMessage("Bonjour tout le monde !"); 
        ?>
    </body>
</html>