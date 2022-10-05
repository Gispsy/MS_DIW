<?php  

    require "db.php";                                   //Inclu la base de donnée de db.php

    $db = ConnexionDeBase();                            //Connexion a la base de donnée
    $id = $_GET["id"];                                  //récupére l'id
    $requete = $db->prepare("SELECT*FROM disc 
                                    INNER JOIN artist 
                                    ON disc.artist_id = artist.artist_id
                                    WHERE disc_id=?");                    //Requete pour trouver les discs avec id

    $requete->execute(array($id));
    $mymodif = $requete-> fetch(PDO::FETCH_OBJ);     //Recupere les valeurs dans une variable

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
            <form method = 'post'>
                <h1>Modifier un vinyle</h1>
                <label for = 'title'>Title</label>
                <input type = "text" value = '<?=$mymodif->disc_title?>' name = 'title'></input>
                <?=var_dump($mymodif -> disc_title)?> 
                


                <a href="disc_detail.php">Retour</a>
            </form>
        </body>
    </html>
            