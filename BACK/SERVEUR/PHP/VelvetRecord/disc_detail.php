<?php  

    require "db.php";                                   //Inclu la base de donnée de db.php

    $db = ConnexionDeBase();                            //Connexion a la base de donnée
    $id = $_GET["id"];                                  //récupére l'id
    $requete = $db->prepare("SELECT*FROM disc 
                                    INNER JOIN artist 
                                    ON disc.artist_id = artist.artist_id
                                    WHERE disc_id=?");                    //Requete pour trouver les discs avec id

    $requete->execute(array($id));
    $myArtist = $requete-> fetch(PDO::FETCH_OBJ);     //Recupere les valeurs dans une variable

    $requete->closeCursor();                            //Ferme inclusion de db.php

?>
<DOCTYPE html>
    <html lang = 'fr'>
        <head>
            <meta charset = "utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Details discs </title>
        </head>
        <body>
            <h1>Details</h1>
            <?php
                if (empty($myArtist) ){             //verifie $myArtist si il est bon sinon i affiche erreur et affiche pas la suite du programme 

                    echo 'Erreur ';
                                
                }else{
                
                
                }
            ?>
                <tr>
                    <p>Title</p>
                    <td><?=$myArtist->disc_title?></td>
                    <p>Artist</p>
                    <td><?=$myArtist->artist_name?></td>
                    <p>Year</p>
                    <td><?=$myArtist->disc_year?></td>
                    <p>Genre</p>
                    <td><?=$myArtist->disc_genre?></td>
                    <p>Label</p>
                    <td><?=$myArtist->disc_label?></td>
                    <p>Price</p>
                    <td><?=$myArtist->disc_price?></td>
                    <p>Picture</p>
                    <td ><img src = 'jaquettes/<?=$myArtist -> disc_picture?>'alt = jaquette class="img-fluid img-thumbnail"></td><br>
                </tr>
               <button type="submit" class="btn btn-dark"><a href="disc_modifier.php?id=<?=$myArtist->disc_id ?>">Modifier</a></button>
                <button type="reset" class="btn btn-dark"><a href= 'discs.php'>supprimer</a></button>
            <button type="reset" class="btn btn-dark"><a href= 'discs.php'>Retour</a></button>
        </body>
    </html>

