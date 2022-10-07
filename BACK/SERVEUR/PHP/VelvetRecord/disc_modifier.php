<?php  

    require "db.php";                                   //Inclu la base de donnée de db.php

    $db = ConnexionDeBase();                            //Connexion a la base de donnée
    $id = $_GET["id"];                                  //récupére l'id
    $requete = $db->prepare("SELECT*FROM disc 
                                    JOIN artist 
                                    ON artist.artist_id = disc.artist_id
                                    WHERE disc_id=?");                    //Requete pour trouver les discs avec id

    $requete->execute(array($id));
    $mymodif = $requete-> fetch(PDO::FETCH_OBJ);         //Recupere les valeurs dans une variable

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
            <form action ="script_disc_modif.php" method = 'post'>
                <h1>Modifier un vinyle</h1>
                <!-- debut titre -->
                <label for = 'title'>Title</label>
                <input type = "text" value = '<?=$mymodif->disc_title?>' name = 'title'></input><br><br>
                <!-- Fin titre -->
                <!-- <?=var_dump($mymodif -> disc_title)?>  -->
                <!-- Debut artist -->
                <label for = 'artist'>Artist</label>
                <select name = 'artist'>
                    <option><?=$mymodif -> artist_name?></option>
                        <?php foreach ($mymodif as $artist):?>
                            <option>
                                <?=var_dump($artist -> artist_name);?>
                                <?=$artist -> artist_name?>
                            </option>
                        <?php endforeach?>
                    </select><br>
                    <br>
                <!-- Fin artist -->
                <!-- Debut année  -->
                <label for = 'year'>Year</label>
                <input type = 'text' value = '<?=$mymodif->disc_year?>' name = 'year'></input><br><br>
                <!-- Fin année -->
                <!-- Debut genre -->
                <label for = 'genre'>Genre</label>
                <input type = 'text' value = '<?=$mymodif->disc_genre?>' name = 'genre'></input><br><br>
                <!-- Fin genre -->
                <!-- Debut label -->
                <label for = 'label'>Label</label>
                <input type = 'text' value = '<?=$mymodif->disc_label?>' name = 'label'></input><br><br>
                <!-- Fin label -->
                <!-- Debut prix -->
                <label for = 'price'>Price</label>
                <input type = 'text' value = '<?=$mymodif->disc_price?>' name = 'price'></input><br><br>
                <!-- Fin prix -->
                <!-- Debut image -->
                <label for = 'picture'>Picture</label><br><br>
                <input type = 'file'><br>
                <td ><img src = 'jaquettes/<?=$mymodif -> disc_picture?>'alt = jaquette class="img-fluid img-thumbnail"></td><br>

                <button type="submit" class="btn btn-dark">Modifier</button>
                <button type = 'submit'><a href="disc_detail.php?id=<?=$mymodif->disc_id ?>">Retour</a></button>
            </form>
        </body>
    </html>
            