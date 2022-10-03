<?php  

    include "db.php";                                   //Inclu la base de donnée de db.php

    $db = ConnexionDeBase();                            //Connexion a la base de donnée
    $requete = $db->query("SELECT*FROM disc");        //Requete pour trouver les discs
    $tableau = $requete-> fetchall(PDO::FETCH_OBJ);     //Recupere les valeurs dans une variable
    $requete->closeCursor();                            //Ferme inclusion de db.php

?>

<!DOCTYPE html>
<html lang = "fr">
    <head>
        <meta charset = "utf-8">
        <title> Disc </title>
    </head>
    <body>
        <h1> Liste des disques </h1>
            <table>
                <?php foreach ($tableau as $disc): ?>
                    <tr>
                        <td><?= $disc->$disc_picture ?></td>
                        <td><?= $disc->$disc_title ?></td>
                    </tr>
                        <?php endforeach?>
    </body>
</html>
