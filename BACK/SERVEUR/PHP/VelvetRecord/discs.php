<?php  

    include "db.php";                                   //Inclu la base de donnée de db.php

    $db = ConnexionDeBase();                            //Connexion a la base de donnée

    $requete = $db->query("SELECT*FROM disc 
                                INNER JOIN artist 
                                    ON disc.artist_id = artist.artist_id
                                    WHERE disc.disc_id");        //Requete pour trouver les discs
    $tableau = $requete-> fetchall(PDO::FETCH_OBJ);     //Recupere les valeurs dans une variable

    $requete->closeCursor();                            //Ferme inclusion de db.php

?>

<!DOCTYPE html>
<html lang = "fr">
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Disc </title>
    </head>
    <body>
        <h1> Liste des disques </h1>
        <a href="disc_new.php" class="btn btn-primary">Ajouter</a>
            <table>
                <?php foreach ($tableau as $disc): ?>
                    <tr>

                        <td ><img src = 'jaquettes/<?=$disc -> disc_picture?>'alt = jaquette class="img-fluid img-thumbnail"></td>
                        <td><?=$disc -> disc_title?></td>
                        <td><b>Label : </b><?=$disc->disc_label?></td>
                        <td><b>Année : </b><?=$disc->disc_year?></td>
                        <td><b>Genre : </b><?=$disc->disc_genre?></td>
                        <td><?=$disc->artist_name?></td>
                        <td><a href="disc_detail.php?id=<?=$disc->disc_id ?>" class="btn btn-primary">Détail</a></td>

                </tr>
                <?php endforeach?>      
    </body>
</html>