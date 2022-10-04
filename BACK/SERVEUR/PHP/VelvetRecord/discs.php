<?php  

    include "db.php";                                   //Inclu la base de donnée de db.php

    $db = ConnexionDeBase();                            //Connexion a la base de donnée

    $requete = $db->query("SELECT*FROM disc 
                                INNER JOIN artist 
                                    ON disc.artist_id = artist.artist_id");        //Requete pour trouver les discs
    $tableau = $requete-> fetchall(PDO::FETCH_OBJ);     //Recupere les valeurs dans une variable

    $requete->closeCursor();                            //Ferme inclusion de db.php

?>

<!DOCTYPE html>
<html lang = "fr">
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title> Disc </title>
    </head>
    <body>
        <h1> Liste des disques </h1>
        <p class="position-absolute top-0 end-0 btn btn-primary">Ajouter</p>
            <table>
                <?php foreach ($tableau as $disc): ?>
                    <tr>

                        <td ><img src = 'jaquettes/<?=$disc -> disc_picture?>'alt = jaquette class="img-fluid img-thumbnail"></td>
                        <td><?=$disc -> disc_title?></td>
                        <td><b>Label : </b><?=$disc->disc_label?></td>
                        <td><b>Année : </b><?=$disc->disc_year?></td>
                        <td><b>Genre : </b><?=$disc->disc_genre?></td>
                        <td><?=$disc -> artist_name?></td>
                        <td><a href="disc_detail.php?id=<?= $artist->artist_id ?>"class="btn btn-primary">Détail</a></td>

                </tr>
                <?php endforeach?>      
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>